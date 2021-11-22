
<header class="main-header">
<link rel="stylesheet" type="text/css" href="includes/font/flaticon.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'includes/menu.php'; ?>
	  <!------second part ------------->
	  
 <div class="navbar-custom-menu"  style="font-family: 'Finger Paint';">
        <ul class="nav navbar-nav">
		<!----================================wishlist======================------>
		<li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="flaticon-like-1" style="color:red"></i>
              <span class="label label-success wishlist_count"></span>
            </a>
            <ul class="dropdown-menu jumbotron">
              <li style="text-align:center; background-color:#898989"  class="menu">You have <span class="wishlist_count"></span> item(s) in the wishlist</li>
              <li>
                <ul class="menu" id="wishlist_menu">
                </ul>
              </li>
              <li class="footer"><a href="MyWishlist">Go to Wishlist</a></li>
            </ul>
          </li>
		<!---======================cart==========================---->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="flaticon-shopping-cart"></i>
              <span class="label label-success cart_count"></span>
            </a>
            <ul class="dropdown-menu jumbotron">
              <li style="text-align:center; background-color:#898989"  class="menu">You have <span class="cart_count"></span> item(s) in cart</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
              </li>
              <li class="footer"><a href="MyCart">Go to Cart</a></li>
            </ul>
          </li>
          <?php
            if(isset($_SESSION['user'])){
                $bg = "background-image:url('https://cdn.wallpapersafari.com/76/39/hLfVjO.jpg'); background-size:100%";
              $image = (!empty($user['photo'])) ? 'tsavo_system/users/'.$user['photo'] : 'tsavo_system/users/profile.jpg';
              echo '
			  <!----================================message======================------>
		<li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="flaticon-mail-inbox-app" style="color:#7A04C8"></i>
              <span class="label label-success message_count"></span>
            </a>
            <ul class="dropdown-menu jumbotron">
              <li style="text-align:center; background-color:#898989"  class="menu">You have <span class="message_count"></span> messages</li>
              <li>
                <ul class="menu" id="message_menu">
                </ul>
              </li>
              <li class="footer"><a href="MyMessages">View your messages</a></li>
            </ul>
          </li>
             	  <!---================profile==============----------->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="'.$image.'" class="user-image" alt="User Image">
                    <span style="color:black" class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                  <ul style="'.$bg.'" class="dropdown-menu jumbotron">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="'.$image.'" class="img-rounded" alt="User Image">

                      <p style="color:black">
                        '.$user['firstname'].' '.$user['lastname'].'
                        <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
                      </p>
                    </li>
        <li class="user-footer">
                      <div class="pull-left">
                        <a href="MyProfile" class="btn btn-tsavo btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-tsavo btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
            }
            else{
              echo "
                <li><a href='Welcome'>LOGIN</a></li>
                <li><a href='NewAccount'>SIGNUP</a></li>
              ";
            }
          ?>
        </ul>
      </div>
    </div>
  </div>
  
</header>