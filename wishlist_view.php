<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<?php
	$today = date('Y-m-d');
	 ?>
	<div style="width:100%" class="row"><?php include 'includes/navbar2.php'; ?></div>
 <div class="alert-info" style="background-color:#40FDF4; font-size:20px;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';" style="font-size:35px">&times;</span> 
  <strong>HELLO!!</strong> Here is today's date <b class="label label-success"><?php echo $today; ?></b><span style='font-size:25px;'>&#128578;</span>
</div>
	  <div class="">
	    <div class="">

	      <!-- Main content -->
	       <!-- Main content -->
	      <section class="content">
	        <div class="">
	        	<div class="col-sm-9">
	        		<h1 class="page-header elegantshadow">My Wishlist</h1>
	        		<div class="box box-solid">
	        			<div class="table-responsive">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
		        				<th>Photo</th>
		        				<th>Name</th>
		        				<th>Price</th>
		        				<th width="20%">Buy Now</th>
		        				
		        			</thead>
							
		        			<tbody id="tbody">
							
		        			</tbody>
							
		        		</table>
						
						<style>
					bp{
					color:red;
text-decoration:line-through;
font-family:Verdana;
					 }
					 .booo{
					 height:30px;
					  }
					</style>
	        			</div>
	        		</div>
	        		<?php
	        			if(isset($_SESSION['user'])){
	        				echo "
	        					<div id='paypal-button'></div>
	        				";
	        			}
	        			else{
	        				echo "
	        					<h4 class='well'>You need to <a href='Welcome' class='btn btn-tsavo'>Login</a> to view the wishlist.</h4>
	        				";
	        			}
	        		?>
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar-product.php'; ?>
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
var total = 0;
$(function(){
	$(document).on('click', '.wishlist_delete', function(e){
		e.preventDefault();
		var idw = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'wishlist_delete.php',
			data: {idw:idw},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getWishlist();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var idw = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+idw).val(qty);
		$.ajax({
			type: 'POST',
			url: 'wishlist_update.php',
			data: {
				idw: idw,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getWishlist();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var idw = $(this).data('id');
		var qty = $('#qty_'+idw).val();
		qty++;
		$('#qty_'+idw).val(qty);
		$.ajax({
			type: 'POST',
			url: 'wishlist_update.php',
			data: {
				idw: idw,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getWishlist();
					getTotal();
				}
			}
		});
	});

	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'wishlist_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getWishlist();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'wishlist_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}
</script>

</body>
</html>