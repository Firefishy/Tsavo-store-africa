<?php include 'includes/session.php'; ?>
<?php
  if(!isset($_GET['code']) OR !isset($_GET['user'])){
    header('location: TsavoHome');
    exit(); 
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style="background-image: linear-gradient(to bottom right, #EA9100, #BB07EA);">
<img src="includes/images/tsavo.png" width="20%" height="auto"  style="margin-top:5%; margin-left:40%">

<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
    ?>
  	<div class="login-box-body" style="border-radius:8px">
    	<p class="login-box-msg" style="font-family: 'Trebuchet MS', sans-serif;">Enter new password</p>

    	<form action="password_new.php?code=<?php echo $_GET['code']; ?>&user=<?php echo $_GET['user']; ?>" method="POST">
      		<div class="form-group has-feedback">
        		<input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" type="password" class="form-control" name="password" placeholder="New password" required>
        	
      		</div>
          <div class="form-group has-feedback">
            <input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" type="password" class="form-control" name="repassword" placeholder="Re-type password" required>
           
          </div>
      		<div class="form-group">
    			<div class="">
          			<button type="submit" style="width:100%" class="btn btn-tsavo" name="reset">Save</button>
        		</div>
      		</div>
    	</form>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>