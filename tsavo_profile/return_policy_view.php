<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	@include_once("{$currDir}/hooks/return_policy.php");
	include_once("{$currDir}/return_policy_dml.php");

	// mm: can the current member access this page?
	$perm = getTablePermissions('return_policy');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'return_policy';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`return_policy`.`id`" => "id",
		"`return_policy`.`main_head`" => "main_head",
		"`return_policy`.`main_head_content`" => "main_head_content",
		"`return_policy`.`sub_head1`" => "sub_head1",
		"`return_policy`.`head_1`" => "head_1",
		"`return_policy`.`sub_head2`" => "sub_head2",
		"`return_policy`.`head_2`" => "head_2",
		"`return_policy`.`sub_head3`" => "sub_head3",
		"`return_policy`.`head_3`" => "head_3",
		"`return_policy`.`sub_head4`" => "sub_head4",
		"`return_policy`.`head_4`" => "head_4",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`return_policy`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
		11 => 11,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`return_policy`.`id`" => "id",
		"`return_policy`.`main_head`" => "main_head",
		"`return_policy`.`main_head_content`" => "main_head_content",
		"`return_policy`.`sub_head1`" => "sub_head1",
		"`return_policy`.`head_1`" => "head_1",
		"`return_policy`.`sub_head2`" => "sub_head2",
		"`return_policy`.`head_2`" => "head_2",
		"`return_policy`.`sub_head3`" => "sub_head3",
		"`return_policy`.`head_3`" => "head_3",
		"`return_policy`.`sub_head4`" => "sub_head4",
		"`return_policy`.`head_4`" => "head_4",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`return_policy`.`id`" => "ID",
		"`return_policy`.`main_head`" => "Main head",
		"`return_policy`.`main_head_content`" => "Main head content",
		"`return_policy`.`sub_head1`" => "Sub head1",
		"`return_policy`.`head_1`" => "Head 1 Content",
		"`return_policy`.`sub_head2`" => "Sub head2",
		"`return_policy`.`head_2`" => "Head 2 content",
		"`return_policy`.`sub_head3`" => "Sub head3",
		"`return_policy`.`head_3`" => "Head 3 content",
		"`return_policy`.`sub_head4`" => "Sub head4",
		"`return_policy`.`head_4`" => "Head 4 content",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`return_policy`.`id`" => "id",
		"`return_policy`.`main_head`" => "main_head",
		"`return_policy`.`main_head_content`" => "main_head_content",
		"`return_policy`.`sub_head1`" => "sub_head1",
		"`return_policy`.`head_1`" => "head_1",
		"`return_policy`.`sub_head2`" => "sub_head2",
		"`return_policy`.`head_2`" => "head_2",
		"`return_policy`.`sub_head3`" => "sub_head3",
		"`return_policy`.`head_3`" => "head_3",
		"`return_policy`.`sub_head4`" => "sub_head4",
		"`return_policy`.`head_4`" => "head_4",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`return_policy` ";
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
	$x->ScriptFileName = 'return_policy_view.php';
	$x->RedirectAfterInsert = 'return_policy_view.php?SelectedID=#ID#';
	$x->TableTitle = 'Return policy';
	$x->TableIcon = 'resources/table_icons/cart_error.png';
	$x->PrimaryKey = '`return_policy`.`id`';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['Main head', 'Main head content', 'Sub head1', 'Head 1 Content', 'Sub head2', 'Head 2 content', 'Sub head3', 'Head 3 content', 'Sub head4', 'Head 4 content', ];
	$x->ColFieldName = ['main_head', 'main_head_content', 'sub_head1', 'head_1', 'sub_head2', 'head_2', 'sub_head3', 'head_3', 'sub_head4', 'head_4', ];
	$x->ColNumber  = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/return_policy_templateTV.html';
	$x->SelectedTemplate = 'templates/return_policy_templateTVS.html';
	$x->TemplateDV = 'templates/return_policy_templateDV.html';
	$x->TemplateDVP = 'templates/return_policy_templateDVP.html';

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
		$x->QueryWhere = "WHERE `return_policy`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='return_policy' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
	} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $DisplayRecords == 'group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `return_policy`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='return_policy' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
	} elseif($perm['view'] == 3) { // view all
		// no further action
	} elseif($perm['view'] == 0) { // view none
		$x->QueryFields = ['Not enough permissions' => 'NEP'];
		$x->QueryFrom = '`return_policy`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: return_policy_init
	$render = true;
	if(function_exists('return_policy_init')) {
		$args = [];
		$render = return_policy_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: return_policy_header
	$headerCode = '';
	if(function_exists('return_policy_header')) {
		$args = [];
		$headerCode = return_policy_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once("{$currDir}/header.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/header.php");
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: return_policy_footer
	$footerCode = '';
	if(function_exists('return_policy_footer')) {
		$args = [];
		$footerCode = return_policy_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once("{$currDir}/footer.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/footer.php");
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}