<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>
 <link href = "dist/css/jquery-ui.css" rel = "stylesheet">
 
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/navbar3.php'; ?>
	<div style="width:100%" class="row"><?php include 'includes/navbar2.php'; ?></div>
   <div class="content-wrapper">
	    <div class="container">
<style>
 .elegantshadow {  color: #131313;  background-color: #e7e5e4;  letter-spacing: 0.15em;  text-shadow: 1px -1px 0 #767676, -2px -4px 1px #828181, ;  text-align: center;  text-transform: uppercase;  text-rendering: optimizeLegibility;  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;   font-size: calc(1.5vw + 1.5vh + .6.vmin);   padding: 20px 10px;   width:100%;}

</style>
   <!-- Main content -->
	      <section class="content">
		  <div class="col-sm-4"></div>
		  <div class="col-sm-4">
		  <div class="jumbotron" style="background-color:#FF4044">
		  <h3 style="text-align:center;">Oops! Not found</h3>
		  </div>
		  <img src="pimages/wrong.png" style="width:50%; margin-left:28%" />
		   <h5 style="text-align:center;">What you were looking for cannot be found or your link is invalid.</h5>
		   <a href="TsavoHome" class="btn btn-tsavo" style="text-align:center; width:100%">Go Home</a>
		  </div>
		  <div class="col-sm-4"></div>
	      
	      </section>
	   
	    </div>
	  </div>
 
  	<?php include 'templates/footer.php'; ?>
</div>

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
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
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
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
 <script src="dist/jquery-ui.js"></script>
</html>