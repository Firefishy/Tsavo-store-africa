<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function drop_off_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function drop_off_header($contentType, $memberInfo, &$args) {
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

	function drop_off_footer($contentType, $memberInfo, &$args) {
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

	function drop_off_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function drop_off_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function drop_off_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function drop_off_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function drop_off_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function drop_off_after_delete($selectedID, $memberInfo, &$args) {

	}

	function drop_off_dv($selectedID, $memberInfo, &$html, &$args) {

	}

	function drop_off_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function drop_off_batch_actions(&$args) {

		return [];
	}
