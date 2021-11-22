<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$electronics = $_POST['electronics'];
		$supermartket = $_POST('supermartket');
		$computing = $_POST['computing'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE banner SET computing=:computing, electronics=:electronics, supermarket=:supermarket WHERE id=:id");
			$stmt->execute(['computing'=>$computing, 'electronics'=>$electronics, 'supermarket'=>$supermarket]);
			$_SESSION['success'] = 'Banner updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Edit banners first';
	}

	header('location: banners2.php');

?>