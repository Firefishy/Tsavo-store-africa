<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<?php include 'includes/navbar2.php'; ?>
 
	  <div class="">
	    <div class="">

	      <!-- Main content -->
	       <!-- Main content -->
	      <section class="content">
	        <div class="">
	        	<div class="col-sm-9">
				<?php
				if(isset($_SESSION['error_pay'])){
				echo "<div class='callout callout-warning'>".$_SESSION['error_pay']."</div> ";
				unset($_SESSION['error_pay']);
				}
				if(isset($_SESSION['error'])){
				echo "<div class='callout callout-danger'>".$_SESSION['error']."</div> ";
				unset($_SESSION['error']);
				}
				?>
	        		<h1 class="page-header elegantshadow">My cart</h1>
	        		<div class="box box-solid">
	        			<div class="table-responsive">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
		        				<th>Photo</th>
		        				<th>Name</th>
		        				<th>Price</th>
		        				<th width="20%">Quantity</th>
		        				<th>Subtotal</th>
		        			</thead>
							
		        			<tbody id="tbody2">
							
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
						$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM cart WHERE user_id=:user");
			            $stmt->execute(['user'=>$_SESSION['user']]);
			            $pay = $stmt->fetch();
						if($pay['numrows'] > 0){
						echo "
	        				
									<button type='button' class='btn btn-tsavo' data-toggle='modal' data-target='#myModal'>
                                  Proceed to Checkout
                                </button>
								<hr />
								";
								}
						else{
						echo "
						<button disabled='disabled' type='button' class='btn btn-tsavo' data-toggle='modal' data-target='#myModal'>
                                  Proceed to Checkout
                                </button>
								<hr />
								";
						
						    }
										
	        			}
						else{
	        				echo "
	        					<h4 class='well'>You need to <a href='Welcome' class='btn btn-tsavo'>Login</a> to checkout.</h4>
	        				";
	        			}
	        		?>
					<!------================================test========================---------------------->
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Confirm your delivery details</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
         <!-- Modal body -->
        <div class="modal-body">
          <!-- Edit Profile -->
      </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="profile_edit2.php" enctype="multipart/form-data">
			  <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>">
                    </div>
                </div>
                   <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact" pattern="[0-9]{9}" value="<?php echo $user['contact_info']; ?>">
                      	<small>Format: <b>740295282</b>. Do not include the zero.</small><br><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address"><?php echo $user['address']; ?></textarea>
                    </div>
					
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label"><!---===password=====----></label>

                    <div class="col-sm-9">
                      <input type="hidden" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>">
                    </div>
                </div>
                </div>
				<div class="form-group">
				<button type="button" class="btn btn-primary mx-auto" data-toggle="collapse" data-target="#demo">What is a zone?</button>
                <div id="demo" class="collapse">
                 A zone is a geographical area usually measured as per the difference between the Tsavo Headquarter location and your 
				 location. To know under what zone your location is click <mark><a href="zone.php">Here.</a></mark>
                </div></div>
				<div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Zone</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="cost" name="zone">
					  <option value="<?php echo $user['coupon_id']; ?>"><?php echo $user['zone']; ?></option>
					   <?php
                     $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM branches ORDER BY zonee ASC");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                       <option id='zone' value='".$row['id']."'>".$row['zonee']."--".$row['country']."</option>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }
				   $pdo->close();
				  ?>
			  	  </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Coupon/ Gift Card</label>
                    <div class="col-sm-9">
                     
                       <input class="form-control" id='discount' name='discount' type='text' id='worth' name='worth'>
                  
			  	  </select>
                    </div>
                </div>
	                <hr>
                
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Your Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-success btn-flat" name="edit2" data-toggle="modal" data-target="#myModal2"><i class="fa fa-check-square-o"></i> Checkout</button>
              </form>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button style="float:left;" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        </div>
        
      </div>
    </div>
  </div>
			<!--------=================================modal 2===============================================---------->
	
			<!----========================fin==============================================================--------->
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
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var idc = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'IQ2VSL2xEiRZdzerxJ9E',
			data: {idc:idc},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
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
			url: 'vkNROVMktga2L0JlVuKL',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		var quant = $('#quant_'+id).val();
		
		qty++;
		
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'vkNROVMktga2L0JlVuKL',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
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
		url: 'y3of28l36wNMYFzi0a8X',
		dataType: 'json',
		success: function(response){
			$('#tbody2').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'QVRsGKpo4O8CtEX5FuSS',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}
</script>

</body>
</html>