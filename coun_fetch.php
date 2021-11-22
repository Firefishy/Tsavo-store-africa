<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="table-responsive">
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Official Name</th>
      <th scope="col">Capital</th>
      <th scope="col">Region</th>
      <th scope="col">Sub Region</th>
      <th scope="col">Currency</th>
      <th scope="col">Currency Name</th>
      <th scope="col">Currency Symbol</th>
      <th scope="col">Language Abb</th>
      <th scope="col">Language</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
      <th scope="col">Landlocked</th>
      <th scope="col">Area</th>
      <th scope="col">Resident</th>
      <th scope="col">Call Code</th>
      <th scope="col">Population</th>
    </tr>
  </thead>
  <tbody>
<?php
include 'includes/session.php';

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://country-facts.p.rapidapi.com/all",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30000,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: country-facts.p.rapidapi.com",
		"x-rapidapi-key: 6c54f8cbdbmsh026aa3e5aecec5dp1a306fjsn99e3c76d8d56"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $data = json_decode($response, true);

}


foreach($data as $data2){

$name = $data2['name']['common'];
$official_n =  $data2['name']['official'];


//Currency fetching
$currency = $data2['currencies'];
foreach($currency as $curr => $curr2){
    $official_cur = $curr;
}
foreach($currency as $cur){
    $cur_name = $cur['name'];
    $cur_symbol = $cur['symbol'];
}

//Languages fetching
$langu = $data2['languages'];
foreach($langu as $lang => $lang_name){
    $language_abb = $lang;
    $language_name = $lang_name;
}

//Demonyms
$demony = $data2['demonyms'];
foreach($demony['eng'] as $demm){
    $demonym_name = $demm;


}


//photo

// Download image, rename it and put it into folder
$url = $data2['flag'];
$gen = $name;
$filee = basename($url);
$ext = pathinfo($filee, PATHINFO_EXTENSION);
$img = $gen.".".$ext;
$path = 'coun_flags/'.$img; 
file_put_contents($path, file_get_contents($url));
$filename = $img;



//Defaults
$latitude = $data2['latlng'][0];
$longitude = $data2['latlng'][1];
$landlocked = $data2['landlocked'];
$area = $data2['area'];
$call_code = $data2['callingCodes'][0];
$population = $data2['population'];
$tld = $data2['tld'][0];
$cca2 = $data2['cca2'];
$ccn3 = $data2['ccn3'];
$cca3 = $data2['cca3'];
$cioc = $data2['cioc'];
$independency = $data2['independent'];
$status = $data2['status'];
$capital = $data2['capital'][0];
$region = $data2['region'];
$sub_region = $data2['subregion'];

//Adding the data to the database
$conn = $pdo->open();
$stmt = $conn->prepare("INSERT INTO country (common_name, official_name, tld, cca2, ccn3, cca3, cioc, independency, status, curr_abb, curr_name, curr_symbol, capital, region, sub_region, latitude, longitude, landlocked, call_code, population, language, language_abb, area, flag, resident) VALUES (:common_name, :official_name, :tld, :cca2, :ccn3, :cca3, :cioc, :independency, :status, :curr_abb, :curr_name, :curr_symbol, :capital, :region, :sub_region, :latitude, :longitude, :landlocked, :call_code, :population, :language, :language_abb, :area, :flag, :resident)");
$stmt->execute(['common_name'=>$name, 'official_name'=>$official_n, 'tld'=>$tld, 'cca2'=>$cca2, 'ccn3'=>$ccn3, 'cca3'=>$cca3, 'cioc'=>$cioc, 'independency'=>$independency, 'status'=>$status, 'curr_abb'=>$official_cur, 'curr_name'=>$cur_name, 'curr_symbol'=>$cur_symbol, 'capital'=>$capital, 'region'=>$region, 'sub_region'=>$sub_region, 'latitude'=>$latitude, 'longitude'=>$longitude, 'landlocked'=>$landlocked, 'call_code'=>$call_code, 'population'=>$population, 'language'=>$language_name, 'language_abb'=>$language_abb, 'area'=>$area, 'flag'=>$filename, 'resident'=>$demonym_name]);


echo '

    <tr>
      <th scope="row"></th>
      <td>'.$name.'</td>
      <td>'.$official_n.'</td>
      <td>'.$capital.'</td>
      <td>'.$region.'</td>
      <td>'.$sub_region.'</td>
      <td>'.$official_cur.'</td>
      <td>'.$cur_name.'</td>
      <td>'.$cur_symbol.'</td>
      <td>'.$language_abb.'</td>
      <td>'.$language_name.'</td>
      <td>'.$latitude.'</td>
      <td>'.$longitude.'</td>
      <td>'.$landlocked.'</td>
      <td>'.$area.'</td>
      <td>'.$demonym_name.'</td>
      <td>'.$call_code.'</td>
      <td>'.$population.'</td>
    </tr>
  

    ';



}






?>  
    
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>