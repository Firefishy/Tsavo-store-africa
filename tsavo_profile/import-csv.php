<?php
	define('PREPEND_PATH', '');
	$app_dir = dirname(__FILE__);
	include_once("{$app_dir}/lib.php");

	// accept a record as an assoc array, return transformed row ready to insert to table
	$transformFunctions = [
		'staff' => function($data, $options = []) {

			return $data;
		},
		'board_member' => function($data, $options = []) {

			return $data;
		},
		'about_us' => function($data, $options = []) {

			return $data;
		},
		'privacy_policy' => function($data, $options = []) {

			return $data;
		},
		'terms_conditions' => function($data, $options = []) {

			return $data;
		},
		'return_policy' => function($data, $options = []) {

			return $data;
		},
	];

	// accept a record as an assoc array, return a boolean indicating whether to import or skip record
	$filterFunctions = [
		'staff' => function($data, $options = []) { return true; },
		'board_member' => function($data, $options = []) { return true; },
		'about_us' => function($data, $options = []) { return true; },
		'privacy_policy' => function($data, $options = []) { return true; },
		'terms_conditions' => function($data, $options = []) { return true; },
		'return_policy' => function($data, $options = []) { return true; },
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
