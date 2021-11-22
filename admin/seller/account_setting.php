<?php
include 'includes/session.php';

if(isset($_POST['profile'])){
$name = $_POST['name'];
$shop = $_POST['shop'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$conn = $pdo->open();
$stmt = $conn->prepare("UPDATE supplier SET supp_name=:name, name=:shop, address=:address, supp_contact=:contact, email=:email, field1=:password WHERE id=:id");
$stmt->execute(['name'=>$name, 'shop'=>$shop, 'address'=>$address, 'contact'=>$contact, 'email'=>$email, 'password'=>$password, 'id'=>$id ]);

$_SESSION['success'] = 'Your account has been successfully updated';
header('location:index.php');
}
else{
$_SESSION['error'] = 'Account modification failed!';
header('location:index.php');
}
?>
