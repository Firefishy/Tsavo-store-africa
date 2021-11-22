<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	@include_once("{$currDir}/hooks/supplier.php");
	include_once("{$currDir}/supplier_dml.php");

	// mm: can the current member access this page?
	$perm = getTablePermissions('supplier');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'supplier';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`supplier`.`supp_slug`" => "supp_slug",
		"`supplier`.`name`" => "name",
		"`supplier`.`shop_id`" => "shop_id",
		"`supplier`.`supp_name`" => "supp_name",
		"`supplier`.`supp_contact`" => "supp_contact",
		"`supplier`.`id_number`" => "id_number",
		"`supplier`.`passport`" => "passport",
		"`supplier`.`gender`" => "gender",
		"`supplier`.`identity_no`" => "identity_no",
		"`supplier`.`licence_no`" => "licence_no",
		"`supplier`.`email`" => "email",
		"`supplier`.`address`" => "address",
		"`supplier`.`id`" => "id",
		"`supplier`.`photo`" => "photo",
		"`supplier`.`origin_country`" => "origin_country",
		"`supplier`.`type`" => "type",
		"`supplier`.`store_overview`" => "store_overview",
		"IF(    CHAR_LENGTH(`drop_off1`.`point_name`), CONCAT_WS('',   `drop_off1`.`point_name`), '') /* Drop off point */" => "drop_off_point",
		"IF(    CHAR_LENGTH(`drop_off1`.`station_contact`), CONCAT_WS('',   `drop_off1`.`station_contact`), '') /* Drop off contact */" => "drop_off_contact",
		"if(`supplier`.`created_on`,date_format(`supplier`.`created_on`,'%m/%d/%Y'),'')" => "created_on",
		"`supplier`.`bank_head`" => "bank_head",
		"`supplier`.`service_provider`" => "service_provider",
		"`supplier`.`sp_name`" => "sp_name",
		"CONCAT_WS('-', LEFT(`supplier`.`sp_number`,3), MID(`supplier`.`sp_number`,4,3), RIGHT(`supplier`.`sp_number`,4))" => "sp_number",
		"`supplier`.`account_name`" => "account_name",
		"`supplier`.`account_number`" => "account_number",
		"`supplier`.`iban_number`" => "iban_number",
		"`supplier`.`bank_name`" => "bank_name",
		"`supplier`.`bank_branch`" => "bank_branch",
		"`supplier`.`bank_code`" => "bank_code",
		"`supplier`.`mode_of_transfer`" => "mode_of_transfer",
		"concat('<i class=\"glyphicon glyphicon-', if(`supplier`.`terms_conditions`, 'check', 'unchecked'), '\"></i>')" => "terms_conditions",
		"if(`supplier`.`reg_date`,date_format(`supplier`.`reg_date`,'%m/%d/%Y'),'')" => "reg_date",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => 1,
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => '`supplier`.`id_number`',
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
		11 => 11,
		12 => 12,
		13 => 13,
		14 => 14,
		15 => 15,
		16 => '`supplier`.`type`',
		17 => 17,
		18 => '`drop_off1`.`point_name`',
		19 => '`drop_off1`.`station_contact`',
		20 => '`supplier`.`created_on`',
		21 => 21,
		22 => 22,
		23 => 23,
		24 => 24,
		25 => 25,
		26 => '`supplier`.`account_number`',
		27 => '`supplier`.`iban_number`',
		28 => 28,
		29 => 29,
		30 => 30,
		31 => 31,
		32 => 32,
		33 => '`supplier`.`reg_date`',
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`supplier`.`supp_slug`" => "supp_slug",
		"`supplier`.`name`" => "name",
		"`supplier`.`shop_id`" => "shop_id",
		"`supplier`.`supp_name`" => "supp_name",
		"`supplier`.`supp_contact`" => "supp_contact",
		"`supplier`.`id_number`" => "id_number",
		"`supplier`.`passport`" => "passport",
		"`supplier`.`gender`" => "gender",
		"`supplier`.`identity_no`" => "identity_no",
		"`supplier`.`licence_no`" => "licence_no",
		"`supplier`.`email`" => "email",
		"`supplier`.`address`" => "address",
		"`supplier`.`id`" => "id",
		"`supplier`.`photo`" => "photo",
		"`supplier`.`origin_country`" => "origin_country",
		"`supplier`.`type`" => "type",
		"`supplier`.`store_overview`" => "store_overview",
		"IF(    CHAR_LENGTH(`drop_off1`.`point_name`), CONCAT_WS('',   `drop_off1`.`point_name`), '') /* Drop off point */" => "drop_off_point",
		"IF(    CHAR_LENGTH(`drop_off1`.`station_contact`), CONCAT_WS('',   `drop_off1`.`station_contact`), '') /* Drop off contact */" => "drop_off_contact",
		"if(`supplier`.`created_on`,date_format(`supplier`.`created_on`,'%m/%d/%Y'),'')" => "created_on",
		"`supplier`.`bank_head`" => "bank_head",
		"`supplier`.`service_provider`" => "service_provider",
		"`supplier`.`sp_name`" => "sp_name",
		"CONCAT_WS('-', LEFT(`supplier`.`sp_number`,3), MID(`supplier`.`sp_number`,4,3), RIGHT(`supplier`.`sp_number`,4))" => "sp_number",
		"`supplier`.`account_name`" => "account_name",
		"`supplier`.`account_number`" => "account_number",
		"`supplier`.`iban_number`" => "iban_number",
		"`supplier`.`bank_name`" => "bank_name",
		"`supplier`.`bank_branch`" => "bank_branch",
		"`supplier`.`bank_code`" => "bank_code",
		"`supplier`.`mode_of_transfer`" => "mode_of_transfer",
		"`supplier`.`terms_conditions`" => "terms_conditions",
		"if(`supplier`.`reg_date`,date_format(`supplier`.`reg_date`,'%m/%d/%Y'),'')" => "reg_date",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`supplier`.`supp_slug`" => "Vendor ID",
		"`supplier`.`name`" => "Shop/Company Name",
		"`supplier`.`shop_id`" => "Shop id",
		"`supplier`.`supp_name`" => "Supplier\'s Registered user Name",
		"`supplier`.`supp_contact`" => "Phone Number",
		"`supplier`.`id_number`" => "Id number",
		"`supplier`.`passport`" => "Passport (For Non-Citizens)",
		"`supplier`.`gender`" => "Gender",
		"`supplier`.`identity_no`" => "Scanned Id/Passport Card",
		"`supplier`.`email`" => "Email",
		"`supplier`.`address`" => "Address",
		"`supplier`.`id`" => "Id",
		"`supplier`.`origin_country`" => "Origin country",
		"`supplier`.`type`" => "Type",
		"IF(    CHAR_LENGTH(`drop_off1`.`point_name`), CONCAT_WS('',   `drop_off1`.`point_name`), '') /* Drop off point */" => "Drop off point",
		"IF(    CHAR_LENGTH(`drop_off1`.`station_contact`), CONCAT_WS('',   `drop_off1`.`station_contact`), '') /* Drop off contact */" => "Drop off contact",
		"`supplier`.`created_on`" => "Created_on",
		"`supplier`.`bank_head`" => "<---------------BANK DETAILS------------------>",
		"`supplier`.`service_provider`" => "Service provider",
		"`supplier`.`sp_name`" => "Service Provider Registered name",
		"`supplier`.`sp_number`" => "Service Provider Registered number",
		"`supplier`.`account_name`" => "Account name",
		"`supplier`.`account_number`" => "Account number",
		"`supplier`.`iban_number`" => "IBAN number",
		"`supplier`.`bank_name`" => "Bank name",
		"`supplier`.`bank_branch`" => "Bank branch",
		"`supplier`.`bank_code`" => "Bank code",
		"`supplier`.`mode_of_transfer`" => "Mode of transfer",
		"`supplier`.`terms_conditions`" => "I have read and accepted the Vendor terms and Conditions.",
		"`supplier`.`reg_date`" => "Reg date",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`supplier`.`supp_slug`" => "supp_slug",
		"`supplier`.`name`" => "name",
		"`supplier`.`shop_id`" => "shop_id",
		"`supplier`.`supp_name`" => "supp_name",
		"`supplier`.`supp_contact`" => "supp_contact",
		"`supplier`.`id_number`" => "id_number",
		"`supplier`.`passport`" => "passport",
		"`supplier`.`gender`" => "gender",
		"`supplier`.`identity_no`" => "identity_no",
		"`supplier`.`email`" => "email",
		"`supplier`.`address`" => "address",
		"`supplier`.`id`" => "id",
		"`supplier`.`origin_country`" => "origin_country",
		"`supplier`.`type`" => "type",
		"IF(    CHAR_LENGTH(`drop_off1`.`point_name`), CONCAT_WS('',   `drop_off1`.`point_name`), '') /* Drop off point */" => "drop_off_point",
		"IF(    CHAR_LENGTH(`drop_off1`.`station_contact`), CONCAT_WS('',   `drop_off1`.`station_contact`), '') /* Drop off contact */" => "drop_off_contact",
		"if(`supplier`.`created_on`,date_format(`supplier`.`created_on`,'%m/%d/%Y'),'')" => "created_on",
		"`supplier`.`bank_head`" => "bank_head",
		"`supplier`.`service_provider`" => "service_provider",
		"`supplier`.`sp_name`" => "sp_name",
		"CONCAT_WS('-', LEFT(`supplier`.`sp_number`,3), MID(`supplier`.`sp_number`,4,3), RIGHT(`supplier`.`sp_number`,4))" => "sp_number",
		"`supplier`.`account_name`" => "account_name",
		"`supplier`.`account_number`" => "account_number",
		"`supplier`.`iban_number`" => "iban_number",
		"`supplier`.`bank_name`" => "bank_name",
		"`supplier`.`bank_branch`" => "bank_branch",
		"`supplier`.`bank_code`" => "bank_code",
		"`supplier`.`mode_of_transfer`" => "mode_of_transfer",
		"concat('<i class=\"glyphicon glyphicon-', if(`supplier`.`terms_conditions`, 'check', 'unchecked'), '\"></i>')" => "terms_conditions",
		"if(`supplier`.`reg_date`,date_format(`supplier`.`reg_date`,'%m/%d/%Y'),'')" => "reg_date",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = ['drop_off_point' => 'Drop off point', ];

	$x->QueryFrom = "`supplier` LEFT JOIN `drop_off` as drop_off1 ON `drop_off1`.`id`=`supplier`.`drop_off_point` ";
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
	$x->AllowSavingFilters = 1;
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'supplier_view.php';
	$x->RedirectAfterInsert = 'supplier_view.php';
	$x->TableTitle = 'Vendor';
	$x->TableIcon = 'resources/table_icons/Users-Workers-icon.png';
	$x->PrimaryKey = '`supplier`.`id`';
	$x->DefaultSortField = '4';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['Vendor ID', 'Shop/Company Name', 'Shop id', 'Supplier\'s Registered user Name', 'Phone Number', 'Id number', 'Passport (For Non-Citizens)', 'Gender', 'Scanned Id/Passport Card', 'Scanned Business Licence', 'Email', 'Address', 'Photo', 'Origin country', 'Store overview', 'Drop off point', 'Drop off contact', 'Created_on', '<---------------BANK DETAILS------------------>', 'Service provider', 'Service Provider Registered name', 'Service Provider Registered number', 'Account name', 'Account number', 'IBAN number', 'Bank name', 'Bank branch', 'Bank code', 'Mode of transfer', 'I have read and accepted the Vendor terms and Conditions.', 'Reg date', ];
	$x->ColFieldName = ['supp_slug', 'name', 'shop_id', 'supp_name', 'supp_contact', 'id_number', 'passport', 'gender', 'identity_no', 'licence_no', 'email', 'address', 'photo', 'origin_country', 'store_overview', 'drop_off_point', 'drop_off_contact', 'created_on', 'bank_head', 'service_provider', 'sp_name', 'sp_number', 'account_name', 'account_number', 'iban_number', 'bank_name', 'bank_branch', 'bank_code', 'mode_of_transfer', 'terms_conditions', 'reg_date', ];
	$x->ColNumber  = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 15, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/supplier_templateTV.html';
	$x->SelectedTemplate = 'templates/supplier_templateTVS.html';
	$x->TemplateDV = 'templates/supplier_templateDV.html';
	$x->TemplateDVP = 'templates/supplier_templateDVP.html';

	$x->ShowTableHeader = 0;
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
		$x->QueryWhere = "WHERE `supplier`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='supplier' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
	} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $DisplayRecords == 'group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `supplier`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='supplier' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
	} elseif($perm['view'] == 3) { // view all
		// no further action
	} elseif($perm['view'] == 0) { // view none
		$x->QueryFields = ['Not enough permissions' => 'NEP'];
		$x->QueryFrom = '`supplier`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: supplier_init
	$render = true;
	if(function_exists('supplier_init')) {
		$args = [];
		$render = supplier_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: supplier_header
	$headerCode = '';
	if(function_exists('supplier_header')) {
		$args = [];
		$headerCode = supplier_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once("{$currDir}/header.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/header.php");
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: supplier_footer
	$footerCode = '';
	if(function_exists('supplier_footer')) {
		$args = [];
		$footerCode = supplier_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once("{$currDir}/footer.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/footer.php");
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
