<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['supermarket']['electronics'] ['computing'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM banner WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if(!empty($filename)){
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$new_filename = $row['id'].'_'.time().'.'.$ext;
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$new_filename);	
		}
		
		try{
			$stmt = $conn->prepare("UPDATE banner SET supermarket=:supermarket, electronics=:electronics, computing=:computing WHERE id=:id");
			$stmt->execute(['supermarket'=>$new_filename, 'computing'=>$new_filename, 'electronics'=>$new_filename, 'id'=>$id]);
			$_SESSION['success'] = 'Banner photo updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select banner to update first';
	}

	header('location: banners2.php');
?>