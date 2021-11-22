<?php
use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

include 'includes/session.php';

$conn = $pdo->open();

if(isset($user['id'])){
   if(isset($_POST['subscriber'])){
     $sub_email = $_POST['email'];
	 $sub_id = $user['id'];
$date = date('Y-m-d');
$message_b = "Jambo ".$user['firstname'].". You successfully subscribed to our newsletter on ".$date."";
$product = "Subsription to our newsletter was successful";
$stmt = $conn->prepare("INSERT INTO subscriber (sub_mail, sub_id, sub_date) VALUES (:sub_mail, :sub_id, :sub_date)"); 
$stmt->execute(['sub_mail'=>$sub_email, 'sub_id'=>$sub_id, 'sub_date'=>$date]);

$stmt = $conn->prepare("INSERT INTO message (user_id, message, product, user_name) VALUES (:user_id, :message, :product, :user_name)"); 
$stmt->execute(['user_id'=>$user['id'], 'message'=>$message_b, 'product'=>$product, 'user_name'=>$user['id']]); 
 

$message = "
<h1 style='text-align:center;'>Thank you for subscribing to our Tsavo newsletter.</h1>
<hr />
<img src='https://www.linkpicture.com/q/tsavo.jpg' width='100%' style='border:none;border-radius:3px' />
<br />
<p style='text-align:center;'>
Jambo, ".$user['lastname'].". You have successfully registered to our Tsavo newsletter. We will be updating you on the latest products and information on upcoming give aways and many many more exciting promotions! 
</p>
<hr />
<p style='text-align:center;'>
If this email does not belong to you kindly unsubscribe from the link below.
</p>
<small style='text-align:center;'>
<a style='text-decoration:none; color:#DF19C5; margin-left:45%;' href='https://tsavo.store/unsubscriber.php?token=".$user['id']."&token_b=".$user['password']."&token_c=".$user['email']."'>Unsubscribe</a>
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
				        $mail->addAddress($sub_email);              
				        $mail->addReplyTo('waroruaalex@tsavo.store');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'Tsavo newsletter';
				        $mail->Body    = $message;

				        $mail->send();
$_SESSION['success'] = 'You have successfully subscribed to the Tsavo newsletter!';
header('location: MyProfile');
   
   }
else{
$_SESSION['error'] = 'Subcription was unsuccessful. Try again!';
header('location: MyProfile');

}
}
else{
header('location: TsavoHome');
}
?>
