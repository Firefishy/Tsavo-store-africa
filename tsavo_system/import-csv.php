<?php
	define('PREPEND_PATH', '');
	$app_dir = dirname(__FILE__);
	include_once("{$app_dir}/lib.php");

	// accept a record as an assoc array, return transformed row ready to insert to table
	$transformFunctions = [
		'system_setting' => function($data, $options = []) {
			if(isset($data['date'])) $data['date'] = guessMySQLDateTime($data['date']);
			if(isset($data['js_date'])) $data['js_date'] = guessMySQLDateTime($data['js_date']);
			if(isset($data['r_date'])) $data['r_date'] = guessMySQLDateTime($data['r_date']);
			if(isset($data['lp_date'])) $data['lp_date'] = guessMySQLDateTime($data['lp_date']);
			if(isset($data['p1_date'])) $data['p1_date'] = guessMySQLDateTime($data['p1_date']);
			if(isset($data['p2_date'])) $data['p2_date'] = guessMySQLDateTime($data['p2_date']);
			if(isset($data['p3_date'])) $data['p3_date'] = guessMySQLDateTime($data['p3_date']);

			return $data;
		},
		'supplier' => function($data, $options = []) {

			return $data;
		},
		'products' => function($data, $options = []) {

			return $data;
		},
		'details' => function($data, $options = []) {

			return $data;
		},
		'category' => function($data, $options = []) {

			return $data;
		},
	];

	// accept a record as an assoc array, return a boolean indicating whether to import or skip record
	$filterFunctions = [
		'system_setting' => function($data, $options = []) { return true; },
		'supplier' => function($data, $options = []) { return true; },
		'products' => function($data, $options = []) { return true; },
		'details' => function($data, $options = []) { return true; },
		'category' => function($data, $options = []) { return true; },
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
