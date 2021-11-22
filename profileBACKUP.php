<?php include 'includes/session.php'; ?>
<?php
	if(!isset($_SESSION['user'])){
		header('location: TsavoHome');
	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<div class="row" style="width:100%"><?php include 'includes/navbar2.php'; ?></div>
	<link rel="stylesheet" type="text/css" href="includes/font/flaticon.css">
		  <div class="">
	    <div class="">
<style>

.list-wrapper {
  max-width: 400px;

}

.list {
  background: #fff;
  border-radius: 2px;
  list-style: none;
  padding: 10px 20px;
}

.list-item {
  display: flex;
  margin: 10px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.list-item:last-child {
  border-bottom: none;
}
.list-item-image {
  border-radius: 50%;
  width: 64px;
}
.list-item-content {
  margin-left: 20px;
}
.list-item-content h4, .list-item-content p {
  margin: 0;
}
.list-item-content h4 {
  margin-top: 10px;
  font-size: 18px;
}
.list-item-content p {
  margin-top: 5px;
  color: #aaa;
}
</style>
		

	      <!-- Main content -->
	      <section class="content">
	        <div class="">
	        	<div data-spy="scroll">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='callout callout-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}

	        			if(isset($_SESSION['success'])){
	        				echo "
	        					<div class='callout callout-success'>
	        						".$_SESSION['success']."
	        					</div>
	        				";
	        				unset($_SESSION['success']);
	        			}
	        		?>
	        		<div class="box box-solid">
	        			<div class="box-body">
	        				<div class="col-sm-3">
	        					<img src="<?php echo (!empty($user['photo'])) ? 'tsavo_system/users/'.$user['photo'] : 'tsavo_system/users/profile.jpg'; ?>" class="img-thumbnail" width="100%">
	        				 
							</div>
							<div class="col-sm-3">
							<div class="box box-solid">
	  	<div class="box-header with-border">
							<h1 style="font-stretch:expanded; text-align:center;"> Hello <p style="font-family:Brush Script MT; color:#EC00D4"><?php echo $user['firstname']; ?></p></h1>
	        				<hr />
							<a class="btn btn-tsavo" href="#section1" style="width:100%">My Orders</a>
							<hr />
							<a class="btn btn-tsavo" href="RecentlyViewed" style="width:100%">Recently viewed items</a>
							
							</div>
							</div>
							</div>
							
							<?php
			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM followers WHERE userid=:usid");
			$stmt->execute(['usid'=>$_SESSION['user']]);
			$followers = $stmt->fetch();

							 ?>
							<hr />
							<div class="col-sm-3">
							<div style="border:solid; border-radius:7px; border-color:#EB00FC">
	        					<h4 class="elegantshadow">
								<i class="flaticon-wallet"> My wallet</i>
								<h4 style="text-align:center; margin-left:38%" class="label label-warning">Kshs. <?php echo number_format($user['wallet'], 2); ?></h4>
								</h4>
							</div>
								
								<hr />
								
								
								
								<h5></h5>
								<!-- Button to Open the Modal -->
                        <button style="width:100%" type="button" class="btn btn-tsavo" data-toggle="modal" data-target="#supplier">
                        Following <span class="label"><?php echo $followers['numrows']; ?></span> Vendor(s)
                           </button>
								
								
								
							</div>
							<hr />
							<div class="col-sm-3">
							<div class="box box-solid">
	  	<div class="box-header with-border">
		<a href="tsavo_vendor" class="btn btn-warning" style="width:100%">
		<i class="fa fa-money" aria-hidden="true" style="margin-right:20px">
		</i><b>Sell on</b> <img src="includes/images/tsavo1.png" width="30%" height="auto">
		         </a>
		</div>
		</div>
							<div class="box box-solid">
	  	<div class="box-header with-border">
		<button disabled="disabled" class="btn btn-danger" style="width:100%">
		<i class="fa fa-odnoklassniki" aria-hidden="true" style="margin-right:20px">
		</i><b>Hiring</b> <img src="includes/images/tsavo1.png" width="30%" height="auto">
		         </button>
		</div>
		</div>
							</div>
							
							
							<div class="col-sm-12 jumbotron">
	        					<div class="table-responsive">
		 <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Name :</td>
        <td><?php echo $user['firstname'].' '.$user['lastname']; ?></td>
        </tr>
      <tr>
        <td>Email :</td>
        <td><?php echo $user['email']; ?></td>
       </tr>
      <tr>
        <td>Contact Info :</td>
        <td><?php echo (!empty($user['contact_info'])) ? $user['contact_info'] : '&#9940;  EDIT YOUR PHONE NUMBER!!!!  &#9940;'; ?></td>
      </tr>
	  <tr>
        <td>Address</td>
        <td><?php echo (!empty($user['address'])) ? $user['address'] : '&#9940;  EDIT YOUR HOME ADDRESS!!!!  &#9940;'; ?></td>
        </tr>
      <tr>
        <td>Zone</td>
        <td><?php echo (!empty($user['zone'])) ? $user['zone'] : '&#9940;  EDIT YOUR DELIVERY ZONE!!!!  &#9940;'; ?></td>
       </tr>
      <tr>
        <td>Joined on :</td>
        <td><?php echo date('M d, Y', strtotime($user['created_on'])); ?></td>
      </tr>
    </tbody>
  </table></div>
	        				</div>
							<span class="pull-right" >
	        									<a href="#edit" class="btn btn-success btn-flat btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
	        								</span>
	        			</div>
	        		</div>
	        		<div class="box box-solid">
	        			<div class="box-header with-border">
	        				<h4 id="section1" class="box-title"><i class="flaticon-calendar"></i> <b>Order History</b></h4>
	        			</div>
	        			<div class="table-responsive">
	        				<table class="table table-bordered " id="example1">
	        					<thead>
	        						<th class="hidden"></th>
	        						<th>Date</th>
	        						<th>Order Number</th>
	        						<th>Amount</th>
									<th>Status</th>
	        						<th>Order Contents</th>
	        					</thead>
	        					<tbody>
	        					<?php
	        						$conn = $pdo->open();

	        						try{
	        							$stmt = $conn->prepare("SELECT * FROM sales WHERE user_id=:user_id ORDER BY sales_day DESC");
	        							$stmt->execute(['user_id'=>$user['id']]);
	        							foreach($stmt as $row){
	        								$stmt2 = $conn->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id WHERE sales_id=:id");
	        								$stmt2->execute(['id'=>$row['id']]);
	        								$total = 0;
	        								foreach($stmt2 as $row2){
	        									$subtotal = $row2['price']*$row2['quantity'];
	        									$total += $subtotal;
	        								}
	        								echo "
	        									<tr>
	        										<td class='hidden'></td>
	        										<td>".date('M d, Y', strtotime($row['sales_day']))."</td>
	        										<td>".$row['pay_id']."</td>
	        										<td>Kshs. ".number_format($total, 2)."</td>
													<td>".$row['approval']."</td>
	        										<td><button class='btn btn-sm btn-flat btn-info transact' data-id='".$row['id']."'><i class='fa fa-search'></i> View</button></td>
	        									</tr>
	        								";
	        							}

	        						}
        							catch(PDOException $e){
										echo "There is some problem in connection: " . $e->getMessage();
									}

	        						$pdo->close();
	        					?>
	        					</tbody>
	        				</table>
	        			</div>
	        		</div>
	        	</div>
	        	
	        </div>
			
			</div>
	      </section>
	     <div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box graa">Trending Today<i class="flaticon-clocks" aria-hidden="true"></i></h3>
				
			<div style="width:100%;" class='wrap-products style-nav-4 '>
	                 
					<?php
		       			$now = date('Y-m-d');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
						   $stmt->execute(['now'=>$now]);
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/00000.png';
						    	$inc = ($inc == 0) ? 1 : $inc + 0;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
								 <div class='list-grid'>
								 <div class=''> 
								
								<div style='width:100%' class='product product-style-2 equal-elem '>
						<div class='product-thumnail'>
							<a href='Item?product=".$row['slug']."' title='".$row['name']."'>
								<figure><img class='thumbnail booi da' src='".$image."' width='100%' onerror='this.src='images/noimage.jpg'' alt='".$row['name']."'></figure>
							</a>
							<div class='group-flash'>
								<span class='flash-item bestseller-label'>".$row['p_off']."% OFF</span>
							</div>
							
							<div class='wrap-btn' style='width:100%'>
								<a href='Item?product=".$row['slug']."' class='function-link '>view</a>
							</div>
							
						</div>
						<div id='review'>
						<div class='box-footer'>
						<div class='product-info'>
							<a href='Item?product=".$row['slug']."' class='product-name'><span class='ba'>".$row['name']."</span></a>
							<div class='wrap-price '><span style='font-size:1.25rem' class='product-price ba'>Kshs.".number_format($row['price'], 2)."</span></div>
							</div>
						</div>
					</div>
					</div></div></div>
	       						";
	       						if($inc == 4) echo "</div>";
						    }
						    if($inc == 2) echo "<div class='col-sm-1'></div><div class='col-sm-1'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-2'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
	    </div>
	  </div>
<!-------------------======================supplier modal===============--------------------------->
 

  <!-- The Modal -->
  <div class="modal" id="supplier">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Vendors followed by <?php echo $user['firstname']; ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<?php
		$conn = $pdo->open();
		try{
		 		
	    $stmt = $conn->prepare("SELECT *, supplier.name AS suppname, supplier.photo AS supppic, supplier.shop_id AS suppid FROM supplier LEFT JOIN followers ON followers.vendorid=supplier.shop_id WHERE userid = :usid2");
	    $stmt->execute(['usid2' => $_SESSION['user']]);
	    $supplier = $stmt->fetchAll();
		
		foreach($supplier as $row){
		if(!empty($row['supppic'])) {
		$suppic = ($row['supppic']) ? 'tsavo_vendor/images/'.$row['supppic'] : 'tsavo_vendor/images/profile.jpg';
             
             		}
		else{
		
		$suppic = "tsavo_vendor/images/profile.jpg";	
		}
		?>
<!----------========content==========------------->			
		<div class="list-wrapper" ng-app="app" ng-controller="MainCtrl as ctrl">
  <ul class="list">
    <li class="list-item">
      <div>
        <img src="<?php echo $suppic; ?>" class="list-item-image">
      </div>
      <div class="list-item-content">
        <h4><?php echo $row['suppname'];?></h4>
        <p><?php echo $row['email'];?></p>
		 <a class="btn btn-tsavo" href="TsavoShop?shop=<?php echo $row['shop_id']; ?>">Visit Shop</a>
      </div>
	  
      
    </li>
  </ul>
</div>
<!----------========content==========------------->	
	<?php	}
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}
		
		 ?>
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  	<?php include 'templates/footer.php'; ?>
  	<?php include 'includes/profile_modal.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$(document).on('click', '.transact', function(e){
		e.preventDefault();
		$('#transaction').modal('show');
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'transaction.php',
			data: {id:id},
			dataType: 'json',
			success:function(response){
				$('#date').html(response.date);
				$('#transid').html(response.transaction);
				$('#detail').prepend(response.list);
				$('#total').html(response.total);
			}
		});
	});

	$("#transaction").on("hidden.bs.modal", function () {
	    $('.prepend_items').remove();
	});
});
</script>
<script>
console.clear();
(function () {
  var app = angular.module('app', []);

  app.service('UserService', function ($q, $http) {
    const api = 'https://api.github.com/users';

    this.getUsers = function () {
      let defer = $q.defer();
      $http.get(api).then(res => {
        defer.resolve(res.data.map(user => ({
          src: user.avatar_url,
          name: user.login.toUpperCase(),
          login: `@${user.login}` })));

      }, error => defer.reject(error));
      return defer.promise;
    };

  });

  app.controller('MainCtrl', function (UserService) {
    UserService.getUsers().then(users => {
      this.users = users;
      console.log(users);
    });
  });

})();
</script>
</body>
</html>