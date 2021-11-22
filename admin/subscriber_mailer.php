<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try{
include 'includes/session.php';

 $message = $_POST['body'];
 $title = $_POST['title'];
	}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}
if(isset($_POST['subs'])){ 
	try{
    $subscriber = $_POST['subs']; 
 $conn = $pdo->open();
 $stmt = $conn->prepare("SELECT * FROM subscriber");
 $stmt->execute();
 foreach($stmt as $row){
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
				        $mail->addAddress($row['sub_mail']);              
				        $mail->addReplyTo('waroruaalex@tsavo.store');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = $title;
				        $mail->Body    = $message;

				        $mail->send();
 
 }
 $_SESSION['success'] = 'Newsletter successfully sent to subscribers';
 header('location : subscribers.php');
	}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}
 }
 elseif(isset($_POST['users'])){
      $user = $_POST['users'];
  $conn = $pdo->open();
 $stmt = $conn->prepare("SELECT * FROM users");
 $stmt->execute();
 foreach($stmt as $row){
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
				        $mail->addAddress($row['email']);              
				        $mail->addReplyTo('waroruaalex@tsavo.store');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = $title;
				        $mail->Body    = $message;

				        $mail->send();
 
 }
 $_SESSION['success'] = 'Newsletter successfully sent to users';
 header('location : subscribers.php');
 
 }
 if(!isset($_POST['users'])&&!isset($_POST['subs'])){
 $_SESSION['error'] = 'No group has been selected to receive the mail!';    
 header('location : subscribers.php');    
     
 }
?>
