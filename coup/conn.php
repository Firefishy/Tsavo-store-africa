<?php
	$conn = mysqli_connect('localhost', 'root', '', 'tsavo');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>