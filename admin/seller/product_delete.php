<?php
include 'includes/session.php';

if(isset($_POST['delete'])){
$id = $_POST['id'];

$conn = $pdo->open();
$stmt = $conn->prepare("DELETE FROM products WHERE id=:id");
$stmt->execute(['id'=>$id]);

$_SESSION['success'] = 'Product successfully deleted from Catalog.';

header('location:all_products_det.php');
}
else{
$_SESSION['error'] = 'Product delete unsuccessfull!';
header('location:all_products_det.php');
}
?>
