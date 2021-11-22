
<?php
	include 'includes/session.php';
	$conn = $pdo->open();

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
			$stmt = $conn->prepare("SELECT *, cart.id AS cartid, cart.price AS capr FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id=:user");
			$stmt->execute(['user'=>$user['id']]);
			foreach($stmt as $row){
				
				$wallet = $user['wallet'];
				$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'tsavo_vendor/images/noimage.jpg';
				$subtotal = $row['capr']*$row['quantity'];
				$subtax = ($row['capr']*$row['quantity'])*0.05;
				$tax += $subtax;
				$delivery = $user['cost'];
				$delivery_all = $delivery;
				$all_total = $subtotal+$tax+$delivery_all;
				$count_limit = $row['prod_qty'] - 1;
					
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
			 if($row['quantity'] < $row['prod_qty']){
			 $quant_button = "<button type='button' id='add' class='btn btn-default btn-flat add' data-id='".$row['cartid']."'><i class='fa fa-plus'></i></button>";
			 $quant_add = "<input type='number' class='form-control' value='".$row['quantity']."' id='qty_".$row['cartid']."' max='".$count_limit."' readonly='readonly'>";
			 $quant_button_sub = "<button type='button' id='minus' class='btn btn-default btn-flat minus' data-id='".$row['cartid']."'><i class='fa fa-minus'></i></button>";
			  }
			 else{
			 $quant_button = "<button type='button' id='add' class='btn btn-default btn-flat add' data-id='".$row['cartid']."' disabled='disabled'><i class='fa fa-plus'></i></button>";
			 $quant_add = "<input type='text' class='form-control' value='".$row['prod_qty']."' id='qty_".$row['cartid']."' readonly='readonly'> ";
			 $quant_button_sub = "<button type='button' id='minus' class='btn btn-default btn-flat minus' data-id='".$row['cartid']."' ><i class='fa fa-minus'></i></button>";
			 }
				$output .= "
					<tr>
						<td><button type='button' data-id='".$row['cartid']."' class='btn btn-danger btn-flat cart_delete'><i class='fa fa-remove'></i></button></td>
						<td><img src='".$image."' width='30px' height='30px' class='booo'></td>
						<td>".$row['name']."</td>
						<td>Kshs. ".number_format($row['capr'], 2)."</td>
						<td class='input-group'>
							<span class='input-group-btn'>
            					".$quant_button_sub."
								</span>
            				".$quant_add."
							<span class='input-group-btn'>
				                ".$quant_button."
				            </span>
						</td>
						<td>Kshs. ".number_format($subtotal, 2)."</td>
					</tr>
				";
			}
			$output .= "
			<tr>
					<td colspan='5' align='right'><b>VAT</b></td>
					<td><b>Kshs. ".number_format($tax, 2)."</b></td>
				<tr>
				<tr>
					<td colspan='5' align='right'>
					<b>Zonal Delivery Fee</b><br />
					<small><a href='MyProfile'>Change zone</a></small>
					</td>
					<td><b>Kshs. ".number_format($delivery_all, 2)."</b></td>
				<tr>
				<tr>
				
				</tr>
				<tr>
					<td colspan='5' align='right'><b>Wallet Balance</b></td>
					<td><b style='color:#18C251'>Kshs. ".number_format($wallet, 2)."</b></td>
				<tr>
				<tr>
					<td colspan='5' align='right'><b>Total</b></td>
					<td><b>Kshs. ".number_format($total, 2)."</b></td>
				<tr>
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
				 if($product['quantity'] < $product['prod_qty']){
			 $quant_button = "<button type='button' id='add' class='btn btn-default btn-flat add' data-id='".$row['cartid']."'><i class='fa fa-plus'></i></button>";
			 $quant_add = "<input type='number' class='form-control' value='".$row['quantity']."' id='qty_".$row['cartid']."' max='".$count_limit."' readonly='readonly'>";
			 $quant_button_sub = "<button type='button' id='minus' class='btn btn-default btn-flat minus' data-id='".$row['cartid']."'><i class='fa fa-minus'></i></button>";
			  }
			 else{
			 $quant_button = "<button type='button' id='add' class='btn btn-default btn-flat add' data-id='".$row['cartid']."' disabled='disabled'><i class='fa fa-plus'></i></button>";
			 $quant_add = "<input type='text' class='form-control' value='".$row['prod_qty']."' id='qty_".$row['cartid']."' readonly='readonly'> ";
			 $quant_button_sub = "<button type='button' id='minus' class='btn btn-default btn-flat minus' data-id='".$row['cartid']."' ><i class='fa fa-minus'></i></button>";
			 }
				$image = (!empty($product['photo'])) ? 'tsavo_vendor/images/'.$product['photo'] : 'tsavo_vendor/images/noimage.jpg';
				$subtotal = $product['price']*$row['quantity'];
				$subtax = ($product['price']*$row['quantity'])*0.05;
				$tax += $subtax;
				$total += $subtotal + $tax;
			    $output .= "
					<tr>
						<td><button type='button' data-id='".$row['cartid']."' class='btn btn-danger btn-flat cart_delete'><i class='fa fa-remove'></i></button></td>
						<td><img src='".$image."' width='30px' height='30px' class='booo'></td>
						<td>".$product['name']."</td>
						<td>Kshs. ".number_format($product['price'], 2)."</td>
						<td class='input-group'>
							<span class='input-group-btn'>
            					".$quant_button_sub."
								</span>
            				".$quant_add."
							<span class='input-group-btn'>
				                ".$quant_button."
				            </span>
						</td>
						<td>Kshs. ".number_format($subtotal, 2)."</td>
					</tr>
				";
				
			}

			$output .= "
			
				<tr>
					<td colspan='5' align='right'><b>VAT</b></td>
					<td><b>Kshs. ".number_format($tax, 2)."</b></td>
				<tr>
				<tr>
					
				<tr>
				<tr>
				
				</tr>
				<tr>
					<td colspan='5' align='right'><b>Total</b></td>
					<td><b>Kshs. ".number_format($total, 2)."</b></td>
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

