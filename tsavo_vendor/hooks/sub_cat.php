<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function sub_cat_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function sub_cat_header($contentType, $memberInfo, &$args) {
		$header='';

		switch($contentType) {
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function sub_cat_footer($contentType, $memberInfo, &$args) {
		$footer='';

		switch($contentType) {
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function sub_cat_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function sub_cat_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function sub_cat_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function sub_cat_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function sub_cat_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function sub_cat_after_delete($selectedID, $memberInfo, &$args) {

	}

	function sub_cat_dv($selectedID, $memberInfo, &$html, &$args) {

	}

	function sub_cat_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function sub_cat_batch_actions(&$args) {

		return [];
	}
