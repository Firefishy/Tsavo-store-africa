<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();


//--------------------------------------------------------------------------------------------------
$stmt = $conn->prepare("SELECT * FROM products WHERE slug = '".$_GET['product']."'");
	    $stmt->execute();
	    $valid = $stmt->fetch();
		if ($valid) {
  if ($valid > 0) {
    $slug = $_GET['product'];
  } else {
    
  }
} else {
  header("Location: product-not-found.php");
    exit;
}
//--------------------------------------------------------------------------------------------------
	
	
	
	try{
		 		
	    $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE slug = :slug");
	    $stmt->execute(['slug' => $slug]);
	    $product = $stmt->fetch();
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}
	



	//page view
	$now = date('Y-m-d');
	if($product['date_view'] == $now){
		$stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid']]);
	}
	else{
		$stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid'], 'now'=>$now]);
	}
	
	//just viewed
	$timest = time();
	$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM last_viewed WHERE product_id=:product_id AND user_id=:user");
			$stmt->execute(['product_id'=>$product['prodid'], 'user'=>$_SESSION['user']]);
			$lino = $stmt->fetch();
	if($lino['numrows'] > 0){
	 if(isset($_SESSION['user'])){
	  $stmt = $conn->prepare("UPDATE last_viewed SET time_viewed=:time_viewed WHERE product_id=:product_id");
		$stmt->execute(['product_id'=>$product['prodid'], 'time_viewed'=>$timest]);
	      }
		}
	elseif(isset($_SESSION['user'])){
	    $stmt = $conn->prepare("INSERT INTO last_viewed (id, user_id, product_id, time_viewed) VALUES (:id, :user_id, :product_id, :time_viewed)");
		$stmt->execute(['id'=>$timest, 'user_id'=>$_SESSION['user'], 'product_id'=>$product['prodid'], 'time_viewed'=>$timest]);
	
	 }
	
	

?>

<?php
	$rating = new Database();
	$itemDetails = $rating->getItem($_GET['product']);
	foreach($itemDetails as $item){
		$average = $rating->getRatingAverage($item["slug"]);
		$count = $rating->getRatingTotal($_GET['product']);
		
	?>	

<?php include 'includes/header_product_view.php'; ?>
<title><?php echo $product['prodname']; ?> | Tsavo Africa</title>
</head>
<style>
.btn-primary{
background-color:#1778F2;
 }
/*-------------====================part 2============================--------------------------*/
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap');

  body{
 
  
}
</style>
<body style="font-family: 'Quicksand', sans-serif;" class="hold-transition layout-top-nav">
<!------------------------==============facebook stuff start===========--------->
<!-------------============facebook stuff end===============--------->
<link rel="stylesheet" type="text/css" href="includes/font/flaticon.css">
<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
<div style="width:100%" class="row"><?php include 'includes/navbar2.php'; ?></div>
 	

	  <div class="">
	    <div class="">

	      <!-- Main content -->
	      <section class="content">
	        <div class="">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
		            	<div class="col-sm-6">
		            		<img src="<?php echo (!empty($product['photo'])) ? 'tsavo_vendor/images/'.$product['photo'] : 'tsavo_vendor/images/noimage.jpg'; ?>" width="100%" class="zoom booo rounded" data-magnify-src="tsavo_vendor/images/<?php echo $product['photo']; ?>">
		            		<br><br>
		            		<?php  $product['ship_orig'];?> 
                                    <?php
                                     if ($product['ship_orig']=='Kenya'){
                                      ?>
									  <div class="well well-sm clearfix" style="text-align:center; width:100%; border:none; background-color:#5CDC67;">
			            			<i style="float:left;" class="flaticon-checked"></i>
									<b style=" float:right;">From Kenya</b>
									</div>
									<?php
                                 }else{
                                  ?>
								<div class="well well-sm clearfix" style="text-align:center; width:100%; border:none; background-color:#3FBDD3">
			            			<i style="float:left;" class="flaticon-planet-earth"></i>
									<b style=" float:right;">From Abroad</b>
									</div> 
								 <?php 
								
                                 }?>
                                 <style> 
.oop {
    opacity: 0;
    font-size: 28px;
    color: #1F1E1E;
    will-change: transform;
    -webkit-transform: scale(.1);
            transform: scale(.1);
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.btn_wrap {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    overflow: hidden;
    cursor: pointer;
    width: 95%;
    height: 50px;
    background-color: #EEEEED;
    border-radius: 80px;
    padding: 0 18px;
    will-change: transform;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

.btn_wrap:hover {
    /* transition-delay: .4s; */
    -webkit-transform: scale(1.1);
            transform: scale(1.1)
}

.share {
    position: absolute;
    z-index: 99;
    width: 100%;
    height: 72px;
    border-radius: 80px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 15px;
    text-align: center;
    line-height: 70px;
    letter-spacing: 2px;
    color: #EEEEED;
    background-color: #1F1E1E;
    padding: 0 18px;
    -webkit-transition: all 1.2s ease;
    transition: all 1.2s ease;
}

.containerur {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
        justify-content: space-around;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    width: 95%;
    height: 64px;
    border-radius: 80px;
}

.containerur .oop:nth-of-type(1) {
            -webkit-transition-delay: 1.1s;
                    transition-delay: 1.1s;
}

.containerur .oop:nth-of-type(2) {
            -webkit-transition-delay: .9s;
                    transition-delay: .9s;
}

.containerur .oop:nth-of-type(3) {
            -webkit-transition-delay: .7s;
                    transition-delay: .7s;
}

.containerur .oop:nth-of-type(4) {
            -webkit-transition-delay: .4s;
                    transition-delay: .4s;
}

.btn_wrap:hover span {
    -webkit-transition-delay: .25s;
            transition-delay: .25s;
    -webkit-transform: translateX(-420px);
            transform: translateX(-420px)
}

.btn_wrap:hover .oop {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
}
 </style>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
	<div class="btn_wrap">
        <span class="share">Share this product</span>
        <div class="containerur">
		    <a href="whatsapp://send?text=https://tsavo.store/Item?product=<?php echo $slug; ?>"data-action="share/whatsapp/share">
		    <i class="fab fa-whatsapp oop"></i>
			</a>
			<a href="https://www.facebook.com/sharer.php?u=https://tsavo.store/Item?product=<?php echo $slug; ?>" target="_blank">
            <i class="fab fa-facebook-f oop"></i>
			</a>
			<a href="https://twitter.com/share?url=https://tsavo.store/Item?product=<?php echo $slug; ?>" target="_blank">
            <i class="fab fa-twitter oop"></i>
			</a>
			<a href="https://pinterest.com/pin/create/button/?url=https://tsavo.store/Item?product=<?php echo $slug; ?>&media=https://tsavo.store/tsavo_vendor/images/<?php echo $product['photo']; ?>&description=<?php echo $product['prodname']; ?>" target="_blank">
			<i class="fab fa-pinterest-p oop"></i>
            </a>
        </div>
    </div>
<hr/>

						</div>
		            	<div class="col-sm-6 well">
						
		            		<h1 class="page-header"><?php echo $product['prodname']; ?></h1>
		            		<h3><b id="oprice">Kshs. <?php echo number_format($product['price'], 2); ?></b> <b id="price" style="color:red"></b></h3>
							<h3 style="text-decoration:line-through; color:grey">Kshs. <?php echo number_format($product['was'], 2); ?></h3>
							<p><b>Category:</b> <?php echo $product['catname']; ?> <a href="TsavoCategory?category=<?php echo $product['cat_slug']; ?>" style="color:#D608D6"> | Open <?php echo $product['catname']; ?> category</a></p>
		            		
		            		<p><b>Brand:</b> <?php echo $product['brand']; ?></p>
							<p><b>Size:</b> <j id="size" style="text-transform:uppercase"></j></p>
							<p><b>Shipped from:</b> <?php echo $product['ship_orig']; ?></p>
							<p><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#vendor">Visit shop</button></p>
		            		<p style="margin-top:20px;">
        <?php  $product['prod_qty'];?> 
        <?php
        if ($product['prod_qty']<=0){
        ?>
         <span class="well well-sm" style="background-color:#FF0000; color:white; font-weight:bolder; border:none; border-radius:4px;">Product Sold Out!</span>  
		 <?php
        }elseif ($product['prod_qty']<=15){
        ?>
	    <span class="well well-sm" style="background-color:#FF8040;color:white; font-weight:bolder; border:none; border-radius:4px;">Limited Supplies Available</span>  
         <?php
        }else{
       ?>
      <span class="well well-sm" style="background-color:#00B600;color:white; font-weight:bolder; border:none; border-radius:4px;">Product Available</span>  
		  </p>
       <?php 
    }?>


<hr/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Lato:400,500,600,700&display=swap');

.varia{
  display: grid;
   place-items: center;
  font-family: 'Lato', sans-serif;
}
.wrappeer{

  width: 100%;
  align-items: center;
  justify-content: space-evenly;
  padding: 5px 5px;
 }
.wrappeer .option{
  background: #fff;
  height: 30px;
  width: 45%;
  display: flex;
  align-items: center;
  margin: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
  padding: 0 0px;
  border: 2px solid lightgrey;
  transition: all 0.3s ease;
  float:right;
}
.wrappeer .option .dot{
  height: 20px;
  width: 20px;
  background: #d9d9d9;
  border-radius: 50%;
  position: relative;
  margin-right:5px;
 margin-left:5px;
}
.wrappeer .option .dot::before{
  position: absolute;
  content: "";
  top: 4px;
  left: 4px;
  width: 12px;
  height: 12px;
  background: #D800EC;
  border-radius: 50%;
  opacity: 0;
  transform: scale(1.5);
  transition: all 0.3s ease;
}
input[type="radio"]{
  display: none;
}
#option-1:checked:checked ~ .option-1
{
  border-color: #D800EC;
  background: #D800EC;
}
#option-1:checked:checked ~ .option-1 .dot
{
  background: #fff;
}
#option-1:checked:checked ~ .option-1 .dot::before
{
  opacity: 1;
  transform: scale(1);
}
.wrappeer .option span{
  font-size: 15px;
  color: #808080;
}
#option-1:checked:checked ~ .option-1 span
{
  color: #fff;
}
</style>
<form class="form-inline" id="productForm">
<div class="row">
<div class="varia">
<!-- partial:index.partial.html -->
<div class="wrappeer">
 <input type="radio" name="select" id="option-1" onClick="mess1()"  value="<?php echo $product['male_shoes']; ?>" checked>
 <?php
 if($product['male_shoes']!=''){
 echo '
<label for="option-1" class="option option-1">
     <div class="dot"></div>
      <span>'.$product['male_shoes'].'</span>
</label>
<script>
document.getElementById("size").innerHTML = "'.$product['male_shoes'].'";

function mess1(){
    document.getElementById("size").innerHTML = "'.$product['male_shoes'].'";
    document.getElementById("price").innerHTML = "";
    document.getElementById("oprice").style.textDecoration = "none"
}
</script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>
 
<!--============================================== partial 2======================================================= -->  
 <?php
 if($product['male_shoes_id']!=''){
 echo ' 
<style>
#option-2:checked:checked ~ .option-2{
  border-color: #D800EC;
  background: #D800EC;
}
#option-2:checked:checked ~ .option-2 .dot{
  background: #fff;
}
#option-2:checked:checked ~ .option-2 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-2:checked:checked ~ .option-2 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['male_shoes_id'].'" id="option-2" onClick="mess()">
   <label for="option-2" class="option option-2">
     <div class="dot"></div>
      <span>'.$product['male_shoes_id'].'</span>
   </label>
    <script>
     
     function mess(){
         let pr = '.$product['female_pants_id'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['male_shoes_id'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['male_shoes_id'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>

<!--============================================== partial 3======================================================= -->  
<?php
 if($product['male_pants']!=''){
 echo ' 
<style>
#option-3:checked:checked ~ .option-3{
  border-color: #D800EC;
  background: #D800EC;
}
#option-3:checked:checked ~ .option-3 .dot{
  background: #fff;
}
#option-3:checked:checked ~ .option-3 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-3:checked:checked ~ .option-3 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['male_pants'].'" id="option-3" onClick="mess1()">
   <label for="option-3" class="option option-3">
     <div class="dot"></div>
      <span>'.$product['male_pants'].'</span>
   </label>
   <script>
     
     function mess1(){
         let pr = '.$product['field1'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['male_pants'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['male_pants'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>
  

<!--============================================== partial 4======================================================= -->  
<?php
 if($product['male_pants_id']!=''){
 echo ' 
<style>
#option-4:checked:checked ~ .option-4{
  border-color: #D800EC;
  background: #D800EC;
}
#option-4:checked:checked ~ .option-4 .dot{
  background: #fff;
}
#option-4:checked:checked ~ .option-4 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-4:checked:checked ~ .option-4 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['male_pants_id'].'" id="option-4" onClick="mess2()">
   <label for="option-4" class="option option-4">
     <div class="dot"></div>
      <span>'.$product['male_pants_id'].'</span>
   </label>
   <script>
     
     function mess2(){
         let pr = '.$product['field4'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['male_pants_id'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['male_pants_id'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>
 
<!--============================================== partial 5======================================================= -->  
<?php
 if($product['male_shirts']!=''){
 echo ' 
<style>
#option-5:checked:checked ~ .option-5{
  border-color: #D800EC;
  background: #D800EC;
}
#option-5:checked:checked ~ .option-5 .dot{
  background: #fff;
}
#option-5:checked:checked ~ .option-5 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-5:checked:checked ~ .option-5 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['male_shirts'].'" id="option-5" onClick="mess3()">
   <label for="option-5" class="option option-5">
     <div class="dot"></div>
      <span>'.$product['male_shirts'].'</span>
   </label>
   <script>
     
     function mess3(){
         let pr = '.$product['field5'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['male_shirts'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['male_shirts'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>

<!--============================================== partial 6======================================================= -->  
<?php
 if($product['male_shirts_id']!=''){
 echo ' 
<style>
#option-6:checked:checked ~ .option-6{
  border-color: #D800EC;
  background: #D800EC;
}
#option-6:checked:checked ~ .option-6 .dot{
  background: #fff;
}
#option-6:checked:checked ~ .option-6 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-6:checked:checked ~ .option-6 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['male_shirts_id'].'" id="option-6" onClick="mess4()">
   <label for="option-6" class="option option-6">
     <div class="dot"></div>
      <span>'.$product['male_shirts_id'].'</span>
   </label>
   <script>
     
     function mess4(){
         let pr = '.$product['field6'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['male_shirts_id'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['male_shirts_id'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>

<!--============================================== partial 7======================================================= -->  
<?php
 if($product['female_shoes']!=''){
 echo ' 
<style>
#option-7:checked:checked ~ .option-7{
  border-color: #D800EC;
  background: #D800EC;
}
#option-7:checked:checked ~ .option-7 .dot{
  background: #fff;
}
#option-7:checked:checked ~ .option-7 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-7:checked:checked ~ .option-7 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['female_shoes'].'" id="option-7" onClick="mess5()">
   <label for="option-7" class="option option-7">
     <div class="dot"></div>
      <span>'.$product['female_shoes'].'</span>
   </label>
   <script>
     
     function mess5(){
         let pr = '.$product['categ'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['female_shoes'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['female_shoes'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>

<!--============================================== partial 8======================================================= -->  
<?php
 if($product['female_shoes_id']!=''){
 echo ' 
<style>
#option-8:checked:checked ~ .option-8{
  border-color: #D800EC;
  background: #D800EC;
}
#option-8:checked:checked ~ .option-8 .dot{
  background: #fff;
}
#option-8:checked:checked ~ .option-8 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-8:checked:checked ~ .option-8 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['female_shoes_id'].'" id="option-8" onClick="mess6()">
   <label for="option-8" class="option option-8">
     <div class="dot"></div>
      <span>'.$product['female_shoes_id'].'</span>
   </label>
   <script>
     
     function mess6(){
         let pr = '.$product['field2'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['female_shoes_id'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['female_shoes_id'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>
  
<!--============================================== partial 9======================================================= -->  
<?php
 if($product['female_dresses']!=''){
 echo ' 
<style>
#option-9:checked:checked ~ .option-9{
  border-color: #D900EC;
  background: #D900EC;
}
#option-9:checked:checked ~ .option-9 .dot{
  background: #fff;
}
#option-9:checked:checked ~ .option-9 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-9:checked:checked ~ .option-9 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['female_dresses'].'" id="option-9" onClick="mess7()">
   <label for="option-9" class="option option-9">
     <div class="dot"></div>
      <span>'.$product['female_dresses'].'</span>
   </label>
   <script>
     
     function mess7(){
         let pr = '.$product['field7'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['female_dresses'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['female_dresses'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>
  
<!--============================================== partial 10======================================================= -->  
<?php
 if($product['female_dresses_id']!=''){
 echo ' 
<style>
#option-10:checked:checked ~ .option-10{
  border-color: #D1000EC;
  background: #D1000EC;
}
#option-10:checked:checked ~ .option-10 .dot{
  background: #fff;
}
#option-10:checked:checked ~ .option-10 .dot::before{
  opacity: 1;
  transform: scale(1);
}
#option-10:checked:checked ~ .option-10 span{
  color: #fff;
}
</style>	  
<input type="radio" name="select" value="'.$product['female_dresses_id'].'" id="option-10" onClick="mess8()">
   <label for="option-10" class="option option-10">
     <div class="dot"></div>
      <span>'.$product['female_dresses_id'].'</span>
   </label>
   <script>
     
     function mess8(){
         let pr = '.$product['field8'].';
         var price = numeral(pr).format("0,0");
         window.alert("The new price for '.$product['prodname'].', '.$product['female_dresses_id'].' is Kshs."+price);
         document.getElementById("price").innerHTML = "Kshs."+" "+price;
         document.getElementById("fprice").value = pr;
         document.getElementById("size").innerHTML = "'.$product['female_dresses_id'].'";
         document.getElementById("oprice").style.textDecoration = "line-through";
     }
 </script>
 ';
 }
 else{
 echo '
 <script></script>
 ';
 }
 ?>
  
<!--============================================== partial 11======================================================= -->  

</div> 
</div>
</div>
<hr />
<p><?php echo $product['prod_qty']; ?> products left.</p>

		            			<div class="form-group">
			            			<div style="width:100%" class="input-group col-sm-5">
			            				
			            				<span class="input-group-btn">
			            					<button type="button" id="minus" class="btn btn-default btn-flat btn-lg" style="width:100%"><i class="fa fa-minus"></i></button>
			            				</span>
							          <input type="number" name="quantity" id="quantity" class="form-control input-lg" value="1" style="width:100%" max="<?php echo $product['prod_qty']; ?>">
							            <span class="input-group-btn">
							                <button type="button" id="add" class="btn btn-default btn-flat btn-lg" style="width:100%"><i class="fa fa-plus"></i>
							                </button>
							            </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
										<input type="hidden" value="<?php echo $product['prodname']; ?>" name="product_name">
										<input type="hidden" value="<?php echo $product['price']; ?>" id="fprice" name="price">
										<input type="hidden" value="<?php echo $product['weight']; ?>" name="weight">
										<input type="hidden" value="<?php echo $product['length']; ?>" name="length">
										<input type="hidden" value="<?php echo $product['width']; ?>" name="width">
										<input type="hidden" value="<?php echo $product['height']; ?>" name="height">
										
							        </div>
									<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.btn-primary{
background-color:#1778F2;
 }
/*-------------====================part 2============================--------------------------*/

</style>
									
							<?php  $product['prod_qty'];?> 
                                    <?php
                                     if ($product['prod_qty']<=0){
                                      ?>
			            			<button style="width:100%" type="" class="btn btn-danger btn-lg btn-flat" disabled><i class="flaticon-not-allowed"></i> Sold Out</button>
			            		<?php
                                 }else{
                                  ?>
								<button style="width:100%;"  type="submit" onclick="javascript: form.action='/submit';" class="btn btn-tsavo btn-lg btn-flat"><i class="flaticon-add-to-cart"></i>  Add to Cart</button>
	
								 
								 <?php 
								
                                 }?>
								 
								
								</div>
		            		</form>
							<div style="margin-top:20px" class="well well-sm"><div class="badge"><?php echo $count ?></div> Review(s)      <span class="average"><?php printf('%.1f', $average); ?> <small> out of 5</small></span> </div>
					         
						 <?php } ?>	
							<form class="form-inline" id="productForme">
							<div class="form-group">
			            			<div class="input-group">
			            			      <span class="input-group-btn">
							             </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
							        </div>
									</div>
									
							<button style="width:100%" type="submit"  class="btn btn-basic btn-lg btn-flat"><i class="fa fa-heart" style="color:red"></i> Add to wishlist</button>
			            	</form>
							
		            	</div>
						
		            </div>
		            <br>
					<p><b>Description:</b></p>
		            		<p><?php echo $product['description']; ?></p>
							<div class="row jumbotron">
							<p><b style="border:solid; border-color:#D20BFF">SKU: <?php echo $product['seller_sku']; ?> </b></p>
							<p><b>What is in the box:</b></p>
		            		<p><b class=""><?php echo $product['more_desc']; ?></b></p>
							</div>
					<br />
					
  <!-- The Modal -->
  <div class="modal fade" id="vendor">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Seller Information</h4>
		  <img style="margin-left:43%" src="pimages/vendor.png" class="mx-auto d-block center" width="70px">
		  <h3 style="text-align:center; border:solid; border-color:#C100EC; padding:3px 6px;"><b><?php echo $product['supplier']; ?></b></h3>
           <h3 style="text-align:center;"><b> <a class="btn btn-success" href="TsavoShop?shop=<?php echo $product['supp_id']; ?>">Explore Shop</a></b></h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="jumbotron">
		 <div style="text-align:center;">
		  <h4 style="text-align:center;"><b>Contact info</b></h4>
		  <p><?php echo $product['supp_cont']; ?></p>
		  <h4 style="text-align:center;"><b>Email</b></h4>
		  <p><?php echo $product['supp_email']; ?></p>
		  <h4 style="text-align:center;"><b>From</b></h4>
		  <p><?php echo $product['ship_orig']; ?></p>
		  </div>
		 </div>
		 <!-- partial:index.partial.html -->

<!-- partial -->
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button style="float:left;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
				
				</div>
	        	<div class="col-sm-3 hidder">
	        		<?php include 'includes/sidebar-product.php'; ?>
					
	        	</div>
				
	        </div>
			<hr style="color:#CB17CB" />
			 <!-----------rating----->
		 <div class="col-sm-12" style="overflow-y:scroll; overflow-x:hidden; height:100%">
				
	<?php	
	$itemRating = $rating->getItemRating($_GET['product']);	
	$ratingNumber = 0;
	$count = 0;
	$fiveStarRating = 0;
	$fourStarRating = 0;
	$threeStarRating = 0;
	$twoStarRating = 0;
	$oneStarRating = 0;	
	foreach($itemRating as $rate){
		$ratingNumber+= $rate['ratingNumber'];
		$count += 1;
		if($rate['ratingNumber'] == 5) {
			$fiveStarRating +=1;
		} else if($rate['ratingNumber'] == 4) {
			$fourStarRating +=1;
		} else if($rate['ratingNumber'] == 3) {
			$threeStarRating +=1;
		} else if($rate['ratingNumber'] == 2) {
			$twoStarRating +=1;
		} else if($rate['ratingNumber'] == 1) {
			$oneStarRating +=1;
		}
	}
	$average = 0;
	if($ratingNumber && $count) {
		$average = $ratingNumber/$count;
	}	
	?>		
	<br>		
	<div id="ratingDetails"> 		
		<div class="row">			
			<div class="col-sm-3">				
				<h4>Rating and Reviews</h4>
				<h1 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?><small> out of 5</small></h1>	
				<h4><?php echo $count . ' Reviews'; ?></h4>			
				<?php
				$averageRating = round($average, 0);
				for ($i = 1; $i <= 5; $i++) {
					$ratingClass = "btn-default btn-grey";
					if($i <= $averageRating) {
						$ratingClass = "btn-tsavo";
					}
				?>
				<button type="button" class="btn btn-tsavo <?php echo $ratingClass; ?>" aria-label="Left Align">
				  <span class="fa fa-star" aria-hidden="true"></span>
				</button>	
				<?php } ?>				
			</div>
			<div class="col-sm-3">
				<?php
				$fiveStarRatingPercent = round(($fiveStarRating/5)*100);
				$fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	
				
				$fourStarRatingPercent = round(($fourStarRating/5)*100);
				$fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
				
				$threeStarRatingPercent = round(($threeStarRating/5)*100);
				$threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
				
				$twoStarRatingPercent = round(($twoStarRating/5)*100);
				$twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
				
				$oneStarRatingPercent = round(($oneStarRating/5)*100);
				$oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
				
				?>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
				</div>
				
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
				</div>
			</div>		
			<div class="col-sm-3">
				    <a href="ProductRatingReviews?product=<?php echo $item["slug"]; ?>" class="btn btn-tsavo" style="width:100%">More reviews <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>         
					<hr/>
					</div>	
			<div class="col-sm-3">
				   	<button type="button" id="rateProduct" class="btn btn-tsavo <?php if(!empty($_SESSION['user']) && $_SESSION['user']){ echo 'login';} ?>" style="width:100%">Rate this product</button>
			</div>	
		</div>
		<div class="row">
			<div class="col-sm-12">
				<hr/>
				<div class="review-block">		
				<?php
				$itemRating = $rating->getItemRatinglimit($_GET['product']);
				foreach($itemRating as $rating){				
					$date=date_create($rating['created']);
					$reviewDate = date_format($date,"M d, Y");						
					$profilePic = "tsavo_system/users/profile.jpg";	
					if($rating['photo']) {
						$profilePic = (!empty($rating['photo'])) ? 'tsavo_system/users/'.$rating['photo'] : 'tsavo_system/users/profile.jpg';
             
					}
				?>				
					<div class="row">
						<div class="col-sm-3">
							<img src="<?php echo $profilePic; ?>" class="img-rounded user-pic">
							<div class="review-block-name">By <span style="color:#E830E8"><?php echo $rating['lastname']; ?></span></div>
							<div class="review-block-date"><?php echo $reviewDate; ?></div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<?php
								for ($i = 1; $i <= 5; $i++) {
									$ratingClass = "btn-default btn-grey";
									if($i <= $rating['ratingNumber']) {
										$ratingClass = "btn-tsavo";
									}
								?>
								<button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
								  <span class="fa fa-star" aria-hidden="true"></span>
								</button>								
								<?php } ?>
							</div>
							<div class="review-block-title"><?php echo $rating['title']; ?></div>
							<div class="review-block-description"><?php echo $rating['comments']; ?></div>
							<br />
							<?php
	        			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM details WHERE product_id=:prodidd AND recipient_email='".$rating['email']."'");
			            $stmt->execute(['prodidd'=>$product['prodid']]);
			            $rt1 = $stmt->fetch();
						if($rt1['numrows'] > 0){
						echo "
	        				
									<div class='review-block-description badge badge-light'>
								<i style='color:#FFF7FF; float:left;' class='flaticon-checked'></i>
									
									</div>
						
								";
								}
						else{
						echo "
						<div class='review-block-description badge badge-danger'>&#9940; UNVERIFIED RATING
						<br />
						This customer has not yet purchased this product!
						</div>
						<div class='review-block-description'></div>
						
								";
						
						    }
						?>
						</div>
					</div>
					<hr/>					
				<?php } ?>
				</div>
			</div>
		</div>	
	</div>
	<div id="ratingSection" style="display:none;">
		<div class="row">
			<div class="col-sm-12">
				<form id="ratingForm" method="POST">					
					<div class="form-group">
						<h4>Rate this product</h4>
						<button type="button" class="btn btn-tsavo btn-sm rateButton" aria-label="Left Align">
						  <span class="fa fa-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="fa fa-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="fa fa-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="fa fa-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="fa fa-star" aria-hidden="true"></span>
						</button>
						<input type="hidden" class="form-control" id="rating" name="rating" value="1">
						<input type="hidden" class="form-control" id="itemId" name="itemId" value="<?php echo $_GET['product']; ?>">
						<input type="hidden" name="action" value="saveRating">
					</div>		
					<div class="form-group">
						<label for="usr">Title*</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="form-group">
						<label for="comment">Comment*</label>
						<textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
					</div>			
				</form>
			</div>
		</div>		
	</div>	
	</div>	
	
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1>Login to rate this product</h1><br>
				<div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
				<a href="Welcome" class="btn btn-tsavo" style="color:#000000; width:100%">Login</a>
				<hr />
				<a href="NewAccount" class="btn btn-tsavo" style="color:#000000; width:100%">Sign up</a>
				
				<div class="login-help">					
					<p style="text-align:center;"><b>To rate this product you have to login or sign up first!</b></p>
				</div>
			</div>
		</div>
	</div> 
<!---------============================recently viewed========================================------------------>

<?php
					if(isset($_SESSION['user'])){
					?>
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box graa">Recently viewed<i class="flaticon-direction" aria-hidden="true"></i>
				<br />
				<hr />
				<span style="text-transform:none;"><a class="btn btn-tsavo" href="RecentlyViewed">View more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
				</h3>
				
			<div style="width:100%;" class='wrap-products style-nav-4 '>
	             
					<?php
		       			
		       			$conn = $pdo->open();
						   			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, last_viewed.user_id AS viewer FROM last_viewed LEFT JOIN products ON last_viewed.product_id=products.id WHERE user_id=:user ORDER BY time_viewed DESC LIMIT 10");
						    $stmt->execute(['user'=>$_SESSION['user']]);
							 foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/00000.png';
						    	$inc = ($inc == 0) ? 1 : $inc + 0;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
								 <div class='list-grid'>
								 <div class=''> 
								
								<div style='width:100%' class='product product-style-2 equal-elem '>
						<div class='product-thumnail'>
							<a href='Item?product=".$row['slug']."' title='".$row['name']."'>
								<figure><img class='thumbnail booi da' src='".$image."' width='100%' onerror='this.src='images/noimage.jpg'' alt='".$row['name']."'></figure>
							</a>
							<div class='group-flash'>
								<span class='flash-item sale-label'>".$row['p_off']."% OFF</span>
							</div>
							
							<div class='wrap-btn' style='width:100%'>
								<a href='Item?product=".$row['slug']."' class='function-link '>view</a>
							</div>
							
						</div>
						<div id='review'>
						<div class='box-footer'>
						<div class='product-info'>
							<a href='Item?product=".$row['slug']."' class='product-name'><span class='ba'>".$row['name']."</span></a>
							<div class='wrap-price '><span style='font-size:1.25rem' class='product-price ba'>Kshs.".number_format($row['price'], 2)."</span></div>
							</div>
						</div>
					</div>
					</div></div></div>
					
	       						";
	       						if($inc == 4) echo "</div>";
						    }
						    if($inc == 2) echo "<div class='col-sm-1'></div><div class='col-sm-1'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-2'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
					<?php }?>
					<!----=====end=====----->	
	<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box graa">Similar Products<i class="flaticon-direction" aria-hidden="true"></i>
				<br />
				<hr />
				<span style="text-transform:none;"><a class="btn btn-tsavo" href="TsavoCategory?category=<?php echo $product['cat_slug']; ?>">View more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
				</h3>
				
			<div style="width:100%;" class='wrap-products style-nav-4 '>
	                 
					<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id='".$product['category']."' ORDER BY id DESC LIMIT 10");
						   $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/00000.png';
						    	$inc = ($inc == 0) ? 1 : $inc + 0;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
								 <div class='list-grid'>
								 <div class=''> 
								
								<div style='width:100%' class='product product-style-2 equal-elem '>
						<div class='product-thumnail'>
							<a href='Item?product=".$row['slug']."' title='".$row['name']."'>
								<figure><img class='thumbnail booi da' src='".$image."' width='100%' onerror='this.src='images/noimage.jpg'' alt='".$row['name']."'></figure>
							</a>
							<div class='group-flash'>
								<span class='flash-item bestseller-label'>".$row['p_off']."% OFF</span>
							</div>
							
							<div class='wrap-btn' style='width:100%'>
								<a href='Item?product=".$row['slug']."' class='function-link '>view</a>
							</div>
							
						</div>
						<div id='review'>
						<div class='box-footer'>
						<div class='product-info'>
							<a href='Item?product=".$row['slug']."' class='product-name'><span class='ba'>".$row['name']."</span></a>
							<div class='wrap-price '><span style='font-size:1.25rem' class='product-price ba'>Kshs.".number_format($row['price'], 2)."</span></div>
							</div>
						</div>
					</div>
					</div></div></div>
	       						";
	       						if($inc == 4) echo "</div>";
						    }
						    if($inc == 2) echo "<div class='col-sm-1'></div><div class='col-sm-1'></div>"; 
							if($inc == 2) echo "<div class='col-sm-2'></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
	    </div>
	  </div>
	 
<!----------------------------------------------=========================most viewed for phones=================------------------>

<div class="hidder-desktop">
<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box graa">Top viewed today<i class="flaticon-clocks" aria-hidden="true"></i></h3>
				
			<div style="width:100%;" class='wrap-products style-nav-4 '>
	                 
					<?php
		       			$now = date('Y-m-d');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
						   $stmt->execute(['now'=>$now]);
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/00000.png';
						    	$inc = ($inc == 0) ? 1 : $inc + 0;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
								 <div class='list-grid'>
								 <div class=''> 
								
								<div style='width:100%' class='product product-style-2 equal-elem '>
						<div class='product-thumnail'>
							<a href='Item?product=".$row['slug']."' title='".$row['name']."'>
								<figure><img class='thumbnail booi da' src='".$image."' width='100%' onerror='this.src='images/noimage.jpg'' alt='".$row['name']."'></figure>
							</a>
							<div class='group-flash'>
								<span class='flash-item bestseller-label'>".$row['p_off']."% OFF</span>
							</div>
							
							<div class='wrap-btn' style='width:100%'>
								<a href='Item?product=".$row['slug']."' class='function-link '>view</a>
							</div>
							
						</div>
						<div id='review'>
						<div class='box-footer'>
						<div class='product-info'>
							<a href='Item?product=".$row['slug']."' class='product-name'><span class='ba'>".$row['name']."</span></a>
							<div class='wrap-price '><span style='font-size:1.25rem' class='product-price ba'>Kshs.".number_format($row['price'], 2)."</span></div>
							</div>
						</div>
					</div>
					</div></div></div>
	       						";
	       						if($inc == 4) echo "</div>";
						    }
						    if($inc == 2) echo "<div class='col-sm-1'></div><div class='col-sm-1'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-2'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
	    </div>
	  </div>
	 </div>
</div>	
		 <!---rating end------->
	      </section>
	   
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'templates/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>

<script>
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script>

</body>
</html>