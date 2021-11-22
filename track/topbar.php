<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
           </li>
        <li>
        <a class="nav-link text-white"  href="./" role="button"> <large><b>Tsavo Package Tracker</b></large></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
     
      
    </ul>
  </nav>
  <!-- /.navbar -->
  <script>
     $('#manage_account').click(function(){
        uni_modal('Manage Account','manage_user.php?id=<?php echo $_SESSION['login_id'] ?>')
      })
  </script>
