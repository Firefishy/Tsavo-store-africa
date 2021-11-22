<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/style.php'; ?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include 'includes/header.php';?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
         <?php include 'includes/sidebar.php';?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
			<?php
			$conn = $pdo->open();
			 
			$stmtt = $conn->prepare("SELECT *,COUNT(*) AS numrows FROM details LEFT JOIN products ON products.id=details.product_id WHERE details.id=:id");
			$stmtt->execute(['id'=>$_GET['id']]);
			$auth = $stmtt->fetch();
			if($auth['numrows'] > 0){
			$pass = $_GET['id'];
			}
			else{
header('location: index.php');

			}
			
			
			$stmt = $conn->prepare("SELECT *, details.price AS detpr FROM details LEFT JOIN products ON products.id=details.product_id WHERE details.id=:id");
			$stmt->execute(['id'=>$pass]);
			$order = $stmt->fetch();
			
			$stmt = $conn->prepare("UPDATE details SET recipient_id=1 WHERE id=:id");
			$stmt->execute(['id'=>$pass]);
			
			
			$stmt1 = $conn->prepare("SELECT *, COUNT(*) AS meme FROM confirm_order WHERE details_id=:det");
			$stmt1->execute(['det'=>$pass]);
			$coss = $stmt1->Fetch();
			
			if($coss['meme'] > 0){
			$conf_b = '<span class="badge rounded-pill bg-success">Order was confirmed on <b>'.$coss['time'].'</b></span>';
			$subber = '
			<button style="width:100%" class="btn btn-lg btn-outline-primary"  id="ts-primary" disabled="disabled">Order Confirmed</button>
								</form>
											<hr />
                                <a style="width:100%" type="button" href="" class="btn btn-lg btn-outline-success"
                                            id="ts-success">Print Shipping Form</a>
			';
			}
			else{
			$conf_b = '<span class="badge rounded-pill bg-warning">Order not confirmed!</span>';
			$subber = '
			<button style="width:100%" type="submit" class="btn btn-lg btn-outline-primary" name="confirma" value="1"  id="ts-primary">Confirm Order</button>
								</form>
											<hr />
                                <a style="width:100%" type="button" class="btn btn-lg btn-outline-success"
                                            id="ts-success">Confirm order to Print</a>
			';
			}
			?>
            <div class="page-breadcrumb">
                <div class="row">
				<?php echo $conf_b; ?>
                    <div class="col-12 d-flex no-block align-items-center">
					
					<br />
                        <h4 class="page-title"><?php echo $order['name']; ?></h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
			<?php
			$conn = $pdo->open();
			$stmt = $conn->prepare("SELECT * FROM sales LEFT JOIN details ON sales.id=details.sales_id WHERE details.id=:id");
			$stmt->execute(['id'=>$_GET['id']]);
			$receipt = $stmt->fetch();
			?>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
				<?php
      if(isset($_SESSION['error'])){
        echo "
           <div class='alert alert-danger' role='alert'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='alert alert-primary' role='alert'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Transaction Information</h5>
                                
                                <h6 style="text-align:center;"><b>Order Number</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $receipt['pay_id']; ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Order made on:</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['date_created']; ?></b>
								<hr />
								<?php
								if($receipt['approval'] == 'Not Approved'){
								$app_co = '#E20000';
								$app_me = '<span class="badge bg-danger">Order not yet Approved for processing!</span>';
								}
								else{
								$app_co = '#0062E2';
								$app_me = '<span class="badge bg-primary">Order ready for processing :)</span>';
								}
								?>
								<h6 style="text-align:center;"><b>Approval Status</b></h6>
								<?php echo $app_me; ?>
								<br />
								<b style="text-align:center; color:<?php echo $app_co; ?>"><?php echo $receipt['approval']; ?></b>
								
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Order Information</h5>
                                 
                                <h6 style="text-align:center;"><b>Variant Chosen</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['variation']; ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Quantity</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['quantity']; ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Pic Up Station (PUS)</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['pus']; ?></b>
								
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Product Photo</h5>
                                <img src="../../tsavo_vendor/images/<?php echo $order['photo']; ?>" width="100%" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Product Information</h5>
                                <h6 style="text-align:center;"><b>Product Name</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['name']; ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Product Slug</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['slug']; ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Price</b></h6>
								<b style="text-align:center; color:#DB00E2">Kshs. <?php echo number_format($order['detpr'], 0); ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Product SKU</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['seller_sku']; ?></b>
							</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Buyer Information</h5>
                                <h6 style="text-align:center;"><b>Name</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['recipient_fname']; ?> <?php echo $order['recipient_lname']; ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Contact</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['recipient_contact']; ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Email</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['recipient_email']; ?></b>
								<hr />
								<h6 style="text-align:center;"><b>Address</b></h6>
								<b style="text-align:center; color:#DB00E2"><?php echo $order['recipient_address']; ?><?php echo $receipt['user_id']; ?></b>
								
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Process Order</h5>
								<form method="post" action="order_confirm.php">
								<input type="hidden" name="product_id" value="<?php echo $order['product_id']; ?>" />
								<input type="hidden" name="sales_id" value="<?php echo $order['sales_id']; ?>" />
								<input type="hidden" name="buyer_id" value="<?php echo $order['recipient_email']; ?>" />
								<input type="hidden" name="details_id" value="<?php echo $_GET['id']; ?>" />
								
								<?php echo $subber; ?>
								<hr/>
								<button style="width:100%" class="btn btn-outline-info" onClick="window.print()">Print</button>
								
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include 'includes/scripts.php'; ?>
</body>

</html>