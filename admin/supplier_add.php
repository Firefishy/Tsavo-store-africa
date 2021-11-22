
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM supplier WHERE name=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Supplier already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO supplier (name, email, address) VALUES (:name, :email, :address)");
				$stmt->execute(['name'=>$name, 'email'=>$email, 'address'=>$address]);
				$_SESSION['success'] = 'Supplier added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up supplier form first';
	}

	header('location: supplier.php');

?>