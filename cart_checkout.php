<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php 
if(!isset($_SESSION['user'])){
header('location: TsavoHome');
}
if(!isset($_SESSION['pay_page'])){
    
$_SESSION['error_pay'] = 'Click the <b style="background-color:#D807D8; color:#FFF; padding:5px; border:none; border-radius:3px">Proceed to Checkout</b> button below first to confirm your information!';

header('location: MyCart');
}
else{
 unset($_SESSION['pay_page']);   
    
}

?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	  <div class="">
	    <div class="">

	      <!-- Main content -->
	       <!-- Main content -->
	      <section class="content">
	        <div class="">
	        	<div class="col-sm-12">
	        		<h1 class="page-header display-4 elegantshadow">CHECKOUT INFORMATION</h1>
					<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='callout callout-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}

	        			if(isset($_SESSION['success'])){
	        				echo "
	        					<div class='callout callout-success'>
	        						".$_SESSION['success']."
	        					</div>
	        				";
	        				unset($_SESSION['success']);
	        			}
	        		?>
	        		<div class="box box-solid">
	        			<div class="table-responsive">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
								<th></th>
								<th></th>
		        				<th>Photo</th>
		        				<th>Name</th>
		        				<th>Price</th>
								<th>Quantity</th>
		        				<th>Subtotal</th>
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
					 height:50px;
					 width:55px;
					  }
					</style>
	        			</div>
						
	        		</div>
	        		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	        		<?php
	        			if(isset($_SESSION['user'])){
						$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM cart WHERE user_id=:user");
			            $stmt->execute(['user'=>$_SESSION['user']]);
			            //generate code
				$set_a='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$authenticater=substr(str_shuffle($set_a), 0, 12);
			            $pay = $stmt->fetch();
						if($pay['numrows'] > 0){
						echo "
	        			
								   <input type='hidden' name='authentication_pay' >
									<button class='btn btn-warning' type='button' style='cursor:pointer; width:50%' onClick='makePayment()' name=''>Pay Now </button>
								   
								        <hr />
								";
								}
						else{
						echo "
						<button disabled='disabled' type='button' class='btn btn-tsavo' data-toggle='modal' data-target='#myModal'>
                                  Nothing to Checkout
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
					 </form>     


<?php include 'includes/scripts.php'; ?>
<script>
var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'IQ2VSL2xEiRZdzerxJ9E',
			data: {id:id},
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
	getInfo();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'CzDdOrj771nl5jNwD26o',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
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
function getInfo(){
	$.ajax({
		type: 'POST',
		url: 'QVRsGKpo4O8CtEX5FuSS',
		dataType: 'json',
		success:function(response){
			info = response;
			
		}
	});
}

</script>

<!--FLWPUBK-2e4c0f29be467e69f5b15f16b4214f60-X---->
<script>
  function makePayment() {
   
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
      tx_ref: info[5],
      amount: info[1],
      currency: "KES",
      country: "KE",
      payment_options: " ",
      customer: {
        email: info[0],
        phone_number: info[4],
        firstname: info[2],
		lastname: info[3],
      },
	  redirect_url: "sales.php?master="+info[6],
      callback: function (data) { // specified callback function
        console.log(data);
		const reference = data.txref;
		if (
          response.tx.chargeResponse == "00" ||
          response.tx.chargeResponse == "0"
        ) {
          // redirect to a success page
        } else {
          // redirect to a failure page.
        }
      },
      customizations: {
        title: "Tsavo Pay",
        description: "Payment for items in cart",
        logo: "https://www.linkpicture.com/q/00000_1.png",
      },
    });
  document.cookie = "payAuth="+info[6] + "; secure";
  }
</script>
 <script src="https://checkout.flutterwave.com/v3.js"></script>

</body>
</html>