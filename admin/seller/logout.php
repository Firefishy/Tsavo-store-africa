<?php
	session_start();
	session_destroy();

	header('location: form-wizard_login.php');
?>