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
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">All reviews</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
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
	<?php
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM item_rating LEFT JOIN products ON item_rating.itemId=products.slug WHERE  supp_id=:review");
		$stmt->execute(['review'=>$vendor['shop_id']]);
		$reviews = $stmt->fetch();
		
		
										
		
	?>
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                         <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Update my products' info.</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
											<th></th>
                                                <th>Name</th>
                                                <th>Product Code</th>
                                                <th>Reviews</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
										 <tbody>
									<?php
		$stmt1 = $conn->prepare("SELECT * FROM products WHERE  supp_id=:prod");
		$stmt1->execute(['prod'=>$vendor['shop_id']]);
		foreach($stmt1 as $row){
		$stmt1 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM item_rating WHERE itemId=:review");
		$stmt1->execute(['review'=>$row['slug']]);
		$reviews = $stmt1->fetch();
		  echo '
	
									<tr>
									           <td><img src="../../tsavo_vendor/images/'.$row['photo'].'" width="50px" /></td>
                                                <td>'.$row['name'].'</td>
                                                <td>'.$row['slug'].'</td>
                                                <td>'.$reviews['numrows'].'</td>
                                                <td>
												<form method="post" action="reviews.php">
	                                            <input type="hidden" name="slug" value="'.$row['slug'].'" />
												<input type="hidden" name="name" value="'.$row['name'].'" />
	                                            <button class="btn btn-outline-success" type="submit" name="review">
												Read Reviews
												</button>
												</form>
												</td>
                                                
                                            </tr>
											<!-- Button trigger modal -->
<!-- Modal -->

												';
											}
									   ?>
										</tbody>
                                        
                                    </table>
                                </div>

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
     <?php include 'includes/scripts.php'; ?>

</body>

</html>