<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM users_agent where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_staff.php';
?>