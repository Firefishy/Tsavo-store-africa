<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	@include_once("{$currDir}/hooks/male_shoes.php");
	include_once("{$currDir}/male_shoes_dml.php");

	// mm: can the current member access this page?
	$perm = getTablePermissions('male_shoes');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'male_shoes';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`male_shoes`.`id`" => "id",
		"`male_shoes`.`name`" => "name",
		"`male_shoes`.`cat_slug`" => "cat_slug",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`male_shoes`.`id`',
		2 => 2,
		3 => 3,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`male_shoes`.`id`" => "id",
		"`male_shoes`.`name`" => "name",
		"`male_shoes`.`cat_slug`" => "cat_slug",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`male_shoes`.`id`" => "ID",
		"`male_shoes`.`name`" => "Name",
		"`male_shoes`.`cat_slug`" => "Cat slug",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`male_shoes`.`id`" => "id",
		"`male_shoes`.`name`" => "name",
		"`male_shoes`.`cat_slug`" => "cat_slug",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`male_shoes` ";
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
	$x->ScriptFileName = 'male_shoes_view.php';
	$x->RedirectAfterInsert = 'male_shoes_view.php?SelectedID=#ID#';
	$x->TableTitle = 'Male shoes';
	$x->TableIcon = 'resources/table_icons/check-icon.png';
	$x->PrimaryKey = '`male_shoes`.`id`';

	$x->ColWidth = [150, 150, ];
	$x->ColCaption = ['Name', 'Cat slug', ];
	$x->ColFieldName = ['name', 'cat_slug', ];
	$x->ColNumber  = [2, 3, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/male_shoes_templateTV.html';
	$x->SelectedTemplate = 'templates/male_shoes_templateTVS.html';
	$x->TemplateDV = 'templates/male_shoes_templateDV.html';
	$x->TemplateDVP = 'templates/male_shoes_templateDVP.html';

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
		$x->QueryWhere = "WHERE `male_shoes`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='male_shoes' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
	} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $DisplayRecords == 'group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `male_shoes`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='male_shoes' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
	} elseif($perm['view'] == 3) { // view all
		// no further action
	} elseif($perm['view'] == 0) { // view none
		$x->QueryFields = ['Not enough permissions' => 'NEP'];
		$x->QueryFrom = '`male_shoes`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: male_shoes_init
	$render = true;
	if(function_exists('male_shoes_init')) {
		$args = [];
		$render = male_shoes_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: male_shoes_header
	$headerCode = '';
	if(function_exists('male_shoes_header')) {
		$args = [];
		$headerCode = male_shoes_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once("{$currDir}/header.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/header.php");
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: male_shoes_footer
	$footerCode = '';
	if(function_exists('male_shoes_footer')) {
		$args = [];
		$footerCode = male_shoes_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once("{$currDir}/footer.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/footer.php");
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}