<?php

// Data functions (insert, update, delete, form) for table terms_conditions

// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

function terms_conditions_insert(&$error_message = '') {
	global $Translation;

	// mm: can member insert record?
	$arrPerm = getTablePermissions('terms_conditions');
	if(!$arrPerm['insert']) return false;

	$data = [
		'main_head' => Request::val('main_head', ''),
		'main_head_content' => Request::val('main_head_content', ''),
		'sub_head1' => Request::val('sub_head1', ''),
		'head_1' => Request::val('head_1', ''),
		'sub_head2' => Request::val('sub_head2', ''),
		'head_2' => Request::val('head_2', ''),
		'sub_head3' => Request::val('sub_head3', ''),
		'head_3' => Request::val('head_3', ''),
		'sub_head4' => Request::val('sub_head4', ''),
		'head_4' => Request::val('head_4', ''),
	];


	// hook: terms_conditions_before_insert
	if(function_exists('terms_conditions_before_insert')) {
		$args = [];
		if(!terms_conditions_before_insert($data, getMemberInfo(), $args)) {
			if(isset($args['error_message'])) $error_message = $args['error_message'];
			return false;
		}
	}

	$error = '';
	// set empty fields to NULL
	$data = array_map(function($v) { return ($v === '' ? NULL : $v); }, $data);
	insert('terms_conditions', backtick_keys_once($data), $error);
	if($error)
		die("{$error}<br><a href=\"#\" onclick=\"history.go(-1);\">{$Translation['< back']}</a>");

	$recID = db_insert_id(db_link());

	update_calc_fields('terms_conditions', $recID, calculated_fields()['terms_conditions']);

	// hook: terms_conditions_after_insert
	if(function_exists('terms_conditions_after_insert')) {
		$res = sql("SELECT * FROM `terms_conditions` WHERE `id`='" . makeSafe($recID, false) . "' LIMIT 1", $eo);
		if($row = db_fetch_assoc($res)) {
			$data = array_map('makeSafe', $row);
		}
		$data['selectedID'] = makeSafe($recID, false);
		$args=[];
		if(!terms_conditions_after_insert($data, getMemberInfo(), $args)) { return $recID; }
	}

	// mm: save ownership data
	set_record_owner('terms_conditions', $recID, getLoggedMemberID());

	// if this record is a copy of another record, copy children if applicable
	if(!empty($_REQUEST['SelectedID'])) terms_conditions_copy_children($recID, $_REQUEST['SelectedID']);

	return $recID;
}

function terms_conditions_copy_children($destination_id, $source_id) {
	global $Translation;
	$requests = []; // array of curl handlers for launching insert requests
	$eo = ['silentErrors' => true];
	$safe_sid = makeSafe($source_id);

	// launch requests, asynchronously
	curl_batch($requests);
}

function terms_conditions_delete($selected_id, $AllowDeleteOfParents = false, $skipChecks = false) {
	// insure referential integrity ...
	global $Translation;
	$selected_id = makeSafe($selected_id);

	// mm: can member delete record?
	if(!check_record_permission('terms_conditions', $selected_id, 'delete')) {
		return $Translation['You don\'t have enough permissions to delete this record'];
	}

	// hook: terms_conditions_before_delete
	if(function_exists('terms_conditions_before_delete')) {
		$args = [];
		if(!terms_conditions_before_delete($selected_id, $skipChecks, getMemberInfo(), $args))
			return $Translation['Couldn\'t delete this record'] . (
				!empty($args['error_message']) ?
					'<div class="text-bold">' . strip_tags($args['error_message']) . '</div>'
					: '' 
			);
	}

	sql("DELETE FROM `terms_conditions` WHERE `id`='{$selected_id}'", $eo);

	// hook: terms_conditions_after_delete
	if(function_exists('terms_conditions_after_delete')) {
		$args = [];
		terms_conditions_after_delete($selected_id, getMemberInfo(), $args);
	}

	// mm: delete ownership data
	sql("DELETE FROM `membership_userrecords` WHERE `tableName`='terms_conditions' AND `pkValue`='{$selected_id}'", $eo);
}

function terms_conditions_update(&$selected_id, &$error_message = '') {
	global $Translation;

	// mm: can member edit record?
	if(!check_record_permission('terms_conditions', $selected_id, 'edit')) return false;

	$data = [
		'main_head' => Request::val('main_head', ''),
		'main_head_content' => Request::val('main_head_content', ''),
		'sub_head1' => Request::val('sub_head1', ''),
		'head_1' => Request::val('head_1', ''),
		'sub_head2' => Request::val('sub_head2', ''),
		'head_2' => Request::val('head_2', ''),
		'sub_head3' => Request::val('sub_head3', ''),
		'head_3' => Request::val('head_3', ''),
		'sub_head4' => Request::val('sub_head4', ''),
		'head_4' => Request::val('head_4', ''),
	];

	// get existing values
	$old_data = getRecord('terms_conditions', $selected_id);
	if(is_array($old_data)) {
		$old_data = array_map('makeSafe', $old_data);
		$old_data['selectedID'] = makeSafe($selected_id);
	}

	$data['selectedID'] = makeSafe($selected_id);

	// hook: terms_conditions_before_update
	if(function_exists('terms_conditions_before_update')) {
		$args = ['old_data' => $old_data];
		if(!terms_conditions_before_update($data, getMemberInfo(), $args)) {
			if(isset($args['error_message'])) $error_message = $args['error_message'];
			return false;
		}
	}

	$set = $data; unset($set['selectedID']);
	foreach ($set as $field => $value) {
		$set[$field] = ($value !== '' && $value !== NULL) ? $value : NULL;
	}

	if(!update(
		'terms_conditions', 
		backtick_keys_once($set), 
		['`id`' => $selected_id], 
		$error_message
	)) {
		echo $error_message;
		echo '<a href="terms_conditions_view.php?SelectedID=' . urlencode($selected_id) . "\">{$Translation['< back']}</a>";
		exit;
	}


	$eo = ['silentErrors' => true];

	update_calc_fields('terms_conditions', $data['selectedID'], calculated_fields()['terms_conditions']);

	// hook: terms_conditions_after_update
	if(function_exists('terms_conditions_after_update')) {
		$res = sql("SELECT * FROM `terms_conditions` WHERE `id`='{$data['selectedID']}' LIMIT 1", $eo);
		if($row = db_fetch_assoc($res)) $data = array_map('makeSafe', $row);

		$data['selectedID'] = $data['id'];
		$args = ['old_data' => $old_data];
		if(!terms_conditions_after_update($data, getMemberInfo(), $args)) return;
	}

	// mm: update ownership data
	sql("UPDATE `membership_userrecords` SET `dateUpdated`='" . time() . "' WHERE `tableName`='terms_conditions' AND `pkValue`='" . makeSafe($selected_id) . "'", $eo);
}

function terms_conditions_form($selected_id = '', $AllowUpdate = 1, $AllowInsert = 1, $AllowDelete = 1, $ShowCancel = 0, $TemplateDV = '', $TemplateDVP = '') {
	// function to return an editable form for a table records
	// and fill it with data of record whose ID is $selected_id. If $selected_id
	// is empty, an empty form is shown, with only an 'Add New'
	// button displayed.

	global $Translation;

	// mm: get table permissions
	$arrPerm = getTablePermissions('terms_conditions');
	if(!$arrPerm['insert'] && $selected_id=='') return $Translation['tableAccessDenied'];
	$AllowInsert = ($arrPerm['insert'] ? true : false);
	// print preview?
	$dvprint = false;
	if($selected_id && $_REQUEST['dvprint_x'] != '') {
		$dvprint = true;
	}


	// populate filterers, starting from children to grand-parents

	// unique random identifier
	$rnd1 = ($dvprint ? rand(1000000, 9999999) : '');

	if($selected_id) {
		// mm: check member permissions
		if(!$arrPerm['view']) return $Translation['tableAccessDenied'];

		// mm: who is the owner?
		$ownerGroupID = sqlValue("SELECT `groupID` FROM `membership_userrecords` WHERE `tableName`='terms_conditions' AND `pkValue`='" . makeSafe($selected_id) . "'");
		$ownerMemberID = sqlValue("SELECT LCASE(`memberID`) FROM `membership_userrecords` WHERE `tableName`='terms_conditions' AND `pkValue`='" . makeSafe($selected_id) . "'");

		if($arrPerm['view'] == 1 && getLoggedMemberID() != $ownerMemberID) return $Translation['tableAccessDenied'];
		if($arrPerm['view'] == 2 && getLoggedGroupID() != $ownerGroupID) return $Translation['tableAccessDenied'];

		// can edit?
		$AllowUpdate = 0;
		if(($arrPerm['edit'] == 1 && $ownerMemberID == getLoggedMemberID()) || ($arrPerm['edit'] == 2 && $ownerGroupID == getLoggedGroupID()) || $arrPerm['edit'] == 3) {
			$AllowUpdate = 1;
		}

		$res = sql("SELECT * FROM `terms_conditions` WHERE `id`='" . makeSafe($selected_id) . "'", $eo);
		if(!($row = db_fetch_array($res))) {
			return error_message($Translation['No records found'], 'terms_conditions_view.php', false);
		}
		$urow = $row; /* unsanitized data */
		$row = array_map('safe_html', $row);
	} else {
	}

	// code for template based detail view forms

	// open the detail view template
	if($dvprint) {
		$template_file = is_file("./{$TemplateDVP}") ? "./{$TemplateDVP}" : './templates/terms_conditions_templateDVP.html';
		$templateCode = @file_get_contents($template_file);
	} else {
		$template_file = is_file("./{$TemplateDV}") ? "./{$TemplateDV}" : './templates/terms_conditions_templateDV.html';
		$templateCode = @file_get_contents($template_file);
	}

	// process form title
	$templateCode = str_replace('<%%DETAIL_VIEW_TITLE%%>', 'Privacy policy details', $templateCode);
	$templateCode = str_replace('<%%RND1%%>', $rnd1, $templateCode);
	$templateCode = str_replace('<%%EMBEDDED%%>', ($_REQUEST['Embedded'] ? 'Embedded=1' : ''), $templateCode);
	// process buttons
	if($AllowInsert) {
		if(!$selected_id) $templateCode = str_replace('<%%INSERT_BUTTON%%>', '<button type="submit" class="btn btn-success" id="insert" name="insert_x" value="1" onclick="return terms_conditions_validateData();"><i class="glyphicon glyphicon-plus-sign"></i> ' . $Translation['Save New'] . '</button>', $templateCode);
		$templateCode = str_replace('<%%INSERT_BUTTON%%>', '<button type="submit" class="btn btn-default" id="insert" name="insert_x" value="1" onclick="return terms_conditions_validateData();"><i class="glyphicon glyphicon-plus-sign"></i> ' . $Translation['Save As Copy'] . '</button>', $templateCode);
	} else {
		$templateCode = str_replace('<%%INSERT_BUTTON%%>', '', $templateCode);
	}

	// 'Back' button action
	if($_REQUEST['Embedded']) {
		$backAction = 'AppGini.closeParentModal(); return false;';
	} else {
		$backAction = '$j(\'form\').eq(0).attr(\'novalidate\', \'novalidate\'); document.myform.reset(); return true;';
	}

	if($selected_id) {
		if(!$_REQUEST['Embedded']) $templateCode = str_replace('<%%DVPRINT_BUTTON%%>', '<button type="submit" class="btn btn-default" id="dvprint" name="dvprint_x" value="1" onclick="$j(\'form\').eq(0).prop(\'novalidate\', true); document.myform.reset(); return true;" title="' . html_attr($Translation['Print Preview']) . '"><i class="glyphicon glyphicon-print"></i> ' . $Translation['Print Preview'] . '</button>', $templateCode);
		if($AllowUpdate) {
			$templateCode = str_replace('<%%UPDATE_BUTTON%%>', '<button type="submit" class="btn btn-success btn-lg" id="update" name="update_x" value="1" onclick="return terms_conditions_validateData();" title="' . html_attr($Translation['Save Changes']) . '"><i class="glyphicon glyphicon-ok"></i> ' . $Translation['Save Changes'] . '</button>', $templateCode);
		} else {
			$templateCode = str_replace('<%%UPDATE_BUTTON%%>', '', $templateCode);
		}
		if(($arrPerm[4]==1 && $ownerMemberID==getLoggedMemberID()) || ($arrPerm[4]==2 && $ownerGroupID==getLoggedGroupID()) || $arrPerm[4]==3) { // allow delete?
			$templateCode = str_replace('<%%DELETE_BUTTON%%>', '<button type="submit" class="btn btn-danger" id="delete" name="delete_x" value="1" onclick="return confirm(\'' . $Translation['are you sure?'] . '\');" title="' . html_attr($Translation['Delete']) . '"><i class="glyphicon glyphicon-trash"></i> ' . $Translation['Delete'] . '</button>', $templateCode);
		} else {
			$templateCode = str_replace('<%%DELETE_BUTTON%%>', '', $templateCode);
		}
		$templateCode = str_replace('<%%DESELECT_BUTTON%%>', '<button type="submit" class="btn btn-default" id="deselect" name="deselect_x" value="1" onclick="' . $backAction . '" title="' . html_attr($Translation['Back']) . '"><i class="glyphicon glyphicon-chevron-left"></i> ' . $Translation['Back'] . '</button>', $templateCode);
	} else {
		$templateCode = str_replace('<%%UPDATE_BUTTON%%>', '', $templateCode);
		$templateCode = str_replace('<%%DELETE_BUTTON%%>', '', $templateCode);
		$templateCode = str_replace('<%%DESELECT_BUTTON%%>', ($ShowCancel ? '<button type="submit" class="btn btn-default" id="deselect" name="deselect_x" value="1" onclick="' . $backAction . '" title="' . html_attr($Translation['Back']) . '"><i class="glyphicon glyphicon-chevron-left"></i> ' . $Translation['Back'] . '</button>' : ''), $templateCode);
	}

	// set records to read only if user can't insert new records and can't edit current record
	if(($selected_id && !$AllowUpdate && !$AllowInsert) || (!$selected_id && !$AllowInsert)) {
		$jsReadOnly = '';
		$jsReadOnly .= "\tjQuery('#main_head').replaceWith('<div class=\"form-control-static\" id=\"main_head\">' + (jQuery('#main_head').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#sub_head1').replaceWith('<div class=\"form-control-static\" id=\"sub_head1\">' + (jQuery('#sub_head1').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#sub_head2').replaceWith('<div class=\"form-control-static\" id=\"sub_head2\">' + (jQuery('#sub_head2').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#sub_head3').replaceWith('<div class=\"form-control-static\" id=\"sub_head3\">' + (jQuery('#sub_head3').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#sub_head4').replaceWith('<div class=\"form-control-static\" id=\"sub_head4\">' + (jQuery('#sub_head4').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('.select2-container').hide();\n";

		$noUploads = true;
	} elseif($AllowInsert) {
		$jsEditable = "\tjQuery('form').eq(0).data('already_changed', true);"; // temporarily disable form change handler
		$jsEditable .= "\tjQuery('form').eq(0).data('already_changed', false);"; // re-enable form change handler
	}

	// process combos

	/* lookup fields array: 'lookup field name' => array('parent table name', 'lookup field caption') */
	$lookup_fields = array();
	foreach($lookup_fields as $luf => $ptfc) {
		$pt_perm = getTablePermissions($ptfc[0]);

		// process foreign key links
		if($pt_perm['view'] || $pt_perm['edit']) {
			$templateCode = str_replace("<%%PLINK({$luf})%%>", '<button type="button" class="btn btn-default view_parent hspacer-md" id="' . $ptfc[0] . '_view_parent" title="' . html_attr($Translation['View'] . ' ' . $ptfc[1]) . '"><i class="glyphicon glyphicon-eye-open"></i></button>', $templateCode);
		}

		// if user has insert permission to parent table of a lookup field, put an add new button
		if($pt_perm['insert'] /* && !$_REQUEST['Embedded']*/) {
			$templateCode = str_replace("<%%ADDNEW({$ptfc[0]})%%>", '<button type="button" class="btn btn-success add_new_parent hspacer-md" id="' . $ptfc[0] . '_add_new" title="' . html_attr($Translation['Add New'] . ' ' . $ptfc[1]) . '"><i class="glyphicon glyphicon-plus-sign"></i></button>', $templateCode);
		}
	}

	// process images
	$templateCode = str_replace('<%%UPLOADFILE(id)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(main_head)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(main_head_content)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(sub_head1)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(head_1)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(sub_head2)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(head_2)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(sub_head3)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(head_3)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(sub_head4)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(head_4)%%>', '', $templateCode);

	// process values
	if($selected_id) {
		if( $dvprint) $templateCode = str_replace('<%%VALUE(id)%%>', safe_html($urow['id']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(id)%%>', html_attr($row['id']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(id)%%>', urlencode($urow['id']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(main_head)%%>', safe_html($urow['main_head']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(main_head)%%>', html_attr($row['main_head']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(main_head)%%>', urlencode($urow['main_head']), $templateCode);
		if($AllowUpdate || $AllowInsert) {
			$templateCode = str_replace('<%%HTMLAREA(main_head_content)%%>', '<textarea name="main_head_content" id="main_head_content" rows="5">' . html_attr($row['main_head_content']) . '</textarea>', $templateCode);
		} else {
			$templateCode = str_replace('<%%HTMLAREA(main_head_content)%%>', '<div id="main_head_content" class="form-control-static">' . $row['main_head_content'] . '</div>', $templateCode);
		}
		$templateCode = str_replace('<%%VALUE(main_head_content)%%>', nl2br($row['main_head_content']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(main_head_content)%%>', urlencode($urow['main_head_content']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(sub_head1)%%>', safe_html($urow['sub_head1']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(sub_head1)%%>', html_attr($row['sub_head1']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sub_head1)%%>', urlencode($urow['sub_head1']), $templateCode);
		if($AllowUpdate || $AllowInsert) {
			$templateCode = str_replace('<%%HTMLAREA(head_1)%%>', '<textarea name="head_1" id="head_1" rows="5">' . html_attr($row['head_1']) . '</textarea>', $templateCode);
		} else {
			$templateCode = str_replace('<%%HTMLAREA(head_1)%%>', '<div id="head_1" class="form-control-static">' . $row['head_1'] . '</div>', $templateCode);
		}
		$templateCode = str_replace('<%%VALUE(head_1)%%>', nl2br($row['head_1']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(head_1)%%>', urlencode($urow['head_1']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(sub_head2)%%>', safe_html($urow['sub_head2']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(sub_head2)%%>', html_attr($row['sub_head2']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sub_head2)%%>', urlencode($urow['sub_head2']), $templateCode);
		if($AllowUpdate || $AllowInsert) {
			$templateCode = str_replace('<%%HTMLAREA(head_2)%%>', '<textarea name="head_2" id="head_2" rows="5">' . html_attr($row['head_2']) . '</textarea>', $templateCode);
		} else {
			$templateCode = str_replace('<%%HTMLAREA(head_2)%%>', '<div id="head_2" class="form-control-static">' . $row['head_2'] . '</div>', $templateCode);
		}
		$templateCode = str_replace('<%%VALUE(head_2)%%>', nl2br($row['head_2']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(head_2)%%>', urlencode($urow['head_2']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(sub_head3)%%>', safe_html($urow['sub_head3']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(sub_head3)%%>', html_attr($row['sub_head3']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sub_head3)%%>', urlencode($urow['sub_head3']), $templateCode);
		if($AllowUpdate || $AllowInsert) {
			$templateCode = str_replace('<%%HTMLAREA(head_3)%%>', '<textarea name="head_3" id="head_3" rows="5">' . html_attr($row['head_3']) . '</textarea>', $templateCode);
		} else {
			$templateCode = str_replace('<%%HTMLAREA(head_3)%%>', '<div id="head_3" class="form-control-static">' . $row['head_3'] . '</div>', $templateCode);
		}
		$templateCode = str_replace('<%%VALUE(head_3)%%>', nl2br($row['head_3']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(head_3)%%>', urlencode($urow['head_3']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(sub_head4)%%>', safe_html($urow['sub_head4']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(sub_head4)%%>', html_attr($row['sub_head4']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sub_head4)%%>', urlencode($urow['sub_head4']), $templateCode);
		if($AllowUpdate || $AllowInsert) {
			$templateCode = str_replace('<%%HTMLAREA(head_4)%%>', '<textarea name="head_4" id="head_4" rows="5">' . html_attr($row['head_4']) . '</textarea>', $templateCode);
		} else {
			$templateCode = str_replace('<%%HTMLAREA(head_4)%%>', '<div id="head_4" class="form-control-static">' . $row['head_4'] . '</div>', $templateCode);
		}
		$templateCode = str_replace('<%%VALUE(head_4)%%>', nl2br($row['head_4']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(head_4)%%>', urlencode($urow['head_4']), $templateCode);
	} else {
		$templateCode = str_replace('<%%VALUE(id)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(id)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(main_head)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(main_head)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%HTMLAREA(main_head_content)%%>', '<textarea name="main_head_content" id="main_head_content" rows="5"></textarea>', $templateCode);
		$templateCode = str_replace('<%%VALUE(sub_head1)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sub_head1)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%HTMLAREA(head_1)%%>', '<textarea name="head_1" id="head_1" rows="5"></textarea>', $templateCode);
		$templateCode = str_replace('<%%VALUE(sub_head2)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sub_head2)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%HTMLAREA(head_2)%%>', '<textarea name="head_2" id="head_2" rows="5"></textarea>', $templateCode);
		$templateCode = str_replace('<%%VALUE(sub_head3)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sub_head3)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%HTMLAREA(head_3)%%>', '<textarea name="head_3" id="head_3" rows="5"></textarea>', $templateCode);
		$templateCode = str_replace('<%%VALUE(sub_head4)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sub_head4)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%HTMLAREA(head_4)%%>', '<textarea name="head_4" id="head_4" rows="5"></textarea>', $templateCode);
	}

	// process translations
	$templateCode = parseTemplate($templateCode);

	// clear scrap
	$templateCode = str_replace('<%%', '<!-- ', $templateCode);
	$templateCode = str_replace('%%>', ' -->', $templateCode);

	// hide links to inaccessible tables
	if($_REQUEST['dvprint_x'] == '') {
		$templateCode .= "\n\n<script>\$j(function() {\n";
		$arrTables = getTableList();
		foreach($arrTables as $name => $caption) {
			$templateCode .= "\t\$j('#{$name}_link').removeClass('hidden');\n";
			$templateCode .= "\t\$j('#xs_{$name}_link').removeClass('hidden');\n";
		}

		$templateCode .= $jsReadOnly;
		$templateCode .= $jsEditable;

		if(!$selected_id) {
		}

		$templateCode.="\n});</script>\n";
	}

	// ajaxed auto-fill fields
	$templateCode .= '<script>';
	$templateCode .= '$j(function() {';


	$templateCode.="});";
	$templateCode.="</script>";
	$templateCode .= $lookups;

	// handle enforced parent values for read-only lookup fields

	// don't include blank images in lightbox gallery
	$templateCode = preg_replace('/blank.gif" data-lightbox=".*?"/', 'blank.gif"', $templateCode);

	// don't display empty email links
	$templateCode=preg_replace('/<a .*?href="mailto:".*?<\/a>/', '', $templateCode);

	/* default field values */
	$rdata = $jdata = get_defaults('terms_conditions');
	if($selected_id) {
		$jdata = get_joined_record('terms_conditions', $selected_id);
		if($jdata === false) $jdata = get_defaults('terms_conditions');
		$rdata = $row;
	}
	$templateCode .= loadView('terms_conditions-ajax-cache', array('rdata' => $rdata, 'jdata' => $jdata));

	// hook: terms_conditions_dv
	if(function_exists('terms_conditions_dv')) {
		$args=[];
		terms_conditions_dv(($selected_id ? $selected_id : FALSE), getMemberInfo(), $templateCode, $args);
	}

	return $templateCode;
}