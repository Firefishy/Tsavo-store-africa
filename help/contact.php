<?php session_start()?>
<!doctype html>
<html style="font-family: 'Quicksand', sans-serif;" lang="en">
	<head>
	    <!-----icon-------->
	 <link rel="shortcut icon" href="../tsavo_vendor/images/icon.png" type="images/x-icon" />
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Tsavo Contact Center</title>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<?php include '../includes/navbar.php'; ?>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap');

* {
  box-sizing: border-box;
  
}

.full-screen-container {
  background-image: url('https://www.wallpapertip.com/wmimgs/200-2009039_mountain-wallpaper-1920x1080.jpg');
  height: 100%;
  width: 100%;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
}

.login-container {
  background-color: hsla(201, 100%, 6%, 0.6);
  padding: 50px 30px;
  
  width: 100%;
  max-width: 600px;
}

.login-title {
  color: #fff;
  text-align: center;
  margin: 0;
  margin-bottom: 40px;
  font-size: 2.5em;
  font-weight: normal;
}

.input-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.input-group label {
  color: #fff;
  font-weight: lighter;
  font-size: 1.5em;
  margin-bottom: 7px;
}

.input-group input {
  font-size: 1.5em;
  padding: 0.1em 0.25em;
  background-color: hsla(201, 100%, 91%, 0.3);
  border: 1px solid hsl(201, 100%, 6%);
  outline: none;
  border-radius: 5px;
  color: #fff;
  font-weight: lighter;
}

.input-group input:focus {
  border: 1px solid hsl(201, 100%, 50%);
}

.login-button {
  padding: 10px 30px;
  width: 100%;
  border-radius: 5px;
  background: hsla(201, 100%, 50%, 0.1);
  border: 1px solid hsl(201, 100%, 50%);
  outline: none;
  font-size: 1.5em;
  color: #fff;
  font-weight: lighter;
  margin-top: 20px;
  cursor: pointer;
}

.login-button:hover {
  background-color: hsla(201, 100%, 50%, 0.3);
}

.login-button:focus {
  background-color: hsla(201, 100%, 50%, 0.5);
}
.mainer{
    border-radius:8px;
    border:solid;
    border-color:#E400EC;
}
</style>
<section class="content">
	        <div style="width:100%" class="row">
	        	<div class="col-sm-12">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://tsavo.store" style="padding-left:70px">Tsavo Contact center<br />
			<img src="../images/1.png" width="150px"></a>
		
	</nav>
	<div class="container full-screen-container">
	<div class="col-md-12 well login-container">
		<h2 class="text-info login-title">Write to us</h2>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="">
		<div class="col-sm-12">
			<form method="POST" action="send_email.php">
				<div class="input-group">
					<label class="control-label">Email:</label>
					<input type="email" class="" name="email" required="required"/>
				</div>
				<div class="input-group">
					<label class="control-label">Subject</label>
					<input type="text" class="" name="subject" required="required"/>
				</div>
				<div class="input-group">
					<label class="control-label">Message</label>
					<input type="text" class="" name="message" required="required"/>
				</div>
				<center><button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button></center>
			</form>
			<br />
			<?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
			</div>
		</div>
	</div>
	
	</div>
		
		</div>
		</div>
		
	      </section>
	      <hr/>
	      
<?php include '../includes/scripts.php'; ?>

</body>
<div style="margin-top:100px" class="">
<?php include 'footer.php'; ?>
	</div>
</html>