<?php
	include 'includes/session.php';

	$id = $_POST['id'];

	$conn = $pdo->open();

	$output = array('list'=>'');

	$stmt = $conn->prepare("SELECT *, details.price AS detpr FROM details LEFT JOIN products ON products.id=details.product_id LEFT JOIN sales ON sales.id=details.sales_id WHERE details.sales_id=:id");
	$stmt->execute(['id'=>$id]);

	$total = 0;
	foreach($stmt as $row){
		$output['transaction'] = $row['pay_id'];
		$output['date'] = date('M d, Y', strtotime($row['sales_day']));
		$subtotal = $row['detpr']*$row['quantity'];
		$total += $subtotal;
		$output['list'] .= "
			<tr class='prepend_items'>
				<td>".$row['name']."</td>
				<td>".$row['details']."</td>
				<td>Kshs. ".number_format($row['detpr'], 2)."</td>
				<td>".$row['quantity']."</td>
				<td>Kshs. ".number_format($subtotal, 2)."</td>
			</tr>
			<tr class='prepend_items'>
			<td><b>Tracking Number</b></td>
			<td><b style='background-color:#BF82FF; border-radius:2px; text-align:center;'>".$row['reference_number']."</b></td>
			</tr>
		";
	}
	
	$output['total'] = '<b>Kshs. '.number_format($total, 2).'<b>';
	$pdo->close();
	echo json_encode($output);

?>