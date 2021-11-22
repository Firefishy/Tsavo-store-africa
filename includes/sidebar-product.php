<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="">
			<div style="width:100%" class='wrap-products style-nav-4 '>
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 4");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
				$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/noimage.jpg';
						   		
	  						echo 
							"
							
							
								
								 <div class='list-grid-sidebar'>
								 
								<div style='width:100%' class='product product-style-2 equal-elem '>
						<div class='product-thumnail'>
							<a href='Item?product=".$row['slug']."' title='".$row['name']."'>
								<figure><img class='thumbnail booi da' src='".$image."' width='100%' onerror='this.src='images/noimage.jpg'' alt='".$row['name']."'></figure>
							</a>
							<div class='group-flash'>
								<span class='flash-item sale-label'>".$row['p_off']."% OFF</span>
							</div>
							
							<div class='wrap-btn'>
								<a href='Item?product=".$row['slug']."' class='function-link '>view</a>
							</div>
							
						</div>
						<div id='review'>
						<div class='box-footer'>
						<div class='product-info'>
							<a href='Item?product=".$row['slug']."' class='product-name'><span class='ba'>".$row['name']."</span></a>
							<div class='wrap-price '><span style='font-size:1.25rem' class='product-price ba'>Kshs.".number_format($row['price'], 2)."</span></div>
							 <div style='float:left' class='wrap-price'><small style='text-decoration:line-through;' class='product-price'>Kshs.".number_format($row['was'], 2)."</small></div>
						</div>
						</div>
					</div>
					</div></div>
							";
							
	  			}

	  			$pdo->close();
	  		?>
			</div>
			
	    	<ul>
	  	</div>
	</div>
</div>


</div>
