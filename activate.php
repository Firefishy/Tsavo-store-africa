<?php include 'includes/session.php'; ?>
<?php
	$output = '';
	if(!isset($_GET['code']) OR !isset($_GET['user'])){
		$output .= '
			<div class="alert alert-danger">
                <h4><i class="icon fa fa-warning"></i> Error!</h4>
                Code to activate account not found.
            </div>
            <h4 class="jumbotron bg-success">You may <a href="NewAccount">Signup</a> or go to the <a href="TsavoHome">Homepage</a>.</h4>
		'; 
	}
	else{
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE activate_code=:code AND id=:id");
		$stmt->execute(['code'=>$_GET['code'], 'id'=>$_GET['user']]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			if($row['status']){
				$output .= '
					<div class="alert alert-danger">
		                <h4><i class="icon fa fa-warning"></i> Error!</h4>
		                Account already activated.
		            </div>
		            <h4 class="jumbotron bg-success">You may <a href="Welcome">Login</a> or go to the <a href="TsavoHome">Homepage</a>.</h4>
				';
			}
			else{
				try{
					$stmt = $conn->prepare("UPDATE users SET status=:status WHERE id=:id");
					$stmt->execute(['status'=>1, 'id'=>$row['id']]);
					$output .= '
						<div class="alert alert-success">
			                <h4><i class="icon fa fa-check"></i> Success!</h4>
			                Account activated - Email: <b>'.$row['email'].'</b>.
			            </div>
			            <!-- partial:index.partial.html -->

 <h1  style="border:solid;border-color:#E200E2; margin:3px; margin-left:3px; margin-right:3px" class="page-header elegantshadow">
					
     Welcome to Tsavo!
     <hr/>
	  <a class="btn btn-tsavo" href="Welcome"> Login now</a>
	
   
<!-- partial -->
						
					';
				}
				catch(PDOException $e){
					$output .= '
						<div class="alert alert-danger">
			                <h4><i class="icon fa fa-warning"></i> Error!</h4>
			                '.$e->getMessage().'
			            </div>
			            <h4 class="jumbotron bg-success">You may <a href="NewAccount">Signup</a> or go to the <a href="TsavoHome">Homepage</a>.</h4>
					';
				}

			}
			
		}
		else{
			$output .= '
				<div class="alert alert-danger">
	                <h4><i class="icon fa fa-warning"></i> Error!</h4>
	                Cannot activate account. Wrong code.
	            </div>
	            <h4 class="jumbotron bg-success">You may <a href="NewAccount">Signup</a> or go to the <a href="TsavoHome">Homepage</a>.</h4>
			';
		}

		$pdo->close();
	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">


	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-12">
				
	        		<?php echo $output; ?>
					
	        	</div>
	 
	        </div>
	      </section>
	    
	  </div>
  

  <?php include 'includes/footer1.php'; ?>
	<?php include 'templates/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>