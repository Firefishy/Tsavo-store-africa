
<?php
	include 'includes/session.php';

	$conn = $pdo->open();
	$filename = $user['photo'];
	
				$im = file_get_contents('tsavo_system/users/'.$filename);
				$base_encode =  base64_encode($im);    	
			
			try{
			   $stmt = $conn->prepare("UPDATE users SET field20=:field WHERE id=:id");
				$stmt->execute(['field'=>$base_encode, 'id'=>$user['id']]);

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
			
		$pdo->close();

	header('location: MyProfile');

?>

