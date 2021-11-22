<?php
	include 'includes/session.php';
	$conn = $pdo->open();
$delivery = $user['cost'];
	$output = '';

	if(isset($_SESSION['user'])){
		if(isset($_SESSION['cart'])){
			foreach($_SESSION['cart'] as $row){
				$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
				$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$row['productid']]);
				$crow = $stmt->fetch();
				if($crow['numrows'] < 1){
					$stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
					$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$row['productid'], 'quantity'=>$row['quantity']]);
				}
				else{
					$stmt = $conn->prepare("UPDATE cart SET quantity=:quantity WHERE user_id=:user_id AND product_id=:product_id");
					$stmt->execute(['quantity'=>$row['quantity'], 'user_id'=>$user['id'], 'product_id'=>$row['productid']]);
				}
			}
			unset($_SESSION['cart']);
		}
   try{
		$tax = 0;
			$total = 0;
			
			$wallet = $user['wallet'];
			$stmt = $conn->prepare("SELECT *, cart.id AS cartid, cart.price AS capr FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id=:user");
			$stmt->execute(['user'=>$user['id']]);
			
			foreach($stmt as $row){
				$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/noimage.jpg';
				$subtotal = $row['capr']*$row['quantity'];
				
				$costs = $subtotal;
				$deli = $user['cost'];
				
				$total += $costs;
				$net = number_format ($total, 0);
				$mail = $user['email'];
				$tax = $total*0.05;
				$totall = $total  + $delivery + $tax;
				
			if($wallet > 1){
			$wall_color = '#F61A1A';
			}
			 else{
			 $wall_color = '#000000';
			  }
			 
			if($wallet > $totall){
			$new_total = 10;
			$wallet_bal = $wallet - $totall + 10;
			 }
			 else{
			 $new_total = $totall - $wallet;
			 $wallet_bal = 0;
			  }
//coupon validation
                $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM coupon LEFT JOIN users ON coupon.coupon_code=users.discount WHERE users.email=:user_mail");
				$stmt->execute(['user_mail'=>$user['email']]);
				$coup = $stmt->fetch();
				if($coup['numrows'] < 1){
					$coup_status = "<b style='color:#FF0000'>Invalid or no Coupon</b>";
					}
				else{
					$coup_status = "<b style='color:#00DA04'>Valid</b>";
					}
//Coupon worth
$stmt = $conn->prepare("SELECT *, coupon.discount AS coupth FROM users LEFT JOIN coupon ON coupon.coupon_code=users.discount WHERE users.email=:user_mail");
				$stmt->execute(['user_mail'=>$user['email']]);
				$coup_worth = $stmt->fetch();
//Total after coupon

if($coup_worth['coupth'] > $new_total){
$final_total = $new_total;
$coup_error = "<tr><td><b style='color:#FF0000'>Cannot use coupon. The coupon is higher than the total!</b></td></tr>";
}
else{
$final_total = $new_total - $coup_worth['coupth'];
$coup_error = "<tr><td><b style='color:#00DA04'>Coupon applied!</b></td></tr>";

}			
				
			$output .= "
				
										
					<tr>
					<td></td>
					<td></td>
					<td></td>
							<td><img src='".$image."' width='30px' height='30px' class='booo'></td>
						<td>".$row['name']."</td>
						<td>Kshs. ".number_format($row['capr'], 2)."</td>
						
						<td>".$row['quantity']."</td>
						<td>Kshs. ".number_format($subtotal, 2)."</td>
					</tr>
				";
			}
			$output .= "
			<tr>
			<td><b>Your Email:</b></td>
				<td>".$user['email']."</td>
			
					<td colspan='5' align='right'><b>VAT</b></td>
					<td><b>Kshs. ".number_format($tax, 2)."</b></td>
				<tr>
				<tr>
				<td><b>Phone Number</b></td>
				<td>".$user['contact_info']."</td>
					<td colspan='5' align='right'>
					<b>Zonal Delivery Fee</b><br />
					</td>
					<td><b>Kshs. ".number_format($deli, 2)."</b></td>
				<tr>
				<tr>
				<td><b>Address:</b></td>
				<td>".$user['address']."</td>
				
					<td colspan='5' align='right'><b>Total</b></td>
					<td><b>Kshs. ".number_format($totall, 2)."</b></td>
				<tr>
				<tr>
				<td><b>Your Zone:</b></td>
				<td>".$user['zone']."</td>
				
				<td colspan='5' align='right'><b>Wallet Balance</b></td>
					<td><b style='color:#18C251'>Kshs. ".number_format($wallet, 2)."</b></td>
				</tr>
				<tr>
				<td><b>Coupon</b></td>
				<td>".$coup_status."</td>
				
				<td colspan='5' align='right'><b>Coupon worth</b></td>
					<td><b style='color:#18C251'>Kshs. ".number_format($coup_worth['coupth'], 2)."</b></td>
				</tr>
				
				<tr>
				<td></td>
				<td></td>
				<td colspan='5' align='right'><b>New Total</b></td>
					<td><b style='color:".$wall_color."'>Kshs. ".number_format($final_total, 2)."</b></td>
				</tr>
				".$coup_error."
				
			";
		

		}
		catch(PDOException $e){
			$output .= $e->getMessage();
		}

	}
	else{
		if(count($_SESSION['cart']) != 0){
			$total = 0;
			foreach($_SESSION['cart'] as $row){
				$stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname FROM products LEFT JOIN category ON category.id=products.category_id WHERE products.id=:id");
				$stmt->execute(['id'=>$row['productid']]);
				$product = $stmt->fetch();
				$image = (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg';
				$subtotal = $row['price']*$row['quantity'];
				$total += $subtotal;
			    $output .= "
					<tr>
						<td><button type='button' data-id='".$row['productid']."' class='btn btn-danger btn-flat cart_delete'><i class='fa fa-remove'></i></button></td>
						<td><img src='".$image."' width='50px' height='30px' class='booo'></td>
						<td>".$product['name']."</td>
						<td>Kshs. ".number_format($product['price'], 2)."</td>
						<td class='input-group'>
							<span class='input-group-btn'>
            					<button type='button' id='minus' class='btn btn-default btn-flat minus' data-id='".$row['productid']."'><i class='fa fa-minus'></i></button>
            				</span>
            				<input type='text' class='form-control' value='".$row['quantity']."' id='qty_".$row['productid']."'>
				            <span class='input-group-btn'>
				                <button type='button' id='add' class='btn btn-default btn-flat add' data-id='".$row['productid']."'><i class='fa fa-plus'></i>
				                </button>
				            </span>
						</td>
						<td>Kshs. ".number_format($subtotal, 2)."</td>
					</tr>
				";
				
			}

			$output .= "
			
				<tr>
					<td colspan='5' align='right'><b>Total</b></td>
					<td><b>Kshs. ".number_format($net, 2)."</b></td>
				<tr>
			";
		}

		else{
			$output .= "
				<tr>
					<td colspan='6' align='center'>Shopping cart empty</td>
				<tr>
			";
		}
		
	}

	$pdo->close();
	echo json_encode($output);

?>

