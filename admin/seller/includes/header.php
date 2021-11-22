
<?php include 'includes/session.php'; ?>
<?php
if(!isset($_SESSION['vendor'])){
header('location: form-wizard_login.php');
}

?>
<header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="includes/1.png" width="180px" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                          

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="includes/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
						<?php
						$conn = $pdo->open();
						$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM details LEFT JOIN products ON details.product_id=products.id WHERE recipient_id=1 AND supp_id=:order");
						$stmt->execute(['order'=>$vendor['shop_id']]);
						$processed = $stmt->fetch();
						
						?>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
						<?php
						$conn = $pdo->open();
						$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM details LEFT JOIN products ON details.product_id=products.id WHERE recipient_id=0 AND supp_id=:order");
						$stmt->execute(['order'=>$vendor['shop_id']]);
						$unprocessed = $stmt->fetch();
						
						?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="font-24 mdi mdi-cart-plus"></i><small class="badge rounded-pill bg-primary"><?php echo $unprocessed['numrows'];?></small>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
										<?php
						$conn = $pdo->open();
						$stmt = $conn->prepare("SELECT * FROM products LEFT JOIN details ON details.product_id=products.id WHERE supp_id=:order AND recipient_id=0 ORDER BY date_created DESC LIMIT 10");
						$stmt->execute(['order'=>$vendor['shop_id']]);
						foreach($stmt as $row){
						$timer_a = strtotime($row['date_created']);
						$timer_b = strtotime(date("Y-m-d h:i:s"));
						$timer = ($timer_b - $timer_a)/60/60/24;
						if($timer < 1){
						$span = '<span class="btn btn-primary btn-circle"><i class="fas fa-trophy"></i></span>';
						$badge = '<span style="width:100%" class="badge bg-primary">New order</span>';
						}
						elseif($timer < 3){
						$span = '<span class="btn btn-warning btn-circle"><i class="fas fa-sun"></i></span>';
						$badge = '<span style="width:100%" class="badge bg-warning">Unprocessed</span>';
						}
						else{
						$span = '<span class="btn btn-danger btn-circle"><i class="fas fa-exclamation-triangle"></i></span>';
						$badge = '<span style="width:100%" class="badge bg-danger">Very Late!</span>';
						}
						echo '
						<a style=" border-bottom-color:#00A6E2" href="order.php?id='.$row['id'].'" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    '.$span.'
                                                <div class="ms-2">
                                             <h5 style="color:#DB00E2" class="mb-0">'.$row['product_name'].'</h5>
											 <br />
											 <h6 class="mb-0">'.$row['slug'].'</h6>
                                         <span class="mail-desc">'.$row['date_created'].'</span>
										 '.$badge.'
                                     </div>
                               </div>
                        </a>
						
						';
						}
				
						?>
                                            <!-- Message -->
                                            
                                            <!-- Message -->
                                            
                                            <!-- Message -->
                                            
                                            <!-- Message -->
                                            
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               
								<img src="<?php echo (!empty($vendor['photo'])) ? '../../tsavo_vendor/images/'.$vendor['photo'] : '../../tsavo_vendor/images/profile.jpg'; ?>" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <b><a class="dropdown-item" style="color:#FF0FFB; text-align:center;" href="javascript:void(0)">
                                    <?php echo $vendor['supp_name']; ?></a></b>
                                <div class="dropdown-divider"></div>
								
								
                                <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Profiler"><i
                                        class="ti-settings me-1 ms-1"></i> Account Setting</a>
										
										
									<!-- Button trigger modal -->

										
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white" data-bs-toggle="modal" data-bs-target="#Profiler_viewer">View Profile</a></div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
			
        </header>
		<!-- Modal -->
<div class="modal fade" id="Profiler" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Account settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="account_setting.php">
		<label class="form-label">Vendor's name</label>
		<input type="text" class="form-control" name="name" value="<?php echo $vendor['supp_name']; ?>" />
		<label class="form-label">Store Name</label>
		<input type="text" class="form-control" name="shop" value="<?php echo $vendor['name']; ?>" />
		<label class="form-label">Vendor's email</label>
		<input type="email" class="form-control" name="email" value="<?php echo $vendor['email']; ?>" />
		<label class="form-label">Vendor's contact</label>
		<input type="text" class="form-control" name="contact" value="<?php echo $vendor['supp_contact']; ?>" />
		<label class="form-label">Vendor's address</label>
		<input type="text" class="form-control" name="address" value="<?php echo $vendor['address']; ?>" />
		<label class="form-label">Vendor's password</label>
		<input type="password" class="form-control" name="password" value="<?php echo $vendor['field1']; ?>" />
		</div>
      <div class="modal-footer">
	   <input type="hidden" name="id" value="<?php echo $vendor['id']; ?>" />
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="profile" class="btn btn-primary">Save</button>
		</form>
      </div>
    </div>
  </div>
</div>	
<script>
$('input').on('input', function() {
  var c = this.selectionStart,
      r = /[^a-z0-9]/gi,
      v = $(this).val();
  if(r.test(v)) {
    $(this).val(v.replace(r, ''));
    c--;
  }
  this.setSelectionRange(c, c);
});
</script>
<div class="modal fade" id="Profiler_viewer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">My account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
		<div class="card">
		<div class="card-body">
		<img src="../../tsavo_vendor/images/<?php echo $vendor['photo']; ?>" width="25%" style="margin-left:35%" />
		</div>
		</div>
		<hr />
		<div class="row">
		<div class="card">
		<div class="card-body" style="text-align:center;">
		 <h3 class="mb-0">Store name</h3>
		 <p style="color:#FF0FFB"><?php echo $vendor['name']; ?></p>
		 <h3 class="mb-0">Registered on:</h3>
		 <p style="color:#FF0FFB"><?php echo $vendor['created_on']; ?></p>
		</div>
		</div></div>
		
		
		
		
      </div>
	  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
       
    </div>
  </div>
</div>