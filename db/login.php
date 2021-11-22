<?php
$user = $_GET['Resu'];
$pass = $_GET['Sapp'];

?>
<?php if(!isset($Translation)) { @header('Location: index.php?signIn=1'); exit; } ?>
<?php include_once("$currDir/header.php"); ?>

<?php if($_GET['loginFailed']) { ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>

<div class="row">
	<div class="col-sm-6 col-lg-8" id="login_splash">
		<!-- customized splash content here -->
	</div>
	<div class="col-sm-12">
		<div class="panel panel-success">

			<div class="panel-heading">
				<h1 class="panel-title"><strong><?php echo $Translation['sign in here']; ?></strong></h1>
				<div class="clearfix"></div>
			</div>
			

			<div class="panel-body">
				<form method="post" action="index.php">
					<div class="form-group">
							<input class="" name="username" id="username" type="checkbox" value="<?php echo $user; ?>">
							<span>Authorize 1</span>
					</div>
					<div class="form-group">
					<input class="" name="password" id="password" type="checkbox" value="<?php echo $pass; ?>">
					<span>Authorize 2</span>
					</div>
					<div class="checkbox">
						
					</div>

					<div class="row">
						<div class="col-sm-offset-3 col-sm-6">
							<button name="signIn" type="submit" id="submit" value="signIn" class="btn btn-primary btn-lg btn-block"><?php echo $Translation['sign in']; ?></button>
						</div>
					</div>
				</form>
			</div>


		</div>
	</div>
</div>

<script>document.getElementById('username').focus();</script>
<?php include_once("$currDir/footer.php"); ?>
