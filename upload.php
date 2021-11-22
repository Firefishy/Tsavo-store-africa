<?php
include 'includes/session.php';

$url = 
'http://images.asos-media.com/products/another-influence-arm-panel-crew-neck-sweat/9851612-1-black'; 

$gen = time();
$file = basename($url);
$ext = pathinfo($file, PATHINFO_EXTENSION);
$img = $gen.".jpg";
$path = 'junk/junkp/'.$img; 
  
// Function to write image into file
file_put_contents($path, file_get_contents($url));
  
echo "File downloaded!"
?>