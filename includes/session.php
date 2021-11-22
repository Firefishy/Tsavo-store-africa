<?php
	include 'includes/conn.php';
	session_start();
	
date_default_timezone_set("Africa/Nairobi");
	if(isset($_SESSION['admin'])){
		header('location: admin/home.php');
	}

	if(isset($_SESSION['user'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
			$stmt->execute(['id'=>$_SESSION['user']]);
			$user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}
		
		//Save Rating validation
if(!empty($_POST['action']) && $_POST['action'] == 'saveRating'
	//&& !empty($_SESSION['user_id'])
	&& !empty($_POST['rating'])
	&& !empty($_POST['product_id'])) {


		$rating->saveRating($_POST);
		$data = array(
			"success"	=> 1,
		);
		echo json_encode($data);
}
if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	header("Location:TsavoHome");
}

		$pdo->close();
	}
?>