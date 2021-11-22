<?php

// Data functions (insert, update, delete, form) for table agent

// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

function agent_insert(&$error_message = '') {
	global $Translation;

	// mm: can member insert record?
	$arrPerm = getTablePermissions('agent');
	if(!$arrPerm['insert']) return false;

	$data = [
		'first_name' => Request::val('first_name', ''),
		'last_name' => Request::val('last_name', ''),
		'email' => Request::val('email', ''),
		'phone' => Request::val('phone', ''),
		'address' => Request::val('address', ''),
		'id' => parseCode('AGENT<%%creationTimestamp%%>', true),
		'station' => Request::val('station', ''),
		'zone' => Request::val('zone', ''),
	];

	if($data['id'] === '') {
		echo StyleSheet() . "\n\n<div class=\"alert alert-danger\">{$Translation['error:']} 'ID': {$Translation['field not null']}<br><br>";
		echo '<a href="" onclick="history.go(-1); return false;">' . $Translation['< back'] . '</a></div>';
		exit;
	}

	// hook: agent_before_insert
	if(function_exists('agent_before_insert')) {
		$args = [];
		if(!agent_before_insert($data, getMemberInfo(), $args)) {
			if(isset($args['error_message'])) $error_message = $args['error_message'];
			return false;
		}
	}

	$error = '';
	// set empty fields to NULL
	$data = array_map(function($v) { return ($v === '' ? NULL : $v); }, $data);
	insert('agent', backtick_keys_once($data), $error);
	if($error)
		die("{$error}<br><a href=\"#\" onclick=\"history.go(-1);\">{$Translation['< back']}</a>");

	$recID = $data['id'];

	update_calc_fields('agent', $recID, calculated_fields()['agent']);

	// hook: agent_after_insert
	if(function_exists('agent_after_insert')) {
		$res = sql("SELECT * FROM `agent` WHERE `id`='" . makeSafe($recID, false) . "' LIMIT 1", $eo);
		if($row = db_fetch_assoc($res)) {
			$data = array_map('makeSafe', $row);
		}
		$data['selectedID'] = makeSafe($recID, false);
		$args=[];
		if(!agent_after_insert($data, getMemberInfo(), $args)) { return $recID; }
	}

	// mm: save ownership data
	set_record_owner('agent', $recID, getLoggedMemberID());

	// if this record is a copy of another record, copy children if applicable
	if(!empty($_REQUEST['SelectedID'])) agent_copy_children($recID, $_REQUEST['SelectedID']);

	return $recID;
}

function agent_copy_children($destination_id, $source_id) {
	global $Translation;
	$requests = []; // array of curl handlers for launching insert requests
	$eo = ['silentErrors' => true];
	$safe_sid = makeSafe($source_id);

	// launch requests, asynchronously
	curl_batch($requests);
}

function agent_delete($selected_id, $AllowDeleteOfParents = false, $skipChecks = false) {
	// insure referential integrity ...
	global $Translation;
	$selected_id = makeSafe($selected_id);

	// mm: can member delete record?
	if(!check_record_permission('agent', $selected_id, 'delete')) {
		return $Translation['You don\'t have enough permissions to delete this record'];
	}

	// hook: agent_before_delete
	if(function_exists('agent_before_delete')) {
		$args = [];
		if(!agent_before_delete($selected_id, $skipChecks, getMemberInfo(), $args))
			return $Translation['Couldn\'t delete this record'] . (
				!empty($args['error_message']) ?
					'<div class="text-bold">' . strip_tags($args['error_message']) . '</div>'
					: '' 
			);
	}

	sql("DELETE FROM `agent` WHERE `id`='{$selected_id}'", $eo);

	// hook: agent_after_delete
	if(function_exists('agent_after_delete')) {
		$args = [];
		agent_after_delete($selected_id, getMemberInfo(), $args);
	}

	// mm: delete ownership data
	sql("DELETE FROM `membership_userrecords` WHERE `tableName`='agent' AND `pkValue`='{$selected_id}'", $eo);
}

function agent_update(&$selected_id, &$error_message = '') {
	global $Translation;

	// mm: can member edit record?
	if(!check_record_permission('agent', $selected_id, 'edit')) return false;

	$data = [
		'first_name' => Request::val('first_name', ''),
		'last_name' => Request::val('last_name', ''),
		'email' => Request::val('email', ''),
		'phone' => Request::val('phone', ''),
		'address' => Request::val('address', ''),
		'station' => Request::val('station', ''),
		'zone' => Request::val('zone', ''),
	];

	if($data['id'] === '') {
		echo StyleSheet() . "\n\n<div class=\"alert alert-danger\">{$Translation['error:']} 'ID': {$Translation['field not null']}<br><br>";
		echo '<a href="" onclick="history.go(-1); return false;">' . $Translation['< back'] . '</a></div>';
		exit;
	}
	// get existing values
	$old_data = getRecord('agent', $selected_id);
	if(is_array($old_data)) {
		$old_data = array_map('makeSafe', $old_data);
		$old_data['selectedID'] = makeSafe($selected_id);
	}

	$data['selectedID'] = makeSafe($selected_id);

	// hook: agent_before_update
	if(function_exists('agent_before_update')) {
		$args = ['old_data' => $old_data];
		if(!agent_before_update($data, getMemberInfo(), $args)) {
			if(isset($args['error_message'])) $error_message = $args['error_message'];
			return false;
		}
	}

	$set = $data; unset($set['selectedID']);
	foreach ($set as $field => $value) {
		$set[$field] = ($value !== '' && $value !== NULL) ? $value : NULL;
	}

	if(!update(
		'agent', 
		backtick_keys_once($set), 
		['`id`' => $selected_id], 
		$error_message
	)) {
		echo $error_message;
		echo '<a href="agent_view.php?SelectedID=' . urlencode($selected_id) . "\">{$Translation['< back']}</a>";
		exit;
	}

	$data['selectedID'] = $data['id'];
	$newID = $data['id'];

	$eo = ['silentErrors' => true];

	update_calc_fields('agent', $data['selectedID'], calculated_fields()['agent']);

	// hook: agent_after_update
	if(function_exists('agent_after_update')) {
		$res = sql("SELECT * FROM `agent` WHERE `id`='{$data['selectedID']}' LIMIT 1", $eo);
		if($row = db_fetch_assoc($res)) $data = array_map('makeSafe', $row);

		$data['selectedID'] = $data['id'];
		$args = ['old_data' => $old_data];
		if(!agent_after_update($data, getMemberInfo(), $args)) return;
	}

	// mm: update ownership data
	sql("UPDATE `membership_userrecords` SET `dateUpdated`='" . time() . "', `pkValue`='{$data['id']}' WHERE `tableName`='agent' AND `pkValue`='" . makeSafe($selected_id) . "'", $eo);

	// if PK value changed, update $selected_id
	$selected_id = $newID;
}

function agent_form($selected_id = '', $AllowUpdate = 1, $AllowInsert = 1, $AllowDelete = 1, $ShowCancel = 0, $TemplateDV = '', $TemplateDVP = '') {
	// function to return an editable form for a table records
	// and fill it with data of record whose ID is $selected_id. If $selected_id
	// is empty, an empty form is shown, with only an 'Add New'
	// button displayed.

	global $Translation;

	// mm: get table permissions
	$arrPerm = getTablePermissions('agent');
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
		$ownerGroupID = sqlValue("SELECT `groupID` FROM `membership_userrecords` WHERE `tableName`='agent' AND `pkValue`='" . makeSafe($selected_id) . "'");
		$ownerMemberID = sqlValue("SELECT LCASE(`memberID`) FROM `membership_userrecords` WHERE `tableName`='agent' AND `pkValue`='" . makeSafe($selected_id) . "'");

		if($arrPerm['view'] == 1 && getLoggedMemberID() != $ownerMemberID) return $Translation['tableAccessDenied'];
		if($arrPerm['view'] == 2 && getLoggedGroupID() != $ownerGroupID) return $Translation['tableAccessDenied'];

		// can edit?
		$AllowUpdate = 0;
		if(($arrPerm['edit'] == 1 && $ownerMemberID == getLoggedMemberID()) || ($arrPerm['edit'] == 2 && $ownerGroupID == getLoggedGroupID()) || $arrPerm['edit'] == 3) {
			$AllowUpdate = 1;
		}

		$res = sql("SELECT * FROM `agent` WHERE `id`='" . makeSafe($selected_id) . "'", $eo);
		if(!($row = db_fetch_array($res))) {
			return error_message($Translation['No records found'], 'agent_view.php', false);
		}
		$urow = $row; /* unsanitized data */
		$row = array_map('safe_html', $row);
	} else {
	}

	ob_start();
	?>

	<script>
		// initial lookup values

		jQuery(function() {
			setTimeout(function() {
			}, 50); /* we need to slightly delay client-side execution of the above code to allow AppGini.ajaxCache to work */
		});
	</script>
	<?php

	$lookups = str_replace('__RAND__', $rnd1, ob_get_contents());
	ob_end_clean();


	// code for template based detail view forms

	// open the detail view template
	if($dvprint) {
		$template_file = is_file("./{$TemplateDVP}") ? "./{$TemplateDVP}" : './templates/agent_templateDVP.html';
		$templateCode = @file_get_contents($template_file);
	} else {
		$template_file = is_file("./{$TemplateDV}") ? "./{$TemplateDV}" : './templates/agent_templateDV.html';
		$templateCode = @file_get_contents($template_file);
	}

	// process form title
	$templateCode = str_replace('<%%DETAIL_VIEW_TITLE%%>', 'Order details', $templateCode);
	$templateCode = str_replace('<%%RND1%%>', $rnd1, $templateCode);
	$templateCode = str_replace('<%%EMBEDDED%%>', ($_REQUEST['Embedded'] ? 'Embedded=1' : ''), $templateCode);
	// process buttons
	if($arrPerm[1] && !$selected_id) { // allow insert and no record selected?
		if(!$selected_id) $templateCode = str_replace('<%%INSERT_BUTTON%%>', '<button type="submit" class="btn btn-success" id="insert" name="insert_x" value="1" onclick="return agent_validateData();"><i class="glyphicon glyphicon-plus-sign"></i> ' . $Translation['Save New'] . '</button>', $templateCode);
		$templateCode = str_replace('<%%INSERT_BUTTON%%>', '<button type="submit" class="btn btn-default" id="insert" name="insert_x" value="1" onclick="return agent_validateData();"><i class="glyphicon glyphicon-plus-sign"></i> ' . $Translation['Save As Copy'] . '</button>', $templateCode);
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
			$templateCode = str_replace('<%%UPDATE_BUTTON%%>', '<button type="submit" class="btn btn-success btn-lg" id="update" name="update_x" value="1" onclick="return agent_validateData();" title="' . html_attr($Translation['Save Changes']) . '"><i class="glyphicon glyphicon-ok"></i> ' . $Translation['Save Changes'] . '</button>', $templateCode);
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
	if(($selected_id && !$AllowUpdate) || (!$selected_id && !$AllowInsert)) {
		$jsReadOnly = '';
		$jsReadOnly .= "\tjQuery('#first_name').replaceWith('<div class=\"form-control-static\" id=\"first_name\">' + (jQuery('#first_name').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#last_name').replaceWith('<div class=\"form-control-static\" id=\"last_name\">' + (jQuery('#last_name').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#email').replaceWith('<div class=\"form-control-static\" id=\"email\">' + (jQuery('#email').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#email, #email-edit-link').hide();\n";
		$jsReadOnly .= "\tjQuery('#phone').replaceWith('<div class=\"form-control-static\" id=\"phone\">' + (jQuery('#phone').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#address').replaceWith('<div class=\"form-control-static\" id=\"address\">' + (jQuery('#address').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#station').replaceWith('<div class=\"form-control-static\" id=\"station\">' + (jQuery('#station').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#zone').replaceWith('<div class=\"form-control-static\" id=\"zone\">' + (jQuery('#zone').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('.select2-container').hide();\n";

		$noUploads = true;
	} elseif(($AllowInsert && !$selected_id) || ($AllowUpdate && $selected_id)) {
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
	$templateCode = str_replace('<%%UPLOADFILE(first_name)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(last_name)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(email)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(phone)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(address)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(id)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(station)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(zone)%%>', '', $templateCode);

	// process values
	if($selected_id) {
		if( $dvprint) $templateCode = str_replace('<%%VALUE(first_name)%%>', safe_html($urow['first_name']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(first_name)%%>', html_attr($row['first_name']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(first_name)%%>', urlencode($urow['first_name']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(last_name)%%>', safe_html($urow['last_name']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(last_name)%%>', html_attr($row['last_name']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(last_name)%%>', urlencode($urow['last_name']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(email)%%>', safe_html($urow['email']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(email)%%>', html_attr($row['email']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(email)%%>', urlencode($urow['email']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(phone)%%>', safe_html($urow['phone']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(phone)%%>', html_attr($row['phone']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(phone)%%>', urlencode($urow['phone']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(address)%%>', safe_html($urow['address']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(address)%%>', html_attr($row['address']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(address)%%>', urlencode($urow['address']), $templateCode);
		$templateCode = str_replace('<%%VALUE(id)%%>', safe_html($urow['id']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(id)%%>', urlencode($urow['id']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(station)%%>', safe_html($urow['station']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(station)%%>', html_attr($row['station']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(station)%%>', urlencode($urow['station']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(zone)%%>', safe_html($urow['zone']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(zone)%%>', html_attr($row['zone']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(zone)%%>', urlencode($urow['zone']), $templateCode);
	} else {
		$templateCode = str_replace('<%%VALUE(first_name)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(first_name)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(last_name)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(last_name)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(email)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(email)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(phone)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(phone)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(address)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(address)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(id)%%>', 'AGENT<%%creationTimestamp%%>', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(id)%%>', urlencode('AGENT<%%creationTimestamp%%>'), $templateCode);
		$templateCode = str_replace('<%%VALUE(station)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(station)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(zone)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(zone)%%>', urlencode(''), $templateCode);
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
			$templateCode.="\n\tif(document.getElementById('emailEdit')) { document.getElementById('emailEdit').style.display='inline'; }";
			$templateCode.="\n\tif(document.getElementById('emailEditLink')) { document.getElementById('emailEditLink').style.display='none'; }";
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
	$rdata = $jdata = get_defaults('agent');
	if($selected_id) {
		$jdata = get_joined_record('agent', $selected_id);
		if($jdata === false) $jdata = get_defaults('agent');
		$rdata = $row;
	}
	$templateCode .= loadView('agent-ajax-cache', array('rdata' => $rdata, 'jdata' => $jdata));

	// hook: agent_dv
	if(function_exists('agent_dv')) {
		$args=[];
		agent_dv(($selected_id ? $selected_id : FALSE), getMemberInfo(), $templateCode, $args);
	}

	return $templateCode;
}