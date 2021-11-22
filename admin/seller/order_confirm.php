<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include 'includes/session.php';

if(isset($_POST['confirma'])){

$buyerr_id = $_POST['buyer_id']; 

$conn = $pdo->open();
$stmt2 = $conn->prepare("SELECT * FROM users WHERE email=:id");
$stmt2->execute(['id'=>$buyerr_id]);
$buyer = $stmt2->fetch();

$prod_id = $_POST['product_id']; 
$sale_id = $_POST['sales_id']; 
$buyer_id = $buyer['id']; 
$detail_id = $_POST['details_id']; 
$time = date("Y-m-d h:i:s");


$stmt = $conn->prepare("INSERT INTO confirm_order (sales_id, buyer_id, product_id, details_id, time) VALUES (:sales_id, :buyer_id, :product_id, :details_id, :time)");
$stmt->execute(['sales_id'=>$sale_id, 'buyer_id'=>$buyer_id, 'product_id'=>$prod_id, 'details_id'=>$detail_id, 'time'=>$time]);

$stmt = $conn->prepare("SELECT * FROM products WHERE id=:id");
$stmt->execute(['id'=>$prod_id]);
$product = $stmt->fetch();

$stmt1 = $conn->prepare("SELECT * FROM sales WHERE id=:id");
$stmt1->execute(['id'=>$sale_id]);
$sales = $stmt1->fetch();

$product = 'Ordered item confirmation.';
$message = "
<div style='border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;'> 
                 <h1 style='text-align:center;'>Ordered item confirmed.</h1>
				 <hr />
				 <img src='https://www.linkpicture.com/q/tsavo.jpg' width='100%' style='border:none;border-radius:3px' />
					<hr />
<p style='text-align:center;'>
Jambo ".$buyer['firstname'].", your order bought under the order number ".$sales['pay_id']." has just been successfully 
confirmed be the Vendor. It now will be dispatched soonest.
</p>
</div>
<hr />
<small style='text-align:center;'>For enquiries contact: contacts@tsavo.store</small>
";

$stmt = $conn->prepare("INSERT INTO message (user_name, user_id, message, product) VALUES (:user_name, :user_id, :message, :product)");
$stmt->execute(['user_name'=>$buyer_id, 'user_id'=>$buyer_id, 'message'=>$message, 'product'=>$product]);

$title = 'Your ordered item has just been confirmed';
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
				        $mail->addAddress($buyerr_id);              
				        $mail->addReplyTo('waroruaalex@tsavo.store');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = $title;
				        $mail->Body    = $message;

				        $mail->send();
 

$_SESSION['success'] = 'This order has been successfully confirmed. You can now proceed to print the Shipping form.';

header('location:order.php?id='.$detail_id.'');

}
else{
header('location:index.php');
}
?>
