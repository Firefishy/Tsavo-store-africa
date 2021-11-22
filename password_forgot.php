<?php include 'includes/session.php'; ?>
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
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body"  style="border-radius:8px">
    	<p class="login-box-msg" style="border-radius:7px;font-family: 'Trebuchet MS', sans-serif;">Enter your email address</p>

    	<form action="reset.php" method="POST">
      		<div class="form-group has-feedback">
        		<input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
      		<div class="row">
    			<div class="col-sm-12">
          			<button type="submit" class="btn btn-primary" style="width:100%" name="reset">Reset</button>
        		</div>
      		</div>
    	</form>
      <hr/>
      <a href="Welcome" style="border-radius:7px;font-family: 'Trebuchet MS', sans-serif;">I have remembered my password</a><br>
     </div>
	
</div>
	<div class="col-sm-4"></div>
       	<div class="col-sm-4" style="margin-bottom:5px;">
<a href="TsavoHome" class="btn btn-success" style="font-family: 'Trebuchet MS', sans-serif; width:100%"> Home</a>
</div>
<?php include 'includes/scripts.php' ?>
</body>
</html>