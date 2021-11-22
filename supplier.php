<?php include 'includes/session.php'; ?>
<?php

$conn = $pdo->open();
//--------------------------------------------------------------------------------------------------
$stmt = $conn->prepare("SELECT * FROM supplier WHERE shop_id = '".$_GET['shop']."'");
	    $stmt->execute();
	    $valid = $stmt->fetch();
		if ($valid) {
  if ($valid > 0) {
   $id = $_GET['shop'];
  } else {
    
  }
} else {
  header("Location: product-not-found.php");
    exit;
}
//--------------------------------------------------------------------------------------------------
	
	

	

	try{
		$stmt = $conn->prepare("SELECT * FROM supplier WHERE shop_id = :id");
		$stmt->execute(['id' => $id]);
		$supp = $stmt->fetch();
		$suppid = $supp['shop_id'];
		if($supp['photo']) {
		$suppic = (!empty($supp['photo'])) ? 'tsavo_vendor/images/'.$supp['photo'] : 'tsavo_vendor/images/profile.jpg';
             
             		}
		else{
		$suppic = "icon.png";	
		}
	     }
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition layout-top-nav" style=" width:100%; background-color:#FEF6FE">
<div class="">
<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<div style="width:100%" class="row"><?php include 'includes/navbar2.php'; ?></div>
	<meta property="fb:admins" content="1100844450350082"/>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=1709913099197542&autoLogAppEvents=1" nonce="Gq9AKofj"></script>

   <div class="">
	    <div class="">
<style>
 .elegantshadow {  color: #131313;  background-color: #e7e5e4;  letter-spacing: 0.15em;  text-shadow: 1px -1px 0 #767676, -2px -4px 1px #828181, ;  text-align: center;  text-transform: uppercase;  text-rendering: optimizeLegibility;  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;   font-size: calc(1.5vw + 1.5vh + .6.vmin);   padding: 20px 10px;   width:100%;}

</style>
	      <!-- Main content -->
	      
	        <div class="col-sm-12">
	        	<div class="">
				<label>Copy Shop Link</label>
				<input style=" width:75%; height:30px; border:none; background-color:#FFCAF9; border-left:5px;" readonly="readonly" id="copy-id" type="text" value="https://tsavo.store/TsavoShop?shop=<?php echo $supp['shop_id']; ?>" />
                <button style="" class="btn btn-light" id="click-to-copy"><img src="pimages/copy.png" width="25px" /></button>
         <br />
		            <h1  style="border:solid;border-color:#E200E2; margin:3px; margin-left:3px; margin-right:3px" class="page-header elegantshadow">
					
					the <b style="text-decoration:overline;"><?php echo $supp['name']; ?></b> shop
					<br />
					<img src="<?php echo $suppic; ?>" style="width:100px" class="rounded" alt="<?php echo $supp['name']; ?>">
					<br />
					  	
<!-----===================================================================================================================------------------>		
					<hr />	
<!-----===================================================================================================================------------------>		
						<?php
	        			if(isset($_SESSION['user'])){
						  $stmt = mysqli_query($cone,"select * from `followers` where vendorid='".$suppid."' and userid='".$_SESSION['user']."'");
							if (mysqli_num_rows($stmt)>0){
							
						
	        				echo "
									<button value='".$suppid."' class='unlike btn btn-tsavo'>Unfollow</button>
									 
								";
	        			         }
						   else {
	        				echo "
	        					<button value='".$suppid."' class='like btn btn-tsavo'>Follow</button>
								";
	        			          }
								  }
						    else {
						    echo "
	        					<small style='color:#C700E6;'>Login to follow ".$supp['name']."</small>
						";
	        			}
						
	        		?>
					
					<br />
					<hr />
 <span id="show_like<?php echo $suppid; ?>">
 <small class="label label-info" style="text-transform:none;">
 <span class="badge">
						<?php
							$query9= mysqli_query($cone,"select * from `followers` where vendorid='".$suppid."'");
							echo mysqli_num_rows($query9);
						?>
						</span> Follower(s)</small>
					</span>
					</h1>
					
<!-----===================================================================================================================------------------>		

		       		<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE supp_id = :suppid ORDER BY RAND()");
						    $stmt->execute(['suppid' => $suppid]);
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 2) ? 1 : $inc + 0;
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
								<span class='flash-item sale-label'>".$row['p_off']."% OFF</span>
							</div>
							
							<div class='wrap-btn' style='width:100%'>
								<a href='Item?product=".$row['slug']."' class='function-link' >view</a>
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
	       						if($inc == 5) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	
	        </div>
	      </section>
<!-------------------========test
<?php

                    $query = "SELECT DISTINCT(sub_cat) FROM category ORDER BY sub_cat ASC";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <ul>
					<li><?php echo $row['sub_cat']; ?></li>
					</ul>
                    <?php
                    }

                    ?>
----=====test===========--------->
	    </div>
	  </div>
  
  	<?php include 'templates/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>

<script>
const _0xc6fc=['addEventListener','314721Zqzbpq','querySelector','#copy-id','execCommand','select','437945WafhuO','click','2xDOebu','#click-to-copy','copy','340807iSXMdR','208080YclIZu','70897FddAqO','202046FzEoCs','11376lMZsbc','2AXuBFN','41dkHIBO'];const _0x4e42f9=_0x4eee;function _0x4eee(_0x58f5ac,_0x4eab9b){_0x58f5ac=_0x58f5ac-0x1ac;let _0xc6fcd3=_0xc6fc[_0x58f5ac];return _0xc6fcd3;}(function(_0x5de2f7,_0x5ec179){const _0x1475a4=_0x4eee;while(!![]){try{const _0x29f198=parseInt(_0x1475a4(0x1ad))*parseInt(_0x1475a4(0x1b2))+parseInt(_0x1475a4(0x1b8))+parseInt(_0x1475a4(0x1b5))*parseInt(_0x1475a4(0x1b3))+-parseInt(_0x1475a4(0x1b0))+parseInt(_0x1475a4(0x1bd))+-parseInt(_0x1475a4(0x1b1))+-parseInt(_0x1475a4(0x1b6))*parseInt(_0x1475a4(0x1b4));if(_0x29f198===_0x5ec179)break;else _0x5de2f7['push'](_0x5de2f7['shift']());}catch(_0x2b5ee7){_0x5de2f7['push'](_0x5de2f7['shift']());}}}(_0xc6fc,0x45271),document[_0x4e42f9(0x1b9)](_0x4e42f9(0x1ae))[_0x4e42f9(0x1b7)](_0x4e42f9(0x1ac),_0x4e66d8=>{const _0x3d4e85=_0x4e42f9;let _0x519596=document[_0x3d4e85(0x1b9)](_0x3d4e85(0x1ba));_0x519596[_0x3d4e85(0x1bc)](),document[_0x3d4e85(0x1bb)](_0x3d4e85(0x1af));}));
</script>
<script type = "text/javascript">
var _0x3b08=['.unlike','700613LCQouF','unlike','Unfollow','hasClass','addClass','#show_like','ajax','click','508887GUENNH','49146sowHle','text','25qaDkrg','5Ysbgny','like.php','like','58464MuhsQb','2659PbLKNf','toggleClass','272898SgwYvF','62992SbiGpI','.like','Follow','val','POST'];(function(_0x595c65,_0x2e391b){var _0x4029cd=_0x111e;while(!![]){try{var _0x20285e=-parseInt(_0x4029cd(0x8c))+-parseInt(_0x4029cd(0x86))*parseInt(_0x4029cd(0x89))+parseInt(_0x4029cd(0x8f))+-parseInt(_0x4029cd(0x8d))*-parseInt(_0x4029cd(0x88))+-parseInt(_0x4029cd(0x9e))+parseInt(_0x4029cd(0x90))+parseInt(_0x4029cd(0x96));if(_0x20285e===_0x2e391b)break;else _0x595c65['push'](_0x595c65['shift']());}catch(_0x40b36f){_0x595c65['push'](_0x595c65['shift']());}}}(_0x3b08,0x46c69),$(document)['ready'](function(){var _0xf7a500=_0x111e;$(document)['on'](_0xf7a500(0x9d),_0xf7a500(0x91),function(){var _0x351515=_0xf7a500,_0x193356=$(this)['val'](),_0x56cdb5=$(this);_0x56cdb5[_0x351515(0x8e)](_0x351515(0x8b)),_0x56cdb5['hasClass'](_0x351515(0x8b))?_0x56cdb5['text']('Follow'):(_0x56cdb5[_0x351515(0x87)]('Unfollow'),_0x56cdb5[_0x351515(0x9a)]('unlike')),$['ajax']({'type':_0x351515(0x94),'url':_0x351515(0x8a),'data':{'id':_0x193356,'like':0x1},'success':function(){showLike(_0x193356);}});}),$(document)['on']('click',_0xf7a500(0x95),function(){var _0x3b2940=_0xf7a500,_0x59650a=$(this)[_0x3b2940(0x93)](),_0x1d0aca=$(this);_0x1d0aca[_0x3b2940(0x8e)](_0x3b2940(0x97)),_0x1d0aca[_0x3b2940(0x99)](_0x3b2940(0x97))?_0x1d0aca[_0x3b2940(0x87)](_0x3b2940(0x98)):(_0x1d0aca[_0x3b2940(0x87)](_0x3b2940(0x92)),_0x1d0aca[_0x3b2940(0x9a)](_0x3b2940(0x8b))),$[_0x3b2940(0x9c)]({'type':_0x3b2940(0x94),'url':'like.php','data':{'id':_0x59650a,'like':0x1},'success':function(){showLike(_0x59650a);}});});}));function _0x111e(_0x2e97a8,_0x130270){_0x2e97a8=_0x2e97a8-0x86;var _0x3b08d9=_0x3b08[_0x2e97a8];return _0x3b08d9;}function showLike(_0x2bf839){var _0x2c0dc8=_0x111e;$[_0x2c0dc8(0x9c)]({'url':'show_like.php','type':_0x2c0dc8(0x94),'async':![],'data':{'id':_0x2bf839,'showlike':0x1},'success':function(_0x580852){var _0x33b263=_0x2c0dc8;$(_0x33b263(0x9b)+_0x2bf839)['html'](_0x580852);}});}
</script>
</html>.

