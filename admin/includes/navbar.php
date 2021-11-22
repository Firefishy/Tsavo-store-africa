<?php 

$_SESSION['93bc35947ced4e17acd7220a6e3582ea52a53166f627486f8e997ae4453ecdd031d7b2b7efbe4f799dcad29cce69967d06e61b44380c44be989922fa52885a2ffd112335e77746398c77277f2b5b5783'] = "c621705125724c61beb706e1cef2f7dc9f85ee108e9d420b9a61635e3d826cb096051bdc5f374f149577278687868b2e";

?>
<header class="main-header">
  <!-- Logo -->
  <a href="../tsavo_system/index.php?signIn=1&Sapp=<?php echo $_SESSION['93bc35947ced4e17acd7220a6e3582ea52a53166f627486f8e997ae4453ecdd031d7b2b7efbe4f799dcad29cce69967d06e61b44380c44be989922fa52885a2ffd112335e77746398c77277f2b5b5783']; ?>&Resu=tsavo" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="../pimages/icon.png" width="50px" height="auto" /></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="../images/1.png" width="100px" height="auto" /></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $admin['firstname'].' '.$admin['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $admin['firstname'].' '.$admin['lastname']; ?>
                <small>Admin since <?php echo date('M. Y', strtotime($admin['created_on'])); ?></small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>