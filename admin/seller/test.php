<?php
$name = 'alex';
$photo = $_FILES['pic']['name'];
$photo_path = realpath($_FILES['pic']['name']);
$ext = pathinfo($photo, PATHINFO_EXTENSION);
$slugg = md5($name);
$time_id = time();
$the_id = sha1($time_id);
$new_filename = $the_id.$slugg.'.'.$ext;

move_uploaded_file($_FILES['pic']['tmp_name'], 'prods/'.$new_filename);
$filename = $new_filename;

echo "
".$filename."
";

?>
