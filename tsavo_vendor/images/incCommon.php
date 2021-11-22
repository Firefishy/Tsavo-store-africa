<?php

	#########################################################
	/*
	~~~~~~ LIST OF FUNCTIONS ~~~~~~
		getTableList() -- returns an associative array (tableName => tableData, tableData is array(tableCaption, tableDescription, tableIcon)) of tables accessible by current user
		get_table_groups() -- returns an associative array (table_group => tables_array)
		logInMember() -- checks POST login. If not valid, redirects to index.php, else returns TRUE
		getTablePermissions($tn) -- returns an array of permissions allowed for logged member to given table (allowAccess, allowInsert, allowView, allowEdit, allowDelete) -- allowAccess is set to true if any access level is allowed
		get_sql_fields($tn) -- returns the SELECT part of the table view query
		get_sql_from($tn[, true, [, false]]) -- returns the FROM part of the table view query, with full joins (unless third paramaeter is set to true), optionally skipping permissions if true passed as 2nd param.
		get_joined_record($table, $id[, true]) -- returns assoc array of record values for given PK value of given table, with full joins, optionally skipping permissions if true passed as 3rd param.
		get_defaults($table) -- returns assoc array of table fields as array keys and default values (or empty), excluding automatic values as array values
		htmlUserBar() -- returns html code for displaying user login status to be used on top of pages.
		showNotifications($msg, $class) -- returns html code for displaying a notification. If no parameters provided, processes the GET request for possible notifications.
		parseMySQLDate(a, b) -- returns a if valid mysql date, or b if valid mysql date, or today if b is true, or empty if b is false.
		parseCode(code) -- calculates and returns special values to be inserted in automatic fields.
		addFilter(i, filterAnd, filterField, filterOperator, filterValue) -- enforce a filter over data
		clearFilters() -- clear all filters
		loadView($view, $data) -- passes $data to templates/{$view}.php and returns the output
		loadTable($table, $data) -- loads table template, passing $data to it
		filterDropdownBy($filterable, $filterers, $parentFilterers, $parentPKField, $parentCaption, $parentTable, &$filterableCombo) -- applies cascading drop-downs for a lookup field, returns js code to be inserted into the page
		br2nl($text) -- replaces all variations of HTML <br> tags with a new line character
		htmlspecialchars_decode($text) -- inverse of htmlspecialchars()
		entitiesToUTF8($text) -- convert unicode entities (e.g. &#1234;) to actual UTF8 characters, requires multibyte string PHP extension
		func_get_args_byref() -- returns an array of arguments passed to a function, by reference
		permissions_sql($table, $level) -- returns an array containing the FROM and WHERE additions for applying permissions to an SQL query
		error_message($msg[, $back_url]) -- returns html code for a styled error message .. pass explicit false in second param to suppress back button
		toMySQLDate($formattedDate, $sep = datalist_date_separator, $ord = datalist_date_format)
		reIndex(&$arr) -- returns a copy of the given array, with keys replaced by 1-based numeric indices, and values replaced by original keys
		get_embed($provider, $url[, $width, $height, $retrieve]) -- returns embed code for a given url (supported providers: youtube, googlemap)
		check_record_permission($table, $id, $perm = 'view') -- returns true if current user has the specified permission $perm ('view', 'edit' or 'delete') for the given recors, false otherwise
		NavMenus($options) -- returns the HTML code for the top navigation menus. $options is not implemented currently.
		StyleSheet() -- returns the HTML code for included style sheet files to be placed in the <head> section.
		getUploadDir($dir) -- if dir is empty, returns upload dir configured in defaultLang.php, else returns $dir.
		PrepareUploadedFile($FieldName, $MaxSize, $FileTypes='jpg|jpeg|gif|png', $NoRename=false, $dir="") -- validates and moves uploaded file for given $FieldName into the given $dir (or the default one if empty)
		get_home_links($homeLinks, $default_classes, $tgroup) -- process $homeLinks array and return custom links for homepage. Applies $default_classes to links if links have classes defined, and filters links by $tgroup (using '*' matches all table_group values)
		quick_search_html($search_term, $label, $separate_dv = true) -- returns HTML code for the quick search box.
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	*/

	#########################################################

	function getTableList($skip_authentication = false) {
		$arrAccessTables = [];
		$arrTables = [
			/* 'table_name' => ['table caption', 'homepage description', 'icon', 'table group name'] */   
			'sales' => ['Orders Made', '', 'resources/table_icons/bar-chart-icon.png', 'Orders'],
			'products' => ['Products', '', 'resources/table_icons/Folders-Binders-Folder-icon.png', 'POS'],
			'category' => ['Product Category', '', 'resources/table_icons/increase-icon.png', 'POS'],
			'supplier' => ['Vendor', '', 'resources/table_icons/Users-Workers-icon.png', 'POS'],
			'users' => ['Users/Members', '', 'resources/table_icons/users-icon.png', 'POS'],
			'stock' => ['Stock', '', 'resources/table_icons/Database-icon.png', 'POS'],
			'agent' => ['Tsavo Agent', '', 'resources/table_icons/Users-Worker-icon.png', 'POS'],
			'male_shoes' => ['Male shoes', '', 'resources/table_icons/check-icon.png', 'SG'],
			'male_pants' => ['Male pants', '', 'resources/table_icons/check-icon.png', 'SG'],
			'male_shirts' => ['Male shirts', '', 'resources/table_icons/check-icon.png', 'SG'],
			'female_shoes' => ['Female shoes', '', 'resources/table_icons/check-icon.png', 'SG'],
			'female_dresses' => ['Female dresses', '', 'resources/table_icons/check-icon.png', 'SG'],
			'female_skirts' => ['Female skirts', '', 'resources/table_icons/check-icon.png', 'SG'],
			'female_pants' => ['Female pants', '', 'resources/table_icons/check-icon.png', 'SG'],
			'details' => ['Order Details', '', 'resources/table_icons/increase-icon.png', 'Orders'],
			'branches' => ['Delivery Branches', '', 'resources/table_icons/Cultures-Origami-icon.png', 'Orders'],
			'agent_monitor' => ['Agent Order monitor', '', 'resources/table_icons/Finance-Check-Book-icon.png', 'Agent'],
			'coupon' => ['Coupons', '', 'resources/table_icons/Ecommerce-Redeem-icon.png', 'POS'],
			'cart' => ['Cart', '', 'resources/table_icons/Ecommerce-Sell-icon.png', 'POS'],
			'drop_off' => ['Drop off Points', '', 'resources/table_icons/Home-Holland-icon.png', 'Agent'],
			'how_to_vendor' => ['Vendor Guide', '', 'resources/table_icons/Receipt-3-icon.png', 'Vendor'],
			'how_to_agent' => ['Agent Guide', '', 'resources/table_icons/Receipt-3-icon.png', 'Vendor'],
			'message' => ['Message', '', 'resources/table_icons/printer-icon.png', 'Others'],
			'sales_monitor' => ['Sales monitor', '', 'resources/table_icons/bar-chart-icon.png', 'Orders'],
			'wishlist' => ['Wishlist', '', 'resources/table_icons/card_gift_2.png', 'Orders'],
			'sub_cat' => ['Sub cat', '', 'resources/table_icons/bullet_purple.png', 'Others'],
			'item_rating' => ['Item rating', '', 'resources/table_icons/award_star_gold_1.png', 'Orders'],
			'followers' => ['Followers', '', 'resources/table_icons/group.png', 'Others'],
			'sub_cat_2' => ['Sub cat 2', '', 'resources/table_icons/bullet_pink.png', 'Others'],
		];
		if($skip_authentication || getLoggedAdmin()) return $arrTables;

		if(is_array($arrTables)) {
			foreach($arrTables as $tn => $tc) {
				$arrPerm = getTablePermissions($tn);
				if($arrPerm['access']) $arrAccessTables[$tn] = $tc;
			}
		}

		return $arrAccessTables;
	}

	#########################################################

	function get_table_groups($skip_authentication = false) {
		$tables = getTableList($skip_authentication);
		$all_groups = ['Orders', 'POS', 'SG', 'Agent', 'Vendor', 'Others'];

		$groups = [];
		foreach($all_groups as $grp) {
			foreach($tables as $tn => $td) {
				if($td[3] && $td[3] == $grp) $groups[$grp][] = $tn;
				if(!$td[3]) $groups[0][] = $tn;
			}
		}

		return $groups;
	}

	#########################################################

	function getTablePermissions($tn) {
		static $table_permissions = [];
		if(isset($table_permissions[$tn])) return $table_permissions[$tn];

		$groupID = getLoggedGroupID();
		$memberID = makeSafe(getLoggedMemberID());
		$res_group = sql("SELECT `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete` FROM `membership_grouppermissions` WHERE `groupID`='{$groupID}'", $eo);
		$res_user  = sql("SELECT `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete` FROM `membership_userpermissions`  WHERE LCASE(`memberID`)='{$memberID}'", $eo);

		while($row = db_fetch_assoc($res_group)) {
			$table_permissions[$row['tableName']] = [
				1 => intval($row['allowInsert']),
				2 => intval($row['allowView']),
				3 => intval($row['allowEdit']),
				4 => intval($row['allowDelete']),
				'insert' => intval($row['allowInsert']),
				'view' => intval($row['allowView']),
				'edit' => intval($row['allowEdit']),
				'delete' => intval($row['allowDelete'])
			];
		}

		// user-specific permissions, if specified, overwrite his group permissions
		while($row = db_fetch_assoc($res_user)) {
			$table_permissions[$row['tableName']] = [
				1 => intval($row['allowInsert']),
				2 => intval($row['allowView']),
				3 => intval($row['allowEdit']),
				4 => intval($row['allowDelete']),
				'insert' => intval($row['allowInsert']),
				'view' => intval($row['allowView']),
				'edit' => intval($row['allowEdit']),
				'delete' => intval($row['allowDelete'])
			];
		}

		// if user has any type of access, set 'access' flag
		foreach($table_permissions as $t => $p) {
			$table_permissions[$t]['access'] = $table_permissions[$t][0] = false;

			if($p['insert'] || $p['view'] || $p['edit'] || $p['delete']) {
				$table_permissions[$t]['access'] = $table_permissions[$t][0] = true;
			}
		}

		return $table_permissions[$tn];
	}

	#########################################################

	function get_sql_fields($table_name) {
		$sql_fields = [
			'sales' => "`sales`.`id` as 'id', IF(    CHAR_LENGTH(`users1`.`id`), CONCAT_WS('',   `users1`.`id`), '') as 'user_id', `sales`.`pay_id` as 'pay_id', if(`sales`.`sales_day`,date_format(`sales`.`sales_day`,'%m/%d/%Y'),'') as 'sales_day', IF(    CHAR_LENGTH(`users1`.`firstname`), CONCAT_WS('',   `users1`.`firstname`), '') as 'first_name', IF(    CHAR_LENGTH(`users1`.`lastname`), CONCAT_WS('',   `users1`.`lastname`), '') as 'last_name', IF(    CHAR_LENGTH(`users1`.`email`), CONCAT_WS('',   `users1`.`email`), '') as 'email', IF(    CHAR_LENGTH(`users1`.`contact_info`), CONCAT_WS('',   `users1`.`contact_info`), '') as 'phone', IF(    CHAR_LENGTH(`users1`.`address`), CONCAT_WS('',   `users1`.`address`), '') as 'address', IF(    CHAR_LENGTH(`users1`.`zone`), CONCAT_WS('',   `users1`.`zone`), '') as 'zone', IF(    CHAR_LENGTH(`users1`.`cost`), CONCAT_WS('',   `users1`.`cost`), '') as 'zone_fee', `sales`.`generated_by` as 'generated_by', `sales`.`confirmation_id` as 'confirmation_id', `sales`.`approval` as 'approval'",
			'products' => "`products`.`id` as 'id', `products`.`supp_id` as 'supp_id', `products`.`supplier` as 'supplier', `products`.`supp_email` as 'supp_email', CONCAT_WS('-', LEFT(`products`.`supp_cont`,3), MID(`products`.`supp_cont`,4,3)) as 'supp_cont', IF(    CHAR_LENGTH(`category1`.`name`), CONCAT_WS('',   `category1`.`name`), '') as 'category', IF(    CHAR_LENGTH(`category1`.`id`), CONCAT_WS('',   `category1`.`id`), '') as 'category_id', `products`.`ship_orig` as 'ship_orig', `products`.`slug` as 'slug', `products`.`prod_qty` as 'prod_qty', `products`.`barcode` as 'barcode', `products`.`name` as 'name', `products`.`brand` as 'brand', `products`.`photo` as 'photo', `products`.`size` as 'size', `products`.`material` as 'material', `products`.`length` as 'length', `products`.`width` as 'width', `products`.`height` as 'height', `products`.`weight` as 'weight', if(`products`.`date_view`,date_format(`products`.`date_view`,'%m/%d/%Y'),'') as 'date_view', `products`.`counter` as 'counter', CONCAT('&euro;', FORMAT(`products`.`price_1`, 2)) as 'price_1', CONCAT('&euro;', FORMAT(`products`.`was`, 2)) as 'was', `products`.`price_2` as 'price_2', `products`.`shipping_add` as 'shipping_add', `products`.`price` as 'price', `products`.`p_off` as 'p_off', `products`.`description` as 'description', `products`.`more_desc` as 'more_desc', `products`.`seller_sku` as 'seller_sku', `products`.`note` as 'note', IF(    CHAR_LENGTH(`male_shoes1`.`name`), CONCAT_WS('',   `male_shoes1`.`name`), '') as 'male_shoes', IF(    CHAR_LENGTH(`male_shoes1`.`id`), CONCAT_WS('',   `male_shoes1`.`id`), '') as 'male_shoes_id', IF(    CHAR_LENGTH(`male_pants1`.`name`), CONCAT_WS('',   `male_pants1`.`name`), '') as 'male_pants', IF(    CHAR_LENGTH(`male_pants1`.`id`), CONCAT_WS('',   `male_pants1`.`id`), '') as 'male_pants_id', IF(    CHAR_LENGTH(`male_shirts1`.`name`), CONCAT_WS('',   `male_shirts1`.`name`), '') as 'male_shirts', IF(    CHAR_LENGTH(`male_shirts1`.`id`), CONCAT_WS('',   `male_shirts1`.`id`), '') as 'male_shirts_id', IF(    CHAR_LENGTH(`female_shoes1`.`name`), CONCAT_WS('',   `female_shoes1`.`name`), '') as 'female_shoes', IF(    CHAR_LENGTH(`female_shoes1`.`id`), CONCAT_WS('',   `female_shoes1`.`id`), '') as 'female_shoes_id', IF(    CHAR_LENGTH(`female_dresses1`.`name`), CONCAT_WS('',   `female_dresses1`.`name`), '') as 'female_dresses', IF(    CHAR_LENGTH(`female_dresses1`.`id`), CONCAT_WS('',   `female_dresses1`.`id`), '') as 'female_dresses_id', IF(    CHAR_LENGTH(`female_skirts1`.`name`), CONCAT_WS('',   `female_skirts1`.`name`), '') as 'female_skirts', IF(    CHAR_LENGTH(`female_skirts1`.`id`), CONCAT_WS('',   `female_skirts1`.`id`), '') as 'female_skirts_id', IF(    CHAR_LENGTH(`female_pants1`.`name`), CONCAT_WS('',   `female_pants1`.`name`), '') as 'female_pants', IF(    CHAR_LENGTH(`female_pants1`.`id`), CONCAT_WS('',   `female_pants1`.`id`), '') as 'female_pants_id'",
			'category' => "`category`.`id` as 'id', `category`.`name` as 'name', IF(    CHAR_LENGTH(`sub_cat_21`.`cat_name`), CONCAT_WS('',   `sub_cat_21`.`cat_name`), '') as 'cat_name', IF(    CHAR_LENGTH(`sub_cat1`.`sub_category`), CONCAT_WS('',   `sub_cat1`.`sub_category`), '') as 'sub_cat', IF(    CHAR_LENGTH(`sub_cat_21`.`code`), CONCAT_WS('',   `sub_cat_21`.`code`), '') as 'code', `category`.`cat_slug` as 'cat_slug'",
			'supplier' => "`supplier`.`supp_slug` as 'supp_slug', `supplier`.`name` as 'name', `supplier`.`shop_id` as 'shop_id', `supplier`.`supp_name` as 'supp_name', `supplier`.`supp_contact` as 'supp_contact', `supplier`.`id_number` as 'id_number', `supplier`.`passport` as 'passport', `supplier`.`gender` as 'gender', `supplier`.`identity_no` as 'identity_no', `supplier`.`licence_no` as 'licence_no', `supplier`.`email` as 'email', `supplier`.`address` as 'address', `supplier`.`id` as 'id', `supplier`.`photo` as 'photo', `supplier`.`origin_country` as 'origin_country', `supplier`.`type` as 'type', `supplier`.`store_overview` as 'store_overview', IF(    CHAR_LENGTH(`drop_off1`.`point_name`), CONCAT_WS('',   `drop_off1`.`point_name`), '') as 'drop_off_point', IF(    CHAR_LENGTH(`drop_off1`.`station_contact`), CONCAT_WS('',   `drop_off1`.`station_contact`), '') as 'drop_off_contact', if(`supplier`.`created_on`,date_format(`supplier`.`created_on`,'%m/%d/%Y'),'') as 'created_on', `supplier`.`bank_head` as 'bank_head', `supplier`.`service_provider` as 'service_provider', `supplier`.`sp_name` as 'sp_name', CONCAT_WS('-', LEFT(`supplier`.`sp_number`,3), MID(`supplier`.`sp_number`,4,3), RIGHT(`supplier`.`sp_number`,4)) as 'sp_number', `supplier`.`account_name` as 'account_name', `supplier`.`account_number` as 'account_number', `supplier`.`iban_number` as 'iban_number', `supplier`.`bank_name` as 'bank_name', `supplier`.`bank_branch` as 'bank_branch', `supplier`.`bank_code` as 'bank_code', `supplier`.`mode_of_transfer` as 'mode_of_transfer', `supplier`.`terms_conditions` as 'terms_conditions', if(`supplier`.`reg_date`,date_format(`supplier`.`reg_date`,'%m/%d/%Y'),'') as 'reg_date'",
			'users' => "`users`.`id` as 'id', `users`.`wallet` as 'wallet', `users`.`password` as 'password', `users`.`type` as 'type', `users`.`firstname` as 'firstname', `users`.`lastname` as 'lastname', `users`.`email` as 'email', `users`.`contact_info` as 'contact_info', `users`.`address` as 'address', `users`.`photo` as 'photo', `users`.`status` as 'status', `users`.`activate_code` as 'activate_code', `users`.`reset_code` as 'reset_code', if(`users`.`created_on`,date_format(`users`.`created_on`,'%m/%d/%Y'),'') as 'created_on', `users`.`zone` as 'zone', IF(    CHAR_LENGTH(`coupon1`.`coupon_code`) || CHAR_LENGTH(`coupon1`.`coupon_id`), CONCAT_WS('',   `coupon1`.`coupon_code`, `coupon1`.`coupon_id`), '') as 'discount', `users`.`coupon_code` as 'coupon_code', `users`.`coupon_worth` as 'coupon_worth', `users`.`cost` as 'cost', IF(    CHAR_LENGTH(`coupon2`.`coupon_id`), CONCAT_WS('',   `coupon2`.`coupon_id`), '') as 'coupon_id'",
			'stock' => "IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'company_stock_quantity', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'product_name', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'product_id', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'supplier', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'stock_quantity', `stock`.`id` as 'id'",
			'agent' => "`agent`.`first_name` as 'first_name', `agent`.`last_name` as 'last_name', `agent`.`email` as 'email', CONCAT_WS('-', LEFT(`agent`.`phone`,3), MID(`agent`.`phone`,4,3), RIGHT(`agent`.`phone`,4)) as 'phone', `agent`.`address` as 'address', `agent`.`id` as 'id', `agent`.`station` as 'station', `agent`.`zone` as 'zone'",
			'male_shoes' => "`male_shoes`.`id` as 'id', `male_shoes`.`name` as 'name', `male_shoes`.`cat_slug` as 'cat_slug'",
			'male_pants' => "`male_pants`.`id` as 'id', `male_pants`.`name` as 'name', `male_pants`.`cat_slug` as 'cat_slug'",
			'male_shirts' => "`male_shirts`.`id` as 'id', `male_shirts`.`name` as 'name', `male_shirts`.`cat_slug` as 'cat_slug'",
			'female_shoes' => "`female_shoes`.`id` as 'id', `female_shoes`.`name` as 'name', `female_shoes`.`cat_slug` as 'cat_slug'",
			'female_dresses' => "`female_dresses`.`id` as 'id', `female_dresses`.`name` as 'name', `female_dresses`.`cat_slug` as 'cat_slug'",
			'female_skirts' => "`female_skirts`.`id` as 'id', `female_skirts`.`name` as 'name', `female_skirts`.`cat_slug` as 'cat_slug'",
			'female_pants' => "`female_pants`.`id` as 'id', `female_pants`.`name` as 'name', `female_pants`.`cat_slug` as 'cat_slug'",
			'details' => "`details`.`id` as 'id', `details`.`supp_conf` as 'supp_conf', IF(    CHAR_LENGTH(`products1`.`supplier`) || CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`supplier`, `products1`.`id`), '') as 'supp_name', `details`.`details` as 'details', IF(    CHAR_LENGTH(`sales1`.`id`), CONCAT_WS('',   `sales1`.`id`), '') as 'sales_id', IF(    CHAR_LENGTH(`sales1`.`pay_id`), CONCAT_WS('',   `sales1`.`pay_id`), '') as 'payy_id', `details`.`reference_number` as 'reference_number', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'product_id', `details`.`product_name` as 'product_name', `details`.`quantity` as 'quantity', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'size', if(`details`.`sales_date`,date_format(`details`.`sales_date`,'%m/%d/%Y'),'') as 'sales_date', `details`.`user_id` as 'user_id', `details`.`recipient_fname` as 'recipient_fname', `details`.`recipient_lname` as 'recipient_lname', `details`.`recipient_contact` as 'recipient_contact', `details`.`recipient_email` as 'recipient_email', `details`.`recipient_address` as 'recipient_address', `details`.`weight` as 'weight', `details`.`length` as 'length', `details`.`width` as 'width', `details`.`height` as 'height', `details`.`price` as 'price', `details`.`pus` as 'pus', `details`.`last_edit` as 'last_edit', `details`.`editor` as 'editor', `details`.`conf_id` as 'conf_id', `details`.`from_branch_id` as 'from_branch_id', `details`.`to_branch_id` as 'to_branch_id', `details`.`type` as 'type', `details`.`status` as 'status', `details`.`total_sales` as 'total_sales'",
			'branches' => "`branches`.`branch_code` as 'branch_code', `branches`.`country` as 'country', `branches`.`city` as 'city', `branches`.`zonee` as 'zonee', `branches`.`state` as 'state', `branches`.`price` as 'price', `branches`.`zip_code` as 'zip_code', `branches`.`contact` as 'contact', `branches`.`id` as 'id'",
			'agent_monitor' => "IF(    CHAR_LENGTH(`sales1`.`pay_id`), CONCAT_WS('',   `sales1`.`pay_id`), '') as 'pay_number', IF(    CHAR_LENGTH(`users1`.`id`), CONCAT_WS('',   `users1`.`id`), '') as 'user_id', IF(    CHAR_LENGTH(if(`sales1`.`sales_day`,date_format(`sales1`.`sales_day`,'%m/%d/%Y'),'')), CONCAT_WS('',   if(`sales1`.`sales_day`,date_format(`sales1`.`sales_day`,'%m/%d/%Y'),'')), '') as 'sale_date', IF(    CHAR_LENGTH(`users1`.`firstname`) || CHAR_LENGTH(`users1`.`lastname`), CONCAT_WS('',   `users1`.`firstname`, '--', `users1`.`lastname`), '') as 'user_name', IF(    CHAR_LENGTH(`users1`.`contact_info`), CONCAT_WS('',   `users1`.`contact_info`), '') as 'phone', IF(    CHAR_LENGTH(`users1`.`email`), CONCAT_WS('',   `users1`.`email`), '') as 'email', `agent_monitor`.`id` as 'id', `agent_monitor`.`editors_name` as 'editors_name', TIME_FORMAT(`agent_monitor`.`create_time`, '%r') as 'create_time'",
			'coupon' => "`coupon`.`coupon_id` as 'coupon_id', `coupon`.`coupon_code` as 'coupon_code', `coupon`.`discount` as 'discount', `coupon`.`status` as 'status'",
			'cart' => "`cart`.`id` as 'id', `cart`.`first_name` as 'first_name', `cart`.`last_name` as 'last_name', `cart`.`product_name` as 'product_name', `cart`.`price` as 'price', `cart`.`user_cont` as 'user_cont', `cart`.`user_email` as 'user_email', `cart`.`zone_pus` as 'zone_pus', `cart`.`coupon_user` as 'coupon_user', `cart`.`coupon_user_worth` as 'coupon_user_worth'",
			'drop_off' => "`drop_off`.`id` as 'id', `drop_off`.`point_name` as 'point_name', `drop_off`.`location` as 'location', `drop_off`.`licence` as 'licence', `drop_off`.`packages_accepted` as 'packages_accepted', `drop_off`.`operating_licence` as 'operating_licence', `drop_off`.`station_email` as 'station_email', `drop_off`.`station_photo` as 'station_photo', `drop_off`.`station_contact` as 'station_contact', `drop_off`.`agent_incharge` as 'agent_incharge', `drop_off`.`agent_id` as 'agent_id', if(`drop_off`.`station_reg_date`,date_format(`drop_off`.`station_reg_date`,'%m/%d/%Y'),'') as 'station_reg_date'",
			'how_to_vendor' => "`how_to_vendor`.`id` as 'id', `how_to_vendor`.`how_to_1` as 'how_to_1', `how_to_vendor`.`how_to_2` as 'how_to_2', `how_to_vendor`.`how_to_3` as 'how_to_3', `how_to_vendor`.`how_to_4` as 'how_to_4', `how_to_vendor`.`how_to_5` as 'how_to_5', `how_to_vendor`.`how_to_6` as 'how_to_6', `how_to_vendor`.`how_to_7` as 'how_to_7', `how_to_vendor`.`how_to_8` as 'how_to_8', `how_to_vendor`.`how_to_9` as 'how_to_9', `how_to_vendor`.`how_to_10` as 'how_to_10'",
			'how_to_agent' => "`how_to_agent`.`id` as 'id', `how_to_agent`.`how_to_1` as 'how_to_1', `how_to_agent`.`how_to_2` as 'how_to_2', `how_to_agent`.`how_to_3` as 'how_to_3', `how_to_agent`.`how_to_4` as 'how_to_4', `how_to_agent`.`how_to_5` as 'how_to_5', `how_to_agent`.`how_to_6` as 'how_to_6', `how_to_agent`.`how_to_7` as 'how_to_7', `how_to_agent`.`how_to_8` as 'how_to_8', `how_to_agent`.`how_to_9` as 'how_to_9', `how_to_agent`.`how_to_10` as 'how_to_10'",
			'message' => "`message`.`id` as 'id', IF(    CHAR_LENGTH(`users1`.`id`), CONCAT_WS('',   `users1`.`id`), '') as 'user_id', IF(    CHAR_LENGTH(`users1`.`firstname`) || CHAR_LENGTH(`users1`.`lastname`), CONCAT_WS('',   `users1`.`firstname`, '  |||   ', `users1`.`lastname`), '') as 'user_name', `message`.`product` as 'product', `message`.`message` as 'message'",
			'sales_monitor' => "`sales_monitor`.`id` as 'id', IF(    CHAR_LENGTH(`details1`.`id`), CONCAT_WS('',   `details1`.`id`), '') as 'product_id', IF(    CHAR_LENGTH(`details1`.`id`), CONCAT_WS('',   `details1`.`id`), '') as 'product_name', `sales_monitor`.`total_sale` as 'total_sale'",
			'wishlist' => "`wishlist`.`id` as 'id', IF(    CHAR_LENGTH(`users1`.`id`), CONCAT_WS('',   `users1`.`id`), '') as 'user_id', IF(    CHAR_LENGTH(`users1`.`firstname`), CONCAT_WS('',   `users1`.`firstname`), '') as 'w_fname', IF(    CHAR_LENGTH(`users1`.`lastname`), CONCAT_WS('',   `users1`.`lastname`), '') as 'w_lname', IF(    CHAR_LENGTH(`users1`.`email`), CONCAT_WS('',   `users1`.`email`), '') as 'w_email', IF(    CHAR_LENGTH(`users1`.`contact_info`), CONCAT_WS('',   `users1`.`contact_info`), '') as 'w_pnumber', IF(    CHAR_LENGTH(`products1`.`id`), CONCAT_WS('',   `products1`.`id`), '') as 'product_id', IF(    CHAR_LENGTH(`products1`.`name`), CONCAT_WS('',   `products1`.`name`), '') as 'w_product'",
			'sub_cat' => "`sub_cat`.`sub_category` as 'sub_category'",
			'item_rating' => "`item_rating`.`ratingId` as 'ratingId', `item_rating`.`itemId` as 'itemId', IF(    CHAR_LENGTH(`users1`.`id`), CONCAT_WS('',   `users1`.`id`), '') as 'userId', IF(    CHAR_LENGTH(`users1`.`firstname`) || CHAR_LENGTH(`users1`.`lastname`), CONCAT_WS('',   `users1`.`firstname`, '--', `users1`.`lastname`), '') as 'rater_name', `item_rating`.`ratingNumber` as 'ratingNumber', `item_rating`.`title` as 'title', `item_rating`.`comments` as 'comments', `item_rating`.`created` as 'created'",
			'followers' => "`followers`.`likeid` as 'likeid', IF(    CHAR_LENGTH(`users1`.`id`), CONCAT_WS('',   `users1`.`id`), '') as 'userid', IF(    CHAR_LENGTH(`users1`.`firstname`) || CHAR_LENGTH(`users1`.`lastname`), CONCAT_WS('',   `users1`.`firstname`, '.  .', `users1`.`lastname`), '') as 'f_fname', `followers`.`vendorid` as 'vendorid', if(`followers`.`follow_date`,date_format(`followers`.`follow_date`,'%m/%d/%Y'),'') as 'follow_date'",
			'sub_cat_2' => "`sub_cat_2`.`code` as 'code', `sub_cat_2`.`cat_name` as 'cat_name'",
		];

		if(isset($sql_fields[$table_name])) return $sql_fields[$table_name];

		return false;
	}

	#########################################################

	function get_sql_from($table_name, $skip_permissions = false, $skip_joins = false, $lower_permissions = false) {
		$sql_from = [
			'sales' => "`sales` LEFT JOIN `users` as users1 ON `users1`.`id`=`sales`.`user_id` ",
			'products' => "`products` LEFT JOIN `category` as category1 ON `category1`.`id`=`products`.`category` LEFT JOIN `male_shoes` as male_shoes1 ON `male_shoes1`.`id`=`products`.`male_shoes` LEFT JOIN `male_pants` as male_pants1 ON `male_pants1`.`id`=`products`.`male_pants` LEFT JOIN `male_shirts` as male_shirts1 ON `male_shirts1`.`id`=`products`.`male_shirts` LEFT JOIN `female_shoes` as female_shoes1 ON `female_shoes1`.`id`=`products`.`female_shoes` LEFT JOIN `female_dresses` as female_dresses1 ON `female_dresses1`.`id`=`products`.`female_dresses` LEFT JOIN `female_skirts` as female_skirts1 ON `female_skirts1`.`id`=`products`.`female_skirts` LEFT JOIN `female_pants` as female_pants1 ON `female_pants1`.`id`=`products`.`female_pants` ",
			'category' => "`category` LEFT JOIN `sub_cat_2` as sub_cat_21 ON `sub_cat_21`.`code`=`category`.`cat_name` LEFT JOIN `sub_cat` as sub_cat1 ON `sub_cat1`.`sub_category`=`category`.`sub_cat` ",
			'supplier' => "`supplier` LEFT JOIN `drop_off` as drop_off1 ON `drop_off1`.`id`=`supplier`.`drop_off_point` ",
			'users' => "`users` LEFT JOIN `coupon` as coupon1 ON `coupon1`.`coupon_id`=`users`.`discount` LEFT JOIN `coupon` as coupon2 ON `coupon2`.`coupon_id`=`users`.`coupon_id` ",
			'stock' => "`stock` LEFT JOIN `products` as products1 ON `products1`.`id`=`stock`.`product_name` ",
			'agent' => "`agent` ",
			'male_shoes' => "`male_shoes` ",
			'male_pants' => "`male_pants` ",
			'male_shirts' => "`male_shirts` ",
			'female_shoes' => "`female_shoes` ",
			'female_dresses' => "`female_dresses` ",
			'female_skirts' => "`female_skirts` ",
			'female_pants' => "`female_pants` ",
			'details' => "`details` LEFT JOIN `sales` as sales1 ON `sales1`.`id`=`details`.`sales_id` LEFT JOIN `products` as products1 ON `products1`.`id`=`details`.`product_id` ",
			'branches' => "`branches` ",
			'agent_monitor' => "`agent_monitor` LEFT JOIN `sales` as sales1 ON `sales1`.`id`=`agent_monitor`.`pay_number` LEFT JOIN `users` as users1 ON `users1`.`id`=`sales1`.`user_id` ",
			'coupon' => "`coupon` ",
			'cart' => "`cart` ",
			'drop_off' => "`drop_off` ",
			'how_to_vendor' => "`how_to_vendor` ",
			'how_to_agent' => "`how_to_agent` ",
			'message' => "`message` LEFT JOIN `users` as users1 ON `users1`.`id`=`message`.`user_id` ",
			'sales_monitor' => "`sales_monitor` LEFT JOIN `details` as details1 ON `details1`.`id`=`sales_monitor`.`product_id` ",
			'wishlist' => "`wishlist` LEFT JOIN `users` as users1 ON `users1`.`id`=`wishlist`.`user_id` LEFT JOIN `products` as products1 ON `products1`.`id`=`wishlist`.`product_id` ",
			'sub_cat' => "`sub_cat` ",
			'item_rating' => "`item_rating` LEFT JOIN `users` as users1 ON `users1`.`id`=`item_rating`.`userId` ",
			'followers' => "`followers` LEFT JOIN `users` as users1 ON `users1`.`id`=`followers`.`userid` ",
			'sub_cat_2' => "`sub_cat_2` ",
		];

		$pkey = [
			'sales' => 'id',
			'products' => 'id',
			'category' => 'id',
			'supplier' => 'id',
			'users' => 'id',
			'stock' => 'id',
			'agent' => 'id',
			'male_shoes' => 'id',
			'male_pants' => 'id',
			'male_shirts' => 'id',
			'female_shoes' => 'id',
			'female_dresses' => 'id',
			'female_skirts' => 'id',
			'female_pants' => 'id',
			'details' => 'id',
			'branches' => 'id',
			'agent_monitor' => 'id',
			'coupon' => 'coupon_id',
			'cart' => 'id',
			'drop_off' => 'id',
			'how_to_vendor' => 'id',
			'how_to_agent' => 'id',
			'message' => 'id',
			'sales_monitor' => 'id',
			'wishlist' => 'id',
			'sub_cat' => 'sub_category',
			'item_rating' => 'ratingId',
			'followers' => 'likeid',
			'sub_cat_2' => 'code',
		];

		if(!isset($sql_from[$table_name])) return false;

		$from = ($skip_joins ? "`{$table_name}`" : $sql_from[$table_name]);

		if($skip_permissions) return $from . ' WHERE 1=1';

		// mm: build the query based on current member's permissions
		// allowing lower permissions if $lower_permissions set to 'user' or 'group'
		$perm = getTablePermissions($table_name);
		if($perm['view'] == 1 || ($perm['view'] > 1 && $lower_permissions == 'user')) { // view owner only
			$from .= ", `membership_userrecords` WHERE `{$table_name}`.`{$pkey[$table_name]}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='{$table_name}' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
		} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $lower_permissions == 'group')) { // view group only
			$from .= ", `membership_userrecords` WHERE `{$table_name}`.`{$pkey[$table_name]}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='{$table_name}' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
		} elseif($perm['view'] == 3) { // view all
			$from .= ' WHERE 1=1';
		} else { // view none
			return false;
		}

		return $from;
	}

	#########################################################

	function get_joined_record($table, $id, $skip_permissions = false) {
		$sql_fields = get_sql_fields($table);
		$sql_from = get_sql_from($table, $skip_permissions);

		if(!$sql_fields || !$sql_from) return false;

		$pk = getPKFieldName($table);
		if(!$pk) return false;

		$safe_id = makeSafe($id, false);
		$sql = "SELECT {$sql_fields} FROM {$sql_from} AND `{$table}`.`{$pk}`='{$safe_id}'";
		$eo['silentErrors'] = true;
		$res = sql($sql, $eo);
		if($row = db_fetch_assoc($res)) return $row;

		return false;
	}

	#########################################################

	function get_defaults($table) {
		/* array of tables and their fields, with default values (or empty), excluding automatic values */
		$defaults = [
			'sales' => [
				'id' => '',
				'user_id' => '',
				'pay_id' => '',
				'sales_day' => '',
				'first_name' => '',
				'last_name' => '',
				'email' => '',
				'phone' => '',
				'address' => '',
				'zone' => '',
				'zone_fee' => '0.00',
				'generated_by' => '',
				'confirmation_id' => '',
				'approval' => 'Not Approved',
			],
			'products' => [
				'id' => '',
				'supp_id' => '',
				'supplier' => '',
				'supp_email' => '',
				'supp_cont' => '',
				'category' => '',
				'category_id' => '',
				'ship_orig' => '',
				'slug' => '',
				'prod_qty' => '',
				'barcode' => '',
				'name' => '',
				'brand' => '',
				'photo' => '',
				'size' => '',
				'material' => '',
				'length' => '',
				'width' => '',
				'height' => '',
				'weight' => '',
				'date_view' => '',
				'counter' => '1',
				'price_1' => '',
				'was' => '',
				'price_2' => '',
				'shipping_add' => '',
				'price' => '',
				'p_off' => '',
				'description' => '',
				'more_desc' => '',
				'seller_sku' => '',
				'note' => '',
				'male_shoes' => '',
				'male_shoes_id' => '',
				'male_pants' => '',
				'male_pants_id' => '',
				'male_shirts' => '',
				'male_shirts_id' => '',
				'female_shoes' => '',
				'female_shoes_id' => '',
				'female_dresses' => '',
				'female_dresses_id' => '',
				'female_skirts' => '',
				'female_skirts_id' => '',
				'female_pants' => '',
				'female_pants_id' => '',
			],
			'category' => [
				'id' => '',
				'name' => '',
				'cat_name' => '',
				'sub_cat' => '',
				'code' => '',
				'cat_slug' => '',
			],
			'supplier' => [
				'supp_slug' => '',
				'name' => '',
				'shop_id' => '',
				'supp_name' => '',
				'supp_contact' => '',
				'id_number' => '',
				'passport' => '',
				'gender' => '',
				'identity_no' => '',
				'licence_no' => '',
				'email' => '',
				'address' => '',
				'id' => '',
				'photo' => '',
				'origin_country' => '',
				'type' => '1',
				'store_overview' => '',
				'drop_off_point' => '',
				'drop_off_contact' => '',
				'created_on' => '',
				'bank_head' => 'Add Your Bank Details',
				'service_provider' => '',
				'sp_name' => '',
				'sp_number' => '',
				'account_name' => '',
				'account_number' => '',
				'iban_number' => '',
				'bank_name' => '',
				'bank_branch' => '',
				'bank_code' => '',
				'mode_of_transfer' => '',
				'terms_conditions' => '',
				'reg_date' => '',
			],
			'users' => [
				'id' => '',
				'wallet' => '',
				'password' => '',
				'type' => '',
				'firstname' => '',
				'lastname' => '',
				'email' => '',
				'contact_info' => '',
				'address' => '',
				'photo' => '',
				'status' => '1',
				'activate_code' => '',
				'reset_code' => '',
				'created_on' => '',
				'zone' => '',
				'discount' => '',
				'coupon_code' => '',
				'coupon_worth' => '',
				'cost' => '0.00',
				'coupon_id' => '',
			],
			'stock' => [
				'company_stock_quantity' => '',
				'product_name' => '',
				'product_id' => '',
				'supplier' => '',
				'stock_quantity' => '',
				'id' => '',
			],
			'agent' => [
				'first_name' => '',
				'last_name' => '',
				'email' => '',
				'phone' => '',
				'address' => '',
				'id' => '',
				'station' => '',
				'zone' => '',
			],
			'male_shoes' => [
				'id' => '',
				'name' => '',
				'cat_slug' => '',
			],
			'male_pants' => [
				'id' => '',
				'name' => '',
				'cat_slug' => '',
			],
			'male_shirts' => [
				'id' => '',
				'name' => '',
				'cat_slug' => '',
			],
			'female_shoes' => [
				'id' => '',
				'name' => '',
				'cat_slug' => '',
			],
			'female_dresses' => [
				'id' => '',
				'name' => '',
				'cat_slug' => '',
			],
			'female_skirts' => [
				'id' => '',
				'name' => '',
				'cat_slug' => '',
			],
			'female_pants' => [
				'id' => '',
				'name' => '',
				'cat_slug' => '',
			],
			'details' => [
				'id' => '',
				'supp_conf' => 'Not Seen',
				'supp_name' => '',
				'details' => 'Not Dispatched',
				'sales_id' => '',
				'payy_id' => '',
				'reference_number' => '',
				'product_id' => '',
				'product_name' => '',
				'quantity' => '',
				'size' => '',
				'sales_date' => '1',
				'user_id' => '',
				'recipient_fname' => '',
				'recipient_lname' => '',
				'recipient_contact' => '',
				'recipient_email' => '',
				'recipient_address' => '',
				'weight' => '',
				'length' => '',
				'width' => '',
				'height' => '',
				'price' => '0.00',
				'pus' => '',
				'last_edit' => '',
				'editor' => '',
				'conf_id' => '',
				'from_branch_id' => '1',
				'to_branch_id' => '0',
				'type' => '2',
				'status' => '0',
				'total_sales' => '',
			],
			'branches' => [
				'branch_code' => '',
				'country' => '',
				'city' => '',
				'zonee' => '',
				'state' => '',
				'price' => '0.00',
				'zip_code' => '',
				'contact' => '',
				'id' => '',
			],
			'agent_monitor' => [
				'pay_number' => '',
				'user_id' => '',
				'sale_date' => '1',
				'user_name' => '',
				'phone' => '',
				'email' => '',
				'id' => '',
				'editors_name' => '',
				'create_time' => '',
			],
			'coupon' => [
				'coupon_id' => '',
				'coupon_code' => '',
				'discount' => '',
				'status' => '',
			],
			'cart' => [
				'id' => '',
				'first_name' => '',
				'last_name' => '',
				'product_name' => '',
				'price' => '0.00',
				'user_cont' => '',
				'user_email' => '',
				'zone_pus' => '',
				'coupon_user' => '',
				'coupon_user_worth' => '',
			],
			'drop_off' => [
				'id' => '',
				'point_name' => '',
				'location' => '',
				'licence' => '',
				'packages_accepted' => '',
				'operating_licence' => '',
				'station_email' => '',
				'station_photo' => '',
				'station_contact' => '',
				'agent_incharge' => '',
				'agent_id' => '',
				'station_reg_date' => '',
			],
			'how_to_vendor' => [
				'id' => '',
				'how_to_1' => '',
				'how_to_2' => '',
				'how_to_3' => '',
				'how_to_4' => '',
				'how_to_5' => '',
				'how_to_6' => '',
				'how_to_7' => '',
				'how_to_8' => '',
				'how_to_9' => '',
				'how_to_10' => '',
			],
			'how_to_agent' => [
				'id' => '',
				'how_to_1' => '',
				'how_to_2' => '',
				'how_to_3' => '',
				'how_to_4' => '',
				'how_to_5' => '',
				'how_to_6' => '',
				'how_to_7' => '',
				'how_to_8' => '',
				'how_to_9' => '',
				'how_to_10' => '',
			],
			'message' => [
				'id' => '',
				'user_id' => '',
				'user_name' => '',
				'product' => '',
				'message' => '',
			],
			'sales_monitor' => [
				'id' => '',
				'product_id' => '',
				'product_name' => '',
				'total_sale' => '',
			],
			'wishlist' => [
				'id' => '',
				'user_id' => '',
				'w_fname' => '',
				'w_lname' => '',
				'w_email' => '',
				'w_pnumber' => '',
				'product_id' => '',
				'w_product' => '',
			],
			'sub_cat' => [
				'sub_category' => '',
			],
			'item_rating' => [
				'ratingId' => '',
				'itemId' => '',
				'userId' => '',
				'rater_name' => '',
				'ratingNumber' => '',
				'title' => '',
				'comments' => '',
				'created' => '',
			],
			'followers' => [
				'likeid' => '',
				'userid' => '',
				'f_fname' => '',
				'vendorid' => '',
				'follow_date' => '',
			],
			'sub_cat_2' => [
				'code' => '',
				'cat_name' => '',
			],
		];

		return isset($defaults[$table]) ? $defaults[$table] : [];
	}

	#########################################################

	function logInMember() {
		$redir = 'index.php';
		if($_POST['signIn'] != '') {
			if($_POST['username'] != '' && $_POST['password'] != '') {
				$username = makeSafe(strtolower($_POST['username']));
				$hash = sqlValue("select passMD5 from membership_users where lcase(memberID)='{$username}' and isApproved=1 and isBanned=0");
				$password = $_POST['password'];

				if(password_match($password, $hash)) {
					$_SESSION['memberID'] = $username;
					$_SESSION['memberGroupID'] = sqlValue("SELECT `groupID` FROM `membership_users` WHERE LCASE(`memberID`)='{$username}'");

					if($_POST['rememberMe'] == 1) {
						RememberMe::login($username);
					} else {
						RememberMe::delete();
					}

					// harden user's password hash
					password_harden($username, $password, $hash);

					// hook: login_ok
					if(function_exists('login_ok')) {
						$args = [];
						if(!$redir = login_ok(getMemberInfo(), $args)) {
							$redir = 'index.php';
						}
					}

					redirect($redir);
					exit;
				}
			}

			// hook: login_failed
			if(function_exists('login_failed')) {
				$args = [];
				login_failed([
					'username' => $_POST['username'],
					'password' => $_POST['password'],
					'IP' => $_SERVER['REMOTE_ADDR']
				], $args);
			}

			if(!headers_sent()) header('HTTP/1.0 403 Forbidden');
			redirect("index.php?loginFailed=1");
			exit;
		}

		/* do we have a JWT auth header? */
		jwt_check_login();

		if(!empty($_SESSION['memberID']) && !empty($_SESSION['memberGroupID'])) return;

		/* check if a rememberMe cookie exists and sign in user if so */
		if(RememberMe::check()) {
			$username = makeSafe(strtolower(RememberMe::user()));
			$_SESSION['memberID'] = $username;
			$_SESSION['memberGroupID'] = sqlValue("SELECT `groupID` FROM `membership_users` WHERE LCASE(`memberID`)='{$username}'");
		}
	}

	#########################################################

	function htmlUserBar() {
		global $Translation;
		if(!defined('PREPEND_PATH')) define('PREPEND_PATH', '');

		$mi = getMemberInfo();
		$adminConfig = config('adminConfig');
		$home_page = (basename($_SERVER['PHP_SELF']) == 'index.php');
		ob_start();

		?>
		<nav class="navbar navbar-default navbar-fixed-top hidden-print" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- application title is obtained from the name besides the yellow database icon in AppGini, use underscores for spaces -->
			<a class="navbar-brand" href="<?php echo PREPEND_PATH; ?>index.php"><img src="resources/images/1.png" width="80px" /></a>
				</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav"><?php echo ($home_page ? '' : NavMenus()); ?></ul>

				<?php if(userCanImport()){ ?>
					<ul class="nav navbar-nav">
						<a href="<?php echo PREPEND_PATH; ?>import-csv.php" class="btn btn-default navbar-btn hidden-xs btn-import-csv" title="<?php echo html_attr($Translation['import csv file']); ?>"><i class="glyphicon glyphicon-th"></i> <?php echo $Translation['import CSV']; ?></a>
						<a href="<?php echo PREPEND_PATH; ?>import-csv.php" class="btn btn-default navbar-btn visible-xs btn-lg btn-import-csv" title="<?php echo html_attr($Translation['import csv file']); ?>"><i class="glyphicon glyphicon-th"></i> <?php echo $Translation['import CSV']; ?></a>
					</ul>
				<?php } ?>

				<?php if(getLoggedAdmin() !== false) { ?>
					<ul class="nav navbar-nav">
						<a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn hidden-xs" title="<?php echo html_attr($Translation['admin area']); ?>"><i class="glyphicon glyphicon-cog"></i> <?php echo $Translation['admin area']; ?></a>
						<a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn visible-xs btn-lg" title="<?php echo html_attr($Translation['admin area']); ?>"><i class="glyphicon glyphicon-cog"></i> <?php echo $Translation['admin area']; ?></a>
					</ul>
				<?php } ?>

				<?php if(!$_GET['signIn'] && !$_GET['loginFailed']) { ?>
					<?php if(!$mi['username'] || $mi['username'] == $adminConfig['anonymousMember']) { ?>
						<p class="navbar-text navbar-right">&nbsp;</p>
						<a href="<?php echo PREPEND_PATH; ?>index.php?signIn=1" class="btn btn-success navbar-btn navbar-right"><?php echo $Translation['sign in']; ?></a>
						<p class="navbar-text navbar-right">
							<?php echo $Translation['not signed in']; ?>
						</p>
					<?php } else { ?>
						<ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
							<a class="btn navbar-btn btn-default" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="glyphicon glyphicon-log-out"></i> <?php echo $Translation['sign out']; ?></a>

							<p class="navbar-text">
								<?php echo $Translation['signed as']; ?> <strong><a href="<?php echo PREPEND_PATH; ?>membership_profile.php" class="navbar-link"><?php echo $mi['username']; ?></a></strong>
							</p>
						</ul>
						<ul class="nav navbar-nav visible-xs">
							<a class="btn navbar-btn btn-default btn-lg visible-xs" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="glyphicon glyphicon-log-out"></i> <?php echo $Translation['sign out']; ?></a>
							<p class="navbar-text text-center">
								<?php echo $Translation['signed as']; ?> <strong><a href="<?php echo PREPEND_PATH; ?>membership_profile.php" class="navbar-link"><?php echo $mi['username']; ?></a></strong>
							</p>
						</ul>
						<script>
							/* periodically check if user is still signed in */
							setInterval(function() {
								$j.ajax({
									url: '<?php echo PREPEND_PATH; ?>ajax_check_login.php',
									success: function(username) {
										if(!username.length) window.location = '<?php echo PREPEND_PATH; ?>index.php?signIn=1';
									}
								});
							}, 60000);
						</script>
					<?php } ?>
				<?php } ?>

				<p class="navbar-text navbar-right help-shortcuts-launcher-container hidden-xs">
					<img
						class="help-shortcuts-launcher" 
						src="<?php echo PREPEND_PATH; ?>resources/images/keyboard.png" 
						title="<?php echo html_attr($Translation['keyboard shortcuts']); ?>">
				</p>
			</div>
		</nav>
		<?php

		$html = ob_get_contents();
		ob_end_clean();

		return $html;
	}

	#########################################################

	function showNotifications($msg = '', $class = '', $fadeout = true) {
		global $Translation;
		if($error_message = strip_tags($_REQUEST['error_message']))
			$error_message = '<div class="text-bold">' . $error_message . '</div>';

		if(!$msg) { // if no msg, use url to detect message to display
			if($_REQUEST['record-added-ok'] != '') {
				$msg = $Translation['new record saved'];
				$class = 'alert-success';
			} elseif($_REQUEST['record-added-error'] != '') {
				$msg = $Translation['Couldn\'t save the new record'] . $error_message;
				$class = 'alert-danger';
				$fadeout = false;
			} elseif($_REQUEST['record-updated-ok'] != '') {
				$msg = $Translation['record updated'];
				$class = 'alert-success';
			} elseif($_REQUEST['record-updated-error'] != '') {
				$msg = $Translation['Couldn\'t save changes to the record'] . $error_message;
				$class = 'alert-danger';
				$fadeout = false;
			} elseif($_REQUEST['record-deleted-ok'] != '') {
				$msg = $Translation['The record has been deleted successfully'];
				$class = 'alert-success';
			} elseif($_REQUEST['record-deleted-error'] != '') {
				$msg = $Translation['Couldn\'t delete this record'] . $error_message;
				$class = 'alert-danger';
				$fadeout = false;
			} else {
				return '';
			}
		}
		$id = 'notification-' . rand();

		ob_start();
		// notification template
		?>
		<div id="%%ID%%" class="alert alert-dismissable %%CLASS%%" style="opacity: 1; padding-top: 6px; padding-bottom: 6px; animation: fadeIn 1.5s ease-out;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			%%MSG%%
		</div>
		<script>
			$j(function() {
				var autoDismiss = <?php echo $fadeout ? 'true' : 'false'; ?>,
					embedded = !$j('nav').length,
					messageDelay = 10, fadeDelay = 1.5;

				if(!autoDismiss) {
					if(embedded)
						$j('#%%ID%%').before('<div style="height: 2rem;"></div>');
					else
						$j('#%%ID%%').css({ margin: '0 0 1rem' });

					return;
				}

				// below code runs only in case of autoDismiss

				if(embedded)
					$j('#%%ID%%').css({ margin: '1rem 0 -1rem' });
				else
					$j('#%%ID%%').css({ margin: '-15px 0 -20px' });

				setTimeout(function() {
					$j('#%%ID%%').css({    animation: 'fadeOut ' + fadeDelay + 's ease-out' });
				}, messageDelay * 1000);

				setTimeout(function() {
					$j('#%%ID%%').css({    visibility: 'hidden' });
				}, (messageDelay + fadeDelay) * 1000);
			})
		</script>
		<style>
			@keyframes fadeIn {
				0%   { opacity: 0; }
				100% { opacity: 1; }
			}
			@keyframes fadeOut {
				0%   { opacity: 1; }
				100% { opacity: 0; }
			}
		</style>

		<?php
		$out = ob_get_clean();

		$out = str_replace('%%ID%%', $id, $out);
		$out = str_replace('%%MSG%%', $msg, $out);
		$out = str_replace('%%CLASS%%', $class, $out);

		return $out;
	}

	#########################################################

	function parseMySQLDate($date, $altDate) {
		// is $date valid?
		if(preg_match("/^\d{4}-\d{1,2}-\d{1,2}$/", trim($date))) {
			return trim($date);
		}

		if($date != '--' && preg_match("/^\d{4}-\d{1,2}-\d{1,2}$/", trim($altDate))) {
			return trim($altDate);
		}

		if($date != '--' && $altDate && intval($altDate)==$altDate) {
			return @date('Y-m-d', @time() + ($altDate >= 1 ? $altDate - 1 : $altDate) * 86400);
		}

		return '';
	}

	#########################################################

	function parseCode($code, $isInsert = true, $rawData = false) {
		if($isInsert) {
			$arrCodes = [
				'<%%creatorusername%%>' => $_SESSION['memberID'],
				'<%%creatorgroupid%%>' => $_SESSION['memberGroupID'],
				'<%%creatorip%%>' => $_SERVER['REMOTE_ADDR'],
				'<%%creatorgroup%%>' => sqlValue("SELECT `name` FROM `membership_groups` WHERE `groupID`='{$_SESSION['memberGroupID']}'"),

				'<%%creationdate%%>' => ($rawData ? @date('Y-m-d') : @date('n/j/Y')),
				'<%%creationtime%%>' => ($rawData ? @date('H:i:s') : @date('h:i:s a')),
				'<%%creationdatetime%%>' => ($rawData ? @date('Y-m-d H:i:s') : @date('n/j/Y h:i:s a')),
				'<%%creationtimestamp%%>' => ($rawData ? @date('Y-m-d H:i:s') : @time())
			];
		} else {
			$arrCodes = [
				'<%%editorusername%%>' => $_SESSION['memberID'],
				'<%%editorgroupid%%>' => $_SESSION['memberGroupID'],
				'<%%editorip%%>' => $_SERVER['REMOTE_ADDR'],
				'<%%editorgroup%%>' => sqlValue("SELECT `name` FROM `membership_groups` WHERE `groupID`='{$_SESSION['memberGroupID']}'"),

				'<%%editingdate%%>' => ($rawData ? @date('Y-m-d') : @date('n/j/Y')),
				'<%%editingtime%%>' => ($rawData ? @date('H:i:s') : @date('h:i:s a')),
				'<%%editingdatetime%%>' => ($rawData ? @date('Y-m-d H:i:s') : @date('n/j/Y h:i:s a')),
				'<%%editingtimestamp%%>' => ($rawData ? @date('Y-m-d H:i:s') : @time())
			];
		}

		$pc = str_ireplace(array_keys($arrCodes), array_values($arrCodes), $code);

		return $pc;
	}

	#########################################################

	function addFilter($index, $filterAnd, $filterField, $filterOperator, $filterValue) {
		// validate input
		if($index < 1 || $index > 80 || !is_int($index)) return false;
		if($filterAnd != 'or')   $filterAnd = 'and';
		$filterField = intval($filterField);

		/* backward compatibility */
		if(in_array($filterOperator, $GLOBALS['filter_operators'])) {
			$filterOperator = array_search($filterOperator, $GLOBALS['filter_operators']);
		}

		if(!in_array($filterOperator, array_keys($GLOBALS['filter_operators']))) {
			$filterOperator = 'like';
		}

		if(!$filterField) {
			$filterOperator = '';
			$filterValue = '';
		}

		$_REQUEST['FilterAnd'][$index] = $filterAnd;
		$_REQUEST['FilterField'][$index] = $filterField;
		$_REQUEST['FilterOperator'][$index] = $filterOperator;
		$_REQUEST['FilterValue'][$index] = $filterValue;

		return true;
	}

	#########################################################

	function clearFilters() {
		for($i=1; $i<=80; $i++) {
			addFilter($i, '', 0, '', '');
		}
	}

	#########################################################

	if(!function_exists('str_ireplace')) {
		function str_ireplace($search, $replace, $subject) {
			$ret=$subject;
			if(is_array($search)) {
				for($i=0; $i<count($search); $i++) {
					$ret=str_ireplace($search[$i], $replace[$i], $ret);
				}
			} else {
				$ret=preg_replace('/'.preg_quote($search, '/').'/i', $replace, $ret);
			}

			return $ret;
		} 
	} 

	#########################################################

	/**
	* Loads a given view from the templates folder, passing the given data to it
	* @param $view the name of a php file (without extension) to be loaded from the 'templates' folder
	* @param $the_data_to_pass_to_the_view (optional) associative array containing the data to pass to the view
	* @return the output of the parsed view as a string
	*/
	function loadView($view, $the_data_to_pass_to_the_view=false) {
		global $Translation;

		$view = dirname(__FILE__)."/templates/$view.php";
		if(!is_file($view)) return false;

		if(is_array($the_data_to_pass_to_the_view)) {
			foreach($the_data_to_pass_to_the_view as $k => $v)
				$$k = $v;
		}
		unset($the_data_to_pass_to_the_view, $k, $v);

		ob_start();
		@include($view);
		$out=ob_get_contents();
		ob_end_clean();

		return $out;
	}

	#########################################################

	/**
	* Loads a table template from the templates folder, passing the given data to it
	* @param $table_name the name of the table whose template is to be loaded from the 'templates' folder
	* @param $the_data_to_pass_to_the_table associative array containing the data to pass to the table template
	* @return the output of the parsed table template as a string
	*/
	function loadTable($table_name, $the_data_to_pass_to_the_table = []) {
		$dont_load_header = $the_data_to_pass_to_the_table['dont_load_header'];
		$dont_load_footer = $the_data_to_pass_to_the_table['dont_load_footer'];

		$header = $table = $footer = '';

		if(!$dont_load_header) {
			// try to load tablename-header
			if(!($header = loadView("{$table_name}-header", $the_data_to_pass_to_the_table))) {
				$header = loadView('table-common-header', $the_data_to_pass_to_the_table);
			}
		}

		$table = loadView($table_name, $the_data_to_pass_to_the_table);

		if(!$dont_load_footer) {
			// try to load tablename-footer
			if(!($footer = loadView("{$table_name}-footer", $the_data_to_pass_to_the_table))) {
				$footer = loadView('table-common-footer', $the_data_to_pass_to_the_table);
			}
		}

		return "{$header}{$table}{$footer}";
	}

	#########################################################

	function filterDropdownBy($filterable, $filterers, $parentFilterers, $parentPKField, $parentCaption, $parentTable, &$filterableCombo) {
		$filterersArray = explode(',', $filterers);
		$parentFilterersArray = explode(',', $parentFilterers);
		$parentFiltererList = '`' . implode('`, `', $parentFilterersArray) . '`';
		$res=sql("SELECT `$parentPKField`, $parentCaption, $parentFiltererList FROM `$parentTable` ORDER BY 2", $eo);
		$filterableData = [];
		while($row=db_fetch_row($res)) {
			$filterableData[$row[0]] = $row[1];
			$filtererIndex = 0;
			foreach($filterersArray as $filterer) {
				$filterableDataByFilterer[$filterer][$row[$filtererIndex + 2]][$row[0]] = $row[1];
				$filtererIndex++;
			}
			$row[0] = addslashes($row[0]);
			$row[1] = addslashes($row[1]);
			$jsonFilterableData .= "\"{$row[0]}\":\"{$row[1]}\",";
		}
		$jsonFilterableData .= '}';
		$jsonFilterableData = '{'.str_replace(',}', '}', $jsonFilterableData);     
		$filterJS = "\nvar {$filterable}_data = $jsonFilterableData;";

		foreach($filterersArray as $filterer) {
			if(is_array($filterableDataByFilterer[$filterer])) foreach($filterableDataByFilterer[$filterer] as $filtererItem => $filterableItem) {
				$jsonFilterableDataByFilterer[$filterer] .= '"'.addslashes($filtererItem).'":{';
				foreach($filterableItem as $filterableItemID => $filterableItemData) {
					$jsonFilterableDataByFilterer[$filterer] .= '"'.addslashes($filterableItemID).'":"'.addslashes($filterableItemData).'",';
				}
				$jsonFilterableDataByFilterer[$filterer] .= '},';
			}
			$jsonFilterableDataByFilterer[$filterer] .= '}';
			$jsonFilterableDataByFilterer[$filterer] = '{'.str_replace(',}', '}', $jsonFilterableDataByFilterer[$filterer]);

			$filterJS.="\n\n// code for filtering {$filterable} by {$filterer}\n";
			$filterJS.="\nvar {$filterable}_data_by_{$filterer} = {$jsonFilterableDataByFilterer[$filterer]}; ";
			$filterJS.="\nvar selected_{$filterable} = \$j('#{$filterable}').val();";
			$filterJS.="\nvar {$filterable}_change_by_{$filterer} = function() {";
			$filterJS.="\n\t$('{$filterable}').options.length=0;";
			$filterJS.="\n\t$('{$filterable}').options[0] = new Option();";
			$filterJS.="\n\tif(\$j('#{$filterer}').val()) {";
			$filterJS.="\n\t\tfor({$filterable}_item in {$filterable}_data_by_{$filterer}[\$j('#{$filterer}').val()]) {";
			$filterJS.="\n\t\t\t$('{$filterable}').options[$('{$filterable}').options.length] = new Option(";
			$filterJS.="\n\t\t\t\t{$filterable}_data_by_{$filterer}[\$j('#{$filterer}').val()][{$filterable}_item],";
			$filterJS.="\n\t\t\t\t{$filterable}_item,";
			$filterJS.="\n\t\t\t\t({$filterable}_item == selected_{$filterable} ? true : false),";
			$filterJS.="\n\t\t\t\t({$filterable}_item == selected_{$filterable} ? true : false)";
			$filterJS.="\n\t\t\t);";
			$filterJS.="\n\t\t}";
			$filterJS.="\n\t} else {";
			$filterJS.="\n\t\tfor({$filterable}_item in {$filterable}_data) {";
			$filterJS.="\n\t\t\t$('{$filterable}').options[$('{$filterable}').options.length] = new Option(";
			$filterJS.="\n\t\t\t\t{$filterable}_data[{$filterable}_item],";
			$filterJS.="\n\t\t\t\t{$filterable}_item,";
			$filterJS.="\n\t\t\t\t({$filterable}_item == selected_{$filterable} ? true : false),";
			$filterJS.="\n\t\t\t\t({$filterable}_item == selected_{$filterable} ? true : false)";
			$filterJS.="\n\t\t\t);";
			$filterJS.="\n\t\t}";
			$filterJS.="\n\t\tif(selected_{$filterable} && selected_{$filterable} == \$j('#{$filterable}').val()) {";
			$filterJS.="\n\t\t\tfor({$filterer}_item in {$filterable}_data_by_{$filterer}) {";
			$filterJS.="\n\t\t\t\tfor({$filterable}_item in {$filterable}_data_by_{$filterer}[{$filterer}_item]) {";
			$filterJS.="\n\t\t\t\t\tif({$filterable}_item == selected_{$filterable}) {";
			$filterJS.="\n\t\t\t\t\t\t$('{$filterer}').value = {$filterer}_item;";
			$filterJS.="\n\t\t\t\t\t\tbreak;";
			$filterJS.="\n\t\t\t\t\t}";
			$filterJS.="\n\t\t\t\t}";
			$filterJS.="\n\t\t\t\tif({$filterable}_item == selected_{$filterable}) break;";
			$filterJS.="\n\t\t\t}";
			$filterJS.="\n\t\t}";
			$filterJS.="\n\t}";
			$filterJS.="\n\t$('{$filterable}').highlight();";
			$filterJS.="\n};";
			$filterJS.="\n$('{$filterer}').observe('change', function() { window.setTimeout({$filterable}_change_by_{$filterer}, 25); });";
			$filterJS.="\n";
		}

		$filterableCombo = new Combo;
		$filterableCombo->ListType = 0;
		$filterableCombo->ListItem = array_slice(array_values($filterableData), 0, 10);
		$filterableCombo->ListData = array_slice(array_keys($filterableData), 0, 10);
		$filterableCombo->SelectName = $filterable;
		$filterableCombo->AllowNull = true;

		return $filterJS;
	}

	#########################################################
	function br2nl($text) {
		return  preg_replace('/\<br(\s*)?\/?\>/i', "\n", $text);
	}

	#########################################################

	if(!function_exists('htmlspecialchars_decode')) {
		function htmlspecialchars_decode($string, $quote_style = ENT_COMPAT) {
			return strtr($string, array_flip(get_html_translation_table(HTML_SPECIALCHARS, $quote_style)));
		}
	}

	#########################################################

	function entitiesToUTF8($input) {
		return preg_replace_callback('/(&#[0-9]+;)/', '_toUTF8', $input);
	}

	function _toUTF8($m) {
		if(function_exists('mb_convert_encoding')) {
			return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES");
		} else {
			return $m[1];
		}
	}

	#########################################################

	function func_get_args_byref() {
		if(!function_exists('debug_backtrace')) return false;

		$trace = debug_backtrace();
		return $trace[1]['args'];
	}

	#########################################################

	function permissions_sql($table, $level = 'all') {
		if(!in_array($level, ['user', 'group'])) { $level = 'all'; }
		$perm = getTablePermissions($table);
		$from = '';
		$where = '';
		$pk = getPKFieldName($table);

		if($perm['view'] == 1 || ($perm['view'] > 1 && $level == 'user')) { // view owner only
			$from = 'membership_userrecords';
			$where = "(`$table`.`$pk`=membership_userrecords.pkValue and membership_userrecords.tableName='$table' and lcase(membership_userrecords.memberID)='" . getLoggedMemberID() . "')";
		} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $level == 'group')) { // view group only
			$from = 'membership_userrecords';
			$where = "(`$table`.`$pk`=membership_userrecords.pkValue and membership_userrecords.tableName='$table' and membership_userrecords.groupID='" . getLoggedGroupID() . "')";
		} elseif($perm['view'] == 3) { // view all
			// no further action
		} elseif($perm['view'] == 0) { // view none
			return false;
		}

		return ['where' => $where, 'from' => $from, 0 => $where, 1 => $from];
	}

	#########################################################

	function error_message($msg, $back_url = '', $full_page = true) {
		$curr_dir = dirname(__FILE__);
		global $Translation;

		ob_start();

		if($full_page) include($curr_dir . '/header.php');

		echo '<div class="panel panel-danger">';
			echo '<div class="panel-heading"><h3 class="panel-title">' . $Translation['error:'] . '</h3></div>';
			echo '<div class="panel-body"><p class="text-danger">' . $msg . '</p>';
			if($back_url !== false) { // explicitly passing false suppresses the back link completely
				echo '<div class="text-center">';
				if($back_url) {
					echo '<a href="' . $back_url . '" class="btn btn-danger btn-lg vspacer-lg"><i class="glyphicon glyphicon-chevron-left"></i> ' . $Translation['< back'] . '</a>';
				} else {
					echo '<a href="#" class="btn btn-danger btn-lg vspacer-lg" onclick="history.go(-1); return false;"><i class="glyphicon glyphicon-chevron-left"></i> ' . $Translation['< back'] . '</a>';
				}
				echo '</div>';
			}
			echo '</div>';
		echo '</div>';

		if($full_page) include($curr_dir . '/footer.php');

		return ob_get_clean();
	}

	#########################################################

	function toMySQLDate($formattedDate, $sep = datalist_date_separator, $ord = datalist_date_format) {
		// extract date elements
		$de=explode($sep, $formattedDate);
		$mySQLDate=intval($de[strpos($ord, 'Y')]).'-'.intval($de[strpos($ord, 'm')]).'-'.intval($de[strpos($ord, 'd')]);
		return $mySQLDate;
	}

	#########################################################

	function reIndex(&$arr) {
		$i=1;
		foreach($arr as $n=>$v) {
			$arr2[$i]=$n;
			$i++;
		}
		return $arr2;
	}

	#########################################################

	function get_embed($provider, $url, $max_width = '', $max_height = '', $retrieve = 'html') {
		global $Translation;
		if(!$url) return '';

		$providers = [
			'youtube' => ['oembed' => 'https://www.youtube.com/oembed?'],
			'googlemap' => ['oembed' => '', 'regex' => '/^http.*\.google\..*maps/i'],
		];

		if(!isset($providers[$provider])) {
			return '<div class="text-danger">' . $Translation['invalid provider'] . '</div>';
		}

		if(isset($providers[$provider]['regex']) && !preg_match($providers[$provider]['regex'], $url)) {
			return '<div class="text-danger">' . $Translation['invalid url'] . '</div>';
		}

		if($providers[$provider]['oembed']) {
			$oembed = $providers[$provider]['oembed'] . 'url=' . urlencode($url) . "&amp;maxwidth={$max_width}&amp;maxheight={$max_height}&amp;format=json";
			$data_json = request_cache($oembed);

			$data = json_decode($data_json, true);
			if($data === null) {
				/* an error was returned rather than a json string */
				if($retrieve == 'html') return "<div class=\"text-danger\">{$data_json}\n<!-- {$oembed} --></div>";
				return '';
			}

			return (isset($data[$retrieve]) ? $data[$retrieve] : $data['html']);
		}

		/* special cases (where there is no oEmbed provider) */
		if($provider == 'googlemap') return get_embed_googlemap($url, $max_width, $max_height, $retrieve);

		return '<div class="text-danger">Invalid provider!</div>';
	}

	#########################################################

	function get_embed_googlemap($url, $max_width = '', $max_height = '', $retrieve = 'html') {
		global $Translation;
		$url_parts = parse_url($url);
		$coords_regex = '/-?\d+(\.\d+)?[,+]-?\d+(\.\d+)?(,\d{1,2}z)?/'; /* https://stackoverflow.com/questions/2660201 */

		if(preg_match($coords_regex, $url_parts['path'] . '?' . $url_parts['query'], $m)) {
			list($lat, $long, $zoom) = explode(',', $m[0]);
			$zoom = intval($zoom);
			if(!$zoom) $zoom = 10; /* default zoom */
			if(!$max_height) $max_height = 360;
			if(!$max_width) $max_width = 480;

			$api_key = config('adminConfig')['googleAPIKey'];
			$embed_url = "https://www.google.com/maps/embed/v1/view?key={$api_key}&amp;center={$lat},{$long}&amp;zoom={$zoom}&amp;maptype=roadmap";
			$thumbnail_url = "https://maps.googleapis.com/maps/api/staticmap?key={$api_key}&amp;center={$lat},{$long}&amp;zoom={$zoom}&amp;maptype=roadmap&amp;size={$max_width}x{$max_height}";

			if($retrieve == 'html') {
				return "<iframe width=\"{$max_width}\" height=\"{$max_height}\" frameborder=\"0\" style=\"border:0\" src=\"{$embed_url}\"></iframe>";
			} else {
				return $thumbnail_url;
			}
		} else {
			return '<div class="text-danger">' . $Translation['cant retrieve coordinates from url'] . '</div>';
		}
	}

	#########################################################

	function request_cache($request, $force_fetch = false) {
		$max_cache_lifetime = 7 * 86400; /* max cache lifetime in seconds before refreshing from source */

		/* membership_cache table exists? if not, create it */
		static $cache_table_exists = false;
		if(!$cache_table_exists && !$force_fetch) {
			$te = sqlValue("show tables like 'membership_cache'");
			if(!$te) {
				if(!sql("CREATE TABLE `membership_cache` (`request` VARCHAR(100) NOT NULL, `request_ts` INT, `response` TEXT NOT NULL, PRIMARY KEY (`request`))", $eo)) {
					/* table can't be created, so force fetching request */
					return request_cache($request, true);
				}
			}
			$cache_table_exists = true;
		}

		/* retrieve response from cache if exists */
		if(!$force_fetch) {
			$res = sql("select response, request_ts from membership_cache where request='" . md5($request) . "'", $eo);
			if(!$row = db_fetch_array($res)) return request_cache($request, true);

			$response = $row[0];
			$response_ts = $row[1];
			if($response_ts < time() - $max_cache_lifetime) return request_cache($request, true);
		}

		/* if no response in cache, issue a request */
		if(!$response || $force_fetch) {
			$response = @file_get_contents($request);
			if($response === false) {
				$error = error_get_last();
				$error_message = preg_replace('/.*: (.*)/', '$1', $error['message']);
				return $error_message;
			} elseif($cache_table_exists) {
				/* store response in cache */
				$ts = time();
				sql("replace into membership_cache set request='" . md5($request) . "', request_ts='{$ts}', response='" . makeSafe($response, false) . "'", $eo);
			}
		}

		return $response;
	}

	#########################################################

	function check_record_permission($table, $id, $perm = 'view') {
		if($perm != 'edit' && $perm != 'delete') $perm = 'view';

		$perms = getTablePermissions($table);
		if(!$perms[$perm]) return false;

		$safe_id = makeSafe($id);
		$safe_table = makeSafe($table);

		if($perms[$perm] == 1) { // own records only
			$username = getLoggedMemberID();
			$owner = sqlValue("select memberID from membership_userrecords where tableName='{$safe_table}' and pkValue='{$safe_id}'");
			if($owner == $username) return true;
		} elseif($perms[$perm] == 2) { // group records
			$group_id = getLoggedGroupID();
			$owner_group_id = sqlValue("select groupID from membership_userrecords where tableName='{$safe_table}' and pkValue='{$safe_id}'");
			if($owner_group_id == $group_id) return true;
		} elseif($perms[$perm] == 3) { // all records
			return true;
		}

		return false;
	}

	#########################################################

	function NavMenus($options = []) {
		if(!defined('PREPEND_PATH')) define('PREPEND_PATH', '');
		global $Translation;
		$prepend_path = PREPEND_PATH;

		/* default options */
		if(empty($options)) {
			$options = ['tabs' => 7];
		}

		$table_group_name = array_keys(get_table_groups()); /* 0 => group1, 1 => group2 .. */
		/* if only one group named 'None', set to translation of 'select a table' */
		if((count($table_group_name) == 1 && $table_group_name[0] == 'None') || count($table_group_name) < 1) $table_group_name[0] = $Translation['select a table'];
		$table_group_index = array_flip($table_group_name); /* group1 => 0, group2 => 1 .. */
		$menu = array_fill(0, count($table_group_name), '');

		$t = time();
		$arrTables = getTableList();
		if(is_array($arrTables)) {
			foreach($arrTables as $tn => $tc) {
				/* ---- list of tables where hide link in nav menu is set ---- */
				$tChkHL = array_search($tn, []);

				/* ---- list of tables where filter first is set ---- */
				$tChkFF = array_search($tn, []);
				if($tChkFF !== false && $tChkFF !== null) {
					$searchFirst = '&Filter_x=1';
				} else {
					$searchFirst = '';
				}

				/* when no groups defined, $table_group_index['None'] is NULL, so $menu_index is still set to 0 */
				$menu_index = intval($table_group_index[$tc[3]]);
				if(!$tChkHL && $tChkHL !== 0) $menu[$menu_index] .= "<li><a href=\"{$prepend_path}{$tn}_view.php?t={$t}{$searchFirst}\"><img src=\"{$prepend_path}" . ($tc[2] ? $tc[2] : 'blank.gif') . "\" height=\"32\"> {$tc[0]}</a></li>";
			}
		}

		// custom nav links, as defined in "hooks/links-navmenu.php" 
		global $navLinks;
		if(is_array($navLinks)) {
			$memberInfo = getMemberInfo();
			$links_added = [];
			foreach($navLinks as $link) {
				if(!isset($link['url']) || !isset($link['title'])) continue;
				if(getLoggedAdmin() !== false || @in_array($memberInfo['group'], $link['groups']) || @in_array('*', $link['groups'])) {
					$menu_index = intval($link['table_group']);
					if(!$links_added[$menu_index]) $menu[$menu_index] .= '<li class="divider"></li>';

					/* add prepend_path to custom links if they aren't absolute links */
					if(!preg_match('/^(http|\/\/)/i', $link['url'])) $link['url'] = $prepend_path . $link['url'];
					if(!preg_match('/^(http|\/\/)/i', $link['icon']) && $link['icon']) $link['icon'] = $prepend_path . $link['icon'];

					$menu[$menu_index] .= "<li><a href=\"{$link['url']}\"><img src=\"" . ($link['icon'] ? $link['icon'] : "{$prepend_path}blank.gif") . "\" height=\"32\"> {$link['title']}</a></li>";
					$links_added[$menu_index]++;
				}
			}
		}

		$menu_wrapper = '';
		for($i = 0; $i < count($menu); $i++) {
			$menu_wrapper .= <<<EOT
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{$table_group_name[$i]} <b class="caret"></b></a>
					<ul class="dropdown-menu" role="menu">{$menu[$i]}</ul>
				</li>
EOT;
		}

		return $menu_wrapper;
	}

	#########################################################

	function StyleSheet() {
		if(!defined('PREPEND_PATH')) define('PREPEND_PATH', '');
		$prepend_path = PREPEND_PATH;

		$css_links = <<<EOT

			<link rel="stylesheet" href="{$prepend_path}resources/initializr/css/flatly.css">
			<link rel="stylesheet" href="{$prepend_path}resources/lightbox/css/lightbox.css" media="screen">
			<link rel="stylesheet" href="{$prepend_path}resources/select2/select2.css" media="screen">
			<link rel="stylesheet" href="{$prepend_path}resources/timepicker/bootstrap-timepicker.min.css" media="screen">
			<link rel="stylesheet" href="{$prepend_path}dynamic.css">
EOT;

		return $css_links;
	}

	#########################################################

	function PrepareUploadedFile($FieldName, $MaxSize, $FileTypes = 'jpg|jpeg|gif|png', $NoRename = false, $dir = '') {
		global $Translation;
		$f = $_FILES[$FieldName];
		if($f['error'] == 4 || !$f['name']) return '';

		$dir = getUploadDir($dir);

		/* get php.ini upload_max_filesize in bytes */
		$php_upload_size_limit = trim(ini_get('upload_max_filesize'));
		$last = strtolower($php_upload_size_limit[strlen($php_upload_size_limit) - 1]);
		switch($last) {
			case 'g':
				$php_upload_size_limit *= 1024;
			case 'm':
				$php_upload_size_limit *= 1024;
			case 'k':
				$php_upload_size_limit *= 1024;
		}

		$MaxSize = min($MaxSize, $php_upload_size_limit);

		if($f['size'] > $MaxSize || $f['error']) {
			echo error_message(str_replace(['<MaxSize>', '{MaxSize}'], intval($MaxSize / 1024), $Translation['file too large']));
			exit;
		}
		if(!preg_match('/\.(' . $FileTypes . ')$/i', $f['name'], $ft)) {
			echo error_message(str_replace(['<FileTypes>', '{FileTypes}'], str_replace('|', ', ', $FileTypes), $Translation['invalid file type']));
			exit;
		}

		$name = str_replace(' ', '_', $f['name']);
		if(!$NoRename) $name = substr(md5(microtime() . rand(0, 100000)), -17) . $ft[0];

		if(!file_exists($dir)) @mkdir($dir, 0777);

		if(!@move_uploaded_file($f['tmp_name'], $dir . $name)) {
			echo error_message("Couldn't save the uploaded file. Try chmoding the upload folder '{$dir}' to 777.");
			exit;
		}

		@chmod($dir . $name, 0666);
		return $name;
	}

	#########################################################

	function get_home_links($homeLinks, $default_classes, $tgroup = '') {
		if(!is_array($homeLinks) || !count($homeLinks)) return '';

		$memberInfo = getMemberInfo();

		ob_start();
		foreach($homeLinks as $link) {
			if(!isset($link['url']) || !isset($link['title'])) continue;
			if($tgroup != $link['table_group'] && $tgroup != '*') continue;

			/* fall-back classes if none defined */
			if(!$link['grid_column_classes']) $link['grid_column_classes'] = $default_classes['grid_column'];
			if(!$link['panel_classes']) $link['panel_classes'] = $default_classes['panel'];
			if(!$link['link_classes']) $link['link_classes'] = $default_classes['link'];

			if(getLoggedAdmin() !== false || @in_array($memberInfo['group'], $link['groups']) || @in_array('*', $link['groups'])) {
				?>
				<div class="col-xs-12 <?php echo $link['grid_column_classes']; ?>">
					<div class="panel <?php echo $link['panel_classes']; ?>">
						<div class="panel-body">
							<a class="btn btn-block btn-lg <?php echo $link['link_classes']; ?>" title="<?php echo preg_replace("/&amp;(#[0-9]+|[a-z]+);/i", "&$1;", html_attr(strip_tags($link['description']))); ?>" href="<?php echo $link['url']; ?>"><?php echo ($link['icon'] ? '<img src="' . $link['icon'] . '">' : ''); ?><strong><?php echo $link['title']; ?></strong></a>
							<div class="panel-body-description"><?php echo $link['description']; ?></div>
						</div>
					</div>
				</div>
				<?php
			}
		}

		$html = ob_get_contents();
		ob_end_clean();

		return $html;
	}

	#########################################################

	function quick_search_html($search_term, $label, $separate_dv = true) {
		global $Translation;

		$safe_search = html_attr($search_term);
		$safe_label = html_attr($label);
		$safe_clear_label = html_attr($Translation['Reset Filters']);

		if($separate_dv) {
			$reset_selection = "document.myform.SelectedID.value = '';";
		} else {
			$reset_selection = "document.myform.writeAttribute('novalidate', 'novalidate');";
		}
		$reset_selection .= ' document.myform.NoDV.value=1; return true;';

		$html = <<<EOT
		<div class="input-group" id="quick-search">
			<input type="text" id="SearchString" name="SearchString" value="{$safe_search}" class="form-control" placeholder="{$safe_label}">
			<span class="input-group-btn">
				<button name="Search_x" value="1" id="Search" type="submit" onClick="{$reset_selection}" class="btn btn-default" title="{$safe_label}"><i class="glyphicon glyphicon-search"></i></button>
				<button name="ClearQuickSearch" value="1" id="ClearQuickSearch" type="submit" onClick="\$j('#SearchString').val(''); {$reset_selection}" class="btn btn-default" title="{$safe_clear_label}"><i class="glyphicon glyphicon-remove-circle"></i></button>
			</span>
		</div>
EOT;
		return $html;
	}

	#########################################################

