<?php
	include 'includes/session.php';

	if(isset($_SESSION['user'])){
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM cart LEFT JOIN products on products.id=cart.product_id WHERE user_id=:user_id");
		$stmt->execute(['user_id'=>$user['id']]);

		$total = 0;
		foreach($stmt as $row){
		    $wallet = $user['wallet'];
			$subtotal = $row['price'] * $row['quantity'];
			$subtax = ($row['price']*$row['quantity'])*0.05;
			$tax = $subtax;
			$delivery = $user['cost'];
			$delivery_all = $delivery;
			$final = $subtotal * 0.05;
			$all_total = $subtotal+$tax+$delivery_all;
					
			if($wallet > 1){
			$wall_color = '#F61A1A';
			}
			 else{
			 $wall_color = '#000000';
			  }
			 
			if($wallet > $all_total){
			$total += 10;
			$wallet_bal = $wallet - $all_total + 10;
			 }
			 else{
			 $total += $all_total - $wallet;
			 $wallet_bal = 0;
			  }
			$mail = $user['email'];
			$phone = $user['contact_info'];
			$namea = $user['firstname'];
			$nameb = $user['lastname'];
			$info = array(
			array($mail),
			array($total),
			array($namea),
			array($nameb),
			array($phone)
			
			);
		}

		$pdo->close();

		echo json_encode($info);
		
		
	}
?>