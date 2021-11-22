<style>
.btn-tsavo{
background-color:#EC19FF;
color:#160016;

 }
.btn-tsavo:hover{
background-color:#8C009C;
color:#160016;
 }
</style>
<?php
		if(isset($vendor['identity_no'])){
		$final_reg = 'Update vendor information';
		$update = 'Update';
		$new_pic  = 'You have to re-select your logo again on your update!';
		$submit = 'Update now';
		$btn_update = '
		 <a href="profile_update.php" target="_blank" class="w-100 btn btn-tsavo d-flex align-items-center text-white"><i class="mdi mdi-account-convert font-20 me-2"></i>Update Store Info</a>
                       ';
			}
		else{
		$final_reg = 'Complete your registration details';
		$update = 'Registration';
		$submit = 'Complete Registration';
$btn_update = '
 <a href="profile_update.php" target="_blank" class="w-100 btn btn-cyan d-flex align-items-center text-white"><i class="mdi mdi-account-edit font-20 me-2"></i>Complete Registration</a>
 ';
		}
		?>
                       
<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="mdi mdi-store-24-hour"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
									
						
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="products_add.php" aria-expanded="false"><i class="mdi mdi-plus-box"></i><span
                                    class="hide-menu">Add Products</span></a></li>
									
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-update"></i><span
                                    class="hide-menu">Update product </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all_products_det.php" aria-expanded="false"><i class="mdi mdi-file-multiple"></i><span
                                    class="hide-menu">Update Details</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all_products_pic.php" aria-expanded="false"><i class="mdi mdi-image"></i><span
                                    class="hide-menu">Update Photo</span></a></li>
									
                            </ul>
                        </li>	
								
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="products_view.php" aria-expanded="false"><i class="mdi mdi-archive"></i><span
                                    class="hide-menu">Explore Catalog</span></a></li>
						
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all_orders.php" aria-expanded="false"><i class="mdi mdi-shopping"></i><span
                                    class="hide-menu">All Orders</span></a></li>
                        
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="stock.php" aria-expanded="false"><i class="mdi mdi-chart-scatterplot-hexbin"></i><span
                                    class="hide-menu">My Stock</span></a></li>
									
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all_reviews.php" aria-expanded="false"><i class="mdi mdi-account-star-variant"></i><span
                                    class="hide-menu">Reviews</span></a></li>
									
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="all_sales.php" aria-expanded="false"><i class="mdi mdi-chart-pie"></i><span
                                    class="hide-menu">Sales</span></a></li>
									
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Forms </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic
                                        </span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.php" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-buttons.html" aria-expanded="false"><i
                                    class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Icons </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                            class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons
                                        </span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome
                                            Icons </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                                    class="hide-menu">Elements</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i
                                            class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                            class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                                            class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                            class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i
                                            class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                                    class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a>
                                </li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span
                                    class="hide-menu">Errors </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403
                                        </span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404
                                        </span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405
                                        </span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item p-3">
                            <?php echo $btn_update; ?>
							</li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>