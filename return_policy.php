<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>
 <link href = "dist/css/jquery-ui.css" rel = "stylesheet">
 
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	  
	    
<style>
 .elegantshadow {  color: #131313;  background-color: #e7e5e4;  letter-spacing: 0.15em;  text-shadow: 1px -1px 0 #767676, -2px -4px 1px #828181, ;  text-align: center;  text-transform: uppercase;  text-rendering: optimizeLegibility;  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;   font-size: calc(1.5vw + 1.5vh + .6.vmin);   padding: 20px 10px;   width:100%;}

</style>
<?php
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM return_policy");
$stmt->execute();
$terms = $stmt->Fetch();
$pdo->close();
?>
   <!-- Main content -->
	      <div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="https://tsavo.store" class="link">home</a></li>
					<li class="item-link"><span>Return policy</span></li>
				</ul>
			</div>
		</div>
		
		<div class="container">
<h1  style="border:solid;border-color:#E200E2; margin:3px; margin-left:3px; margin-right:3px" class="page-header elegantshadow">
Return policy
</h1>
<!----------------------------- <div class="main-content-area"> ---------------------------->
				<div class="aboutus-info style-center">
					<b class="box-title"><?php echo $terms['main_head']; ?></b>
					<p class="txt-content"><?php echo $terms['main_head_content']; ?></p>
				</div>
				
<!------------------ board=====================================</div> ------------------------------------->
				<div class="jumbotron">
				<h3><?php echo $terms['sub_head1']; ?></h3>
				<hr />
				<p><?php echo $terms['head_1']; ?></p>
				</div>

<!------------------ board=====================================</div> ------------------------------------->
<div class="jumbotron">
				<h3><?php echo $terms['sub_head2']; ?></h3>
				<hr />
				<p><?php echo $terms['head_2']; ?></p>
				</div>

<!------------------ board=====================================</div> ------------------------------------->
<div class="jumbotron">
				<h3><?php echo $terms['sub_head3']; ?></h3>
				<hr />
				<p><?php echo $terms['head_3']; ?></p>
				</div>

<!------------------ board=====================================</div> ------------------------------------->
<div class="jumbotron">
				<h3><?php echo $terms['sub_head4']; ?></h3>
				<hr />
				<p><?php echo $terms['head_4']; ?></p>
				</div>

<!------------------ board=====================================</div> ------------------------------------->

		</div><!--end container-->
	   
 
	<?php include 'templates/footer.php'; ?>  	
</div>

<?php include 'includes/scripts.php'; ?>
</body>

</html>