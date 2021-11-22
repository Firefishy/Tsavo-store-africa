<?php
include 'includes/session.php';

if(isset($_POST['pic_update'])){


$id = $_POST['slug'];
$prev_pic = $_POST['prev_pic'];
//delete previous photo
$pic_del = '../../tsavo_vendor/images/'.$prev_pic;
unlink($pic_del);


//set new photo
$photo = $_FILES['photo']['name'];
$photo_path = realpath($_FILES['photo']['name']);
$ext = pathinfo($photo, PATHINFO_EXTENSION);
$time_id = time();
$slugg = md5($time_id);
$the_id = sha1($time_id);
$new_filename = $the_id.$slugg.'.'.$ext;
move_uploaded_file($_FILES['photo']['tmp_name'], '../../tsavo_vendor/images/'.$new_filename);
$filename = $new_filename;


//insert into the products table
$stmt = $conn->prepare("UPDATE products SET photo=:photo WHERE slug=:slug");
$stmt->execute(['slug'=>$id, 'photo'=>$filename]);
											
$_SESSION['success'] = 'Product photo successfully updated :)';

header("location:all_products_pic.php");
exit();
				
}
else{
header('location:index.php');
$_SESSION['error'] = 'Could not update product photo!';
}
?>
