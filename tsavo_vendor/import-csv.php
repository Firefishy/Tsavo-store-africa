<?php
	define('PREPEND_PATH', '');
	$app_dir = dirname(__FILE__);
	include_once("{$app_dir}/lib.php");

	// accept a record as an assoc array, return transformed row ready to insert to table
	$transformFunctions = [
		'sales' => function($data, $options = []) {
			if(isset($data['user_id'])) $data['user_id'] = pkGivenLookupText($data['user_id'], 'sales', 'user_id');
			if(isset($data['sales_day'])) $data['sales_day'] = guessMySQLDateTime($data['sales_day']);
			if(isset($data['phone'])) $data['phone'] = str_replace('-', '', $data['phone']);
			if(isset($data['first_name'])) $data['first_name'] = thisOr($data['user_id'], pkGivenLookupText($data['first_name'], 'sales', 'first_name'));
			if(isset($data['last_name'])) $data['last_name'] = thisOr($data['user_id'], pkGivenLookupText($data['last_name'], 'sales', 'last_name'));
			if(isset($data['email'])) $data['email'] = thisOr($data['user_id'], pkGivenLookupText($data['email'], 'sales', 'email'));
			if(isset($data['phone'])) $data['phone'] = thisOr($data['user_id'], pkGivenLookupText($data['phone'], 'sales', 'phone'));
			if(isset($data['address'])) $data['address'] = thisOr($data['user_id'], pkGivenLookupText($data['address'], 'sales', 'address'));
			if(isset($data['zone'])) $data['zone'] = thisOr($data['user_id'], pkGivenLookupText($data['zone'], 'sales', 'zone'));
			if(isset($data['zone_fee'])) $data['zone_fee'] = thisOr($data['user_id'], pkGivenLookupText($data['zone_fee'], 'sales', 'zone_fee'));

			return $data;
		},
		'products' => function($data, $options = []) {
			if(isset($data['supp_cont'])) $data['supp_cont'] = str_replace('-', '', $data['supp_cont']);
			if(isset($data['category'])) $data['category'] = pkGivenLookupText($data['category'], 'products', 'category');
			if(isset($data['date_view'])) $data['date_view'] = guessMySQLDateTime($data['date_view']);
			if(isset($data['price_1'])) $data['price_1'] = preg_replace('/[^\d\.]/', '', $data['price_1']);
			if(isset($data['was'])) $data['was'] = preg_replace('/[^\d\.]/', '', $data['was']);
			if(isset($data['male_shoes'])) $data['male_shoes'] = pkGivenLookupText($data['male_shoes'], 'products', 'male_shoes');
			if(isset($data['male_pants'])) $data['male_pants'] = pkGivenLookupText($data['male_pants'], 'products', 'male_pants');
			if(isset($data['male_shirts'])) $data['male_shirts'] = pkGivenLookupText($data['male_shirts'], 'products', 'male_shirts');
			if(isset($data['female_shoes'])) $data['female_shoes'] = pkGivenLookupText($data['female_shoes'], 'products', 'female_shoes');
			if(isset($data['female_dresses'])) $data['female_dresses'] = pkGivenLookupText($data['female_dresses'], 'products', 'female_dresses');
			if(isset($data['female_skirts'])) $data['female_skirts'] = pkGivenLookupText($data['female_skirts'], 'products', 'female_skirts');
			if(isset($data['female_pants'])) $data['female_pants'] = pkGivenLookupText($data['female_pants'], 'products', 'female_pants');
			if(isset($data['category_id'])) $data['category_id'] = thisOr($data['category'], pkGivenLookupText($data['category_id'], 'products', 'category_id'));
			if(isset($data['male_shoes_id'])) $data['male_shoes_id'] = thisOr($data['male_shoes'], pkGivenLookupText($data['male_shoes_id'], 'products', 'male_shoes_id'));
			if(isset($data['male_pants_id'])) $data['male_pants_id'] = thisOr($data['male_pants'], pkGivenLookupText($data['male_pants_id'], 'products', 'male_pants_id'));
			if(isset($data['male_shirts_id'])) $data['male_shirts_id'] = thisOr($data['male_shirts'], pkGivenLookupText($data['male_shirts_id'], 'products', 'male_shirts_id'));
			if(isset($data['female_shoes_id'])) $data['female_shoes_id'] = thisOr($data['female_shoes'], pkGivenLookupText($data['female_shoes_id'], 'products', 'female_shoes_id'));
			if(isset($data['female_dresses_id'])) $data['female_dresses_id'] = thisOr($data['female_dresses'], pkGivenLookupText($data['female_dresses_id'], 'products', 'female_dresses_id'));
			if(isset($data['female_skirts_id'])) $data['female_skirts_id'] = thisOr($data['female_skirts'], pkGivenLookupText($data['female_skirts_id'], 'products', 'female_skirts_id'));
			if(isset($data['female_pants_id'])) $data['female_pants_id'] = thisOr($data['female_pants'], pkGivenLookupText($data['female_pants_id'], 'products', 'female_pants_id'));

			return $data;
		},
		'category' => function($data, $options = []) {
			if(isset($data['cat_name'])) $data['cat_name'] = pkGivenLookupText($data['cat_name'], 'category', 'cat_name');
			if(isset($data['sub_cat'])) $data['sub_cat'] = pkGivenLookupText($data['sub_cat'], 'category', 'sub_cat');
			if(isset($data['code'])) $data['code'] = thisOr($data['cat_name'], pkGivenLookupText($data['code'], 'category', 'code'));

			return $data;
		},
		'supplier' => function($data, $options = []) {
			if(isset($data['drop_off_point'])) $data['drop_off_point'] = pkGivenLookupText($data['drop_off_point'], 'supplier', 'drop_off_point');
			if(isset($data['created_on'])) $data['created_on'] = guessMySQLDateTime($data['created_on']);
			if(isset($data['sp_number'])) $data['sp_number'] = str_replace('-', '', $data['sp_number']);
			if(isset($data['reg_date'])) $data['reg_date'] = guessMySQLDateTime($data['reg_date']);
			if(isset($data['drop_off_contact'])) $data['drop_off_contact'] = thisOr($data['drop_off_point'], pkGivenLookupText($data['drop_off_contact'], 'supplier', 'drop_off_contact'));

			return $data;
		},
		'users' => function($data, $options = []) {
			if(isset($data['created_on'])) $data['created_on'] = guessMySQLDateTime($data['created_on']);
			if(isset($data['discount'])) $data['discount'] = pkGivenLookupText($data['discount'], 'users', 'discount');
			if(isset($data['coupon_id'])) $data['coupon_id'] = pkGivenLookupText($data['coupon_id'], 'users', 'coupon_id');

			return $data;
		},
		'stock' => function($data, $options = []) {
			if(isset($data['product_name'])) $data['product_name'] = pkGivenLookupText($data['product_name'], 'stock', 'product_name');
			if(isset($data['company_stock_quantity'])) $data['company_stock_quantity'] = thisOr($data['product_name'], pkGivenLookupText($data['company_stock_quantity'], 'stock', 'company_stock_quantity'));
			if(isset($data['product_id'])) $data['product_id'] = thisOr($data['product_name'], pkGivenLookupText($data['product_id'], 'stock', 'product_id'));
			if(isset($data['supplier'])) $data['supplier'] = thisOr($data['product_name'], pkGivenLookupText($data['supplier'], 'stock', 'supplier'));
			if(isset($data['stock_quantity'])) $data['stock_quantity'] = thisOr($data['product_name'], pkGivenLookupText($data['stock_quantity'], 'stock', 'stock_quantity'));

			return $data;
		},
		'agent' => function($data, $options = []) {
			if(isset($data['phone'])) $data['phone'] = str_replace('-', '', $data['phone']);

			return $data;
		},
		'male_shoes' => function($data, $options = []) {

			return $data;
		},
		'male_pants' => function($data, $options = []) {

			return $data;
		},
		'male_shirts' => function($data, $options = []) {

			return $data;
		},
		'female_shoes' => function($data, $options = []) {

			return $data;
		},
		'female_dresses' => function($data, $options = []) {

			return $data;
		},
		'female_skirts' => function($data, $options = []) {

			return $data;
		},
		'female_pants' => function($data, $options = []) {

			return $data;
		},
		'details' => function($data, $options = []) {
			if(isset($data['sales_id'])) $data['sales_id'] = pkGivenLookupText($data['sales_id'], 'details', 'sales_id');
			if(isset($data['product_id'])) $data['product_id'] = pkGivenLookupText($data['product_id'], 'details', 'product_id');
			if(isset($data['sales_date'])) $data['sales_date'] = guessMySQLDateTime($data['sales_date']);
			if(isset($data['supp_name'])) $data['supp_name'] = thisOr($data['product_id'], pkGivenLookupText($data['supp_name'], 'details', 'supp_name'));
			if(isset($data['payy_id'])) $data['payy_id'] = thisOr($data['sales_id'], pkGivenLookupText($data['payy_id'], 'details', 'payy_id'));
			if(isset($data['size'])) $data['size'] = thisOr($data['product_id'], pkGivenLookupText($data['size'], 'details', 'size'));

			return $data;
		},
		'branches' => function($data, $options = []) {

			return $data;
		},
		'agent_monitor' => function($data, $options = []) {
			if(isset($data['pay_number'])) $data['pay_number'] = pkGivenLookupText($data['pay_number'], 'agent_monitor', 'pay_number');
			if(isset($data['user_id'])) $data['user_id'] = thisOr($data['pay_number'], pkGivenLookupText($data['user_id'], 'agent_monitor', 'user_id'));
			if(isset($data['sale_date'])) $data['sale_date'] = thisOr($data['pay_number'], pkGivenLookupText($data['sale_date'], 'agent_monitor', 'sale_date'));
			if(isset($data['user_name'])) $data['user_name'] = thisOr($data['pay_number'], pkGivenLookupText($data['user_name'], 'agent_monitor', 'user_name'));
			if(isset($data['phone'])) $data['phone'] = thisOr($data['pay_number'], pkGivenLookupText($data['phone'], 'agent_monitor', 'phone'));
			if(isset($data['email'])) $data['email'] = thisOr($data['pay_number'], pkGivenLookupText($data['email'], 'agent_monitor', 'email'));

			return $data;
		},
		'coupon' => function($data, $options = []) {

			return $data;
		},
		'cart' => function($data, $options = []) {

			return $data;
		},
		'drop_off' => function($data, $options = []) {
			if(isset($data['station_reg_date'])) $data['station_reg_date'] = guessMySQLDateTime($data['station_reg_date']);

			return $data;
		},
		'how_to_vendor' => function($data, $options = []) {

			return $data;
		},
		'how_to_agent' => function($data, $options = []) {

			return $data;
		},
		'message' => function($data, $options = []) {
			if(isset($data['user_id'])) $data['user_id'] = pkGivenLookupText($data['user_id'], 'message', 'user_id');
			if(isset($data['user_name'])) $data['user_name'] = thisOr($data['user_id'], pkGivenLookupText($data['user_name'], 'message', 'user_name'));

			return $data;
		},
		'sales_monitor' => function($data, $options = []) {
			if(isset($data['product_id'])) $data['product_id'] = pkGivenLookupText($data['product_id'], 'sales_monitor', 'product_id');
			if(isset($data['product_name'])) $data['product_name'] = thisOr($data['product_id'], pkGivenLookupText($data['product_name'], 'sales_monitor', 'product_name'));

			return $data;
		},
		'wishlist' => function($data, $options = []) {
			if(isset($data['user_id'])) $data['user_id'] = pkGivenLookupText($data['user_id'], 'wishlist', 'user_id');
			if(isset($data['product_id'])) $data['product_id'] = pkGivenLookupText($data['product_id'], 'wishlist', 'product_id');
			if(isset($data['w_fname'])) $data['w_fname'] = thisOr($data['user_id'], pkGivenLookupText($data['w_fname'], 'wishlist', 'w_fname'));
			if(isset($data['w_lname'])) $data['w_lname'] = thisOr($data['user_id'], pkGivenLookupText($data['w_lname'], 'wishlist', 'w_lname'));
			if(isset($data['w_email'])) $data['w_email'] = thisOr($data['user_id'], pkGivenLookupText($data['w_email'], 'wishlist', 'w_email'));
			if(isset($data['w_pnumber'])) $data['w_pnumber'] = thisOr($data['user_id'], pkGivenLookupText($data['w_pnumber'], 'wishlist', 'w_pnumber'));
			if(isset($data['w_product'])) $data['w_product'] = thisOr($data['product_id'], pkGivenLookupText($data['w_product'], 'wishlist', 'w_product'));

			return $data;
		},
		'sub_cat' => function($data, $options = []) {

			return $data;
		},
		'item_rating' => function($data, $options = []) {
			if(isset($data['userId'])) $data['userId'] = pkGivenLookupText($data['userId'], 'item_rating', 'userId');
			if(isset($data['rater_name'])) $data['rater_name'] = thisOr($data['userId'], pkGivenLookupText($data['rater_name'], 'item_rating', 'rater_name'));

			return $data;
		},
		'followers' => function($data, $options = []) {
			if(isset($data['userid'])) $data['userid'] = pkGivenLookupText($data['userid'], 'followers', 'userid');
			if(isset($data['follow_date'])) $data['follow_date'] = guessMySQLDateTime($data['follow_date']);
			if(isset($data['f_fname'])) $data['f_fname'] = thisOr($data['userid'], pkGivenLookupText($data['f_fname'], 'followers', 'f_fname'));

			return $data;
		},
		'sub_cat_2' => function($data, $options = []) {

			return $data;
		},
	];

	// accept a record as an assoc array, return a boolean indicating whether to import or skip record
	$filterFunctions = [
		'sales' => function($data, $options = []) { return true; },
		'products' => function($data, $options = []) { return true; },
		'category' => function($data, $options = []) { return true; },
		'supplier' => function($data, $options = []) { return true; },
		'users' => function($data, $options = []) { return true; },
		'stock' => function($data, $options = []) { return true; },
		'agent' => function($data, $options = []) { return true; },
		'male_shoes' => function($data, $options = []) { return true; },
		'male_pants' => function($data, $options = []) { return true; },
		'male_shirts' => function($data, $options = []) { return true; },
		'female_shoes' => function($data, $options = []) { return true; },
		'female_dresses' => function($data, $options = []) { return true; },
		'female_skirts' => function($data, $options = []) { return true; },
		'female_pants' => function($data, $options = []) { return true; },
		'details' => function($data, $options = []) { return true; },
		'branches' => function($data, $options = []) { return true; },
		'agent_monitor' => function($data, $options = []) { return true; },
		'coupon' => function($data, $options = []) { return true; },
		'cart' => function($data, $options = []) { return true; },
		'drop_off' => function($data, $options = []) { return true; },
		'how_to_vendor' => function($data, $options = []) { return true; },
		'how_to_agent' => function($data, $options = []) { return true; },
		'message' => function($data, $options = []) { return true; },
		'sales_monitor' => function($data, $options = []) { return true; },
		'wishlist' => function($data, $options = []) { return true; },
		'sub_cat' => function($data, $options = []) { return true; },
		'item_rating' => function($data, $options = []) { return true; },
		'followers' => function($data, $options = []) { return true; },
		'sub_cat_2' => function($data, $options = []) { return true; },
	];

	/*
	Hook file for overwriting/amending $transformFunctions and $filterFunctions:
	hooks/import-csv.php
	If found, it's included below

	The way this works is by either completely overwriting any of the above 2 arrays,
	or, more commonly, overwriting a single function, for example:
		$transformFunctions['tablename'] = function($data, $options = []) {
			// new definition here
			// then you must return transformed data
			return $data;
		};

	Another scenario is transforming a specific field and leaving other fields to the default
	transformation. One possible way of doing this is to store the original transformation function
	in GLOBALS array, calling it inside the custom transformation function, then modifying the
	specific field:
		$GLOBALS['originalTransformationFunction'] = $transformFunctions['tablename'];
		$transformFunctions['tablename'] = function($data, $options = []) {
			$data = call_user_func_array($GLOBALS['originalTransformationFunction'], [$data, $options]);
			$data['fieldname'] = 'transformed value';
			return $data;
		};
	*/

	@include("{$app_dir}/hooks/import-csv.php");

	$ui = new CSVImportUI($transformFunctions, $filterFunctions);
