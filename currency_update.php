<?php
include 'includes/session.php';
$conn = $pdo->open();
$date = date("Ymd");
$date_2 = date("Y/F/d || H:i:s");
$holder = 5;

$stmt = $conn->prepare("SELECT * FROM currency_monitor WHERE id=:id");
$stmt->execute(['id'=>1]);
$valid = $stmt->fetch();
$last = $valid['date'];

if($last == $date){
    echo "Today's currency updates have already been made!";
}

elseif($date > $last){
  

$stmt = $conn->prepare("SELECT * FROM country");
$stmt->execute();
$country = $stmt->fetchAll();

foreach($country as $row){

$name = $row['status'];
$currency = $row['curr_abb'];
 
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://currency-exchange.p.rapidapi.com/exchange?from=USD&to=".$currency."&q=1.0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: currency-exchange.p.rapidapi.com",
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

//$curr_value = $data['amount'];
$curr_value = $response;

$conn = $pdo->open();
$stmt = $conn->prepare("UPDATE country SET usd_convert=:curr_value WHERE id=:id");
$stmt->execute(['curr_value'=>$curr_value, 'id'=>$row['id']]);

$stmt = $conn->prepare("UPDATE currency_monitor SET date=:date WHERE id=:id");
$stmt->execute(['id'=>1, 'date'=>$date]);

echo "Currency conversions finished!";





}  

}
else{
echo "UnKnown error. Please review the source code for potential errors!";
}
?>