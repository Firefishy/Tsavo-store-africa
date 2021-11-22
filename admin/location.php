<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Visitors
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Visitors' location</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <div class="box-body">
              <?php
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://client-ip.p.rapidapi.com/lookup/".$_GET['ip'],
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: client-ip.p.rapidapi.com",
		"x-rapidapi-key: 6c54f8cbdbmsh026aa3e5aecec5dp1a306fjsn99e3c76d8d56"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
 $data = json_decode($response);
 
$country = $data->countryName;
$ip = $data->clientIP;
$code_c = $data->countryCode;
$region = $data->region;
$city = $data->city;
$timezone = $data->timezone;
$lat = $data->latitude;
$long = $data->longitude;
 
 
}
              ?>
            
            </div>
<div class="box-body">
      
<table class="table table-info table-responsive">
    <th>
        <td class="text-danger bold">Detail</td>
      
    </th>
<tr>
    <td class="text-primary bold">IP</td>
    <td> <?php echo $ip; ?></td>
</tr>
<tr>
    <td class="text-primary bold">Country</td>
    <td><?php echo $country; ?></td>
</tr>
<tr>
    <td class="text-primary bold">Country code</td>
    <td><?php echo $code_c; ?></td>
</tr>
<tr>
    <td class="text-primary bold">Region</td>
    <td><?php echo $region; ?></td>
</tr>
<tr>
    <td class="text-primary bold">City</td>
    <td><?php echo $city; ?></td>
</tr>
<tr>
    <td class="text-primary bold">Timezone</td>
    <td><?php echo $timezone; ?></td>
</tr>
<tr>
    <td class="text-primary bold">Latitude</td>
    <td><?php echo $lat; ?></td>
</tr>
<tr>
    <td class="text-primary bold">Longitude</td>
    <td><?php echo $long; ?></td>
</tr>
</table>
</div>
<hr/>
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <iframe src="https://www.google.com/maps/embed/v1/view?key=AIzaSyBJevQEu8z68ptn8qtji4--IPoI74d_uiQ&center=<?php echo $lat; ?>,<?php echo $long; ?>&zoom=18&maptype=satellite" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
    </div>
    
</div>
          </div>
        </div>
      </div>
    </section>

<div class="modal fade" id="Home">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <?php //echo $response; ?>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    
</div>


  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/users_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>

</body>
</html>
