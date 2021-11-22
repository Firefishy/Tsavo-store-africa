<?php
include 'includes/session.php';

if(isset($_POST['update_det'])){
$id = $_POST['id'];
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
$box = $_POST['box'];

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
$product_status = 1;

//other fields
$description = $_POST['description'];


//insert into the products table
$stmt = $conn->prepare("UPDATE products SET more_desc=:box, category_id=:category_id, name=:name, description=:description, price=:price, was=:was, brand=:brand, weight=:weight, width=:width, category=:category, price_1=:price_1, price_2=:price_2, prod_qty=:prod_qty, supplier=:supplier, supp_id=:supp_id, length=:length, height=:height, supp_cont=:supp_cont, p_off=:p_off, material=:material, seller_sku=:seller_sku, supp_email=:supp_email, ship_orig=:ship_orig, product_status=:product_status, male_shoes=:male_shoes, male_shoes_id=:male_shoes_id, male_pants=:male_pants, male_pants_id=:male_pants_id, male_shirts=:male_shirts, male_shirts_id=:male_shirts_id, female_shoes=:female_shoes, female_shoes_id=:female_shoes_id, female_skirts=:female_skirts, female_skirts_id=:female_skirts_id, female_pants=:female_pants, female_pants_id=:female_pants_id, field1=:field1, field4=:field4, field5=:field5, field6=:field6, categ=:categ, field2=:field2, field7=:field7, field8=:field8 WHERE id=:id");
$stmt->execute(['id'=>$id, 'box'=>$box, 'category_id'=>$category_id, 'name'=>$name, 'description'=>$description, 'price'=>$price, 'was'=>$was, 'brand'=>$brand, 'weight'=>$weight, 'width'=>$width, 'category'=>$category_id, 'price_1'=>$price_1, 'price_2'=>$price_2, 'prod_qty'=>$stock, 'supplier'=>$shop, 'supp_id'=>$shop_id, 'length'=>$length, 'height'=>$height, 'supp_cont'=>$supp_cont, 'p_off'=>$p_off, 'material'=>$material, 'seller_sku'=>$sku, 'supp_email'=>$supp_email, 'ship_orig'=>$ship_orig, 'product_status'=>$product_status, 'male_shoes'=>$vala, 'male_shoes_id'=>$valb, 'male_pants'=>$valc, 'male_pants_id'=>$vald, 'male_shirts'=>$vale, 'male_shirts_id'=>$valf, 'female_shoes'=>$valg, 'female_shoes_id'=>$valh, 'female_skirts'=>$vali, 'female_skirts_id'=>$valj, 'female_pants'=>$valap, 'female_pants_id'=>$valbp, 'field1'=>$valcp, 'field4'=>$valdp, 'field5'=>$valep, 'field6'=>$valfp, 'categ'=>$valgp, 'field2'=>$valhp, 'field7'=>$valip, 'field8'=>$valjp]);

$_SESSION['success'] = 'Product successfully updated :)';

header('location:index.php');
exit();
				
}
else{
$_SESSION['error'] = 'Product could not be updated!';

header('location:products_update-det.php');

}
?>
