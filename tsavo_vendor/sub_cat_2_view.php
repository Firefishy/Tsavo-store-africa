<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	@include_once("{$currDir}/hooks/sub_cat_2.php");
	include_once("{$currDir}/sub_cat_2_dml.php");

	// mm: can the current member access this page?
	$perm = getTablePermissions('sub_cat_2');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'sub_cat_2';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`sub_cat_2`.`code`" => "code",
		"`sub_cat_2`.`cat_name`" => "cat_name",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => 1,
		2 => 2,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`sub_cat_2`.`code`" => "code",
		"`sub_cat_2`.`cat_name`" => "cat_name",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`sub_cat_2`.`code`" => "Code",
		"`sub_cat_2`.`cat_name`" => "Cat name",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`sub_cat_2`.`code`" => "code",
		"`sub_cat_2`.`cat_name`" => "cat_name",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`sub_cat_2` ";
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
	$x->ScriptFileName = 'sub_cat_2_view.php';
	$x->RedirectAfterInsert = 'sub_cat_2_view.php?SelectedID=#ID#';
	$x->TableTitle = 'Sub cat 2';
	$x->TableIcon = 'resources/table_icons/bullet_pink.png';
	$x->PrimaryKey = '`sub_cat_2`.`code`';

	$x->ColWidth = [150, 150, ];
	$x->ColCaption = ['Code', 'Cat name', ];
	$x->ColFieldName = ['code', 'cat_name', ];
	$x->ColNumber  = [1, 2, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/sub_cat_2_templateTV.html';
	$x->SelectedTemplate = 'templates/sub_cat_2_templateTVS.html';
	$x->TemplateDV = 'templates/sub_cat_2_templateDV.html';
	$x->TemplateDVP = 'templates/sub_cat_2_templateDVP.html';

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
		$x->QueryWhere = "WHERE `sub_cat_2`.`code`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='sub_cat_2' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
	} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $DisplayRecords == 'group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `sub_cat_2`.`code`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='sub_cat_2' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
	} elseif($perm['view'] == 3) { // view all
		// no further action
	} elseif($perm['view'] == 0) { // view none
		$x->QueryFields = ['Not enough permissions' => 'NEP'];
		$x->QueryFrom = '`sub_cat_2`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: sub_cat_2_init
	$render = true;
	if(function_exists('sub_cat_2_init')) {
		$args = [];
		$render = sub_cat_2_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: sub_cat_2_header
	$headerCode = '';
	if(function_exists('sub_cat_2_header')) {
		$args = [];
		$headerCode = sub_cat_2_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once("{$currDir}/header.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/header.php");
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: sub_cat_2_footer
	$footerCode = '';
	if(function_exists('sub_cat_2_footer')) {
		$args = [];
		$footerCode = sub_cat_2_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once("{$currDir}/footer.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/footer.php");
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}