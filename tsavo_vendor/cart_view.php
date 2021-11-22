<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	@include_once("{$currDir}/hooks/cart.php");
	include_once("{$currDir}/cart_dml.php");

	// mm: can the current member access this page?
	$perm = getTablePermissions('cart');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'cart';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`cart`.`id`" => "id",
		"`cart`.`first_name`" => "first_name",
		"`cart`.`last_name`" => "last_name",
		"`cart`.`product_name`" => "product_name",
		"`cart`.`price`" => "price",
		"`cart`.`user_cont`" => "user_cont",
		"`cart`.`user_email`" => "user_email",
		"`cart`.`zone_pus`" => "zone_pus",
		"`cart`.`coupon_user`" => "coupon_user",
		"`cart`.`coupon_user_worth`" => "coupon_user_worth",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`cart`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => '`cart`.`price`',
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`cart`.`id`" => "id",
		"`cart`.`first_name`" => "first_name",
		"`cart`.`last_name`" => "last_name",
		"`cart`.`product_name`" => "product_name",
		"`cart`.`price`" => "price",
		"`cart`.`user_cont`" => "user_cont",
		"`cart`.`user_email`" => "user_email",
		"`cart`.`zone_pus`" => "zone_pus",
		"`cart`.`coupon_user`" => "coupon_user",
		"`cart`.`coupon_user_worth`" => "coupon_user_worth",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`cart`.`id`" => "ID",
		"`cart`.`first_name`" => "First name",
		"`cart`.`last_name`" => "Last name",
		"`cart`.`product_name`" => "Product name",
		"`cart`.`price`" => "Price",
		"`cart`.`user_cont`" => "User cont",
		"`cart`.`user_email`" => "User email",
		"`cart`.`zone_pus`" => "Zone pus",
		"`cart`.`coupon_user`" => "Coupon user",
		"`cart`.`coupon_user_worth`" => "Coupon user worth",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`cart`.`id`" => "id",
		"`cart`.`first_name`" => "first_name",
		"`cart`.`last_name`" => "last_name",
		"`cart`.`product_name`" => "product_name",
		"`cart`.`price`" => "price",
		"`cart`.`user_cont`" => "user_cont",
		"`cart`.`user_email`" => "user_email",
		"`cart`.`zone_pus`" => "zone_pus",
		"`cart`.`coupon_user`" => "coupon_user",
		"`cart`.`coupon_user_worth`" => "coupon_user_worth",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`cart` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm['view'] == 0 ? 1 : 0);
	$x->AllowDelete = $perm['delete'];
	$x->AllowMassDelete = (getLoggedAdmin() !== false);
	$x->AllowInsert = $perm['insert'];
	$x->AllowUpdate = $perm['edit'];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = (getLoggedAdmin() !== false);
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'cart_view.php';
	$x->RedirectAfterInsert = 'cart_view.php?SelectedID=#ID#';
	$x->TableTitle = 'Cart';
	$x->TableIcon = 'resources/table_icons/Ecommerce-Sell-icon.png';
	$x->PrimaryKey = '`cart`.`id`';

	$x->ColWidth = [150, 150, 150, 80, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['First name', 'Last name', 'Product name', 'Price', 'User cont', 'User email', 'Zone pus', 'Coupon user', 'Coupon user worth', ];
	$x->ColFieldName = ['first_name', 'last_name', 'product_name', 'price', 'user_cont', 'user_email', 'zone_pus', 'coupon_user', 'coupon_user_worth', ];
	$x->ColNumber  = [2, 3, 4, 5, 6, 7, 8, 9, 10, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/cart_templateTV.html';
	$x->SelectedTemplate = 'templates/cart_templateTVS.html';
	$x->TemplateDV = 'templates/cart_templateDV.html';
	$x->TemplateDVP = 'templates/cart_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, ['user', 'group'])) { $DisplayRecords = 'all'; }
	if($perm['view'] == 1 || ($perm['view'] > 1 && $DisplayRecords == 'user' && !$_REQUEST['NoFilter_x'])) { // view owner only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `cart`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='cart' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
	} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $DisplayRecords == 'group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `cart`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='cart' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
	} elseif($perm['view'] == 3) { // view all
		// no further action
	} elseif($perm['view'] == 0) { // view none
		$x->QueryFields = ['Not enough permissions' => 'NEP'];
		$x->QueryFrom = '`cart`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: cart_init
	$render = true;
	if(function_exists('cart_init')) {
		$args = [];
		$render = cart_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: cart_header
	$headerCode = '';
	if(function_exists('cart_header')) {
		$args = [];
		$headerCode = cart_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once("{$currDir}/header.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/header.php");
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: cart_footer
	$footerCode = '';
	if(function_exists('cart_footer')) {
		$args = [];
		$footerCode = cart_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once("{$currDir}/footer.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/footer.php");
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}