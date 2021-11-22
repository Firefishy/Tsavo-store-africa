<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="sales.php"><i class="fa fa-money"></i> <span>Sales</span></a></li>
      <li class="header">MANAGE</li>
      <li><a href="users.php"><i class="fa fa-users"></i> <span>Users</span></a></li>
      <?php
      $_SESSION['login_id'] = 1;
      ?>
      
	  <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>Products</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="products.php"><i class="fa fa-circle-o"></i> Product List</a></li>
          <li><a href="category.php"><i class="fa fa-circle-o"></i> Category</a></li>
        <li><a href="supplier.php"><i class="fa fa-handshake-o"></i>Suppliers</a></li>
		</ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Admin logs</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        
        <ul class="treeview-menu">
          <li><a href="../tsavo_system/index.php?signIn=1&Sapp=<?php echo $_SESSION['93bc35947ced4e17acd7220a6e3582ea52a53166f627486f8e997ae4453ecdd031d7b2b7efbe4f799dcad29cce69967d06e61b44380c44be989922fa52885a2ffd112335e77746398c77277f2b5b5783']; ?>&Resu=tsavo" target="_blank"><i class="fa fa-circle-o"></i> Tsavo system</a></li>
          <li><a href="../tsavo_profile/index.php?signIn=1&Sapp=<?php echo $_SESSION['93bc35947ced4e17acd7220a6e3582ea52a53166f627486f8e997ae4453ecdd031d7b2b7efbe4f799dcad29cce69967d06e61b44380c44be989922fa52885a2ffd112335e77746398c77277f2b5b5783']; ?>&Resu=tsavo" target="_blank"><i class="fa fa-circle-o"></i> Tsavo profile</a></li>
          <li><a href="../tsavo_vendor/index.php?signIn=1&Sapp=<?php echo $_SESSION['93bc35947ced4e17acd7220a6e3582ea52a53166f627486f8e997ae4453ecdd031d7b2b7efbe4f799dcad29cce69967d06e61b44380c44be989922fa52885a2ffd112335e77746398c77277f2b5b5783']; ?>&Resu=tsavo" target="_blank"><i class="fa fa-circle-o"></i> Tsavo vendors</a></li>
          <li><a href="../cms/index.php?page=home&signIn=93bc35947ced4e17acd7220a6e3582ea52a53166f627486f8e997ae4453ecdd031d7b2b7efbe4f799dcad29cce69967d06e61b44380c44be989922fa52885a2ffd112335e77746398c77277f2b5b5783" target="_blank"><i class="fa fa-circle-o"></i> Tsavo tracker</a></li>
        
		</ul>
      </li>
    <li class="header">Add Coupons</li>
       <li><a href="coup/index_coup.php"><i class="fa fa-tags"></i> <span>Coupons</span></a></li>
	 
	</ul>
  </section>
  <!-- /.sidebar -->
</aside>