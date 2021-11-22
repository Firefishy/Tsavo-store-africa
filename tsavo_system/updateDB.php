<?php
	// check this file's MD5 to make sure it wasn't called before
	$prevMD5 = @file_get_contents(dirname(__FILE__) . '/setup.md5');
	$thisMD5 = md5(@file_get_contents(dirname(__FILE__) . '/updateDB.php'));

	// check if setup already run
	if($thisMD5 != $prevMD5) {
		// $silent is set if this file is included from setup.php
		if(!isset($silent)) $silent = true;

		// set up tables
		setupTable(
			'system_setting', " 
			CREATE TABLE IF NOT EXISTS `system_setting` ( 
				`flash_sale` VARCHAR(40) NULL,
				`date` DATE NULL,
				`just_sold` VARCHAR(40) NULL,
				`js_date` DATE NULL,
				`recommended` VARCHAR(40) NULL,
				`r_date` DATE NULL,
				`latest_product` VARCHAR(40) NULL,
				`lp_date` DATE NULL,
				`prods_1` VARCHAR(200) NULL,
				`p1_date` DATE NULL,
				`id` VARCHAR(40) NOT NULL,
				PRIMARY KEY (`id`),
				`prods_2` VARCHAR(40) NULL,
				`p2_date` DATE NULL,
				`prods_3` VARCHAR(40) NULL,
				`p3_date` DATE NULL,
				`location` VARCHAR(100) NULL,
				`phone` VARCHAR(40) NULL,
				`email` VARCHAR(80) NULL,
				`system_bg` TEXT NULL,
				`hidder` INT(10) UNSIGNED NULL,
				`unhidder` INT(10) UNSIGNED NULL,
				`new_script` TEXT NULL,
				`new_script2` TEXT NULL,
				`new_script3` TEXT NULL,
				`new_script4` TEXT NULL,
				`new_script5` TEXT NULL,
				`new_script6` TEXT NULL,
				`new_script7` TEXT NULL,
				`new_script8` TEXT NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'supplier', " 
			CREATE TABLE IF NOT EXISTS `supplier` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`shop_id` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'products', " 
			CREATE TABLE IF NOT EXISTS `products` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`promote_class` VARCHAR(40) NULL,
				`promote_code` VARCHAR(40) NULL,
				`slug` VARCHAR(40) NULL,
				`name` VARCHAR(40) NULL,
				`seller_sku` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'details', " 
			CREATE TABLE IF NOT EXISTS `details` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`payment` VARCHAR(40) NULL DEFAULT 'Not Paid',
				`supp_conf` VARCHAR(40) NULL,
				`reference_number` VARCHAR(40) NULL,
				`product_name` VARCHAR(40) NULL,
				`supp_name` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'category', " 
			CREATE TABLE IF NOT EXISTS `category` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`cat_ban` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);



		// save MD5
		@file_put_contents(dirname(__FILE__) . '/setup.md5', $thisMD5);
	}


	function setupIndexes($tableName, $arrFields) {
		if(!is_array($arrFields) || !count($arrFields)) return false;

		foreach($arrFields as $fieldName) {
			if(!$res = @db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")) continue;
			if(!$row = @db_fetch_assoc($res)) continue;
			if($row['Key']) continue;

			@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
		}
	}


	function setupTable($tableName, $createSQL = '', $silent = true, $arrAlter = '') {
		global $Translation;
		$oldTableName = '';
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)) {
			$matches = [];
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/i", $arrAlter[0], $matches)) {
				$oldTableName = $matches[1];
			}
		}

		if($res = @db_query("SELECT COUNT(1) FROM `$tableName`")) { // table already exists
			if($row = @db_fetch_array($res)) {
				echo str_replace(['<TableName>', '<NumRecords>'], [$tableName, $row[0]], $Translation['table exists']);
				if(is_array($arrAlter)) {
					echo '<br>';
					foreach($arrAlter as $alter) {
						if($alter != '') {
							echo "$alter ... ";
							if(!@db_query($alter)) {
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							} else {
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				} else {
					echo $Translation['table uptodate'];
				}
			} else {
				echo str_replace('<TableName>', $tableName, $Translation['couldnt count']);
			}
		} else { // given tableName doesn't exist

			if($oldTableName != '') { // if we have a table rename query
				if($ro = @db_query("SELECT COUNT(1) FROM `$oldTableName`")) { // if old table exists, rename it.
					$renameQuery = array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)) {
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					} else {
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				} else { // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			} else { // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)) {
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';
				} else {
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}
		}

		echo '</div>';

		$out = ob_get_clean();
		if(!$silent) echo $out;
	}
