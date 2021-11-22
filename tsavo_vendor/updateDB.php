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
			'sales', " 
			CREATE TABLE IF NOT EXISTS `sales` ( 
				`id` INT(11) NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`user_id` INT(11) NULL,
				`pay_id` VARCHAR(50) NULL,
				`sales_day` DATE NULL,
				`first_name` INT(11) NULL,
				`last_name` INT(11) NULL,
				`email` INT(11) NULL,
				`phone` INT(11) NULL,
				`address` INT(11) NULL,
				`zone` INT(11) NULL,
				`zone_fee` INT(11) NULL DEFAULT '0.00',
				`generated_by` VARCHAR(40) NULL,
				`confirmation_id` VARCHAR(40) NULL,
				`approval` VARCHAR(40) NULL DEFAULT 'Not Approved'
			) CHARSET utf8",
			$silent
		);
		setupIndexes('sales', ['user_id',]);

		setupTable(
			'products', " 
			CREATE TABLE IF NOT EXISTS `products` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`supp_id` VARCHAR(40) NOT NULL,
				`supplier` VARCHAR(40) NULL,
				`supp_email` VARCHAR(40) NOT NULL,
				`supp_cont` VARCHAR(40) NOT NULL,
				`category` INT(11) NULL,
				`category_id` INT(11) NULL,
				`ship_orig` VARCHAR(40) NOT NULL,
				`slug` VARCHAR(40) NULL,
				`prod_qty` INT(50) NOT NULL,
				`barcode` INT(100) NOT NULL,
				`name` VARCHAR(60) NOT NULL,
				`brand` VARCHAR(40) NOT NULL,
				`photo` VARCHAR(40) NOT NULL,
				`size` VARCHAR(40) NOT NULL,
				`material` VARCHAR(40) NULL,
				`length` INT NOT NULL,
				`width` INT(40) NOT NULL,
				`height` INT NOT NULL,
				`weight` INT(40) NOT NULL,
				`date_view` DATE NULL,
				`counter` INT(40) NULL DEFAULT '1',
				`price_1` VARCHAR(40) NULL,
				`was` INT(11) NULL,
				`price_2` VARCHAR(40) NULL,
				`shipping_add` VARCHAR(40) NULL,
				`price` DOUBLE(1,0) NULL,
				`p_off` DECIMAL(10,0) NULL,
				`description` TEXT NULL,
				`more_desc` TEXT NULL,
				`seller_sku` VARCHAR(40) NULL,
				`note` VARCHAR(40) NULL,
				`male_shoes` INT UNSIGNED NULL,
				`male_shoes_id` INT UNSIGNED NULL,
				`male_pants` INT UNSIGNED NULL,
				`male_pants_id` INT UNSIGNED NULL,
				`male_shirts` INT UNSIGNED NULL,
				`male_shirts_id` INT UNSIGNED NULL,
				`female_shoes` INT UNSIGNED NULL,
				`female_shoes_id` INT UNSIGNED NULL,
				`female_dresses` INT UNSIGNED NULL,
				`female_dresses_id` INT UNSIGNED NULL,
				`female_skirts` INT UNSIGNED NULL,
				`female_skirts_id` INT UNSIGNED NULL,
				`female_pants` INT UNSIGNED NULL,
				`female_pants_id` INT UNSIGNED NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('products', ['category','male_shoes','male_pants','male_shirts','female_shoes','female_dresses','female_skirts','female_pants',]);

		setupTable(
			'category', " 
			CREATE TABLE IF NOT EXISTS `category` ( 
				`id` INT(11) NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(100) NULL,
				`cat_name` VARCHAR(40) NULL,
				`sub_cat` VARCHAR(40) NULL,
				`code` VARCHAR(40) NULL,
				`cat_slug` VARCHAR(150) NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('category', ['cat_name','sub_cat',]);

		setupTable(
			'supplier', " 
			CREATE TABLE IF NOT EXISTS `supplier` ( 
				`supp_slug` VARCHAR(40) NULL,
				`name` VARCHAR(100) NULL,
				UNIQUE `name_unique` (`name`),
				`shop_id` VARCHAR(40) NULL,
				`supp_name` VARCHAR(40) NULL,
				`supp_contact` VARCHAR(40) NULL,
				`id_number` INT(8) NULL,
				`passport` VARCHAR(40) NULL,
				`gender` VARCHAR(40) NULL,
				`identity_no` VARCHAR(40) NULL,
				`licence_no` VARCHAR(40) NULL,
				`email` VARCHAR(200) NULL,
				`address` VARCHAR(40) NULL,
				`id` VARCHAR(40) NOT NULL,
				PRIMARY KEY (`id`),
				`photo` VARCHAR(70) NULL,
				`origin_country` VARCHAR(40) NULL,
				`type` INT(1) NULL DEFAULT '1',
				`store_overview` VARCHAR(40) NULL,
				`drop_off_point` INT UNSIGNED NULL,
				`drop_off_contact` INT UNSIGNED NULL,
				`created_on` DATE NULL,
				`bank_head` VARCHAR(40) NULL DEFAULT 'Add Your Bank Details',
				`service_provider` VARCHAR(40) NULL,
				`sp_name` VARCHAR(40) NULL,
				`sp_number` VARCHAR(40) NULL,
				`account_name` VARCHAR(40) NULL,
				`account_number` INT(25) NULL,
				`iban_number` INT(30) NULL,
				`bank_name` VARCHAR(40) NULL,
				`bank_branch` VARCHAR(40) NULL,
				`bank_code` VARCHAR(40) NULL,
				`mode_of_transfer` VARCHAR(40) NULL,
				`terms_conditions` VARCHAR(40) NOT NULL,
				`reg_date` DATE NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('supplier', ['drop_off_point',]);

		setupTable(
			'users', " 
			CREATE TABLE IF NOT EXISTS `users` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`wallet` VARCHAR(40) NULL,
				`password` VARCHAR(60) NULL,
				`type` INT(1) NULL,
				`firstname` VARCHAR(50) NULL,
				`lastname` VARCHAR(50) NULL,
				`email` VARCHAR(200) NULL,
				`contact_info` VARCHAR(100) NULL,
				`address` TEXT NULL,
				`photo` VARCHAR(200) NULL,
				`status` INT(1) NULL DEFAULT '1',
				`activate_code` VARCHAR(15) NULL,
				`reset_code` VARCHAR(15) NULL,
				`created_on` DATE NULL,
				`zone` DECIMAL(10,2) UNSIGNED NULL,
				`discount` INT UNSIGNED NULL,
				`coupon_code` INT UNSIGNED NULL,
				`coupon_worth` VARCHAR(40) NULL,
				`cost` DECIMAL(10,2) UNSIGNED NULL DEFAULT '0.00',
				`coupon_id` INT UNSIGNED NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('users', ['discount','coupon_id',]);

		setupTable(
			'stock', " 
			CREATE TABLE IF NOT EXISTS `stock` ( 
				`company_stock_quantity` INT(10) UNSIGNED NULL,
				`product_name` INT(10) UNSIGNED NULL,
				`product_id` INT(10) UNSIGNED NULL,
				`supplier` INT(10) UNSIGNED NULL,
				`stock_quantity` INT(10) UNSIGNED NULL,
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`)
			) CHARSET utf8",
			$silent
		);
		setupIndexes('stock', ['product_name',]);

		setupTable(
			'agent', " 
			CREATE TABLE IF NOT EXISTS `agent` ( 
				`first_name` VARCHAR(40) NULL,
				`last_name` VARCHAR(40) NULL,
				`email` VARCHAR(40) NULL,
				`phone` INT(20) NULL,
				`address` VARCHAR(100) NULL,
				`id` VARCHAR(40) NOT NULL,
				PRIMARY KEY (`id`),
				`station` VARCHAR(40) NULL,
				`zone` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'male_shoes', " 
			CREATE TABLE IF NOT EXISTS `male_shoes` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`cat_slug` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'male_pants', " 
			CREATE TABLE IF NOT EXISTS `male_pants` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`cat_slug` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'male_shirts', " 
			CREATE TABLE IF NOT EXISTS `male_shirts` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`cat_slug` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'female_shoes', " 
			CREATE TABLE IF NOT EXISTS `female_shoes` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`cat_slug` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'female_dresses', " 
			CREATE TABLE IF NOT EXISTS `female_dresses` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`cat_slug` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'female_skirts', " 
			CREATE TABLE IF NOT EXISTS `female_skirts` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`cat_slug` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'female_pants', " 
			CREATE TABLE IF NOT EXISTS `female_pants` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(40) NULL,
				`cat_slug` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'details', " 
			CREATE TABLE IF NOT EXISTS `details` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`supp_conf` VARCHAR(40) NULL DEFAULT 'Not Seen',
				`supp_name` INT UNSIGNED NULL,
				`details` TEXT NULL,
				`sales_id` INT(11) NULL,
				`payy_id` INT(11) NULL,
				`reference_number` VARCHAR(40) NULL,
				`product_id` INT(10) UNSIGNED NULL,
				`product_name` VARCHAR(40) NULL,
				`quantity` INT(10) UNSIGNED NULL,
				`size` INT(10) UNSIGNED NULL,
				`sales_date` DATE NULL,
				`user_id` INT(11) NULL,
				`recipient_fname` VARCHAR(40) NULL,
				`recipient_lname` VARCHAR(40) NULL,
				`recipient_contact` VARCHAR(40) NULL,
				`recipient_email` VARCHAR(40) NULL,
				`recipient_address` VARCHAR(40) NULL,
				`weight` VARCHAR(40) NULL,
				`length` VARCHAR(40) NULL,
				`width` VARCHAR(40) NULL,
				`height` VARCHAR(40) NULL,
				`price` VARCHAR(40) NULL DEFAULT '0.00',
				`pus` VARCHAR(40) NULL,
				`last_edit` VARCHAR(40) NULL,
				`editor` VARCHAR(40) NULL,
				`conf_id` INT(11) NULL,
				`from_branch_id` INT(10) NULL DEFAULT '1',
				`to_branch_id` INT(10) NULL DEFAULT '0',
				`type` INT(10) NULL DEFAULT '2',
				`status` VARCHAR(40) NULL DEFAULT '0',
				`total_sales` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('details', ['sales_id','product_id',]);

		setupTable(
			'branches', " 
			CREATE TABLE IF NOT EXISTS `branches` ( 
				`branch_code` VARCHAR(40) NULL,
				`country` VARCHAR(40) NULL,
				`city` VARCHAR(40) NULL,
				`zonee` VARCHAR(40) NULL,
				`state` INT NULL,
				`price` DECIMAL(10,2) NULL DEFAULT '0.00',
				`zip_code` DECIMAL(10,2) NULL,
				`contact` VARCHAR(40) NULL,
				`id` DECIMAL(40,2) UNSIGNED NOT NULL,
				PRIMARY KEY (`id`)
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'agent_monitor', " 
			CREATE TABLE IF NOT EXISTS `agent_monitor` ( 
				`pay_number` INT(11) NULL,
				`user_id` INT(11) NULL,
				`sale_date` INT(11) NULL DEFAULT '1',
				`user_name` INT(11) NULL,
				`phone` INT(11) NULL,
				`email` INT(11) NULL,
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`editors_name` VARCHAR(40) NULL,
				`create_time` TIME NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('agent_monitor', ['pay_number',]);

		setupTable(
			'coupon', " 
			CREATE TABLE IF NOT EXISTS `coupon` ( 
				`coupon_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`coupon_id`),
				`coupon_code` VARCHAR(40) NULL,
				`discount` MEDIUMINT(100) NULL,
				`status` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'cart', " 
			CREATE TABLE IF NOT EXISTS `cart` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`first_name` VARCHAR(40) NULL,
				`last_name` VARCHAR(40) NULL,
				`product_name` VARCHAR(40) NULL,
				`price` DECIMAL(10,2) NULL DEFAULT '0.00',
				`user_cont` VARCHAR(40) NULL,
				`user_email` VARCHAR(40) NULL,
				`zone_pus` VARCHAR(40) NULL,
				`coupon_user` VARCHAR(40) NULL,
				`coupon_user_worth` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'drop_off', " 
			CREATE TABLE IF NOT EXISTS `drop_off` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`point_name` VARCHAR(40) NOT NULL,
				`location` TEXT NULL,
				`licence` VARCHAR(40) NOT NULL,
				`packages_accepted` TEXT NOT NULL,
				`operating_licence` VARCHAR(40) NOT NULL,
				`station_email` VARCHAR(40) NULL,
				`station_photo` VARCHAR(40) NOT NULL,
				`station_contact` VARCHAR(40) NOT NULL,
				`agent_incharge` VARCHAR(40) NOT NULL,
				`agent_id` VARCHAR(40) NULL,
				`station_reg_date` DATE NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'how_to_vendor', " 
			CREATE TABLE IF NOT EXISTS `how_to_vendor` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`how_to_1` VARCHAR(40) NULL,
				`how_to_2` VARCHAR(40) NULL,
				`how_to_3` VARCHAR(40) NULL,
				`how_to_4` VARCHAR(40) NULL,
				`how_to_5` VARCHAR(40) NULL,
				`how_to_6` VARCHAR(40) NULL,
				`how_to_7` VARCHAR(40) NULL,
				`how_to_8` VARCHAR(40) NULL,
				`how_to_9` VARCHAR(40) NULL,
				`how_to_10` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'how_to_agent', " 
			CREATE TABLE IF NOT EXISTS `how_to_agent` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`how_to_1` VARCHAR(40) NULL,
				`how_to_2` VARCHAR(40) NULL,
				`how_to_3` VARCHAR(40) NULL,
				`how_to_4` VARCHAR(40) NULL,
				`how_to_5` VARCHAR(40) NULL,
				`how_to_6` VARCHAR(40) NULL,
				`how_to_7` VARCHAR(40) NULL,
				`how_to_8` VARCHAR(40) NULL,
				`how_to_9` VARCHAR(40) NULL,
				`how_to_10` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'message', " 
			CREATE TABLE IF NOT EXISTS `message` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`user_id` INT UNSIGNED NULL,
				`user_name` INT UNSIGNED NULL,
				`product` VARCHAR(40) NULL,
				`message` TEXT NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('message', ['user_id',]);

		setupTable(
			'sales_monitor', " 
			CREATE TABLE IF NOT EXISTS `sales_monitor` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`product_id` INT UNSIGNED NULL,
				`product_name` INT UNSIGNED NULL,
				`total_sale` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('sales_monitor', ['product_id',]);

		setupTable(
			'wishlist', " 
			CREATE TABLE IF NOT EXISTS `wishlist` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`user_id` INT UNSIGNED NULL,
				`w_fname` INT UNSIGNED NULL,
				`w_lname` INT UNSIGNED NULL,
				`w_email` INT UNSIGNED NULL,
				`w_pnumber` INT UNSIGNED NULL,
				`product_id` INT UNSIGNED NULL,
				`w_product` INT UNSIGNED NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('wishlist', ['user_id','product_id',]);

		setupTable(
			'sub_cat', " 
			CREATE TABLE IF NOT EXISTS `sub_cat` ( 
				`sub_category` VARCHAR(40) NOT NULL,
				PRIMARY KEY (`sub_category`)
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'item_rating', " 
			CREATE TABLE IF NOT EXISTS `item_rating` ( 
				`ratingId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`ratingId`),
				`itemId` INT UNSIGNED NULL,
				`userId` INT UNSIGNED NULL,
				`rater_name` INT UNSIGNED NULL,
				`ratingNumber` VARCHAR(40) NULL,
				`title` VARCHAR(40) NULL,
				`comments` TEXT NULL,
				`created` VARCHAR(40) NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('item_rating', ['userId',]);

		setupTable(
			'followers', " 
			CREATE TABLE IF NOT EXISTS `followers` ( 
				`likeid` INT NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`likeid`),
				`userid` INT UNSIGNED NULL,
				`f_fname` INT UNSIGNED NULL,
				`vendorid` VARCHAR(40) NULL,
				`follow_date` DATE NULL
			) CHARSET utf8",
			$silent
		);
		setupIndexes('followers', ['userid',]);

		setupTable(
			'sub_cat_2', " 
			CREATE TABLE IF NOT EXISTS `sub_cat_2` ( 
				`code` VARCHAR(40) NOT NULL,
				PRIMARY KEY (`code`),
				`cat_name` VARCHAR(40) NULL
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
