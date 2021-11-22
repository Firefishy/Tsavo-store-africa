<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$electronics = $_POST['electronics'];
		$supermartket = $_POST('supermartket');
		$computing = $_POST['computing'];
		

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM banner WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Banner Error';
		}
		else{
			if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $slug.'.'.$ext;
				move_uploaded_file($_FILES['supermarket']['tmp_name'], '../images/'.$new_filename);	
			move_uploaded_file($_FILES['electronics']['tmp_name'], '../images/'.$new_filename);	
			move_uploaded_file($_FILES['computing']['tmp_name'], '../images/'.$new_filename);	
			
			
			
			}
			else{
				$new_filename = '';
			}

			try{
				$stmt = $conn->prepare("INSERT INTO banner (electronics, supermarket, computing) VALUES (:electronics, :supermarket, :computing)");
				$stmt->execute(['electronics'=>$new_filename, 'supermarket'=>$new_filename, 'computing'=>$new_filename]);
				$_SESSION['success'] = 'Banner added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Add banners first';
	}

	header('location: banners2.php');

?>