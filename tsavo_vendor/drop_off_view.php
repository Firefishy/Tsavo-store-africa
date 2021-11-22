<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	@include_once("{$currDir}/hooks/drop_off.php");
	include_once("{$currDir}/drop_off_dml.php");

	// mm: can the current member access this page?
	$perm = getTablePermissions('drop_off');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'drop_off';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`drop_off`.`id`" => "id",
		"`drop_off`.`point_name`" => "point_name",
		"`drop_off`.`location`" => "location",
		"`drop_off`.`licence`" => "licence",
		"`drop_off`.`packages_accepted`" => "packages_accepted",
		"`drop_off`.`operating_licence`" => "operating_licence",
		"`drop_off`.`station_email`" => "station_email",
		"`drop_off`.`station_photo`" => "station_photo",
		"`drop_off`.`station_contact`" => "station_contact",
		"`drop_off`.`agent_incharge`" => "agent_incharge",
		"`drop_off`.`agent_id`" => "agent_id",
		"if(`drop_off`.`station_reg_date`,date_format(`drop_off`.`station_reg_date`,'%m/%d/%Y'),'')" => "station_reg_date",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`drop_off`.`id`',
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
		12 => '`drop_off`.`station_reg_date`',
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`drop_off`.`id`" => "id",
		"`drop_off`.`point_name`" => "point_name",
		"`drop_off`.`location`" => "location",
		"`drop_off`.`licence`" => "licence",
		"`drop_off`.`packages_accepted`" => "packages_accepted",
		"`drop_off`.`operating_licence`" => "operating_licence",
		"`drop_off`.`station_email`" => "station_email",
		"`drop_off`.`station_photo`" => "station_photo",
		"`drop_off`.`station_contact`" => "station_contact",
		"`drop_off`.`agent_incharge`" => "agent_incharge",
		"`drop_off`.`agent_id`" => "agent_id",
		"if(`drop_off`.`station_reg_date`,date_format(`drop_off`.`station_reg_date`,'%m/%d/%Y'),'')" => "station_reg_date",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`drop_off`.`id`" => "ID",
		"`drop_off`.`point_name`" => "Point name",
		"`drop_off`.`location`" => "GPRS Location",
		"`drop_off`.`licence`" => "Licence",
		"`drop_off`.`packages_accepted`" => "Packages Size accepted",
		"`drop_off`.`operating_licence`" => "Operating licence",
		"`drop_off`.`station_email`" => "Agent email",
		"`drop_off`.`station_contact`" => "Station contact",
		"`drop_off`.`agent_incharge`" => "Agent incharge (Full name)",
		"`drop_off`.`agent_id`" => "Agent id Number",
		"`drop_off`.`station_reg_date`" => "Station reg date",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`drop_off`.`id`" => "id",
		"`drop_off`.`point_name`" => "point_name",
		"`drop_off`.`location`" => "location",
		"`drop_off`.`licence`" => "licence",
		"`drop_off`.`packages_accepted`" => "packages_accepted",
		"`drop_off`.`operating_licence`" => "operating_licence",
		"`drop_off`.`station_email`" => "station_email",
		"`drop_off`.`station_contact`" => "station_contact",
		"`drop_off`.`agent_incharge`" => "agent_incharge",
		"`drop_off`.`agent_id`" => "agent_id",
		"if(`drop_off`.`station_reg_date`,date_format(`drop_off`.`station_reg_date`,'%m/%d/%Y'),'')" => "station_reg_date",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`drop_off` ";
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
	$x->ScriptFileName = 'drop_off_view.php';
	$x->RedirectAfterInsert = 'drop_off_view.php?SelectedID=#ID#';
	$x->TableTitle = 'Drop off Points';
	$x->TableIcon = 'resources/table_icons/Home-Holland-icon.png';
	$x->PrimaryKey = '`drop_off`.`id`';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['Point name', 'GPRS Location', 'Licence', 'Packages Size accepted', 'Operating licence', 'Agent email', 'Station photo', 'Station contact', 'Agent incharge (Full name)', 'Agent id Number', 'Station reg date', ];
	$x->ColFieldName = ['point_name', 'location', 'licence', 'packages_accepted', 'operating_licence', 'station_email', 'station_photo', 'station_contact', 'agent_incharge', 'agent_id', 'station_reg_date', ];
	$x->ColNumber  = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/drop_off_templateTV.html';
	$x->SelectedTemplate = 'templates/drop_off_templateTVS.html';
	$x->TemplateDV = 'templates/drop_off_templateDV.html';
	$x->TemplateDVP = 'templates/drop_off_templateDVP.html';

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
		$x->QueryWhere = "WHERE `drop_off`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='drop_off' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
	} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $DisplayRecords == 'group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `drop_off`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='drop_off' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
	} elseif($perm['view'] == 3) { // view all
		// no further action
	} elseif($perm['view'] == 0) { // view none
		$x->QueryFields = ['Not enough permissions' => 'NEP'];
		$x->QueryFrom = '`drop_off`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: drop_off_init
	$render = true;
	if(function_exists('drop_off_init')) {
		$args = [];
		$render = drop_off_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: drop_off_header
	$headerCode = '';
	if(function_exists('drop_off_header')) {
		$args = [];
		$headerCode = drop_off_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once("{$currDir}/header.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/header.php");
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: drop_off_footer
	$footerCode = '';
	if(function_exists('drop_off_footer')) {
		$args = [];
		$footerCode = drop_off_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once("{$currDir}/footer.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/footer.php");
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}