<?php
	
	include 'includes/session.php';
	
	if (isset($_POST['showlike'])){
		$id = $_POST['id'];
		$query2= mysqli_query($cone,"select * from `followers` where vendorid='$id'");
		echo mysqli_num_rows($query2);	
	}
?>

