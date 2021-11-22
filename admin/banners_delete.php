<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM banner WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Banner deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select banner to delete first';
	}

	header('location: banners2.php');
	
?>