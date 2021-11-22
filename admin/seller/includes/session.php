<?php
	include 'includes/conn.php';
	 date_default_timezone_set("Africa/Nairobi"); 
	session_start();

	if(isset($_SESSION['vendor'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM supplier WHERE id=:id");
			$stmt->execute(['id'=>$_SESSION['vendor']]);
			$vendor = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}
	
if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	header("location:../TsavoHome");
}

		$pdo->close();
	}
?>