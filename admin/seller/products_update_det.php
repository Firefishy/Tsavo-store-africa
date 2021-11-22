<!DOCTYPE html>
<html dir="ltr" lang="en">


<?php include 'includes/style.php'; ?>


<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        
         <?php include 'includes/header.php';?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
         <?php include 'includes/sidebar.php';?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
		<?php
		if(isset($_POST['update'])){
		$updater = $_POST['id'];
		}
		else{
		$_SESSION[] = 'Choose a product to edit.';
		header('location:all_products_det.php');
		}
		?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Add product</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
			<?php
      if(isset($_SESSION['error'])){
        echo "
           <div class='alert alert-danger' role='alert'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='alert alert-primary' role='alert'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
	<?php
	$conn = $pdo->open();
	$stmt = $conn->prepare("SELECT * FROM products WHERE id=:id");
	$stmt->execute(['id'=>$updater]);
	$product = $stmt->fetch();
	?>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form method="post" action="product_details.php" name="details" class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Vendor Information</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Shop Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="readonly" name="shop" value="<?php echo $vendor['name']; ?>" class="form-control" id="fname" placeholder="<?php echo $vendor['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Shop ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="readonly" name="shop_id" value="<?php echo $vendor['shop_id']; ?>" class="form-control" id="lname"
                                                placeholder="<?php echo $vendor['shop_id']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Vendor Contact</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="readonly" name="supp_cont" value="<?php echo $vendor['supp_contact']; ?>" class="form-control" id="lname"
                                                placeholder="<?php echo $vendor['supp_contact']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Vendor Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="readonly" name="supp_email" value="<?php echo $vendor['email']; ?>" class="form-control" id="email1"
                                                placeholder="<?php echo $vendor['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" onkeyup="forb()" class="form-control" value="<?php echo $product['name']; ?>" id="cono1"
                                                placeholder="Full product name.">
                                        </div>
                                    </div>
                                    <script>
                                   
                                    const forbid = /"/;
                                    let product = document.forms["details"]["name"].value;
                                        function forb(){
                                            if(forbid.test(product)){
                                                window.alert("Forbidden character");
                                            }
                                        }
                                    </script>
                                </div>
                                   </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Product Details</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 mt-3">Product Category</label>
                                    <div class="col-md-9">
                                        <select name="category" class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;">
											 <option  value="<?php echo $product['category_id']; ?>"><?php echo $product['category_id']; ?></option>
											 <optgroup label="Product Categories Available">
											<?php 
											$conn = $pdo->open();
											$stmt = $conn->prepare("SELECT * FROM category ORDER BY name ASC");
											$stmt->execute();
											foreach($stmt as $row){
											echo '
											<option value="'.$row['id'].'">'.$row['name'].'</option>
                                            ';
											
											}
											?>
                                           </optgroup>
                                            
											</select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Product SKU</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sku"  value="<?php echo $product['seller_sku']; ?>" class="form-control" id="email1"
                                                placeholder="Product SKU">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Length</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="length"  value="<?php echo $product['length']; ?>" class="form-control" id="email1"
                                                placeholder="Length">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Width</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="width"  value="<?php echo $product['width']; ?>" class="form-control" id="email1"
                                                placeholder="Width">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Height</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="height"  value="<?php echo $product['height']; ?>" class="form-control" id="email1"
                                                placeholder="Height">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Weight</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="weight"  value="<?php echo $product['weight']; ?>" class="form-control" id="email1"
                                                placeholder="Weight">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Brand</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="brand"  value="<?php echo $product['brand']; ?>" class="form-control" id="email1"
                                                placeholder="Brand of the product">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Material</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="material"  value="<?php echo $product['material']; ?>" class="form-control" id="email1"
                                                placeholder="Body material of the product">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Stock quantity</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="stock"  value="<?php echo $product['prod_qty']; ?>" class="form-control" id="email1"
                                                placeholder="Available stock">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Stock location</label>
                                        <div class="col-sm-9">
                                            <select name="ship_orig" class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;">
											<optgroup label="Where is this product's stock?">
											<option  value="<?php echo $product['ship_orig']; ?>"><?php echo $product['ship_orig']; ?></option>
											<option value="Kenya">Kenya</option>
											<option value="other">Other Country</option>
											</optgroup>
											</select>
                                        </div>
                                    </div>
									 
                                 
                               </div>
                         </div>
                        

                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Price Information</h5>
                                <div class="form-group mt-3">
                                    <label>Price <small class="text-muted">Product store price.</small></label>
                                    <input name="price" type="number" class="form-control date-inputmask" value="<?php echo $product['price_1']; ?>" id="date-mask"
                                        placeholder="Store Price">
                                </div>
                                <div class="form-group">
                                    <label>Was <small class="text-muted">Product previous price.</small></label>
                                    <input name="was" type="number" class="form-control phone-inputmask" value="<?php echo $product['was']; ?>" id="phone-mask"
                                        placeholder="Previous price">
                                </div>
                                <div class="form-group">
                                    <label>Packaging price <small class="text-muted">(Optional) Add price for packaging.</small></label>
                                    <input name="price_2" type="number" value="0" class="form-control international-inputmask" value="<?php echo $product['price_2']; ?>"
                                        id="international-mask" placeholder="Packaging price">
                                </div>
                                <div class="form-group">
                                    <label>Percentage Off<small class="text-muted">Will auto-fill after publishing the product.</small></label>
                                    <input readonly="readonly" type="text" value="<?php echo $product['p_off']; ?>" class="form-control xphone-inputmask" id="xphone-mask"
                                        placeholder="Percentage Off">
                                </div>
                                <div class="form-group">
                                    <label>Selling Price <small class="text-muted"> Price will be calculated after publishing.</small></label>
                                    <input  readonly="readonly" type="text" value="<?php echo $product['price']; ?>" class="form-control purchase-inputmask" id="purchase-mask"
                                        placeholder="Selling price">
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
								<h4 class="card-title">Variations Available</h4>
                                    <div class="col-lg-12">
                                        <input name="vala" type="text" onkeyup="valan()" id="vala" class="form-control" value="<?php echo $product['male_shoes']; ?>" placeholder="Variation 1" required>
                                    </div>
                                    
                                        <input name="vala-p" type="hidden" class="form-control" value="<?php echo $product['female_pants']; ?>" placeholder="Price">
                                   
                                </div>
                                <div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="valb" type="text" onkeyup="valbn()" id="valb" class="form-control" value="<?php echo $product['male_shoes_id']; ?>" placeholder="Variation 2">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="valb-p" type="number" class="form-control" value="<?php echo $product['female_pants_id']; ?>" placeholder="Price">
                                    </div>
                                </div>
                               
                                <div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="valc" type="text" onkeyup="valcn()" id="valc" class="form-control" value="<?php echo $product['male_pants']; ?>" placeholder="Variation 3">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="valc-p" type="number" class="form-control" value="<?php echo $product['field1']; ?>" placeholder="Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="vald" type="text" onkeyup="valdn()" id="vald" class="form-control" value="<?php echo $product['male_pants_id']; ?>" placeholder="Variation 4">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="vald-p" type="number" class="form-control" value="<?php echo $product['field4']; ?>" placeholder="Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="vale" type="text" onkeyup="valen()" id="vale" class="form-control" value="<?php echo $product['male_shirts']; ?>" placeholder="Variation 5">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="vale-p" type="number" class="form-control" value="<?php echo $product['field5']; ?>" placeholder="Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="valf" type="text" onkeyup="valan()" id="vala" class="form-control" value="<?php echo $product['male_shirts_id']; ?>" placeholder="Variation 6">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="valf-p" type="number" class="form-control" value="<?php echo $product['field6']; ?>" placeholder="Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="valg" type="text" onkeyup="valgn()" id="valg" class="form-control" value="<?php echo $product['female_shoes']; ?>" placeholder="Variation 7">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="valg-p" type="number" class="form-control" value="<?php echo $product['categ']; ?>" placeholder="Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="valh" type="text" onkeyup="valhn()" id="valh" class="form-control" value="<?php echo $product['female_shoes_id']; ?>" placeholder="Variation 8">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="valh-p" type="number" class="form-control" value="<?php echo $product['field2']; ?>" placeholder="Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="vali" type="text" onkeyup="valin()" id="vali" class="form-control" value="<?php echo $product['female_skirts']; ?>" placeholder="Variation 9">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="vali-p" type="number" class="form-control" value="<?php echo $product['field7']; ?>" placeholder="Price">
                                    </div>
                                </div>
								<div class="row mb-3">
								
                                    <div class="col-lg-8">
                                        <input name="valj" type="text" onkeyup="valjn()" id="valj" class="form-control" value="<?php echo $product['female_skirts_id']; ?>" placeholder="Variation 10">
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="valj-p" type="number" class="form-control" value="<?php echo $product['field8']; ?>" placeholder="Price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- editor -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
							
                                <h4 class="card-title">Description Editor</h4>
                                <!-- Create the editor container -->
                                <div style="margin-top:50px" class="card col-md-24">
                            <div class="card-body">
                               <div class="form-group">
                                    <label for="hue-demo">Editor</label>
		<textarea id="editor1" name="description" rows="25" style="width:100%" required><?php echo $product['description']; ?></textarea>
               <input type="hidden" name="id" value="<?php echo $updater; ?>" />                     
                                </div>
                        <div class="form-group">
                                    <label for="hue-demo">What is in the box & Features:</label>
		<textarea id="editor2" name="box" rows="25" style="width:100%" required><?php echo $product['more_desc']; ?></textarea>
               <input type="hidden" name="id" value="<?php echo $updater; ?>" />                     
                                </div>
                               </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" onclick="variation()" name="update_det" class="btn btn-success text-white">Update</button>
                                    
                                    <a type="submit" href="index.php" class="btn btn-danger text-white">Cancel</a>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
				</form> 
				<script>
                                    
                                    let valc = document.forms["details"]["valc"].value;
                                    let vald = document.forms["details"]["vald"].value;
                                    let vale = document.forms["details"]["vale"].value;
                                    let valf = document.forms["details"]["valf"].value;
                                    let valg = document.forms["details"]["valg"].value;
                                    let valh = document.forms["details"]["valh"].value;
                                    let vali = document.forms["details"]["vali"].value;
                                    let valj = document.forms["details"]["valj"].value;
                                    //part 2
                                    
                                    let valc-p = document.forms["details"]["valc-p"].value;
                                    let vald-p = document.forms["details"]["vald-p"].value;
                                    let vale-p = document.forms["details"]["vale-p"].value;
                                    let valf-p = document.forms["details"]["valf-p"].value;
                                    let valg-p = document.forms["details"]["valg-p"].value;
                                    let valh-p = document.forms["details"]["valh-p"].value;
                                    let vali-p = document.forms["details"]["vali-p"].value;
                                    let valj-p = document.forms["details"]["valj-p"].value;
                                    //part 3
                                   
                                    var c = valc.length;
                                    var d = vald.length;
                                    var e = vale.length;
                                    var f = valf.length;
                                    var g = valg.length;
                                    var h = valh.length;
                                    var i = vali.length;
                                    var j = valj.length;
                                    //part 4
                                    
                                    var c-p = valc-p.length;
                                    var d-p = vald-p.length;
                                    var e-p = vale-p.length;
                                    var f-p = valf-p.length;
                                    var g-p = valg-p.length;
                                    var h-p = valh-p.length;
                                    var i-p = vali-p.length;
                                    var j-p = valj-p.length;
                                    function variation(){
                                        let valb = document.forms["details"]["valb"].value;
                                        let valb-p = document.forms["details"]["valb-p"].value;
                                         var b = valb.length;
                                         var b-p = valb-p.length;
                                        if (b > 1 && b-p < 1){
                                            alert("Variation 2 price cannot be empty");
                                            
                                        }
                                    }
                                    window.alert("valb");
                                </script>
                                
                                 <script>
                    
                    function valan(){
                    let forma = document.forms["details"]["vala"].value;
                    let vala = forma.length;
                        if(vala > 15){
                        document.getElementById("vala").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                     </script>
                     <script>
                    function valbn(){
                    let formb = document.forms["details"]["valb"].value;
                    let valb = formb.length;
                        if(valb > 15){
                        document.getElementById("valb").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                
                 <script>
                    function valcn(){
                    let formc = document.forms["details"]["valc"].value;
                    let valc = formc.length;
                        if(valc > 15){
                        document.getElementById("valc").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                 <script>
                    function valdn(){
                    let formd = document.forms["details"]["vald"].value;
                    let vald = formd.length;
                        if(vald > 15){
                        document.getElementById("vald").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                 <script>
                    function valen(){
                    let forme = document.forms["details"]["vale"].value;
                    let vale = forme.length;
                        if(vale > 15){
                        document.getElementById("vale").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                 <script>
                    function valfn(){
                    let formf = document.forms["details"]["valf"].value;
                    let valf = formf.length;
                        if(valf > 15){
                        document.getElementById("valf").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                 <script>
                    function valgn(){
                    let formg = document.forms["details"]["valg"].value;
                    let valg = formg.length;
                        if(valg > 15){
                        document.getElementById("valg").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                 <script>
                    function valhn(){
                    let formh = document.forms["details"]["valh"].value;
                    let valh = formh.length;
                        if(valh > 15){
                        document.getElementById("valh").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                 <script>
                    function valin(){
                    let formi = document.forms["details"]["vali"].value;
                    let vali = formi.length;
                        if(vali > 15){
                        document.getElementById("vali").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                 <script>
                    function valjn(){
                    let formj = document.forms["details"]["valj"].value;
                    let valj = formj.length;
                        if(valj > 15){
                        document.getElementById("valj").value = "";
                        window.alert("A maximum of 15 characters only allowed")
                        }
                    }
                </script>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include 'includes/scripts.php'; ?>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function () {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor2', {
            theme: 'snow'
        });

    </script>
	
</body>

</html>