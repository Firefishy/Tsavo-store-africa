<?php
	include 'includes/session.php';

	if(isset($_SESSION['user'])){
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM wishlist LEFT JOIN products on products.id=wishlist.product_id WHERE user_id=:user_id");
		$stmt->execute(['user_id'=>$user['id']]);

		$total = 0;
		foreach($stmt as $row){
			$subtotal = $row['price'] * $row['quantity'];
			$final = $subtotal * 0.05;
			$total += $subtotal + $final;
		}

		$pdo->close();

		echo json_encode($total);
	}
?>