<?php 
include 'db_connect.php';
$ids = $_GET['ids'] ;
$details = $conn->query("SELECT * FROM details where id in ($ids) ");
$branch = array();
 $branches = $conn->query("SELECT *,concat(zonee,', ',city,', ',state,', ',zip_code,', ',country) as address FROM branches where id in (SELECT from_branch_id FROM details where id in ($ids) ) or id in (SELECT to_branch_id FROM details where id in ($ids) ) ");
    while($row = $branches->fetch_assoc()):
    	$branch[$row['id']] = $row['address'];
	endwhile;

while($row = $details->fetch_assoc()):
?>
<table width="100%">
	<tr>
		<td colspan="3">Tracking Number : <b><?php echo $row['reference_number'] ?></b></td>
	</tr>
	<tr>
		<td width="33.33%">
			<p><b>Package name: <?php echo ucwords($row['product_name']); ?></b></p>
		</td>
		<td width="33.33%">
			<p><b>Recipient: <?php echo ucwords($row['recipient_fname']); ?></b></p>
		</td>
		<td width="33.33%"></td>
	</tr>
</table>
<?php endwhile; ?>

