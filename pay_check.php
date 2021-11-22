<?php
include 'includes/session.php';
$conn = $pdo->open();

	if(isset($_POST['auth'])){
	    
$trans_ref = time();
$trans_reff = $_POST['auth_a'];
$trans_add = $trans_ref + $trans_ref;

//generate code
$set_a='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$authenticater=substr(str_shuffle($set_a), 0, 12);

$usid = 200;
$total = 200;
$stmt_b = $conn->prepare("INSERT INTO transaction_code (code, user_id, amount) VALUES (:code, :user_id, :amount)");
$stmt_b->execute(['code'=>$trans_reff, 'user_id'=>$usid, 'amount'=>$total]);
	}
	$pdo->close();
header('location: Pay');

?>
