<?php
include 'includes/session.php';

if(isset($_POST['save'])){

//photo
$photo = $_FILES['pic']['name'];
$photo_path = realpath($_FILES['pic']['name']);
$ext = pathinfo($photo, PATHINFO_EXTENSION);
$time_id = time();
$slugg = md5($time_id);
$the_id = sha1($time_id);
$new_filename = $the_id.$slugg.'.'.$ext;
move_uploaded_file($_FILES['pic']['tmp_name'], '../../tsavo_vendor/images/'.$new_filename);
$filename = $new_filename;



//vendor information
$shop = $_POST['shop'];
$name = $_POST['name'];
$shop_id = $_POST['shop_id'];
$supp_cont = $_POST['supp_cont'];
$supp_email = $_POST['supp_email'];
$ship_orig = $_POST['ship_orig'];

//product details
$sku = $_POST['sku'];
$weight = $_POST['weight'];
$width = $_POST['width'];
$length = $_POST['length'];
$height = $_POST['height'];
$brand = $_POST['brand'];
$material = $_POST['material'];
$stock = $_POST['stock'];

//price info
$price_1 = $_POST['price'];
$was = $_POST['was'];
$price_2 = $_POST['price_2'];

//variations
$vala = $_POST['vala'];
$valb = $_POST['valb'];
$valc = $_POST['valc'];
$vald = $_POST['vald'];
$vale = $_POST['vale'];
$valf = $_POST['valf'];
$valg = $_POST['valg'];
$valh = $_POST['valh'];
$vali = $_POST['vali'];
$valj = $_POST['valj'];

//variation prices
$valap = $_POST['vala-p'];
$valbp = $_POST['valb-p'];
$valcp = $_POST['valc-p'];
$valdp = $_POST['vald-p'];
$valep = $_POST['vale-p'];
$valfp = $_POST['valf-p'];
$valgp = $_POST['valg-p'];
$valhp = $_POST['valh-p'];
$valip = $_POST['vali-p'];
$valjp = $_POST['valj-p'];

//category fetch
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM category WHERE id=:id");
$stmt->execute(['id'=>$_POST['category']]);
$cat = $stmt->fetch();
$category_id = $cat['id'];

//calculated fields ../../tsavo_vendor/images
$p_off = ($price_1*100)/$was;
$price = $price_1 + $price_2;
$date_view = date("Y/m/d | h:i:sa");
$slug = time() + $time_id;
$product_status = 1;

//other fields
$description = $_POST['description'];


//insert into the products table
$stmt = $conn->prepare("INSERT INTO products (category_id, name, description, slug, price, photo, date_view, was, brand, weight, width, category, price_1, price_2, prod_qty, supplier, supp_id, length, height, supp_cont, p_off, material, seller_sku, supp_email, ship_orig, product_status, male_shoes, male_shoes_id, male_pants, male_pants_id, male_shirts, male_shirts_id, female_shoes, female_shoes_id, female_skirts, female_skirts_id, female_pants, female_pants_id, field1, field4, field5, field6, categ, field2, field7, field8) VALUES (:category_id, :name, :description, :slug, :price, :photo, :date_view, :was, :brand, :weight, :width, :category, :price_1, :price_2, :prod_qty, :supplier, :supp_id, :length, :height, :supp_cont, :p_off, :material, :seller_sku, :supp_email, :ship_orig, :product_status, :male_shoes, :male_shoes_id, :male_pants, :male_pants_id, :male_shirts, :male_shirts_id, :female_shoes, :female_shoes_id, :female_skirts, :female_skirts_id, :female_pants, :female_pants_id, :field1, :field4, :field5, :field6, :categ, :field2, :field7, :field8)");
$stmt->execute(['category_id'=>$category_id, 'name'=>$name, 'description'=>$description, 'slug'=>$slug, 'price'=>$price, 'photo'=>$filename, 'date_view'=>$date_view, 'was'=>$was, 'brand'=>$brand, 'weight'=>$weight, 'width'=>$width, 'category'=>$category_id, 'price_1'=>$price_1, 'price_2'=>$price_2, 'prod_qty'=>$stock, 'supplier'=>$shop, 'supp_id'=>$shop_id, 'length'=>$length, 'height'=>$height, 'supp_cont'=>$supp_cont, 'p_off'=>$p_off, 'material'=>$material, 'seller_sku'=>$sku, 'supp_email'=>$supp_email, 'ship_orig'=>$ship_orig, 'product_status'=>$product_status, 'male_shoes'=>$vala, 'male_shoes_id'=>$valb, 'male_pants'=>$valc, 'male_pants_id'=>$vald, 'male_shirts'=>$vale, 'male_shirts_id'=>$valf, 'female_shoes'=>$valg, 'female_shoes_id'=>$valh, 'female_skirts'=>$vali, 'female_skirts_id'=>$valj, 'female_pants'=>$valap, 'female_pants_id'=>$valbp, 'field1'=>$valcp, 'field4'=>$valdp, 'field5'=>$valep, 'field6'=>$valfp, 'categ'=>$valgp, 'field2'=>$valhp, 'field7'=>$valip, 'field8'=>$valjp]);

$_SESSION['success'] = 'Product successfully added to the Catalog :)';

header("Location: products_add.php");
exit();
				
}
else{
header('location : index.php');
}
?>
