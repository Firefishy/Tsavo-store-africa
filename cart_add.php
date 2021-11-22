<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	$output = array('error'=>false);

	$id = $_POST['id'];
	$quantity = $_POST['quantity'];
	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	$weight = $_POST['weight'];
	$length = $_POST['length'];
	$width = $_POST['width'];
	$height = $_POST['height'];
	$variation = $_POST['select'];
	
	if(isset($_SESSION['user'])){
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
		$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$id]);
		$row = $stmt->fetch();
		if($row['numrows'] < 1){
			try{
				$stmt = $conn->prepare("INSERT INTO cart (field1, user_email, zone_pus, first_name, last_name, user_cont, user_address, product_name, user_id, product_id, quantity, price, weight, length, width, height) VALUES (:field1, :user_email, :zone_pus, :first_name, :last_name, :user_cont, :user_address, :product_name, :user_id, :product_id, :quantity, :price, :weight, :length, :width, :height)");
				$stmt->execute(['field1'=>$variation, 'user_email'=>$user['email'], 'zone_pus'=>$user['zone'], 'first_name'=>$user['firstname'], 'last_name'=>$user['lastname'], 'user_cont'=>$user['contact_info'], 'user_address'=>$user['address'], 'product_name'=>$product_name, 'user_id'=>$user['id'], 'product_id'=>$id, 'quantity'=>$quantity, 'price'=>$price,  'weight'=>$weight, 'length'=>$length, 'width'=>$width, 'height'=>$height]);
				$output['message'] = 'Item added to cart';
				
			}
			catch(PDOException $e){
				$output['error'] = true;
				$output['message'] = $e->getMessage();
			}
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Product already in cart';
		}
	}
	else{
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}

		$exist = array();

		foreach($_SESSION['cart'] as $row){
			array_push($exist, $row['productid']);
		}

		if(in_array($id, $exist)){
			$output['error'] = true;
			$output['message'] = 'Product already in cart';
		}
		else{
			$data['productid'] = $id;
			$data['quantity'] = $quantity;

			if(array_push($_SESSION['cart'], $data)){
				$output['message'] = 'Item added to cart';
			}
			else{
				$output['error'] = true;
				$output['message'] = 'Cannot add item to cart';
			}
		}

	}

	$pdo->close();
	echo json_encode($output);

?>