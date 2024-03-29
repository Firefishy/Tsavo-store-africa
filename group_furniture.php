<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
 <link href = "dist/css/jquery-ui.css" rel = "stylesheet">
 
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<div style="width:100%" class="row"><?php include 'includes/navbar2.php'; ?></div>
   <div class="">
	    <div class="">
<style>
 .elegantshadow {  color: #131313;  background-color: #e7e5e4;  letter-spacing: 0.15em;  text-shadow: 1px -1px 0 #767676, -2px -4px 1px #828181, ;  text-align: center;  text-transform: uppercase;  text-rendering: optimizeLegibility;  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;   font-size: calc(1.5vw + 1.5vh + .6.vmin);   padding: 20px 10px;   width:100%;}

</style>
   <!-- Main content -->
	      <section class="">
	        <div class="">
	        	<div class="col-sm-12">
				
		            <h1  style="border:solid;border-color:#E200E2; margin:3px; margin-left:3px; margin-right:3px" class="page-header elegantshadow">Furniture</h1>
		   
		   <?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = '256' OR category_id = '145' ORDER BY RAND()");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 2) ? 1 : $inc + 0;
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
	       						if($inc == 5) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
		   
				
				<br />
                
				
	        	</div>
		
	        	</div>
	        </div>
	      </section>
	   
	    </div>
	  </div>
 
  	<?php include 'templates/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
 <script src="dist/jquery-ui.js"></script>
</html>