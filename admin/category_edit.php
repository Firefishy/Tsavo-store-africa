<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$cat_slug = $_POST['cat_slug'];

		try{
			$stmt = $conn->prepare("UPDATE category SET cat_slug=:cat_slug, name=:name WHERE id=:id");
			$stmt->execute(['cat_slug'=>$cat_slug, 'name'=>$name, 'id'=>$id]);
			$_SESSION['success'] = 'Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit category form first';
	}

	header('location: category.php');

?>