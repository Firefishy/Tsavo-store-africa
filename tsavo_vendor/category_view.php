<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	@include_once("{$currDir}/hooks/category.php");
	include_once("{$currDir}/category_dml.php");

	// mm: can the current member access this page?
	$perm = getTablePermissions('category');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'category';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`category`.`id`" => "id",
		"`category`.`name`" => "name",
		"IF(    CHAR_LENGTH(`sub_cat_21`.`cat_name`), CONCAT_WS('',   `sub_cat_21`.`cat_name`), '') /* Main Category */" => "cat_name",
		"IF(    CHAR_LENGTH(`sub_cat1`.`sub_category`), CONCAT_WS('',   `sub_cat1`.`sub_category`), '') /* Sub-category */" => "sub_cat",
		"IF(    CHAR_LENGTH(`sub_cat_21`.`code`), CONCAT_WS('',   `sub_cat_21`.`code`), '') /* Main Category Code */" => "code",
		"`category`.`cat_slug`" => "cat_slug",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`category`.`id`',
		2 => 2,
		3 => '`sub_cat_21`.`cat_name`',
		4 => '`sub_cat1`.`sub_category`',
		5 => '`sub_cat_21`.`code`',
		6 => 6,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`category`.`id`" => "id",
		"`category`.`name`" => "name",
		"IF(    CHAR_LENGTH(`sub_cat_21`.`cat_name`), CONCAT_WS('',   `sub_cat_21`.`cat_name`), '') /* Main Category */" => "cat_name",
		"IF(    CHAR_LENGTH(`sub_cat1`.`sub_category`), CONCAT_WS('',   `sub_cat1`.`sub_category`), '') /* Sub-category */" => "sub_cat",
		"IF(    CHAR_LENGTH(`sub_cat_21`.`code`), CONCAT_WS('',   `sub_cat_21`.`code`), '') /* Main Category Code */" => "code",
		"`category`.`cat_slug`" => "cat_slug",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`category`.`id`" => "Id",
		"`category`.`name`" => "Category Name",
		"IF(    CHAR_LENGTH(`sub_cat_21`.`cat_name`), CONCAT_WS('',   `sub_cat_21`.`cat_name`), '') /* Main Category */" => "Main Category",
		"IF(    CHAR_LENGTH(`sub_cat1`.`sub_category`), CONCAT_WS('',   `sub_cat1`.`sub_category`), '') /* Sub-category */" => "Sub-category",
		"IF(    CHAR_LENGTH(`sub_cat_21`.`code`), CONCAT_WS('',   `sub_cat_21`.`code`), '') /* Main Category Code */" => "Main Category Code",
		"`category`.`cat_slug`" => "Category Slug",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`category`.`id`" => "id",
		"`category`.`name`" => "name",
		"IF(    CHAR_LENGTH(`sub_cat_21`.`cat_name`), CONCAT_WS('',   `sub_cat_21`.`cat_name`), '') /* Main Category */" => "cat_name",
		"IF(    CHAR_LENGTH(`sub_cat1`.`sub_category`), CONCAT_WS('',   `sub_cat1`.`sub_category`), '') /* Sub-category */" => "sub_cat",
		"IF(    CHAR_LENGTH(`sub_cat_21`.`code`), CONCAT_WS('',   `sub_cat_21`.`code`), '') /* Main Category Code */" => "code",
		"`category`.`cat_slug`" => "cat_slug",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = ['cat_name' => 'Main Category', 'sub_cat' => 'Sub-category', ];

	$x->QueryFrom = "`category` LEFT JOIN `sub_cat_2` as sub_cat_21 ON `sub_cat_21`.`code`=`category`.`cat_name` LEFT JOIN `sub_cat` as sub_cat1 ON `sub_cat1`.`sub_category`=`category`.`sub_cat` ";
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
	$x->ScriptFileName = 'category_view.php';
	$x->RedirectAfterInsert = 'category_view.php';
	$x->TableTitle = 'Product Category';
	$x->TableIcon = 'resources/table_icons/increase-icon.png';
	$x->PrimaryKey = '`category`.`id`';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['Id', 'Category Name', 'Main Category', 'Sub-category', 'Main Category Code', 'Category Slug', ];
	$x->ColFieldName = ['id', 'name', 'cat_name', 'sub_cat', 'code', 'cat_slug', ];
	$x->ColNumber  = [1, 2, 3, 4, 5, 6, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/category_templateTV.html';
	$x->SelectedTemplate = 'templates/category_templateTVS.html';
	$x->TemplateDV = 'templates/category_templateDV.html';
	$x->TemplateDVP = 'templates/category_templateDVP.html';

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
		$x->QueryWhere = "WHERE `category`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='category' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
	} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $DisplayRecords == 'group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `category`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='category' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
	} elseif($perm['view'] == 3) { // view all
		// no further action
	} elseif($perm['view'] == 0) { // view none
		$x->QueryFields = ['Not enough permissions' => 'NEP'];
		$x->QueryFrom = '`category`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: category_init
	$render = true;
	if(function_exists('category_init')) {
		$args = [];
		$render = category_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: category_header
	$headerCode = '';
	if(function_exists('category_header')) {
		$args = [];
		$headerCode = category_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once("{$currDir}/header.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/header.php");
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: category_footer
	$footerCode = '';
	if(function_exists('category_footer')) {
		$args = [];
		$footerCode = category_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once("{$currDir}/footer.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/footer.php");
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
