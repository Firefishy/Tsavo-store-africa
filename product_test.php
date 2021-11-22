<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	$slug = $_GET['product'];

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

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper">
<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<?php include 'includes/navbar2.php'; ?>
 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
		            	<div class="col-sm-6">
		            		<img src="<?php echo (!empty($product['photo'])) ? 'tsavo_vendor/images/'.$product['photo'] : 'tsavo_vendor/images/noimage.jpg'; ?>" width="100%" class="zoom booo rounded" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
		            		<br><br>
		            		
		            	</div>
		            	<div class="col-sm-6 well">
						
		            		<h1 class="page-header"><?php echo $product['prodname']; ?></h1>
		            		<h3><b>Kshs. <?php echo number_format($product['price'], 2); ?></b></h3>
							<h3 style="text-decoration:line-through; color:grey">Kshs. <?php echo number_format($product['was'], 2); ?></h3>
							<p><b>Category:</b> <a href="category.php?category=<?php echo $product['cat_slug']; ?>"><?php echo $product['catname']; ?></a></p>
		            		<p><b>Brand:</b> <?php echo $product['brand']; ?></p>
							<p><b>Size:</b><?php echo $product['size']; ?></p>
							<p><b>Shipped from:</b><?php echo $product['ship_orig']; ?></p>
							
		            		<p>
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
<form class="form-inline" id="productForm">
		            			<div class="form-group">
			            			<div style="width:100%" class="input-group col-sm-5">
			            				
			            				<span class="input-group-btn">
			            					<button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            				</span>
							          	<input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
							            <span class="input-group-btn">
							                <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
							                </button>
							            </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
										<input type="hidden" value="<?php echo $product['prodname']; ?>" name="product_name">
										<input type="hidden" value="<?php echo $product['price']; ?>" name="price">
										<input type="hidden" value="<?php echo $product['weight']; ?>" name="weight">
										<input type="hidden" value="<?php echo $product['length']; ?>" name="length">
										<input type="hidden" value="<?php echo $product['width']; ?>" name="width">
										<input type="hidden" value="<?php echo $product['height']; ?>" name="height">
										
							        </div>
									
									
							<?php  $product['prod_qty'];?> 
                                    <?php
                                     if ($product['prod_qty']<=0){
                                      ?>
			            			<button style="width:100%" type="" class="btn btn-danger btn-lg btn-flat" disabled><i class="fa fa-shopping-cart"></i> Sold Out</button>
			            		<?php
                                 }else{
                                  ?>
								<button style="width:100%" type="submit" onclick="javascript: form.action='/submit';" class="btn btn-primary btn-lg btn-flat graa"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
			            		
								 
								 <?php 
								
                                 }?>
								 
								
								</div>
		            		</form>
							<form class="form-inline" id="productForme">
							<div class="form-group">
			            			<div class="input-group">
			            				
			            					<input type="hidden" name="quantity" id="quantity">
							            <span class="input-group-btn">
							               
							            </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
							        </div>
									</div>
									<?php  $product['prod_qty'];?> 
							
							<button style="width:100%" type="submit"  class="btn btn-basic btn-lg btn-flat"><i class="fa fa-heart" style="color:red"></i> Add to wishlist</button>
			            		
							</form>
							
		            	</div>
						
		            </div>
		            <br>
					<p><b>Description:</b></p>
		            		<p><?php echo $product['description']; ?></p>
							<div class="row jumbotron">
							<p><b>What is in the box:</b></p>
		            		<p><b class=""><?php echo $product['more_desc']; ?></b></p>
							</div>
					<br />
				    <div class="fb-comments" data-href="http://localhost/ecomm/Item?product=<?php echo $slug; ?>" data-numposts="10" content="100012736114566" width="100%"></div> 
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
					
	        	</div>
	        </div>
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