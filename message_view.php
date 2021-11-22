<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<?php include 'includes/navbar2.php'; ?>
 
 <?php
 if(!isset($_SESSION['user'])){
     
     header('location : TsavoHome');
 }
 ?>
	  <div class="">
	    <div class="">

	      <!-- Main content -->
	       <!-- Main content -->
	      <section class="content">
	        <div class="">
	        	<div class="col-sm-9">
	        		<h1 class="page-header elegantshadow">My Messages</h1>
	        		<div class="box box-solid">
	        			<div class="table-responsive">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
		        				
		        				<th>messages</th>
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
	        					<h4>You need to <a href='Welcome'>Login</a> to view the message.</h4>
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
	$(document).on('click', '.message_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'message_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getMessage();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'message_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getMessage();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		qty++;
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'message_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getmessage();
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
		url: 'message_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getMessage();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'message_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}
</script>

</body>
</html>