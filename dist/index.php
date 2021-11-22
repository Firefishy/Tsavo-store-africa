<?php
include('../dbconn.php');
?>
<body class="hold-transition skin-blue layout-top-nav" style="background-color:#CDA4FF; width:100%">
  
	<?php include 'prod3.php'; ?>
	<div  class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box gra">Just Sold <i class="fa fa-line-chart" aria-hidden="true"></i></h3>
				<div class="wrap-countdown mercado-countdown" data-expire="2021/12/12 12:34:56"></div>
			<div <?php
		       			$month = date('m');
		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 8");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? '../tsavo_vendor/images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 0) ? 1 : $inc + 0;
								
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							 <div class='col-sm-3'> 
								
								<div style='width:100%' class='product product-style-2 equal-elem '>
						<div class='product-thumnail'>
							<a href='product.php?product=".$row['slug']."' title='".$row['name']."'>
								<figure><img class='thumbnail booi' src='".$image."' width='100%' onerror='this.src='images/noimage.jpg'' alt='".$row['name']."'></figure>
							</a>
							<div class='group-flash'>
								<span class='flash-item sale-label'>".$row['p_off']."% OFF</span>
							</div>
							<div class='wrap-btn'>
								<a href='product.php?product=".$row['slug']."' class='function-link'>quick view</a>
							</div>
						</div>
						<div class='box-footer'>
						<div class='product-info'>
							<a href='product.php?product=".$row['slug']."' class='product-name'><span class='ba'>".$row['name']."</span></a>
							<div class='wrap-price'><span class='product-price'>Kshs.".number_format($row['price'], 2)."</span></div>
							</div>
						
					</div>
					</div></div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 