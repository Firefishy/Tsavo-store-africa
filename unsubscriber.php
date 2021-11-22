<?php
use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

include 'includes/session.php';
if(isset($_GET['token_b'])&&isset($_GET['token'])){
$token_b = $_GET['token_b'];
$token = $_GET['token'];
$email = $_GET['token_c'];


$conn = $pdo->open();
$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM subscriber LEFT JOIN users ON subscriber.sub_id=users.id WHERE users.password=:passcode");
$stmt->execute(['passcode'=>$token_b]);
$unsubscribe = $stmt->fetch();
if($unsubscribe['numrows'] > 0){
   
     $sub_email = $_POST['email'];
	 $sub_id = $user['id'];
$date = date('Y-m-d');
$message_b = "Jambo ".$user['firstname'].". You successfully unsubscribed to our newsletter on ".$date."";
$product = "You have successfully unsubscribed from our newsletter!";

$stmt = $conn->prepare("DELETE FROM subscriber WHERE sub_id=:sub_id"); 
$stmt->execute(['sub_id'=>$token]);

$stmt = $conn->prepare("INSERT INTO message (user_id, message, product, user_name) VALUES (:user_id, :message, :product, :user_name)"); 
$stmt->execute(['user_id'=>$user['id'], 'message'=>$message_b, 'product'=>$product, 'user_name'=>$user['id']]); 
 

$message = "
<h1 style='text-align:center;'>Unsubscription successful!</h1>
<hr />
<img src='https://www.linkpicture.com/q/tsavo.jpg' width='100%' style='border:none;border-radius:3px' />
<br />
<p style='text-align:center;'>
You are receiving this mail since you have unsubscribed from our Tsavo newsletter. Your unsubscription was successful.</p>
<hr />
<p style='text-align:center;'>
If you have not sent a request to unsubscribe from the newsletter kindly re-subscribe again from the Tsavo page. Thank you.
</p>
<small style='text-align:center;'>
<a style='text-decoration:none; color:#DF19C5; margin-left:45%;' href='https://tsavo.store/'>Tsavo home</a>
</small>
";

					//Load phpmailer
		    		require 'vendor/autoload.php';

		    		$mail = new PHPMailer(true);                             
				    
				        //Server settings
						
				        $mail->isSMTP();                                     
				        $mail->Host = gethostbyname('mail.tsavo.store');                  
				        $mail->SMTPAuth = true;                               
				        $mail->Username = 'newsletter@tsavo.store';     
				        $mail->Password = 'oxd}kbBs9nN8';                    
				        $mail->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail->SMTPSecure = 'tls';                           
				        $mail->Port = 587;                                   

				        $mail->setFrom('newsletter@tsavo.store');
				        
				        //Recipients
				        $mail->addAddress($email);              
				        $mail->addReplyTo('waroruaalex@tsavo.store');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'Tsavo newsletter';
				        $mail->Body    = $message;

				        $mail->send();
$_SESSION['success'] = '
<section class="content">
		  <div class="col-sm-4"></div>
		  <div class="col-sm-4">
		  <div class="jumbotron" style="background-color:#FF4044">
		  <h3 style="text-align:center;">Unsubscription successful</h3>
		  </div>
		  <img src="pimages/500.png" style="width:50%; margin-left:28%" />
		   <h5 style="text-align:center;">You have successfully unsubscribed 
		   <br/>
		   <b>'.$email.'</b>
		   <br/>
		   from our newsletter.
		   </h5>
		   <a href="TsavoHome" class="btn btn-tsavo" style="text-align:center; width:100%">Home</a>
		  </div>
		  <div class="col-sm-4"></div>
	      
	      </section>
	      <br/>

';
header('location: unsub_success.php');
   
}
else{
header('location: TsavoHome');
}
}
else{
header('location: TsavoHome');
}
?>
