<?php
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load phpmailer
require 'vendor/autoload.php';

	include 'includes/session.php';
$master = $_GET['master'];
if(isset($_GET['transaction_id'])){
    if($_COOKIE['payAuth'] == $master){
	    $secu_auth = $_GET['transaction_id'];
		$secu_auth_a = $_GET['tx_ref'];
		$secu_auth_b = $_GET['status'];
	    $trans_ref = time();
		$trans_add = $trans_ref + $trans_ref;
		$date = date('Y-m-d');
		$wallet = $user['wallet'];
		$firstname = $user['firstname'];
		$lastname = $user['lastname'];
		$buyer = $user['email'];
       }
		$conn = $pdo->open();
		
		$stmt = $conn->prepare("SELECT *, coupon.discount AS coupth FROM users LEFT JOIN coupon ON coupon.coupon_code=users.discount WHERE users.email=:user_mail");
				$stmt->execute(['user_mail'=>$user['email']]);
				$coup_worth = $stmt->fetch();

    	 $stmt_b = $conn->prepare("SELECT COUNT(*) AS numrows FROM transaction_code LEFT JOIN users ON users.id=transaction_code.user_id WHERE users.id=:tran_user AND code=:pay_user");
		$stmt_b->execute(['tran_user'=>$user['id'], 'pay_user'=>"$secu_auth"]);
		$trans_auth = $stmt_b->fetch();
	if($trans_auth['numrows'] = $secu_auth_a && $secu_auth_b = 'successful'){
		$payid = 'PAY' . $secu_auth;
									
		try{
			
			$stmt = $conn->prepare("INSERT INTO sales (user_id, pay_id, sales_day) VALUES (:user_id, :pay_id, :sales_day)");
			$stmt->execute(['user_id'=>$user['id'], 'pay_id'=>$payid, 'sales_day'=>$date]);
			$salesid = $conn->lastInsertId();
			
			try{
				$stmt = $conn->prepare("SELECT *, cart.field1 as calf, cart.price AS capr FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id=:user_id");
				$stmt->execute(['user_id'=>$user['id']]);

				foreach($stmt as $row){
					$stmt = $conn->prepare("INSERT INTO details (pus, price, length, height, weight, recipient_email, recipient_address, recipient_contact, recipient_lname, recipient_fname, sales_id, product_id, product_name, quantity, variation) VALUES (:pus, :price, :length, :height, :weight, :recipient_email, :recipient_address, :recipient_contact, :recipient_lname, :recipient_fname, :sales_id, :product_id, :product_name, :quantity, :variation)");
					$stmt->execute(['variation'=>$row['calf'], 'pus'=>$row['zone_pus'], 'price'=>$row['capr'], 'length'=>$row['length'], 'height'=>$row['height'], 'weight'=>$row['weight'], 'recipient_email'=>$user['email'], 'recipient_address'=>$user['address'], 'recipient_contact'=>$user['contact_info'], 'recipient_lname'=>$user['lastname'], 'recipient_fname'=>$user['firstname'], 'sales_id'=>$salesid, 'product_id'=>$row['product_id'], 'product_name'=>$row['product_name'], 'quantity'=>$row['quantity']]);
				
				
				}

$tax = 0;
 $coup_used = $coup_worth['coupth'];
			 if($coup_worth['coupth'] > 1){
			 $coup_dic = "
			 <h3 style='text-align:center;'>Your coupon was worth: <span style='color:#00CF00'>Kshs. ".number_format($coup_worth['coupth'], 2)."</span></h3>
				";
			
				 }
				 else{
				 $coup_dic = "
			 <h3 style='text-align:center;'>No coupon used</h3>
				";
				 }
				 
			$total = 0;
			$stmt = $conn->prepare("SELECT *, cart.id AS cartid, cart.price AS capr FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id=:user");
			$stmt->execute(['user'=>$user['id']]);
			foreach($stmt as $row2){
				$image = (!empty($row2['photo'])) ? 'https://tsavo.store/tsavo_vendor/images/'.$row2['photo'] : 'https://tsavo.store/tsavo_vendor/images/noimage.jpg';
				$subtotal = $row2['capr']*$row2['quantity'];
				$subtax = ($row2['capr']*$row2['quantity'])*0.05;
				$tax += $subtax;
				$seller = $row2['supp_email'];
				$delivery = $user['cost'];
				$delivery_all = $delivery;
				$total += $subtotal+$tax+$delivery_all;
			if($wallet > 1){
			$wall_color = '#F61A1A';
			}
			 else{
			 $wall_color = '#000000';
			  }
			 $message_b = "
				<h1 >A new order has been made from your shop.</h1>
				 <img src='https://www.linkpicture.com/q/tsavo.jpg' width='100%' style='border:none;border-radius:3px' />
				<p style='font-size:18px'>Hello ".$row2['supplier'].", confirmed an order has been made from your shop on the item below. kindly visit your Tsavo vendor account to process the order</p>
						<br />
						<h2 style='text-align:center;'>Purchased under order number : <span style='color:#DD45FF'>".$payid."</span></h2>
					<hr />
						<h3 style='text-align:center; text-decoration:underline;'>Item details</h3>
						
					<table width='100%' border='0' cellpadding='0' cellspacing='0' class='table table-bordered'>
					<thead>
					<th></th>
					<th></th>
					</thead>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>Product name:</td>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>".$row2['product_name']."</td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>Product code-slug:</td>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>".$row2['slug']."</td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>Quantity ordered:</td>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>".$row2['quantity']."</td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>Product size:</td>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>".$row2['size']."</td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>Product price:</td>
					<td style='border: 1px solid #56005E; padding: 0.2rem;'>Kshs. ".number_format($row2['capr'], 2)."</td>
					</tr>
					</table>
					<hr />
					<h3 style='text-align:center;'>Kindly process the item as soon as possible so as it gets shipped to the client soonest.</h3>
				
					<p><b style='color:#B340FF'>THANK YOU!!</b></p>
					
				";
			//mail to the seller
	//Load phpmailer
		    		
		    		$mail_b = new PHPMailer(true);                             
				    try {
				        //Server settings
						
				        $mail_b->isSMTP();                                     
				        $mail_b->Host = gethostbyname('mail.tsavo.store');                  
				        $mail_b->SMTPAuth = true;                               
				        $mail_b->Username = 'noreply@tsavo.store';     
				        $mail_b->Password = '@C3yaEp2@QXFtUt';                    
				        $mail_b->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail_b->SMTPSecure = 'tls';                           
				        $mail_b->Port = 587;                                   

				        $mail_b->setFrom('noreply@tsavo.store');
				        
				        //Recipients
				        $mail_b->addAddress($seller);              
				        $mail_b->addReplyTo('waroruaalex@tsavo.store');
				       
				        //Content
				        $mail_b->isHTML(true);                                  
				        $mail_b->Subject = 'New order from Tsavo shop!';
				        $mail_b->Body    = $message_b;

				        $mail_b->send();


				    } 
									
				    catch (Exception $e) {
				        $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail_b->ErrorInfo;
				        header('location: MyProfile');
				    }
		//end of mail to the seller			 
			if($wallet > $total){
			$new_total = 10;
			$wallet_bal = $wallet - $total + 10;
			 }
			 else{
			 $new_d_total = $total - $wallet;
			 $new_total = $new_d_total - $coup_used;
			 $wallet_bal = 0;
			  }
			  
				$checked .="
				<hr />
				<table width='100%' border='0' cellpadding='0' cellspacing='0' class='table table-bordered'>
		        			<thead>
							   <th style='border: 1px solid #56005E; padding: 0.5rem;'>Item</th>
		        				<th style='border: 1px solid #56005E; padding: 0.5rem;'>Price</th>
		        				<th style='border: 1px solid #56005E; padding: 0.5rem;'>Quantity</th>
		        				</thead>
							<tbody>
							<tr>
							<td style='border: 1px solid #56005E; padding: 0.5rem;'>".$row2['product_name']."</td>
						<td style='border: 1px solid #56005E; padding: 0.5rem;'>Kshs. ".number_format($row2['capr'], 2)."</td>
						<td style='border: 1px solid #56005E; padding: 0.5rem;'>
							".$row2['quantity']."
						</td>
						</tr>
		        			</tbody>
							</table>
						<table width='100%' border='0' cellpadding='0' cellspacing='0' class='table table-bordered'>
						<thead>
						<th></th>
						<th></th>
						</thead>
						<tr>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>Seller: </td>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>".$row2['supplier']."</td>
						</tr>
						
						</table>
				";
				//products remaining counter
				$prod_id = $row2['id'];
			$prod_quant = $row2['prod_qty'] - $row2['quantity'];
		$stmt = $conn->prepare("UPDATE products SET prod_qty=:product_counter WHERE id=:product_id");
		$stmt->execute(['product_id'=>$prod_id, 'product_counter'=>$prod_quant]);
		 
				
						}	
				if($wallet > 1){
				$wallet_update = "
				".$coup_dic."
				<br />
				<h3 style='text-align:center;'>Your Tsavo-wallet balance was: <span style='color:#00CF00'>".$wallet."</span></h3>
				<br />
				<h3 style='text-align:center;'>Your new Tsavo-wallet balance is: <span style='color:#00CF00'>".$wallet_bal."</span></h3>
				";
				
				}
				else{
				$wallet_update = "
				".$coup_dic."
				<br />
				<h3 style='text-align:center;'>You had no funds in your Tsavo-wallet to be used in the transaction.</h3>
				";
				}
       		
$chatApiToken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2MjczNDIxNDUsInVzZXIiOiIyNTQ3OTMwNjAxNjQifQ.268RjP9AlGatAA9Y9OIFVvyOVw0Odi57QOoSSfqvh6A"; // Get it from https://www.phphive.info/255/get-whatsapp-password/
$number = '254'.$user['contact_info']; // Number
$message_b = "Hello ".$user['firstname']."  ".$user['lastname'].". You have successfully placed your order under the order number ".$payid.". Visit your email ".$user['email']." to get a detailed infomation on your order details. "; // Message
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'http://chat-api.phphive.info/message/send/text',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS =>json_encode(array("jid"=> $number."@s.whatsapp.net", "message" => $message_b)),
CURLOPT_HTTPHEADER => array(
'Authorization: Bearer '.$chatApiToken,
'Content-Type: application/json'
),
));
$response = curl_exec($curl);
curl_close($curl);


				$message = "
			<div style='border-color:#FF1DFF; border-radius:7px'> 
                 <h1 >Your order has been successfully placed.</h1>
				 <img src='https://www.linkpicture.com/q/tsavo.jpg' width='100%' style='border:none;border-radius:3px' />
					<p style='font-size:18px'>Hello ".$row2['first_name'].", your order has been successfully placed. Regulary visit your Tsavo account to get your Tracking number.</p>
					<br />
						<h2 style='text-align:center;'>Order number : <span style='color:#DD45FF'>".$payid."</span></h2>
					 
						<hr />
						<h3 style='text-align:center; text-decoration:underline;'>Items Purchased</h3>
						
						".$checked."
						<hr />
						<h3 style='text-align:center; text-decoration:underline;'>Transaction details</h3>
						<table width='100%' border='0' cellpadding='0' cellspacing='0' class='table table-bordered'>
						<thead>
						<th></th>
						<th></th>
						</thead>
						<tr>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>Sub-total:</td>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>Kshs. ".number_format($subtotal, 2)."</td>
						</tr>
						<tr>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>Delivery Cost:</td>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>Kshs. ".number_format($delivery, 2)."</td>
						</tr>
						<tr>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>Tax:</td>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>Kshs. ".number_format($tax, 2)."</td>
						</tr>
						<tr>
						<td></td>
						<td style='border: 1px solid #56005E; padding: 0.2rem;'>Kshs. ".number_format($total, 2)."</td>
						</tr>
						</table>
						<hr />
						".$wallet_update."
						
						<br />
						<h3 style='text-align:center;'>You have paid : <span style='color:#DD45FF'>Kshs. ".number_format($new_total, 2)."</span></h3>
						
					   <p><b style='color:#B340FF'>THANK YOU!!</b></p>
					</div>
					";
				
				$stmt = $conn->prepare("DELETE FROM cart WHERE user_id=:user_id");
				$stmt->execute(['user_id'=>$user['id']]);
				
							if($coup_worth['coupth'] < $new_total){
		$stmt = $conn->prepare("UPDATE users SET discount=:user_dis WHERE id=:user_id");
		$stmt->execute(['user_dis'=>"", 'user_id'=>$user['id']]);
		
		$stmt = $conn->prepare("DELETE FROM coupon WHERE discount=:coup_id");
		$stmt->execute(['coup_id'=>$coup_worth['coupth']]);
			
				}
        $stmt = $conn->prepare("DELETE FROM transaction_code WHERE user_id=:transaction_user");
		$stmt->execute(['transaction_user'=>$user['id']]);
			
		
					
		$stmt = $conn->prepare("UPDATE users SET wallet=:wallet_bal WHERE id=:user_id");
		$stmt->execute(['wallet_bal'=>$wallet_bal, 'user_id'=>$user['id']]);
	   
					
		    		$mail = new PHPMailer(true);                             
				    try {
				        //Server settings
						
				        $mail->isSMTP();                                     
				        $mail->Host = gethostbyname('mail.tsavo.store');                  
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

				        $mail->setFrom('noreply@tsavo.store');
				        
				        //Recipients
				        $mail->addAddress($buyer);              
				        $mail->addReplyTo('waroruaalex@tsavo.store');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'Order Placed Successfully!';
				        $mail->Body    = $message;

				        $mail->send();


				    } 
									
				    catch (Exception $e) {
				        $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
				        header('location: MyProfile');
				    }
				
				$_SESSION['success'] = 'Items successfully purchased. Thank you.';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
       
		$pdo->close();
	}
	
	header('location: MyProfile');
	}	
		else{
		header('location: TsavoHome');
		}
		
setcookie("payAuth", "", time() - 3600);
?>