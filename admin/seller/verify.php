<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['shopname'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM supplier WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				
					if(password_verify($password, $row['field1'])){
						if($row['type'] == 5){
							$_SESSION['admin'] = $row['id'];
						}
						else{
							$_SESSION['vendor'] = $row['id'];
						}
					}
					else{
						$_SESSION['error'] = 'Incorrect Password';
						header('location:form-wizard_login.php');
					}
				
			}
			else{
				$_SESSION['error'] = 'Email not found';
				header('location: form-wizard_login.php');
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Input login credentails first';
		header('location:form-wizard_login.php');
	}

	$pdo->close();

	header('location: index.php');

?>