<?php

include 'includes/session.php';

if(isset($_POST['register'])){
//vendor info
$identity_no = $_POST['identity_no'];
$licence_no = $_POST['licence_no'];
$passport = $_POST['passport'];
$drop_off_contact = $_POST['drop_off_contact'];
$reg_date = $_POST['reg_date'];
$origin_country = $_POST['origin_country'];
$sp_number = $_POST['sp_number'];
$account_name = $_POST['account_name'];
$account_number = $_POST['account_number'];
$bank_name = $_POST['bank_name'];
$bank_branch = $_POST['bank_branch'];
$bank_code = $_POST['bank_code'];
$mode_of_transfer = $_POST['mode_of_transfer'];
$service_provider = $_POST['service_provider'];
$iban_number = $_POST['iban_number'];

//logo photo
$name = 'alex';
$photo = $_FILES['logo']['name'];
$photo_path = realpath($_FILES['logo']['name']);
$ext = pathinfo($photo, PATHINFO_EXTENSION);
$slugg = md5($name);
$time_id = time();
$the_id = sha1($time_id);
$new_filename = $the_id.$slugg.'.'.$ext;
move_uploaded_file($_FILES['logo']['tmp_name'], '../../tsavo_vendor/images/'.$new_filename);
$filename = $new_filename;

//background photo
$name = 'alex';
$photoo = $_FILES['store_overview']['name'];
$photoo_path = realpath($_FILES['store_overview']['name']);
$extt = pathinfo($photoo, PATHINFO_EXTENSION);
$sluggg = md5($name);
$time_idd = time();
$the_idd = sha1($time_idd);
$new_filenamee = $the_idd.$sluggg.'.'.$extt;
move_uploaded_file($_FILES['store_overview']['tmp_name'], '../../tsavo_vendor/images/'.$new_filenamee);
$filename_2 = $new_filenamee;

$conn = $pdo->open();


$stmt = $conn->prepare("UPDATE supplier SET photo=:photo, identity_no=:identity_no, licence_no=:licence_no, store_overview=:store_overview, passport=:passport, drop_off_point=:drop_off_contact, reg_date=:reg_date, origin_country=:origin_country, sp_number=:sp_number, iban_number=:iban_number, account_name=:account_name, account_number=:account_number, bank_name=:bank_name, bank_branch=:bank_branch, bank_code=:bank_code, mode_of_transfer=:mode_of_transfer, service_provider=:service_provider WHERE id=:id");
$stmt->execute(['id'=>$_SESSION['vendor'], 'photo'=>$filename, 'identity_no'=>$identity_no, 'licence_no'=>$licence_no, 'store_overview'=>$filename_2, 'passport'=>$passport, 'drop_off_contact'=>$drop_off_contact, 'reg_date'=>$reg_date, 'origin_country'=>$origin_country, 'sp_number'=>$sp_number, 'iban_number'=>$iban_number, 'account_name'=>$account_name, 'account_number'=>$account_number, 'bank_name'=>$bank_name, 'bank_branch'=>$bank_branch, 'bank_code'=>$bank_code, 'mode_of_transfer'=>$mode_of_transfer, 'service_provider'=>$service_provider]);

$_SESSION['success'] = 'You have successfully fully registered your Vendor account. You are now ready to add your products.';

header('location:index.php');



}
else{
header('location:index.php');

}
?>
