<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

session_start();

if(isset($_POST['send'])){

    $email = $_POST['email'];
    $subject = $_POST['subject'];
	$number = $_POST['number'];
    $message = "
					    
                 <h1>Return item(s) request</h1>
						<h2>Customer Email:</h2>
						<h3>".$email."</h3>
						
						<h2>Order number:</h2>
						<h3>".$number."</h3>
						
						<h2>Item:</h2>
						<h3>".$subject."</h3>
						
						<h2>Reason for return:</h2>
						<h3>".$_POST['message']."</h3>
						
						";

   
    //Load composer's autoloader

    $mail = new PHPMailer(true);                            
    try {
        //Server settings
                                         
        $mail->Host = 'mail.tsavo.store';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'noreply@tsavo.store';     
        $mail->Password = '@C3yaEp2@QXFtUt';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'tls';                           
        $mail->Port = 587;                                   

        //Send Email
        $mail->setFrom('noreply@tsavo.store');
        
        //Recipients
        $mail->addAddress('contacts@tsavo.store');              
        $mail->addReplyTo('noreply@tsavo.store');
        
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Return item request';
        $mail->Body    = $message;

        $mail->send();
		
       $_SESSION['result'] = 'Message sent successfully';
	   $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
	   $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
	   $_SESSION['status'] = 'error';
    }
	
	header("location: https://tsavo.store/ReturnItem");

}


