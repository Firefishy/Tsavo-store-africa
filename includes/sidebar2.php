<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
		<button class="btn btn-warning" style="width:100%">
		<i class="fa fa-money" aria-hidden="true" style="margin-right:20px">
		</i><b>Sell on</b> <img src="includes/images/tsavo1.png" width="30%" height="auto">
		         </button>
		</div>
		</div>
		</div>
		<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
		<button class="btn btn-danger" style="width:100%">
		<i class="fa fa-odnoklassniki" aria-hidden="true" style="margin-right:20px">
		</i><b>Hiring</b> <img src="includes/images/tsavo1.png" width="30%" height="auto">
		         </button>
		</div>
		</div>
		</div>
<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 5");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
				$image = (!empty($row['photo'])) ? '../tsavo_vendor/images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						
	  						echo 
							"
							
							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail booo'>
		       									<h5><a href='Item?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								
											</div>
		       								<div class='box-footer'>
											<h5><b>Kshs. ".number_format($row['price'], 2)."</b></h5>
		       							     <h5><bp>Kshs. ".number_format($row['was'], 2)."</bp></h5>
												
		       								</div>
	       								</div>
										
	       							</div>
							";
							
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>


<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Help Center</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>Write to us for any enquiries and to receive help here</p>
	    	<a href="help/TsavoHome"class="btn btn-primary" style="width:100%">Help Center</a>

	  	</div>
	</div>
</div>

<iframe width="100%" height="auto" src="https://www.youtube.com/embed/wf4F2-9UXUo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
