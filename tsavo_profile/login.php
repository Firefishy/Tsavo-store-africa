<?php
$user = $_GET['Resu'];
$pass = $_GET['Sapp'];

?>
<?php if(!isset($Translation)) { @header('Location: index.php?signIn=1'); exit; } ?>
<?php include_once("$currDir/header.php"); ?>

<?php if($_GET['loginFailed']) { ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>
<style>
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap");[class~=checkbox-tile],[class~=checkbox-group]{display:flex;}[class~=checkbox-group]{flex-wrap:wrap;}[class~=checkbox-group]{justify-content:center;}*:after,*:before{box-sizing:border-box;}[class~=checkbox-group]{width:90%;}[class~=checkbox-tile]:before{content:"";}[class~=checkbox-group]{margin-left:auto;}[class~=checkbox-tile]:before,[class~=checkbox-input]{position:absolute;}[class~=checkbox-group]{margin-right:auto;}[class~=checkbox-tile]:before{display:block;}[class~=checkbox-tile]:before{width:1.25rem;}[class~=checkbox-tile]:before{height:1.25rem;}[class~=checkbox-group]{max-width:6.25in;}[class~=checkbox-group] > *{margin-left:.5rem;}[class~=checkbox-tile]:before{border-left-width:1.5pt;}[class~=checkbox-group] > *{margin-bottom:.5rem;}[class~=checkbox-tile]:before{border-bottom-width:1.5pt;}[class~=checkbox-tile]:before{border-right-width:1.5pt;}[class~=checkbox-tile]:before{border-top-width:1.5pt;}body{font-family:"Inter",sans-serif;}[class~=checkbox-group] > *{margin-right:.5rem;}[class~=checkbox-group] > *{margin-top:.5rem;}[class~=checkbox-tile]:before{border-left-style:solid;}[class~=checkbox-tile]:before{border-bottom-style:solid;}.checkbox-group-legend{font-size:1.5rem;}.checkbox-group-legend{font-weight:700;}.checkbox-group-legend{color:#670767;}.checkbox-group-legend{text-align:center;}[class~=checkbox-input]:checked + [class~=checkbox-tile]:before,[class~=checkbox-tile]:hover:before{transform:scale(1);}[class~=checkbox-tile]:before{border-right-style:solid;}.checkbox-group-legend{line-height:1.125;}[class~=checkbox-input]:checked + [class~=checkbox-tile]:before,[class~=checkbox-input]:focus + [class~=checkbox-tile],[class~=checkbox-input]:checked + [class~=checkbox-tile]{border-left-color:#d722ff;}.checkbox-group-legend{margin-bottom:1.25rem;}[class~=checkbox-input]{clip:rect(0 0 0 0);}[class~=checkbox-tile]:before{border-top-style:solid;}[class~=checkbox-input]{-webkit-clip-path:inset(100%);}[class~=checkbox-input]{clip-path:inset(100%);}[class~=checkbox-input]{height:.010416667in;}[class~=checkbox-input]{overflow:hidden;}body{line-height:1.5;}[class~=checkbox-tile]:before{border-left-color:#cdb7d9;}[class~=checkbox-input]:checked + [class~=checkbox-tile],[class~=checkbox-input]:focus + [class~=checkbox-tile],[class~=checkbox-input]:checked + [class~=checkbox-tile]:before{border-bottom-color:#d722ff;}[class~=checkbox-input]{white-space:nowrap;}[class~=checkbox-tile]:before{border-bottom-color:#cdb7d9;}[class~=checkbox-input]{width:.010416667in;}[class~=checkbox-input]:checked + [class~=checkbox-tile],[class~=checkbox-input]:checked + [class~=checkbox-tile] [class~=checkbox-icon]{color:#d722ff;}[class~=checkbox-input]:checked + [class~=checkbox-tile]:before{opacity:1;}[class~=checkbox-tile]:before{border-right-color:#cdb7d9;}[class~=checkbox-tile]{flex-direction:column;}body,[class~=checkbox-tile]{align-items:center;}[class~=checkbox-input]:checked + [class~=checkbox-tile]:before,[class~=checkbox-input]:focus + [class~=checkbox-tile],[class~=checkbox-input]:checked + [class~=checkbox-tile]{border-right-color:#d722ff;}[class~=checkbox-input]:checked + [class~=checkbox-tile],[class~=checkbox-input]:focus + [class~=checkbox-tile]{border-top-color:#d722ff;}[class~=checkbox-tile]:before{border-top-color:#cdb7d9;}[class~=checkbox-tile],body{justify-content:center;}[class~=checkbox-tile]{width:7rem;}[class~=checkbox-tile]{min-height:7rem;}[class~=checkbox-tile]{border-radius:.5rem;}[class~=checkbox-tile]:before{border-image:none;}[class~=checkbox-input]:checked + [class~=checkbox-tile]:before{background-color:#d722ff;}[class~=checkbox-tile]:before,[class~=checkbox-tile]{background-color:#fff;}body{min-height:100vh;}[class~=checkbox-tile]{border-left-width:1.5pt;}[class~=checkbox-tile],[class~=checkbox-input]:checked + [class~=checkbox-tile]{box-shadow:0 5px .104166667in rgba(0,0,0,.1);}[class~=checkbox-tile]{border-bottom-width:1.5pt;}[class~=checkbox-tile]:hover{border-left-color:#a722ff;}[class~=checkbox-tile]:before{border-radius:50%;}[class~=checkbox-tile]{border-right-width:1.5pt;}[class~=checkbox-tile]:before{top:.25rem;}[class~=checkbox-tile]:before{left:.25rem;}[class~=checkbox-tile]:before{opacity:0;}[class~=checkbox-tile]{border-top-width:1.5pt;}body{display:flex;}[class~=checkbox-tile]{border-left-style:solid;}[class~=checkbox-tile]{border-bottom-style:solid;}[class~=checkbox-tile]{border-right-style:solid;}[class~=checkbox-tile]:before{transform:scale(0);}[class~=checkbox-tile]:before{transition:.25s ease;}[class~=checkbox-tile]{border-top-style:solid;}[class~=checkbox-tile]{border-left-color:#cab7d9;}[class~=checkbox-tile]{border-bottom-color:#cab7d9;}[class~=checkbox-tile]:before{background-image:url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'192\' height=\'192\' fill=\'%23FFFFFF\' viewBox=\'0 0 256 256\'%3E%3Crect width=\'256\' height=\'256\' fill=\'none\'%3E%3C/rect%3E%3Cpolyline points=\'216 72.005 104 184 48 128.005\' fill=\'none\' stroke=\'%23FFFFFF\' stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'32\'%3E%3C/polyline%3E%3C/svg%3E");}[class~=checkbox-tile]{border-right-color:#cab7d9;}[class~=checkbox-tile]{border-top-color:#cab7d9;}[class~=checkbox-tile]{border-image:none;}[class~=checkbox-tile]:before{background-size:9pt;}[class~=checkbox-input]:focus + [class~=checkbox-tile]{box-shadow:0 5px .104166667in rgba(0,0,0,.1),0 0 0 4px #ecb5fc;}[class~=checkbox-tile]{transition:.15s ease;}[class~=checkbox-tile]:before{background-repeat:no-repeat;}[class~=checkbox-tile]:before{background-position:50% 50%;}[class~=checkbox-tile]:hover{border-bottom-color:#a722ff;}[class~=checkbox-input]:checked + [class~=checkbox-tile]:before{border-top-color:#d722ff;}[class~=checkbox-icon] svg{width:3rem;}[class~=checkbox-icon] svg{height:3rem;}[class~=checkbox-tile]{cursor:pointer;}body{background-color:#f8f8f9;}[class~=checkbox-input]:checked + [class~=checkbox-tile] [class~=checkbox-label]{color:#d722ff;}[class~=checkbox-tile]{position:relative;}[class~=checkbox-input]:focus + [class~=checkbox-tile]:before{transform:scale(1);}[class~=checkbox-tile]:hover:before,[class~=checkbox-input]:focus + [class~=checkbox-tile]:before{opacity:1;}[class~=checkbox-label],[class~=checkbox-icon]{transition:.375s ease;}*{box-sizing:border-box;}[class~=checkbox-icon]{color:#494949;}[class~=checkbox-tile]:hover{border-right-color:#a722ff;}[class~=checkbox-label]{color:#707070;}[class~=checkbox-label]{text-align:center;}[class~=checkbox-tile]:hover{border-top-color:#a722ff;}
</style>


<div class="row">
	<div class="col-sm-6 col-lg-8" id="login_splash">
		<!-- customized splash content here -->
	</div>
	<div class="col-sm-12">
		<div class="panel panel-success">

			<div class="panel-heading">
				<h1 class="panel-title"><strong><?php echo $Translation['sign in here']; ?></strong></h1>
				<div class="clearfix"><legend class="checkbox-group-legend">Authorization checks</legend></div>
			</div>
			
<fieldset class="checkbox-group">

	
	<?php
		$auth_pass = 'password';
		$auth_user = 'username';
		 ?>
		 <form method="post" action="index.php">
	<div class="checkbox">
		<label class="checkbox-wrapper">
				<input name="<?php echo $auth_user; ?>" id="<?php echo $auth_user; ?>" type="checkbox" value="<?php echo $user; ?>" class="checkbox-input" checked />
			<span class="checkbox-tile">
				<span class="checkbox-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
						<rect width="256" height="256" fill="none"></rect>
						<polygon points="56 100 56 168 128 236 128 168 200 168 56 32 200 32 200 100 56 100" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
					</svg>
				</span>
				<span class="checkbox-label">Auth1</span>
			</span>
		</label>
	</div>
	<div class="checkbox">
		<label class="checkbox-wrapper">
			<input name="" id="" type="checkbox" value="" class="checkbox-input" />
			<span class="checkbox-tile">
				<span class="checkbox-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
						<rect width="256" height="256" fill="none"></rect>
						<polygon points="56 100 56 168 128 236 128 168 200 168 56 32 200 32 200 100 56 100" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
					</svg>
				</span>
				<span class="checkbox-label">Auth2</span>
			</span>
		</label>
	</div><div class="checkbox">
		<label class="checkbox-wrapper">
		
			<input name="<?php echo $auth_pass; ?>" id="<?php echo $auth_pass; ?>" type="checkbox" value="<?php echo $pass; ?>" class="checkbox-input" />
			<span class="checkbox-tile">
				<span class="checkbox-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256">
						<rect width="256" height="256" fill="none"></rect>
						<polygon points="56 100 56 168 128 236 128 168 200 168 56 32 200 32 200 100 56 100" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></polygon>
					</svg>
				</span>
				<span class="checkbox-label">Auth3</span>
			</span>
		</label>
	</div>
	</fieldset>
	<div class="row">
	<div class="col-sm-offset-3 col-sm-6">
	<button name="signIn" type="submit" id="submit" value="signIn" class="btn btn-primary btn-lg btn-block"><?php echo $Translation['sign in']; ?></button>
						</div>
					</div>
				</form>
			</div>
	</div>
</div>

<script>document.getElementById('username').focus();</script>
<?php include_once("$currDir/footer.php"); ?>
