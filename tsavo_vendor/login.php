<?php if(!isset($Translation)) { @header('Location: index.php?signIn=1'); exit; } ?>
<?php include_once("$currDir/header.php"); ?>

<?php if($_GET['loginFailed']) { ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap');

* {
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
}

.full-screen-container {
  background-image: url('https://images.unsplash.com/photo-1573496782646-e8d943a4bdd1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80');
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
  min-width: 400px;
  width: 50%;
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
</style>
<div class="row">
	<div class="col-sm-6 col-lg-8" id="login_splash">
		<!-- customized splash content here -->
	</div>
	<div class="col-sm-12">
		<div class="panel panel-success" style="width:100%">

			<div class="panel-heading">
				<h1 class="panel-title"><strong><?php echo $Translation['sign in here']; ?></strong></h1>
				<?php if(sqlValue("select count(1) from membership_groups where allowSignup=1")) { ?>
					<a class="btn btn-info pull-right" href="membership_signup.php"><?php echo $Translation['sign up']; ?></a>
				<?php } ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

 <div class="full-screen-container">
      <div class="login-container">
          	<?php if(is_array(getTableList()) && count(getTableList())) { /* if anon. users can see any tables ... */ ?>
				<h5 style="color:#ea2bed;" class="login-title">
					<?php echo $Translation['browse as guest']; ?>
				</h5>
			<?php } ?>
        <h3 class="login-title">Welcome</h3>
        <form method="post" action="index.php">
          <div class="input-group">
            <label class="control-label" for="username"><?php echo $Translation['username']; ?></label>
			<input class="form-control" name="username" id="username" type="text" placeholder="<?php echo $Translation['username']; ?>" required>
		</div>
          <div class="input-group">
            <label>Password</label>
<input class="form-control" name="password" id="password" type="password" placeholder="<?php echo $Translation['password']; ?>" required>
<span class="help-block"><?php echo $Translation['forgot password']; ?></span>
		</div>
		<div class="checkbox">
			<label class="control-label" for="rememberMe">
				<input type="checkbox" name="rememberMe" id="rememberMe" value="1">
				<span style="color:#ea2bed;"><?php echo $Translation['remember me']; ?></span>
			</label>
		</div>
<button name="signIn" type="submit" id="submit" value="signIn" class="btn btn-primary btn-lg btn-block"><?php echo $Translation['sign in']; ?></button>
	</form>
      </div>
	  
		
    </div>

<script>document.getElementById('username').focus();</script>
<?php include_once("$currDir/footer.php"); ?>
