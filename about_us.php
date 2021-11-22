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
$stmt = $conn->prepare("SELECT * FROM about_us");
$stmt->execute();
$about = $stmt->Fetch();
$pdo->close();
?>
   <!-- Main content -->
	      <div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="https://tsavo.store" class="link">home</a></li>
					<li class="item-link"><span>About us</span></li>
				</ul>
			</div>
		</div>
		
		<div class="container">
<h1  style="border:solid;border-color:#E200E2; margin:3px; margin-left:3px; margin-right:3px" class="page-header elegantshadow">
About us
</h1>
<!----------------------------- <div class="main-content-area"> ---------------------------->
				<div class="aboutus-info style-center">
					<b class="box-title"><?php echo $about['main_head']; ?></b>
					<p class="txt-content"><?php echo $about['main_head_content']; ?></p>
				</div>
<!----------------------------------------section 2----------------------------------------->
				<div class="row equal-container">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title"><?php echo $about['a_head']; ?></b>
							<span class="sub-title"><?php echo $about['a_subhead']; ?></span>
							<p class="desc"><?php echo $about['a_content']; ?></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title"><?php echo $about['b_head']; ?></b>
							<span class="sub-title"><?php echo $about['b_subhead']; ?></span>
							<p class="desc"><?php echo $about['b_content']; ?></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title"><?php echo $about['c_head']; ?></b>
							<span class="sub-title"><?php echo $about['c_subhead']; ?></span>
							<p class="desc"><?php echo $about['c_content']; ?></p>
						</div>
					</div>
				</div>
<!-------------------------------------------section 3------------------------------------------------->
				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-info style-small-left">
							<b class="box-title"><?php echo $about['a2_head']; ?></b>
							<p class="txt-content"><?php echo $about['a2_content']; ?></p>
						</div>
						<div class="aboutus-info style-small-left">
							<b class="box-title"><?php echo $about['a2_head_1']; ?></b>
							<p class="txt-content"><?php echo $about['a2_content_1']; ?></p>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-info style-small-left">
							<b class="box-title"><?php echo $about['a2_head_2']; ?></b>
							<p class="txt-content"><?php echo $about['a2_content_2']; ?></p>
						</div>
						<div class="aboutus-info style-small-left">
							<b class="box-title"><?php echo $about['a2_head_3']; ?></b>
							<p class="txt-content"><?php echo $about['a2_content_3']; ?></p>
						</div>
					</div>
<!-----------------------------------------section 4-------------------------------------------->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-info style-small-left">
							<b class="box-title"><?php echo $about['a3_mainhead']; ?></b>
							<div class="list-showups">
								<label>
									<input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1" checked="checked">
									<span class="check-box"></span>
									<span class='function-name'><?php echo $about['a3_head']; ?></span>
									<span class="desc"><?php echo $about['a3_content']; ?></span>
								</label>
								<label>
									<input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
									<span class="check-box"></span>
									<span class='function-name'><?php echo $about['a3_head_1']; ?></span>
									<span class="desc"><?php echo $about['a3_content_1']; ?></span>
								</label>
								<label>
									<input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
									<span class="check-box"></span>
									<span class='function-name'><?php echo $about['a3_head_2']; ?></span>
									<span class="desc"><?php echo $about['a3_content_2']; ?></span>
								</label>
								<label>
									<input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
									<span class="check-box"></span>
									<span class='function-name'><?php echo $about['a3_head_3']; ?></span>
									<span class="desc"><?php echo $about['a3_content_3']; ?></span>
								</label>
							</div>
						</div>
					</div>
<!--------------------------------------------------------------------------------------->
				</div>
<!------------------staff---------------------->
				
<!------------------ staff=====================================</div> ------------------------------------->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

<style>
/* ==== Cards using Bootstrap === */

#cards .card {
    border-radius: 20px;
    min-height: 100%;
}

#cards .heading-border {
    position: absolute;
    width: 100%;
    top: 60%;
}

#cards .card .user-picture img {
    position: absolute;
    top: -20%;
    right: 10%;
    background: #f8f9fa!important;
    padding: 10px;
}

#cards .card .user-content .user-name {
    margin-right: 150px;
}
</style>
	<!-- partial:index.partial.html -->
<body class="bg-light">
    <main>
        <!-- Ui cards -->
        <section id="cards">
            <div class="container py-2">
                <div class="row pb-4">
                    <div class="col-12 text-center">
                        <div class="display-3">Our Team</div>
                    </div>
                </div>
                <!-- cards -->
                <div class="row">
                   
                     <?php
	 $conn = $pdo->open();
	 $stmt = $conn->prepare("SELECT * FROM staff");
	 $stmt->execute();
	 $staff = $stmt->FetchAll();
	 foreach($staff as $row)
	 echo '
                    <div class="col-lg-4 col-md-6 mb-4 pt-5">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="user-picture">
                                    <img src="tsavo_profile/images/'.$row['profile_photo'].'" class="shadow-sm rounded-circle" height="130" width="130" />
                                </div>
                                <div class="user-content">
                                    <h5 class="text-capitalize user-name">'.$row['first_name'].' '.$row['last_name'].'</h5>
                                    <p class=" text-capitalize text-muted small blockquote-footer">'.$row['position'].'</p>
                                    <div class="small">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                    </div>
									<hr />
                                    <p class="small text-muted mb-0">'.$row['details'].'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   ';
		?>
                    
                    
                </div>
            </div>
            <!-- /cards -->
        </section>
        <!-- /Ui cards -->
    </main>

</body>		
<!------------------ staff=====================================</div> ------------------------------------->
<!-- board members -->
<body class="bg-light">
    <main>
        <!-- Ui cards -->
        <section id="cards">
            <div class="container py-2">
                <div class="row pb-4">
                    <div class="col-12 text-center">
                        <div class="display-3">Board Team</div>
                    </div>
                </div>
                <!-- cards -->
                <div class="row">
                   
                     <?php
	 $conn = $pdo->open();
	 $stmt = $conn->prepare("SELECT * FROM board_member");
	 $stmt->execute();
	 $staff = $stmt->FetchAll();
	 foreach($staff as $row)
	 echo '
                    <div class="col-lg-4 col-md-6 mb-4 pt-5">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="user-picture">
                                    <img src="tsavo_profile/images/'.$row['profile_photo'].'" class="shadow-sm rounded-circle" height="130" width="130" />
                                </div>
                                <div class="user-content">
                                    <h5 class="text-capitalize user-name">'.$row['first_name'].' '.$row['last_name'].'</h5>
                                    <p class=" text-capitalize text-muted small blockquote-footer">'.$row['position'].'</p>
                                    <div class="small">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
									<hr />
                                    <p class="small text-muted mb-0">'.$row['details'].'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   ';
		?>
                    
                    
                </div>
            </div>
            <!-- /cards -->
        </section>
        <!-- /Ui cards -->
    </main>

</body>		
<!------------------ board=====================================</div> ------------------------------------->

		</div><!--end container-->
	   
 
	<?php include 'templates/footer.php'; ?>  	
</div>

<?php include 'includes/scripts.php'; ?>
</body>

</html>