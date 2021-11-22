<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $_SESSION['filter']]);
		$cat = $stmt->fetch();
		$catid = $cat['id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>
<?php
$ordering = 'order';
//fetch_data.php
  $myob = "SELECT * FROM products WHERE category_id = :catid AND product_status = '1'";
  $myob1 = " ORDER BY was";
  
if(isset($_POST["action"]))

{
    
	$query = "
		SELECT * FROM products WHERE category_id = :catid AND product_status = '1'
	";
	
	
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		 ";
	}
	if(isset($_POST["minimum_perc"], $_POST["maximum_perc"]) && !empty($_POST["minimum_perc"]) && !empty($_POST["maximum_perc"]))
	{
		$query .= "
		 AND p_off BETWEEN '".$_POST["minimum_perc"]."' AND '".$_POST["maximum_perc"]."'
		 ";
	}
	
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND brand IN('".$brand_filter."')
		 ";
	}
	if(isset($_POST["ram"]))
	{
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "
		 AND ship_orig IN('".$ram_filter."')
		 ";
	}
	if(isset($_POST["storage"]))
	{
		$storage_filter = implode("','", $_POST["storage"]);
		$query .= "
		 AND material IN('".$storage_filter."')
		 ";
	}
	
	if($catid == $cat['id'])
    {
    
	$query .= "
		ORDER BY was ASC
	";
	}
   
   
	$statement = $connect->prepare($query);
	$statement->execute(['catid' => $catid]);
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= "
			 <div class='list-grid'>
								 <div class=''> 
								
								<div style='width:100%' class='product product-style-2 equal-elem '>
						<div class='product-thumnail'>
							<a href='Item?product=".$row['slug']."' title='".$row['name']."'>
								<figure><img class='thumbnail booi da' src='tsavo_vendor/images/".$row['photo']."' width='100%' onerror='this.src='images/noimage.jpg'' alt='".$row['name']."'></figure>
							</a>
							<div class='group-flash'>
								<span class='flash-item sale-label'>".$row['p_off']."% OFF</span>
							</div>
							
							<div class='wrap-btn' style='width:100%'>
								<a href='Item?product=".$row['slug']."' class='function-link' >view</a>
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
		}
	}
	else
	{
		$output = '
		<hr />
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<h3 style="text-align:center; width:100%; font-size:calc(1vw + 1vh + .5vmin); background-color:#FF2F4E" class="jumbotron">No Product Found</h3>
		<hr />
		<img src="pimages/safety-box.png" width="50%" style="margin-left:28%" />
		</div>
		<div class="col-sm-4"></div>
		';
	}
	echo $output;
}
?>