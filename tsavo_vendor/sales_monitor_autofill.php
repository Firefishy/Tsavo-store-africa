<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("$currDir/lib.php");

	handle_maintenance();

	header('Content-type: text/javascript; charset=' . datalist_db_encoding);

	$table_perms = getTablePermissions('sales_monitor');
	if(!$table_perms['access']) die('// Access denied!');

	$mfk = $_GET['mfk'];
	$id = makeSafe($_GET['id']);
	$rnd1 = intval($_GET['rnd1']); if(!$rnd1) $rnd1 = '';

	if(!$mfk) {
		die('// No js code available!');
	}

	switch($mfk) {

		case 'product_id':
			if(!$id) {
				?>
				$j('#product_name<?php echo $rnd1; ?>').html('&nbsp;');
				<?php
				break;
			}
			$res = sql("SELECT `details`.`id` as 'id', `details`.`supp_conf` as 'supp_conf', IF(    CHAR_LENGTH(`products1`.`supplier`) || CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`supplier`, `products1`.`id`), '') as 'supp_name', `details`.`details` as 'details', IF(    CHAR_LENGTH(`sales1`.`id`), CONCAT_WS('',   `sales1`.`id`), '') as 'sales_id', IF(    CHAR_LENGTH(`sales1`.`pay_id`), CONCAT_WS('',   `sales1`.`pay_id`), '') as 'payy_id', `details`.`reference_number` as 'reference_number', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'product_id', `details`.`product_name` as 'product_name', `details`.`quantity` as 'quantity', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'size', if(`details`.`sales_date`,date_format(`details`.`sales_date`,'%m/%d/%Y'),'') as 'sales_date', `details`.`user_id` as 'user_id', `details`.`recipient_fname` as 'recipient_fname', `details`.`recipient_lname` as 'recipient_lname', `details`.`recipient_contact` as 'recipient_contact', `details`.`recipient_email` as 'recipient_email', `details`.`recipient_address` as 'recipient_address', `details`.`weight` as 'weight', `details`.`length` as 'length', `details`.`width` as 'width', `details`.`height` as 'height', `details`.`price` as 'price', `details`.`pus` as 'pus', `details`.`last_edit` as 'last_edit', `details`.`editor` as 'editor', `details`.`conf_id` as 'conf_id', `details`.`from_branch_id` as 'from_branch_id', `details`.`to_branch_id` as 'to_branch_id', `details`.`type` as 'type', `details`.`status` as 'status', `details`.`total_sales` as 'total_sales' FROM `details` LEFT JOIN `sales` as sales1 ON `sales1`.`id`=`details`.`sales_id` LEFT JOIN `products` as products1 ON `products1`.`id`=`details`.`product_id`  WHERE `details`.`id`='{$id}' limit 1", $eo);
			$row = db_fetch_assoc($res);
			?>
			$j('#product_name<?php echo $rnd1; ?>').html('<?php echo addslashes(str_replace(array("\r", "\n"), '', nl2br($row['id']))); ?>&nbsp;');
			<?php
			break;


	}

?>