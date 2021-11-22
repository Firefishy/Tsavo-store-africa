<?php include 'includes/session.php'; ?>
<?php
$conn = $pdo->open();

//--------------------------------------------------------------------------------------------------
$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = '".$_GET['category']."'");
	    $stmt->execute();
	    $valid = $stmt->fetch();
		if ($valid) {
  if ($valid > 0) {
    $slug = $_GET['category'];
  } else {
    
  }
} else {
  header("Location: product-not-found.php");
    exit;
}
//--------------------------------------------------------------------------------------------------
	
	


	
	
	$_SESSION['filter'] = $slug;
	
	

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $slug]);
		$cat = $stmt->fetch();
		$catid = $cat['id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition layout-top-nav" style=" width:100%; background-color:#F0F0F0">
<div class="">
<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<?php include 'includes/navbar2.php'; ?>
 <div style="margin-left:15%">
	<div class="dropdown" >
	<button type="button" class="btn btn-tsavo" data-toggle="modal" data-target="#phoneFilter">
    Filter
  </button>
  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Sort Price
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="TsavoCategory?category=<?php echo $cat['cat_slug']; ?>">Default</a></li>
    <li><a href="main-categories-desc.php?category=<?php echo $cat['cat_slug']; ?>">High to low</a></li>
	<li><a href="main-categories-asc.php?category=<?php echo $cat['cat_slug']; ?>">Low to high</a></li>
   
  </ul>
</div>
	</div>
	
	<!----==========================sort end===================----------->
	<style>
 .elegantshadow {  color: #131313;  background-color: #e7e5e4;  letter-spacing: 0.15em;  text-shadow: 1px -1px 0 #767676, -2px -4px 1px #828181, ;  text-align: center;  text-transform: uppercase;  text-rendering: optimizeLegibility;  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;   font-size: calc(1.5vw + 1.5vh + .6.vmin);   padding: 20px 10px;   width:100%;}

</style>
	  <div class="col-sm-12">
	    <div class="">

	      <!-- Main content -->
	      <section class="">
	        <div class="">
	        	<div class="">
				
				
			<div class="hidder-desktop">
			<img style="border-radius:7px" src="tsavo_system/images/<?php echo $cat['cat_ban']; ?>" />
			</div>
				
				
		             <h1  style=" overflow-x:hidden; border:solid;border-color:#E200E2; margin:3px; margin-left:3px; margin-right:3px" class="page-header elegantshadow"><?php echo $cat['name']; ?></h1>
		  <div style="" class='wrap-products style-nav-4 '>
			<div class="row filter_data">
     </div>
                </div>
	        	</div>
<!-------================test pad============================================----------------->

<!-------================test pad============================================----------------->
			
	      </section>
	     

  <!-- The Modal -->
  <div class="modal" id="phoneFilter">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title elegantshadow">Filter Products</h4><hr />
          <button type="button" class="btn btn-tsavo" data-dismiss="modal">Apply</button>
        </div>
        
        <!-- Modal body -->
       
         <div class="modal-body">
          <?php include 'includes/sidebar.php'; ?>
	   </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button style="float:left;" type="button" class="btn btn-tsavo" data-dismiss="modal">Apply</button>
        </div>
        
      </div>
    </div>
  </div>
  <style>
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  left: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#myBtn:hover {
  background-color: #555;
}
  </style>
   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
	
</div>
	    </div>
	  </div>
 	
  	<?php include 'templates/footer.php'; ?>

</div>

</script>
<?php include 'includes/scripts.php'; ?>
</body>
<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
		var minimum_perc = $('#hidden_minimum_perc').val();
        var maximum_perc = $('#hidden_maximum_perc').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, minimum_perc:minimum_perc, maximum_perc:maximum_perc, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1,
        max:300000,
        values:[1, 300000],
        step:5,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
$('#perc_range').slider({
        range:true,
        min:1,
        max:100,
        values:[1, 100],
        step:1,
        stop:function(event, ui)
        {
            $('#perc_show').html(ui.values[0] + '% - ' + ui.values[1] + '% ');
            $('#hidden_minimum_perc').val(ui.values[0]);
            $('#hidden_maximum_perc').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
<script src="dist/jquery-ui.js"></script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</html>