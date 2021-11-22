<?php
	include 'includes/session.php';
	
	if (isset($_POST['like'])){		
		
		$id = $_POST['id'];
		$query= mysqli_query($cone,"select * from `followers` where vendorid='$id' and userid='".$_SESSION['user']."'");
		
		if(mysqli_num_rows($query)>0){
			 mysqli_query($cone,"delete from `followers` where userid='".$_SESSION['user']."' and vendorid='$id'");
		}
		else{
			 mysqli_query($cone,"insert into `followers` (userid,vendorid) values ('".$_SESSION['user']."', '$id')");
		}
	}		
?>


