<?php
// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	@include_once("{$currDir}/hooks/products.php");
	include_once("{$currDir}/products_dml.php");

	// mm: can the current member access this page?
	$perm = getTablePermissions('products');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'products';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`products`.`id`" => "id",
		"`products`.`supp_id`" => "supp_id",
		"`products`.`supplier`" => "supplier",
		"`products`.`supp_email`" => "supp_email",
		"CONCAT_WS('-', LEFT(`products`.`supp_cont`,3), MID(`products`.`supp_cont`,4,3))" => "supp_cont",
		"IF(    CHAR_LENGTH(`category1`.`name`), CONCAT_WS('',   `category1`.`name`), '') /* Product Category */" => "category",
		"IF(    CHAR_LENGTH(`category1`.`id`), CONCAT_WS('',   `category1`.`id`), '') /* Category ID */" => "category_id",
		"`products`.`ship_orig`" => "ship_orig",
		"`products`.`slug`" => "slug",
		"`products`.`prod_qty`" => "prod_qty",
		"`products`.`barcode`" => "barcode",
		"`products`.`name`" => "name",
		"`products`.`brand`" => "brand",
		"`products`.`photo`" => "photo",
		"`products`.`size`" => "size",
		"`products`.`material`" => "material",
		"`products`.`length`" => "length",
		"`products`.`width`" => "width",
		"`products`.`height`" => "height",
		"`products`.`weight`" => "weight",
		"if(`products`.`date_view`,date_format(`products`.`date_view`,'%m/%d/%Y'),'')" => "date_view",
		"`products`.`counter`" => "counter",
		"CONCAT('&euro;', FORMAT(`products`.`price_1`, 2))" => "price_1",
		"CONCAT('&euro;', FORMAT(`products`.`was`, 2))" => "was",
		"`products`.`price_2`" => "price_2",
		"`products`.`shipping_add`" => "shipping_add",
		"`products`.`price`" => "price",
		"`products`.`p_off`" => "p_off",
		"`products`.`description`" => "description",
		"`products`.`more_desc`" => "more_desc",
		"`products`.`seller_sku`" => "seller_sku",
		"`products`.`note`" => "note",
		"IF(    CHAR_LENGTH(`male_shoes1`.`name`), CONCAT_WS('',   `male_shoes1`.`name`), '') /* Male shoes */" => "male_shoes",
		"IF(    CHAR_LENGTH(`male_shoes1`.`id`), CONCAT_WS('',   `male_shoes1`.`id`), '') /* Male shoes id */" => "male_shoes_id",
		"IF(    CHAR_LENGTH(`male_pants1`.`name`), CONCAT_WS('',   `male_pants1`.`name`), '') /* Male pants */" => "male_pants",
		"IF(    CHAR_LENGTH(`male_pants1`.`id`), CONCAT_WS('',   `male_pants1`.`id`), '') /* Male pants id */" => "male_pants_id",
		"IF(    CHAR_LENGTH(`male_shirts1`.`name`), CONCAT_WS('',   `male_shirts1`.`name`), '') /* Male shirts */" => "male_shirts",
		"IF(    CHAR_LENGTH(`male_shirts1`.`id`), CONCAT_WS('',   `male_shirts1`.`id`), '') /* Male shirts id */" => "male_shirts_id",
		"IF(    CHAR_LENGTH(`female_shoes1`.`name`), CONCAT_WS('',   `female_shoes1`.`name`), '') /* Female shoes */" => "female_shoes",
		"IF(    CHAR_LENGTH(`female_shoes1`.`id`), CONCAT_WS('',   `female_shoes1`.`id`), '') /* Female shoes id */" => "female_shoes_id",
		"IF(    CHAR_LENGTH(`female_dresses1`.`name`), CONCAT_WS('',   `female_dresses1`.`name`), '') /* Female dresses */" => "female_dresses",
		"IF(    CHAR_LENGTH(`female_dresses1`.`id`), CONCAT_WS('',   `female_dresses1`.`id`), '') /* Female dresses id */" => "female_dresses_id",
		"IF(    CHAR_LENGTH(`female_skirts1`.`name`), CONCAT_WS('',   `female_skirts1`.`name`), '') /* Female skirts */" => "female_skirts",
		"IF(    CHAR_LENGTH(`female_skirts1`.`id`), CONCAT_WS('',   `female_skirts1`.`id`), '') /* Female skirts id */" => "female_skirts_id",
		"IF(    CHAR_LENGTH(`female_pants1`.`name`), CONCAT_WS('',   `female_pants1`.`name`), '') /* Female pants */" => "female_pants",
		"IF(    CHAR_LENGTH(`female_pants1`.`id`), CONCAT_WS('',   `female_pants1`.`id`), '') /* Female pants id */" => "female_pants_id",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`products`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => '`category1`.`name`',
		7 => '`category1`.`id`',
		8 => 8,
		9 => 9,
		10 => '`products`.`prod_qty`',
		11 => '`products`.`barcode`',
		12 => 12,
		13 => 13,
		14 => 14,
		15 => 15,
		16 => 16,
		17 => '`products`.`length`',
		18 => '`products`.`width`',
		19 => '`products`.`height`',
		20 => '`products`.`weight`',
		21 => '`products`.`date_view`',
		22 => '`products`.`counter`',
		23 => 23,
		24 => '`products`.`was`',
		25 => 25,
		26 => 26,
		27 => '`products`.`price`',
		28 => '`products`.`p_off`',
		29 => 29,
		30 => 30,
		31 => 31,
		32 => 32,
		33 => '`male_shoes1`.`name`',
		34 => '`male_shoes1`.`id`',
		35 => '`male_pants1`.`name`',
		36 => '`male_pants1`.`id`',
		37 => '`male_shirts1`.`name`',
		38 => '`male_shirts1`.`id`',
		39 => '`female_shoes1`.`name`',
		40 => '`female_shoes1`.`id`',
		41 => '`female_dresses1`.`name`',
		42 => '`female_dresses1`.`id`',
		43 => '`female_skirts1`.`name`',
		44 => '`female_skirts1`.`id`',
		45 => '`female_pants1`.`name`',
		46 => '`female_pants1`.`id`',
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`products`.`id`" => "id",
		"`products`.`supp_id`" => "supp_id",
		"`products`.`supplier`" => "supplier",
		"`products`.`supp_email`" => "supp_email",
		"CONCAT_WS('-', LEFT(`products`.`supp_cont`,3), MID(`products`.`supp_cont`,4,3))" => "supp_cont",
		"IF(    CHAR_LENGTH(`category1`.`name`), CONCAT_WS('',   `category1`.`name`), '') /* Product Category */" => "category",
		"IF(    CHAR_LENGTH(`category1`.`id`), CONCAT_WS('',   `category1`.`id`), '') /* Category ID */" => "category_id",
		"`products`.`ship_orig`" => "ship_orig",
		"`products`.`slug`" => "slug",
		"`products`.`prod_qty`" => "prod_qty",
		"`products`.`barcode`" => "barcode",
		"`products`.`name`" => "name",
		"`products`.`brand`" => "brand",
		"`products`.`photo`" => "photo",
		"`products`.`size`" => "size",
		"`products`.`material`" => "material",
		"`products`.`length`" => "length",
		"`products`.`width`" => "width",
		"`products`.`height`" => "height",
		"`products`.`weight`" => "weight",
		"if(`products`.`date_view`,date_format(`products`.`date_view`,'%m/%d/%Y'),'')" => "date_view",
		"`products`.`counter`" => "counter",
		"CONCAT('&euro;', FORMAT(`products`.`price_1`, 2))" => "price_1",
		"CONCAT('&euro;', FORMAT(`products`.`was`, 2))" => "was",
		"`products`.`price_2`" => "price_2",
		"`products`.`shipping_add`" => "shipping_add",
		"`products`.`price`" => "price",
		"`products`.`p_off`" => "p_off",
		"`products`.`description`" => "description",
		"`products`.`more_desc`" => "more_desc",
		"`products`.`seller_sku`" => "seller_sku",
		"`products`.`note`" => "note",
		"IF(    CHAR_LENGTH(`male_shoes1`.`name`), CONCAT_WS('',   `male_shoes1`.`name`), '') /* Male shoes */" => "male_shoes",
		"IF(    CHAR_LENGTH(`male_shoes1`.`id`), CONCAT_WS('',   `male_shoes1`.`id`), '') /* Male shoes id */" => "male_shoes_id",
		"IF(    CHAR_LENGTH(`male_pants1`.`name`), CONCAT_WS('',   `male_pants1`.`name`), '') /* Male pants */" => "male_pants",
		"IF(    CHAR_LENGTH(`male_pants1`.`id`), CONCAT_WS('',   `male_pants1`.`id`), '') /* Male pants id */" => "male_pants_id",
		"IF(    CHAR_LENGTH(`male_shirts1`.`name`), CONCAT_WS('',   `male_shirts1`.`name`), '') /* Male shirts */" => "male_shirts",
		"IF(    CHAR_LENGTH(`male_shirts1`.`id`), CONCAT_WS('',   `male_shirts1`.`id`), '') /* Male shirts id */" => "male_shirts_id",
		"IF(    CHAR_LENGTH(`female_shoes1`.`name`), CONCAT_WS('',   `female_shoes1`.`name`), '') /* Female shoes */" => "female_shoes",
		"IF(    CHAR_LENGTH(`female_shoes1`.`id`), CONCAT_WS('',   `female_shoes1`.`id`), '') /* Female shoes id */" => "female_shoes_id",
		"IF(    CHAR_LENGTH(`female_dresses1`.`name`), CONCAT_WS('',   `female_dresses1`.`name`), '') /* Female dresses */" => "female_dresses",
		"IF(    CHAR_LENGTH(`female_dresses1`.`id`), CONCAT_WS('',   `female_dresses1`.`id`), '') /* Female dresses id */" => "female_dresses_id",
		"IF(    CHAR_LENGTH(`female_skirts1`.`name`), CONCAT_WS('',   `female_skirts1`.`name`), '') /* Female skirts */" => "female_skirts",
		"IF(    CHAR_LENGTH(`female_skirts1`.`id`), CONCAT_WS('',   `female_skirts1`.`id`), '') /* Female skirts id */" => "female_skirts_id",
		"IF(    CHAR_LENGTH(`female_pants1`.`name`), CONCAT_WS('',   `female_pants1`.`name`), '') /* Female pants */" => "female_pants",
		"IF(    CHAR_LENGTH(`female_pants1`.`id`), CONCAT_WS('',   `female_pants1`.`id`), '') /* Female pants id */" => "female_pants_id",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`products`.`id`" => "ID",
		"`products`.`supp_id`" => "Your shop id",
		"`products`.`supplier`" => "Vendor Name(Auto generated)",
		"`products`.`supp_email`" => "Vendor\'s Email (Add your main email)",
		"`products`.`supp_cont`" => "Vendor Contact line( Add your main phone number)",
		"IF(    CHAR_LENGTH(`category1`.`name`), CONCAT_WS('',   `category1`.`name`), '') /* Product Category */" => "Product Category",
		"IF(    CHAR_LENGTH(`category1`.`id`), CONCAT_WS('',   `category1`.`id`), '') /* Category ID */" => "Category ID",
		"`products`.`ship_orig`" => "Country the Stock is located",
		"`products`.`slug`" => "slug",
		"`products`.`prod_qty`" => "Stock Quantity",
		"`products`.`barcode`" => "UPC/ISBN/EAN",
		"`products`.`name`" => "Product Name",
		"`products`.`brand`" => "Brand",
		"`products`.`size`" => "Description Size",
		"`products`.`material`" => "Main material",
		"`products`.`length`" => "Length(CMs)",
		"`products`.`width`" => "Width(CMs)",
		"`products`.`height`" => "Height(CMs)",
		"`products`.`weight`" => "Weight(KGs)",
		"`products`.`date_view`" => "Date_view",
		"`products`.`counter`" => "Views Today",
		"`products`.`price_1`" => "Main Price",
		"`products`.`was`" => "Was",
		"`products`.`price_2`" => "Company Charge",
		"`products`.`shipping_add`" => "Shipping weight charge",
		"`products`.`price`" => "Net Price",
		"`products`.`p_off`" => "Percentage Off",
		"`products`.`description`" => "Product Description",
		"`products`.`more_desc`" => "What is in the box",
		"`products`.`seller_sku`" => "Seller SKU",
		"`products`.`note`" => "ON THE SECTION BELOW IS FOR CLOTHING AND SHOES. YOU ARE TO LABEL THE SIZE OF THE CLOTHING/SHOE THAT YOU ARE ADDING.",
		"IF(    CHAR_LENGTH(`male_shoes1`.`name`), CONCAT_WS('',   `male_shoes1`.`name`), '') /* Male shoes */" => "Male shoes",
		"IF(    CHAR_LENGTH(`male_shoes1`.`id`), CONCAT_WS('',   `male_shoes1`.`id`), '') /* Male shoes id */" => "Male shoes id",
		"IF(    CHAR_LENGTH(`male_pants1`.`name`), CONCAT_WS('',   `male_pants1`.`name`), '') /* Male pants */" => "Male pants",
		"IF(    CHAR_LENGTH(`male_pants1`.`id`), CONCAT_WS('',   `male_pants1`.`id`), '') /* Male pants id */" => "Male pants id",
		"IF(    CHAR_LENGTH(`male_shirts1`.`name`), CONCAT_WS('',   `male_shirts1`.`name`), '') /* Male shirts */" => "Male shirts",
		"IF(    CHAR_LENGTH(`male_shirts1`.`id`), CONCAT_WS('',   `male_shirts1`.`id`), '') /* Male shirts id */" => "Male shirts id",
		"IF(    CHAR_LENGTH(`female_shoes1`.`name`), CONCAT_WS('',   `female_shoes1`.`name`), '') /* Female shoes */" => "Female shoes",
		"IF(    CHAR_LENGTH(`female_shoes1`.`id`), CONCAT_WS('',   `female_shoes1`.`id`), '') /* Female shoes id */" => "Female shoes id",
		"IF(    CHAR_LENGTH(`female_dresses1`.`name`), CONCAT_WS('',   `female_dresses1`.`name`), '') /* Female dresses */" => "Female dresses",
		"IF(    CHAR_LENGTH(`female_dresses1`.`id`), CONCAT_WS('',   `female_dresses1`.`id`), '') /* Female dresses id */" => "Female dresses id",
		"IF(    CHAR_LENGTH(`female_skirts1`.`name`), CONCAT_WS('',   `female_skirts1`.`name`), '') /* Female skirts */" => "Female skirts",
		"IF(    CHAR_LENGTH(`female_skirts1`.`id`), CONCAT_WS('',   `female_skirts1`.`id`), '') /* Female skirts id */" => "Female skirts id",
		"IF(    CHAR_LENGTH(`female_pants1`.`name`), CONCAT_WS('',   `female_pants1`.`name`), '') /* Female pants */" => "Female pants",
		"IF(    CHAR_LENGTH(`female_pants1`.`id`), CONCAT_WS('',   `female_pants1`.`id`), '') /* Female pants id */" => "Female pants id",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`products`.`id`" => "id",
		"`products`.`supp_id`" => "supp_id",
		"`products`.`supplier`" => "supplier",
		"`products`.`supp_email`" => "supp_email",
		"CONCAT_WS('-', LEFT(`products`.`supp_cont`,3), MID(`products`.`supp_cont`,4,3))" => "supp_cont",
		"IF(    CHAR_LENGTH(`category1`.`name`), CONCAT_WS('',   `category1`.`name`), '') /* Product Category */" => "category",
		"IF(    CHAR_LENGTH(`category1`.`id`), CONCAT_WS('',   `category1`.`id`), '') /* Category ID */" => "category_id",
		"`products`.`ship_orig`" => "ship_orig",
		"`products`.`slug`" => "slug",
		"`products`.`prod_qty`" => "prod_qty",
		"`products`.`barcode`" => "barcode",
		"`products`.`name`" => "name",
		"`products`.`brand`" => "brand",
		"`products`.`size`" => "size",
		"`products`.`material`" => "material",
		"`products`.`length`" => "length",
		"`products`.`width`" => "width",
		"`products`.`height`" => "height",
		"`products`.`weight`" => "weight",
		"if(`products`.`date_view`,date_format(`products`.`date_view`,'%m/%d/%Y'),'')" => "date_view",
		"`products`.`counter`" => "counter",
		"CONCAT('&euro;', FORMAT(`products`.`price_1`, 2))" => "price_1",
		"CONCAT('&euro;', FORMAT(`products`.`was`, 2))" => "was",
		"`products`.`price_2`" => "price_2",
		"`products`.`shipping_add`" => "shipping_add",
		"`products`.`price`" => "price",
		"`products`.`p_off`" => "p_off",
		"`products`.`description`" => "description",
		"`products`.`more_desc`" => "more_desc",
		"`products`.`seller_sku`" => "seller_sku",
		"`products`.`note`" => "note",
		"IF(    CHAR_LENGTH(`male_shoes1`.`name`), CONCAT_WS('',   `male_shoes1`.`name`), '') /* Male shoes */" => "male_shoes",
		"IF(    CHAR_LENGTH(`male_shoes1`.`id`), CONCAT_WS('',   `male_shoes1`.`id`), '') /* Male shoes id */" => "male_shoes_id",
		"IF(    CHAR_LENGTH(`male_pants1`.`name`), CONCAT_WS('',   `male_pants1`.`name`), '') /* Male pants */" => "male_pants",
		"IF(    CHAR_LENGTH(`male_pants1`.`id`), CONCAT_WS('',   `male_pants1`.`id`), '') /* Male pants id */" => "male_pants_id",
		"IF(    CHAR_LENGTH(`male_shirts1`.`name`), CONCAT_WS('',   `male_shirts1`.`name`), '') /* Male shirts */" => "male_shirts",
		"IF(    CHAR_LENGTH(`male_shirts1`.`id`), CONCAT_WS('',   `male_shirts1`.`id`), '') /* Male shirts id */" => "male_shirts_id",
		"IF(    CHAR_LENGTH(`female_shoes1`.`name`), CONCAT_WS('',   `female_shoes1`.`name`), '') /* Female shoes */" => "female_shoes",
		"IF(    CHAR_LENGTH(`female_shoes1`.`id`), CONCAT_WS('',   `female_shoes1`.`id`), '') /* Female shoes id */" => "female_shoes_id",
		"IF(    CHAR_LENGTH(`female_dresses1`.`name`), CONCAT_WS('',   `female_dresses1`.`name`), '') /* Female dresses */" => "female_dresses",
		"IF(    CHAR_LENGTH(`female_dresses1`.`id`), CONCAT_WS('',   `female_dresses1`.`id`), '') /* Female dresses id */" => "female_dresses_id",
		"IF(    CHAR_LENGTH(`female_skirts1`.`name`), CONCAT_WS('',   `female_skirts1`.`name`), '') /* Female skirts */" => "female_skirts",
		"IF(    CHAR_LENGTH(`female_skirts1`.`id`), CONCAT_WS('',   `female_skirts1`.`id`), '') /* Female skirts id */" => "female_skirts_id",
		"IF(    CHAR_LENGTH(`female_pants1`.`name`), CONCAT_WS('',   `female_pants1`.`name`), '') /* Female pants */" => "female_pants",
		"IF(    CHAR_LENGTH(`female_pants1`.`id`), CONCAT_WS('',   `female_pants1`.`id`), '') /* Female pants id */" => "female_pants_id",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = ['category' => 'Product Category', 'male_shoes' => 'Male shoes', 'male_pants' => 'Male pants', 'male_shirts' => 'Male shirts', 'female_shoes' => 'Female shoes', 'female_dresses' => 'Female dresses', 'female_skirts' => 'Female skirts', 'female_pants' => 'Female pants', ];

	$x->QueryFrom = "`products` LEFT JOIN `category` as category1 ON `category1`.`id`=`products`.`category` LEFT JOIN `male_shoes` as male_shoes1 ON `male_shoes1`.`id`=`products`.`male_shoes` LEFT JOIN `male_pants` as male_pants1 ON `male_pants1`.`id`=`products`.`male_pants` LEFT JOIN `male_shirts` as male_shirts1 ON `male_shirts1`.`id`=`products`.`male_shirts` LEFT JOIN `female_shoes` as female_shoes1 ON `female_shoes1`.`id`=`products`.`female_shoes` LEFT JOIN `female_dresses` as female_dresses1 ON `female_dresses1`.`id`=`products`.`female_dresses` LEFT JOIN `female_skirts` as female_skirts1 ON `female_skirts1`.`id`=`products`.`female_skirts` LEFT JOIN `female_pants` as female_pants1 ON `female_pants1`.`id`=`products`.`female_pants` ";
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
	$x->ScriptFileName = 'products_view.php';
	$x->RedirectAfterInsert = 'products_view.php';
	$x->TableTitle = 'Products';
	$x->TableIcon = 'resources/table_icons/Folders-Binders-Folder-icon.png';
	$x->PrimaryKey = '`products`.`id`';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['Your shop id', 'Vendor Name(Auto generated)', 'Vendor\'s Email (Add your main email)', 'Vendor Contact line( Add your main phone number)', 'Product Category', 'Category ID', 'Country the Stock is located', 'Stock Quantity', 'UPC/ISBN/EAN', 'Product Name', 'Brand', 'Product photo', 'Description Size', 'Main material', 'Length(CMs)', 'Width(CMs)', 'Height(CMs)', 'Weight(KGs)', 'Views Today', 'Main Price', 'Was', 'Company Charge', 'Shipping weight charge', 'Net Price', 'Seller SKU', 'ON THE SECTION BELOW IS FOR CLOTHING AND SHOES. YOU ARE TO LABEL THE SIZE OF THE CLOTHING/SHOE THAT YOU ARE ADDING.', 'Male shoes', 'Male shoes id', 'Male pants', 'Male pants id', 'Male shirts', 'Male shirts id', 'Female shoes', 'Female shoes id', 'Female dresses', 'Female dresses id', 'Female skirts', 'Female skirts id', 'Female pants', 'Female pants id', ];
	$x->ColFieldName = ['supp_id', 'supplier', 'supp_email', 'supp_cont', 'category', 'category_id', 'ship_orig', 'prod_qty', 'barcode', 'name', 'brand', 'photo', 'size', 'material', 'length', 'width', 'height', 'weight', 'counter', 'price_1', 'was', 'price_2', 'shipping_add', 'price', 'seller_sku', 'note', 'male_shoes', 'male_shoes_id', 'male_pants', 'male_pants_id', 'male_shirts', 'male_shirts_id', 'female_shoes', 'female_shoes_id', 'female_dresses', 'female_dresses_id', 'female_skirts', 'female_skirts_id', 'female_pants', 'female_pants_id', ];
	$x->ColNumber  = [2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 22, 23, 24, 25, 26, 27, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/products_templateTV.html';
	$x->SelectedTemplate = 'templates/products_templateTVS.html';
	$x->TemplateDV = 'templates/products_templateDV.html';
	$x->TemplateDVP = 'templates/products_templateDVP.html';

	$x->ShowTableHeader = 0;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = true;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, ['user', 'group'])) { $DisplayRecords = 'all'; }
	if($perm['view'] == 1 || ($perm['view'] > 1 && $DisplayRecords == 'user' && !$_REQUEST['NoFilter_x'])) { // view owner only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `products`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='products' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
	} elseif($perm['view'] == 2 || ($perm['view'] > 2 && $DisplayRecords == 'group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom .= ', `membership_userrecords`';
		$x->QueryWhere = "WHERE `products`.`id`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='products' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
	} elseif($perm['view'] == 3) { // view all
		// no further action
	} elseif($perm['view'] == 0) { // view none
		$x->QueryFields = ['Not enough permissions' => 'NEP'];
		$x->QueryFrom = '`products`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: products_init
	$render = true;
	if(function_exists('products_init')) {
		$args = [];
		$render = products_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: products_header
	$headerCode = '';
	if(function_exists('products_header')) {
		$args = [];
		$headerCode = products_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once("{$currDir}/header.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/header.php");
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: products_footer
	$footerCode = '';
	if(function_exists('products_footer')) {
		$args = [];
		$footerCode = products_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once("{$currDir}/footer.php"); 
	} else {
		ob_start();
		include_once("{$currDir}/footer.php");
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}