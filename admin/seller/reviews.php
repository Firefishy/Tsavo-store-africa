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
                        <h4 class="page-title">Reviews and Ratings</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reviews & Ratings</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <?php
				if(isset($_POST['review'])){
				$slug = $_POST['slug'];
				$name = $_POST['name'];
				}
				else{
				$_SESSION['error'] = 'An unknown error has occurred.';
				header('location:index.php');
				}
				?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $name; ?></h4>
                            </div>
                            <div class="comment-widgets scrollable">
							<?php
							$conn = $pdo->open();
							
							$stmt1 = $conn->prepare("SELECT *,COUNT(*) as numrows FROM item_rating WHERE itemId=:id");
							$stmt1->execute(['id'=>$slug]);
							$rates = $stmt1->fetch();
							if($rates['numrows'] > 0){
							$stmt = $conn->prepare("SELECT * FROM item_rating LEFT JOIN users ON item_rating.userId=users.id WHERE itemId=:id");
							$stmt->execute(['id'=>$slug]);
							foreach($stmt as $row){
							echo '
							<!-- Comment Row -->
							<div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2"><img src="includes/assets/images/users/1.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h5 class="font-medium">'.$row['firstname'].'  '.$row['lastname'].'</h5>
										<h6 class="font-medium">'.$row['title'].'</h6>
                                        <span class="mb-3 d-block">'.$row['comments'].' </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">'.$row['created'].'</span>
                                            <button type="button" class="btn btn-cyan btn-sm text-white">Edit</button>
                                            <button type="button" class="btn btn-success btn-sm text-white">Publish</button>
                                            <button type="button" class="btn btn-danger btn-sm text-white">Delete</button>
                                        </div>
                                    </div>
                                </div>
							
                                <!-- Comment Row -->
                               
							';
							}
							}
							else{
							$now = date("Y-m-d");
							echo '
							
							<!-- Comment Row -->
							<div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2"><img src="includes/assets/images/users/1.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
									  <h5 class="font-medium">Your product has 0 reviews.</h5>
                                        <span class="mb-3 d-block">Your product <b style="color:#FF0FFB">'.$name.'</b> currently has zero reviews and ratings.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">'.$now.'</span>
                                            </div>
                                    </div>
                                </div>
							
                                <!-- Comment Row -->
							';
							}
							?>
                                
                                 
                                <!-- Comment Row -->
                                
                            </div>
                        </div>
                        <!-- Card -->
                        
                    </div>
                    
                </div>
                
                <!-- BEGIN MODAL -->
                
                <!-- Modal Add Category -->
                
                <!-- END MODAL -->

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