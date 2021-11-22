<?php
	include 'includes/session.php';
	//Coupon worth
$stmt = $conn->prepare("SELECT *, coupon.discount AS coupth FROM users LEFT JOIN coupon ON coupon.coupon_code=users.discount WHERE users.email=:user_mail");
				$stmt->execute(['user_mail'=>$user['email']]);
				$coup_worth = $stmt->fetch();
		
	
	if(isset($_SESSION['user'])){
		$conn = $pdo->open();
$code_aa = time();		
$trans_ref = md5($code_aa);
$trans_add = $trans_ref + $trans_ref;	        
$secure_auth = $trans_add;	

$set_a='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$authenticater=substr(str_shuffle($set_a), 0, 12);

		$stmt = $conn->prepare("SELECT *, cart.price AS capr FROM cart LEFT JOIN products on products.id=cart.product_id WHERE user_id=:user_id");
		$stmt->execute(['user_id'=>$user['id']]);
$delivery_all = $user['cost'];
		$total = 0;
		foreach($stmt as $row){
		    
			$subtotal = $row['capr'] * $row['quantity'];
			$agg_total = $subtotal;
			$adder += $agg_total;
			$tax = $adder*0.05;
		}
		$wallet = $user['wallet'];
		
	$all_totall = $adder + $tax+ $delivery_all;
		//Wallet calculation		
		if($wallet > $all_totall){
			$new_total = 10;
			$wallet_bal = $wallet - $all_totall + 10;
			 }
			 else{
			 $new_total = $all_totall - $wallet;
			 $wallet_bal = 0;
			  }
			  
			  
//Total after coupon
if($new_total > $coup_worth['coupth']){
$total = $new_total - $coup_worth['coupth'];

}
else{
$total = $new_total;

}  
$secure_auth = $trans_add;	
$usid = $user['id'];

			$mail = $user['email'];
			$phone = $user['contact_info'];
			$namea = $user['firstname'];
			$nameb = $user['lastname'];
			$info = array(
			array($mail),
			array($total),
			array($namea),
			array($nameb),
			array($phone),
			array($trans_ref),
			array($authenticater)
			
			);
	

		echo json_encode($info);
	$pdo->close();	
		
	}
	
	$conn = $pdo->open();
$stmt_b = $conn->prepare("INSERT INTO transaction_code (code, user_id, amount) VALUES (:code, :user_id, :amount)");
$stmt_b->execute(['code'=>$trans_ref, 'user_id'=>$usid, 'amount'=>$total]);
$pdo->close();	
?>