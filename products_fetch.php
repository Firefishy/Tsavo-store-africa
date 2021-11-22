<?php
include 'includes/session.php';
 $conn = $pdo->open();
 $stmt = $conn->prepare("SELECT * FROM users");
 $stmt->execute();
 $users = $stmt->fetchAll();

 $encrypt = json_encode($users);
 echo $encrypt;

?>