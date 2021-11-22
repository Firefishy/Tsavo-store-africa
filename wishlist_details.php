
<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	$output = '';

	if(isset($_SESSION['user'])){
		if(isset($_SESSION['wishlist'])){
			foreach($_SESSION['wishlist'] as $row){
				$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM wishlist WHERE user_id=:user_id AND product_id=:product_id");
				$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$row['productid']]);
				$crow = $stmt->fetch();
				if($crow['numrows'] < 1){
					$stmt = $conn->prepare("INSERT INTO wishlist (user_id, product_id) VALUES (:user_id, :product_id)");
					$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$row['productid']]);
				}
				else{
					$stmt = $conn->prepare("UPDATE wishlist SET quantity=:quantity WHERE user_id=:user_id AND product_id=:product_id");
					$stmt->execute(['quantity'=>$row['quantity'], 'user_id'=>$user['id'], 'product_id'=>$row['productid']]);
				}
			}
			unset($_SESSION['wishlist']);
		}

		try{
		$tax = 0;
			$total = 0;
			$stmt = $conn->prepare("SELECT *, wishlist.id AS wishlistid FROM wishlist LEFT JOIN products ON products.id=wishlist.product_id WHERE user_id=:user");
			$stmt->execute(['user'=>$user['id']]);
			foreach($stmt as $row){
				$image = (!empty($row['photo'])) ? 'tsavo_vendor/images/'.$row['photo'] : 'images/noimage.jpg';
				$subtotal = $row['price']*$row['quantity'];
				$subtax = ($row['price']*$row['quantity'])*0.1;
				$tax += $subtax;
				$total += $subtotal+$tax;
				$output .= "
					<tr>
						<td><button type='button' data-id='".$row['wishlistid']."' class='btn btn-danger btn-flat wishlist_delete'><i class='fa fa-trash'></i>Remove</button></td>
						<td><img src='".$image."' width='30px' height='30px' class='booo'></td>
						<td>".$row['name']."</td>
						<td>Kshs. ".number_format($row['price'], 2)."</td>
						<td>
							<a href='Item?product=".$row['slug']." '><button class='btn btn-primary'><i class='fa fa-shopping-basket' aria-hidden='true'></i>Buy Now</button></a>
						</td>
						
					</tr>
				";
			}
			$output .= "
			<tr>
					
				<tr>
			";

		}
		catch(PDOException $e){
			$output .= $e->getMessage();
		}

	}
	else{
		if(count($_SESSION['wishlist']) != 0){
			$total = 0;
			foreach($_SESSION['wishlist'] as $row){
				$stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname FROM products LEFT JOIN category ON category.id=products.category_id WHERE products.id=:id");
				$stmt->execute(['id'=>$row['productid']]);
				$product = $stmt->fetch();
				$image = (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg';
				$subtotal = $row['price']*$row['quantity'];
				$total += $subtotal;
			    $output .= "
					<tr>
						<td><button type='button' data-id='".$row['productid']."' class='btn btn-danger btn-flat wishlist_delete'><i class='fa fa-remove'></i></button></td>
						<td><img src='".$image."' width='30px' height='30px' class='booo'></td>
						<td>".$product['name']."</td>
						<td>Kshs. ".number_format($product['price'], 2)."</td>
						<td class='input-group'>
							<p>Wishlist</p>
						</td>
						<td>Kshs. ".number_format($subtotal, 2)."</td>
					</tr>
				";
				
			}

			$output .= "
			
				<tr>
					
				<tr>
			";
		}

		else{
			$output .= "
				<tr>
					<td colspan='6' align='center'>Wishlist is empty</td>
				<tr>
			";
		}
		
	}

	$pdo->close();
	echo json_encode($output);

?>


