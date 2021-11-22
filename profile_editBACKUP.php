<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$deliv = $_POST['zone'];
		$coupon_code = $users['coupon_code'];
		$photo = $_FILES['photo']['name'];
		
		$conn = $pdo->open();
	$stmt = $conn->prepare("SELECT * FROM branches WHERE id=:id");
	$stmt->execute(['id'=>$deliv]);
	$deliver = $stmt->fetch();
	$zone = $deliver['country'];
	$cost = $deliver['zip_code'];
	
		if(password_verify($curr_password, $user['password'])){
			if(!empty($photo)){
			$ext = pathinfo($photo, PATHINFO_EXTENSION);
			$slugg = md5($password);
			$new_filename = $slugg.'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], 'tsavo_system/users/'.$new_filename);
				$filename = $new_filename;	
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
				$stmt = $conn->prepare("UPDATE users SET email=:email, coupon_code=:coupon_code, password=:password, firstname=:firstname, lastname=:lastname, contact_info=:contact, zone=:zone, cost=:cost, address=:address, photo=:photo WHERE id=:id");
				$stmt->execute(['email'=>$email, 'coupon_code'=>$coupon_code, 'zone'=>$zone, 'cost'=>$cost, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'contact'=>$contact, 'address'=>$address, 'photo'=>$filename, 'id'=>$user['id']]);

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
			
		}
		else{
			$_SESSION['error'] = 'Incorrect password';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	$pdo->close();

	header('location: MyProfile');

?>