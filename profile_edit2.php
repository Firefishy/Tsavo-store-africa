<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_POST['edit2'])){
		$curr_password = $_POST['curr_password'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$discount = $_POST['discount'];
		$photo = $_FILES['photo']['name'];
		$deliv = $_POST['zone'];
		
	$conn = $pdo->open();
	$stmt = $conn->prepare("SELECT * FROM branches WHERE id=:id");
	$stmt->execute(['id'=>$deliv]);
	$deliver = $stmt->fetch();
	$zone = $deliver['country'];
    $cost = $deliver['zip_code'];
    
	$_SESSION['pay_page'] = '57kOKAxRQlyqni2';
	
	
		if(password_verify($curr_password, $user['password'])){
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user['photo'];
			}

			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			try{
				$stmt = $conn->prepare("UPDATE users SET coupon_id=:coupon_id, email=:email, discount=:discount, password=:password, firstname=:firstname, lastname=:lastname, contact_info=:contact, zone=:zone, cost=:cost, address=:address, photo=:photo WHERE id=:id");
				$stmt->execute(['coupon_id'=>$deliv, 'email'=>$email, 'discount'=>$discount, 'zone'=>$zone, 'cost'=>$cost, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'contact'=>$contact, 'address'=>$address, 'photo'=>$filename, 'id'=>$user['id']]);

				$_SESSION['success'] = 'Delivery details updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
			
		}
		else{
		
			$_SESSION['error'] = 'Incorrect password. Correct password required to checkout!!!';
			header('location : MyCart');
		}
	}
	else{
		$_SESSION['error'] = 'Fill up delivery form first';
	}

	$pdo->close();

	header('location: Pay');

?>