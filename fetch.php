<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
include 'includes/session.php';
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://asos2.p.rapidapi.com/products/v2/list?store=US&offset=0&categoryId=4209&limit=100&country=US&sort=freshness&currency=USD&sizeSchema=US&lang=en-US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 3000,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: asos2.p.rapidapi.com",
		"x-rapidapi-key: 6c54f8cbdbmsh026aa3e5aecec5dp1a306fjsn99e3c76d8d56"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    //echo $response;
	$data = json_decode($response, true);
    
    foreach($data['products'] as $k){
        $sku = $k['id'];
/////////FETCH-API////////////////////FETCH-API////////////////////FETCH-API////////////////////FETCH-API////////////////////FETCH-API////////////////////FETCH-API///////////

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://asos2.p.rapidapi.com/products/v3/detail?id=".$sku."&lang=en-US&store=US&sizeSchema=US&currency=USD",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 3000,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: asos2.p.rapidapi.com",
            "x-rapidapi-key: 6c54f8cbdbmsh026aa3e5aecec5dp1a306fjsn99e3c76d8d56"
        ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $data2 = json_decode($response, true);
    }

















//photo

// Download image, rename it and put it into folder
$url = "http://".$data2['media']['images'][0]['url'];
$gen = time();
$filee = basename($url);
$ext = pathinfo($filee, PATHINFO_EXTENSION);
$img = $gen.".jpg";
$path = 'tsavo_vendor/images/'.$img; 
file_put_contents($path, file_get_contents($url));
$filename = $img;



//vendor information
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM supplier WHERE shop_id IS NOT NULL ORDER BY RAND() LIMIT 1");
$stmt->execute();
$vendor = $stmt->fetch();

$shop = $vendor['name'];
$name = $k['name'];
$shop_id =  $vendor['shop_id'];
$supp_cont =  $vendor['supp_contact'];
$supp_email =  $vendor['email'];
$ship_orig = "Kenya";

//product details
$sku = $k['id'];
$weight = 0;
$width = 0;
$length = 0;
$height = 0;
$brand = $data2['brand']['name'];
$material = "General";
$stock = 0;

//price info
$p1 = 110*$k['price']['current']['value'];
$price_1 = $p1;
$p2 = 110*$k['price']['previous']['value'];
$was = $p2;
$price_2 = 0;

//variations

if(isset($data2['variants'][0]['name'])){
$vala = $data2['variants'][0]['name'];
}
else{
$vala = "";
}
if(isset($data2['variants'][1]['name'])){
$valb = $data2['variants'][1]['name'];
}
else{
  $valb = "";
}
if(isset($data2['variants'][2]['name'])){
$valc = $data2['variants'][2]['name'];
}
else{
  $valc = "";
}
if(isset($data2['variants'][3]['name'])){
$vald = $data2['variants'][3]['name'];
}
else{
  $vald = "";
}
if(isset($data2['variants'][4]['name'])){
$vale = $data2['variants'][4]['name'];
}
else{
  $vale = "";
}
if(isset($data2['variants'][5]['name'])){
$valf = $data2['variants'][5]['name'];
}
else{
  $valf = "";
}
if(isset($data2['variants'][6]['name'])){
$valg = $data2['variants'][6]['name'];
}
else{
  $valg = "";
}
if(isset($data2['variants'][7]['name'])){
$valh = $data2['variants'][7]['name'];
}
else{
  $valh = "";
}
if(isset($data2['variants'][8]['name'])){
$vali = $data2['variants'][8]['name'];
}
else{
  $vali = "";
}
if(isset($data2['variants'][9]['name'])){
$valj = $data2['variants'][9]['name'];
}
else{
  $valj = "";
}



//variation prices
if(isset($data2['variants'][0]['price']['current']['value'])){
$valap = $data2['variants'][0]['price']['current']['value'];
}
else{
  $valap = "";
}
if(isset($data2['variants'][1]['price']['current']['value'])){
$valbp = $data2['variants'][1]['price']['current']['value'];
}
else{
  $valbp = "";
}
if(isset($data2['variants'][2]['price']['current']['value'])){
$valcp = $data2['variants'][2]['price']['current']['value'];
}
else{
  $valcp = "";
}
if(isset($data2['variants'][3]['price']['current']['value'])){
$valdp = $data2['variants'][3]['price']['current']['value'];
}
else{
  $valdp = "";
}
if(isset($data2['variants'][4]['price']['current']['value'])){
$valep = $data2['variants'][4]['price']['current']['value'];
}
else{
  $valep = "";
}
if(isset($data2['variants'][5]['price']['current']['value'])){
$valfp = $data2['variants'][5]['price']['current']['value'];
}
else{
  $valfp = "";
}
if(isset($data2['variants'][6]['price']['current']['value'])){
$valgp = $data2['variants'][6]['price']['current']['value'];
}
else{
  $valgp = "";
}
if(isset($data2['variants'][7]['price']['current']['value'])){
$valhp = $data2['variants'][7]['price']['current']['value'];
}
else{
  $valhp = "";
}
if(isset($data2['variants'][8]['price']['current']['value'])){
$valip = $data2['variants'][8]['price']['current']['value'];
}
else{
  $valip = "";
}
if(isset($data2['variants'][9]['price']['current']['value'])){
$valjp = $data2['variants'][9]['price']['current']['value'];
}
else{
  $valjp = "";
}


//category fetch
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM category WHERE id=:id");
$stmt->execute(['id'=>234]);
$cat = $stmt->fetch();
$category_id = $cat['id'];

//calculated fields ../../tsavo_vendor/images
if($was > 1){
$p_off = ($price_1*100)/$was;
}
else{
  $p_off = 0;
}
$time_id = time();
$price = $price_1 + $price_2;
$date_view = date("Y/m/d | h:i:sa");
$slug = time() + $time_id;
$product_status = 1;

//other fields
$description = $data2['description'];

$stmt = $conn->prepare("INSERT INTO products (category_id, name, description, slug, price, photo, date_view, was, brand, weight, width, category, price_1, price_2, prod_qty, supplier, supp_id, length, height, supp_cont, p_off, material, seller_sku, supp_email, ship_orig, product_status, male_shoes, male_shoes_id, male_pants, male_pants_id, male_shirts, male_shirts_id, female_shoes, female_shoes_id, female_skirts, female_skirts_id, female_pants, female_pants_id, field1, field4, field5, field6, categ, field2, field7, field8) VALUES (:category_id, :name, :description, :slug, :price, :photo, :date_view, :was, :brand, :weight, :width, :category, :price_1, :price_2, :prod_qty, :supplier, :supp_id, :length, :height, :supp_cont, :p_off, :material, :seller_sku, :supp_email, :ship_orig, :product_status, :male_shoes, :male_shoes_id, :male_pants, :male_pants_id, :male_shirts, :male_shirts_id, :female_shoes, :female_shoes_id, :female_skirts, :female_skirts_id, :female_pants, :female_pants_id, :field1, :field4, :field5, :field6, :categ, :field2, :field7, :field8)");
$stmt->execute(['category_id'=>$category_id, 'name'=>$name, 'description'=>$description, 'slug'=>$slug, 'price'=>$price, 'photo'=>$filename, 'date_view'=>$date_view, 'was'=>$was, 'brand'=>$brand, 'weight'=>$weight, 'width'=>$width, 'category'=>$category_id, 'price_1'=>$price_1, 'price_2'=>$price_2, 'prod_qty'=>$stock, 'supplier'=>$shop, 'supp_id'=>$shop_id, 'length'=>$length, 'height'=>$height, 'supp_cont'=>$supp_cont, 'p_off'=>$p_off, 'material'=>$material, 'seller_sku'=>$sku, 'supp_email'=>$supp_email, 'ship_orig'=>$ship_orig, 'product_status'=>$product_status, 'male_shoes'=>$vala, 'male_shoes_id'=>$valb, 'male_pants'=>$valc, 'male_pants_id'=>$vald, 'male_shirts'=>$vale, 'male_shirts_id'=>$valf, 'female_shoes'=>$valg, 'female_shoes_id'=>$valh, 'female_skirts'=>$vali, 'female_skirts_id'=>$valj, 'female_pants'=>$valap, 'female_pants_id'=>$valbp, 'field1'=>$valcp, 'field4'=>$valdp, 'field5'=>$valep, 'field6'=>$valfp, 'categ'=>$valgp, 'field2'=>$valhp, 'field7'=>$valip, 'field8'=>$valjp]);
echo 'Data upload successfull';
    echo '
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Price</th>
      <th scope="col">Prev</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$price.'</td>
      <td>'.$prev.'</td>
    </tr>
    
    
  </tbody>
</table>
    ';
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>