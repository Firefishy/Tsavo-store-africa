<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: MyCart');
  }
?>
<?php include 'includes/header.php'; ?>
<!---flaticons---->
	<link rel="stylesheet" type="text/css" href="includes/font/flaticon.css">
<body class="hold-transition login-page" style="background-image: linear-gradient(to bottom right, #EA9100, #BB07EA);">
<div class="header">
<img src="includes/images/tsavo.png" width="20%" height="auto"  style="margin-top:5%; margin-left:40%">
</div>
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
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body" style="border-radius:8px">
    	<p class="login-box-msg" style="border:none; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;">Sign in to your account</p>

    	<form action="verify.php" method="POST">
      		<div class="form-group has-feedback">
			
        		<input type="email" class="form-control well well-lg" name="email" placeholder="Email" required style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif; background-color:#FFE4FF">
        		<span class="form-control-feedback"><i class="flaticon-mail-inbox-app"></i></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control well well-lg" name="password" placeholder="Password" required style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF">
            <span class="form-control-feedback"><i class="flaticon-padlock"></i></span>
          </div>
      		<div class="row">
    			<div class="col-xs-12">
          			<button type="submit" class="btn btn-primary" style="width:100%" name="login"><i class="flaticon-login"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
      <hr/ >
      <a href="LostPassword" style="font-family: 'Trebuchet MS', sans-serif;">I forgot my password</a>
      <hr/>
      <a href="NewAccount" class="text-center" style="font-family: 'Trebuchet MS', sans-serif;">I dont have an account!</a><br>
       	</div>
     
       	

</div>
<br/>
	<div class="col-sm-4"></div>
       	<div class="col-sm-4" style="margin-bottom:5px;">
<a href="TsavoHome" class="btn btn-success" style="font-family: 'Trebuchet MS', sans-serif; width:100%"> Home</a>
</div>

<?php include 'includes/scripts.php' ?>
</body>
</html>