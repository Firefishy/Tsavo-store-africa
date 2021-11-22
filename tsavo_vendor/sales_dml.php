<?php

// Data functions (insert, update, delete, form) for table sales

// This script and data application were generated by AppGini 5.96
// Download AppGini for free from https://bigprof.com/appgini/download/

function sales_insert(&$error_message = '') {
	global $Translation;

	// mm: can member insert record?
	$arrPerm = getTablePermissions('sales');
	if(!$arrPerm['insert']) return false;

	$data = [
		'first_name' => Request::lookup('user_id'),
		'last_name' => Request::lookup('user_id'),
		'email' => Request::lookup('user_id'),
		'phone' => Request::lookup('user_id'),
		'address' => Request::lookup('user_id'),
		'zone' => Request::lookup('user_id'),
		'zone_fee' => Request::lookup('user_id'),
		'approval' => Request::val('approval', 'Not Approved'),
	];


	// hook: sales_before_insert
	if(function_exists('sales_before_insert')) {
		$args = [];
		if(!sales_before_insert($data, getMemberInfo(), $args)) {
			if(isset($args['error_message'])) $error_message = $args['error_message'];
			return false;
		}
	}

	$error = '';
	// set empty fields to NULL
	$data = array_map(function($v) { return ($v === '' ? NULL : $v); }, $data);
	insert('sales', backtick_keys_once($data), $error);
	if($error)
		die("{$error}<br><a href=\"#\" onclick=\"history.go(-1);\">{$Translation['< back']}</a>");

	$recID = db_insert_id(db_link());

	// automatic user_id if passed as filterer
	if($_REQUEST['filterer_user_id']) {
		sql("UPDATE `sales` SET `user_id`='" . makeSafe($_REQUEST['filterer_user_id']) . "' WHERE `id`='" . makeSafe($recID, false) . "'", $eo);
	}

	update_calc_fields('sales', $recID, calculated_fields()['sales']);

	// hook: sales_after_insert
	if(function_exists('sales_after_insert')) {
		$res = sql("SELECT * FROM `sales` WHERE `id`='" . makeSafe($recID, false) . "' LIMIT 1", $eo);
		if($row = db_fetch_assoc($res)) {
			$data = array_map('makeSafe', $row);
		}
		$data['selectedID'] = makeSafe($recID, false);
		$args=[];
		if(!sales_after_insert($data, getMemberInfo(), $args)) { return $recID; }
	}

	// mm: save ownership data
	set_record_owner('sales', $recID, getLoggedMemberID());

	// if this record is a copy of another record, copy children if applicable
	if(!empty($_REQUEST['SelectedID'])) sales_copy_children($recID, $_REQUEST['SelectedID']);

	return $recID;
}

function sales_copy_children($destination_id, $source_id) {
	global $Translation;
	$requests = []; // array of curl handlers for launching insert requests
	$eo = ['silentErrors' => true];
	$safe_sid = makeSafe($source_id);

	// launch requests, asynchronously
	curl_batch($requests);
}

function sales_delete($selected_id, $AllowDeleteOfParents = false, $skipChecks = false) {
	// insure referential integrity ...
	global $Translation;
	$selected_id = makeSafe($selected_id);

	// mm: can member delete record?
	if(!check_record_permission('sales', $selected_id, 'delete')) {
		return $Translation['You don\'t have enough permissions to delete this record'];
	}

	// hook: sales_before_delete
	if(function_exists('sales_before_delete')) {
		$args = [];
		if(!sales_before_delete($selected_id, $skipChecks, getMemberInfo(), $args))
			return $Translation['Couldn\'t delete this record'] . (
				!empty($args['error_message']) ?
					'<div class="text-bold">' . strip_tags($args['error_message']) . '</div>'
					: '' 
			);
	}

	// child table: details
	$res = sql("SELECT `id` FROM `sales` WHERE `id`='{$selected_id}'", $eo);
	$id = db_fetch_row($res);
	$rires = sql("SELECT COUNT(1) FROM `details` WHERE `sales_id`='" . makeSafe($id[0]) . "'", $eo);
	$rirow = db_fetch_row($rires);
	if($rirow[0] && !$AllowDeleteOfParents && !$skipChecks) {
		$RetMsg = $Translation["couldn't delete"];
		$RetMsg = str_replace('<RelatedRecords>', $rirow[0], $RetMsg);
		$RetMsg = str_replace('<TableName>', 'details', $RetMsg);
		return $RetMsg;
	} elseif($rirow[0] && $AllowDeleteOfParents && !$skipChecks) {
		$RetMsg = $Translation['confirm delete'];
		$RetMsg = str_replace('<RelatedRecords>', $rirow[0], $RetMsg);
		$RetMsg = str_replace('<TableName>', 'details', $RetMsg);
		$RetMsg = str_replace('<Delete>', '<input type="button" class="button" value="' . $Translation['yes'] . '" onClick="window.location = \'sales_view.php?SelectedID=' . urlencode($selected_id) . '&delete_x=1&confirmed=1\';">', $RetMsg);
		$RetMsg = str_replace('<Cancel>', '<input type="button" class="button" value="' . $Translation[ 'no'] . '" onClick="window.location = \'sales_view.php?SelectedID=' . urlencode($selected_id) . '\';">', $RetMsg);
		return $RetMsg;
	}

	// child table: agent_monitor
	$res = sql("SELECT `id` FROM `sales` WHERE `id`='{$selected_id}'", $eo);
	$id = db_fetch_row($res);
	$rires = sql("SELECT COUNT(1) FROM `agent_monitor` WHERE `pay_number`='" . makeSafe($id[0]) . "'", $eo);
	$rirow = db_fetch_row($rires);
	if($rirow[0] && !$AllowDeleteOfParents && !$skipChecks) {
		$RetMsg = $Translation["couldn't delete"];
		$RetMsg = str_replace('<RelatedRecords>', $rirow[0], $RetMsg);
		$RetMsg = str_replace('<TableName>', 'agent_monitor', $RetMsg);
		return $RetMsg;
	} elseif($rirow[0] && $AllowDeleteOfParents && !$skipChecks) {
		$RetMsg = $Translation['confirm delete'];
		$RetMsg = str_replace('<RelatedRecords>', $rirow[0], $RetMsg);
		$RetMsg = str_replace('<TableName>', 'agent_monitor', $RetMsg);
		$RetMsg = str_replace('<Delete>', '<input type="button" class="button" value="' . $Translation['yes'] . '" onClick="window.location = \'sales_view.php?SelectedID=' . urlencode($selected_id) . '&delete_x=1&confirmed=1\';">', $RetMsg);
		$RetMsg = str_replace('<Cancel>', '<input type="button" class="button" value="' . $Translation[ 'no'] . '" onClick="window.location = \'sales_view.php?SelectedID=' . urlencode($selected_id) . '\';">', $RetMsg);
		return $RetMsg;
	}

	sql("DELETE FROM `sales` WHERE `id`='{$selected_id}'", $eo);

	// hook: sales_after_delete
	if(function_exists('sales_after_delete')) {
		$args = [];
		sales_after_delete($selected_id, getMemberInfo(), $args);
	}

	// mm: delete ownership data
	sql("DELETE FROM `membership_userrecords` WHERE `tableName`='sales' AND `pkValue`='{$selected_id}'", $eo);
}

function sales_update(&$selected_id, &$error_message = '') {
	global $Translation;

	// mm: can member edit record?
	if(!check_record_permission('sales', $selected_id, 'edit')) return false;

	$data = [
		'first_name' => Request::lookup('user_id'),
		'last_name' => Request::lookup('user_id'),
		'email' => Request::lookup('user_id'),
		'phone' => Request::lookup('user_id'),
		'address' => Request::lookup('user_id'),
		'zone' => Request::lookup('user_id'),
		'zone_fee' => Request::lookup('user_id'),
		'generated_by' => parseCode('<%%editorUsername%%>', false),
		'confirmation_id' => parseCode('<%%editingTimestamp%%>', false),
		'approval' => Request::val('approval', ''),
	];

	// get existing values
	$old_data = getRecord('sales', $selected_id);
	if(is_array($old_data)) {
		$old_data = array_map('makeSafe', $old_data);
		$old_data['selectedID'] = makeSafe($selected_id);
	}

	$data['selectedID'] = makeSafe($selected_id);

	// hook: sales_before_update
	if(function_exists('sales_before_update')) {
		$args = ['old_data' => $old_data];
		if(!sales_before_update($data, getMemberInfo(), $args)) {
			if(isset($args['error_message'])) $error_message = $args['error_message'];
			return false;
		}
	}

	$set = $data; unset($set['selectedID']);
	foreach ($set as $field => $value) {
		$set[$field] = ($value !== '' && $value !== NULL) ? $value : NULL;
	}

	if(!update(
		'sales', 
		backtick_keys_once($set), 
		['`id`' => $selected_id], 
		$error_message
	)) {
		echo $error_message;
		echo '<a href="sales_view.php?SelectedID=' . urlencode($selected_id) . "\">{$Translation['< back']}</a>";
		exit;
	}


	$eo = ['silentErrors' => true];

	update_calc_fields('sales', $data['selectedID'], calculated_fields()['sales']);

	// hook: sales_after_update
	if(function_exists('sales_after_update')) {
		$res = sql("SELECT * FROM `sales` WHERE `id`='{$data['selectedID']}' LIMIT 1", $eo);
		if($row = db_fetch_assoc($res)) $data = array_map('makeSafe', $row);

		$data['selectedID'] = $data['id'];
		$args = ['old_data' => $old_data];
		if(!sales_after_update($data, getMemberInfo(), $args)) return;
	}

	// mm: update ownership data
	sql("UPDATE `membership_userrecords` SET `dateUpdated`='" . time() . "' WHERE `tableName`='sales' AND `pkValue`='" . makeSafe($selected_id) . "'", $eo);
}

function sales_form($selected_id = '', $AllowUpdate = 1, $AllowInsert = 1, $AllowDelete = 1, $ShowCancel = 0, $TemplateDV = '', $TemplateDVP = '') {
	// function to return an editable form for a table records
	// and fill it with data of record whose ID is $selected_id. If $selected_id
	// is empty, an empty form is shown, with only an 'Add New'
	// button displayed.

	global $Translation;

	// mm: get table permissions
	$arrPerm = getTablePermissions('sales');
	if(!$arrPerm['insert'] && $selected_id=='') return $Translation['tableAccessDenied'];
	$AllowInsert = ($arrPerm['insert'] ? true : false);
	// print preview?
	$dvprint = false;
	if($selected_id && $_REQUEST['dvprint_x'] != '') {
		$dvprint = true;
	}

	$filterer_user_id = thisOr($_REQUEST['filterer_user_id'], '');

	// populate filterers, starting from children to grand-parents

	// unique random identifier
	$rnd1 = ($dvprint ? rand(1000000, 9999999) : '');
	// combobox: user_id
	$combo_user_id = new DataCombo;
	// combobox: sales_day
	$combo_sales_day = new DateCombo;
	$combo_sales_day->DateFormat = "mdy";
	$combo_sales_day->MinYear = 1900;
	$combo_sales_day->MaxYear = 2100;
	$combo_sales_day->DefaultDate = parseMySQLDate('', '');
	$combo_sales_day->MonthNames = $Translation['month names'];
	$combo_sales_day->NamePrefix = 'sales_day';
	// combobox: approval
	$combo_approval = new Combo;
	$combo_approval->ListType = 0;
	$combo_approval->MultipleSeparator = ', ';
	$combo_approval->ListBoxHeight = 10;
	$combo_approval->RadiosPerLine = 1;
	if(is_file(dirname(__FILE__).'/hooks/sales.approval.csv')) {
		$approval_data = addslashes(implode('', @file(dirname(__FILE__).'/hooks/sales.approval.csv')));
		$combo_approval->ListItem = explode('||', entitiesToUTF8(convertLegacyOptions($approval_data)));
		$combo_approval->ListData = $combo_approval->ListItem;
	} else {
		$combo_approval->ListItem = explode('||', entitiesToUTF8(convertLegacyOptions("Not Approved;;Approved;;Pending Approval")));
		$combo_approval->ListData = $combo_approval->ListItem;
	}
	$combo_approval->SelectName = 'approval';

	if($selected_id) {
		// mm: check member permissions
		if(!$arrPerm['view']) return $Translation['tableAccessDenied'];

		// mm: who is the owner?
		$ownerGroupID = sqlValue("SELECT `groupID` FROM `membership_userrecords` WHERE `tableName`='sales' AND `pkValue`='" . makeSafe($selected_id) . "'");
		$ownerMemberID = sqlValue("SELECT LCASE(`memberID`) FROM `membership_userrecords` WHERE `tableName`='sales' AND `pkValue`='" . makeSafe($selected_id) . "'");

		if($arrPerm['view'] == 1 && getLoggedMemberID() != $ownerMemberID) return $Translation['tableAccessDenied'];
		if($arrPerm['view'] == 2 && getLoggedGroupID() != $ownerGroupID) return $Translation['tableAccessDenied'];

		// can edit?
		$AllowUpdate = 0;
		if(($arrPerm['edit'] == 1 && $ownerMemberID == getLoggedMemberID()) || ($arrPerm['edit'] == 2 && $ownerGroupID == getLoggedGroupID()) || $arrPerm['edit'] == 3) {
			$AllowUpdate = 1;
		}

		$res = sql("SELECT * FROM `sales` WHERE `id`='" . makeSafe($selected_id) . "'", $eo);
		if(!($row = db_fetch_array($res))) {
			return error_message($Translation['No records found'], 'sales_view.php', false);
		}
		$combo_user_id->SelectedData = $row['user_id'];
		$combo_sales_day->DefaultDate = $row['sales_day'];
		$combo_approval->SelectedData = $row['approval'];
		$urow = $row; /* unsanitized data */
		$row = array_map('safe_html', $row);
	} else {
		$combo_user_id->SelectedData = $filterer_user_id;
		$combo_approval->SelectedText = ( $_REQUEST['FilterField'][1] == '14' && $_REQUEST['FilterOperator'][1] == '<=>' ? $_REQUEST['FilterValue'][1] : 'Not Approved');
	}
	$combo_user_id->HTML = '<span id="user_id-container' . $rnd1 . '"></span><input type="hidden" name="user_id" id="user_id' . $rnd1 . '" value="' . html_attr($combo_user_id->SelectedData) . '">';
	$combo_user_id->MatchText = '<span id="user_id-container-readonly' . $rnd1 . '"></span><input type="hidden" name="user_id" id="user_id' . $rnd1 . '" value="' . html_attr($combo_user_id->SelectedData) . '">';
	$combo_approval->Render();

	ob_start();
	?>

	<script>
		// initial lookup values
		AppGini.current_user_id__RAND__ = { text: "", value: "<?php echo addslashes($selected_id ? $urow['user_id'] : htmlspecialchars($filterer_user_id, ENT_QUOTES)); ?>"};

		jQuery(function() {
			setTimeout(function() {
				if(typeof(user_id_reload__RAND__) == 'function') user_id_reload__RAND__();
			}, 50); /* we need to slightly delay client-side execution of the above code to allow AppGini.ajaxCache to work */
		});
		function user_id_reload__RAND__() {
		<?php if(($AllowUpdate || $AllowInsert) && !$dvprint) { ?>

			$j("#user_id-container__RAND__").select2({
				/* initial default value */
				initSelection: function(e, c) {
					$j.ajax({
						url: 'ajax_combo.php',
						dataType: 'json',
						data: { id: AppGini.current_user_id__RAND__.value, t: 'sales', f: 'user_id' },
						success: function(resp) {
							c({
								id: resp.results[0].id,
								text: resp.results[0].text
							});
							$j('[name="user_id"]').val(resp.results[0].id);
							$j('[id=user_id-container-readonly__RAND__]').html('<span id="user_id-match-text">' + resp.results[0].text + '</span>');
							if(resp.results[0].id == '<?php echo empty_lookup_value; ?>') { $j('.btn[id=users_view_parent]').hide(); } else { $j('.btn[id=users_view_parent]').show(); }


							if(typeof(user_id_update_autofills__RAND__) == 'function') user_id_update_autofills__RAND__();
						}
					});
				},
				width: '100%',
				formatNoMatches: function(term) { return '<?php echo addslashes($Translation['No matches found!']); ?>'; },
				minimumResultsForSearch: 5,
				loadMorePadding: 200,
				ajax: {
					url: 'ajax_combo.php',
					dataType: 'json',
					cache: true,
					data: function(term, page) { return { s: term, p: page, t: 'sales', f: 'user_id' }; },
					results: function(resp, page) { return resp; }
				},
				escapeMarkup: function(str) { return str; }
			}).on('change', function(e) {
				AppGini.current_user_id__RAND__.value = e.added.id;
				AppGini.current_user_id__RAND__.text = e.added.text;
				$j('[name="user_id"]').val(e.added.id);
				if(e.added.id == '<?php echo empty_lookup_value; ?>') { $j('.btn[id=users_view_parent]').hide(); } else { $j('.btn[id=users_view_parent]').show(); }


				if(typeof(user_id_update_autofills__RAND__) == 'function') user_id_update_autofills__RAND__();
			});

			if(!$j("#user_id-container__RAND__").length) {
				$j.ajax({
					url: 'ajax_combo.php',
					dataType: 'json',
					data: { id: AppGini.current_user_id__RAND__.value, t: 'sales', f: 'user_id' },
					success: function(resp) {
						$j('[name="user_id"]').val(resp.results[0].id);
						$j('[id=user_id-container-readonly__RAND__]').html('<span id="user_id-match-text">' + resp.results[0].text + '</span>');
						if(resp.results[0].id == '<?php echo empty_lookup_value; ?>') { $j('.btn[id=users_view_parent]').hide(); } else { $j('.btn[id=users_view_parent]').show(); }

						if(typeof(user_id_update_autofills__RAND__) == 'function') user_id_update_autofills__RAND__();
					}
				});
			}

		<?php } else { ?>

			$j.ajax({
				url: 'ajax_combo.php',
				dataType: 'json',
				data: { id: AppGini.current_user_id__RAND__.value, t: 'sales', f: 'user_id' },
				success: function(resp) {
					$j('[id=user_id-container__RAND__], [id=user_id-container-readonly__RAND__]').html('<span id="user_id-match-text">' + resp.results[0].text + '</span>');
					if(resp.results[0].id == '<?php echo empty_lookup_value; ?>') { $j('.btn[id=users_view_parent]').hide(); } else { $j('.btn[id=users_view_parent]').show(); }

					if(typeof(user_id_update_autofills__RAND__) == 'function') user_id_update_autofills__RAND__();
				}
			});
		<?php } ?>

		}
	</script>
	<?php

	$lookups = str_replace('__RAND__', $rnd1, ob_get_contents());
	ob_end_clean();


	// code for template based detail view forms

	// open the detail view template
	if($dvprint) {
		$template_file = is_file("./{$TemplateDVP}") ? "./{$TemplateDVP}" : './templates/sales_templateDVP.html';
		$templateCode = @file_get_contents($template_file);
	} else {
		$template_file = is_file("./{$TemplateDV}") ? "./{$TemplateDV}" : './templates/sales_templateDV.html';
		$templateCode = @file_get_contents($template_file);
	}

	// process form title
	$templateCode = str_replace('<%%DETAIL_VIEW_TITLE%%>', 'TSAVO SELLERS', $templateCode);
	$templateCode = str_replace('<%%RND1%%>', $rnd1, $templateCode);
	$templateCode = str_replace('<%%EMBEDDED%%>', ($_REQUEST['Embedded'] ? 'Embedded=1' : ''), $templateCode);
	// process buttons
	if($AllowInsert) {
		if(!$selected_id) $templateCode = str_replace('<%%INSERT_BUTTON%%>', '<button type="submit" class="btn btn-success" id="insert" name="insert_x" value="1" onclick="return sales_validateData();"><i class="glyphicon glyphicon-plus-sign"></i> ' . $Translation['Save New'] . '</button>', $templateCode);
		$templateCode = str_replace('<%%INSERT_BUTTON%%>', '<button type="submit" class="btn btn-default" id="insert" name="insert_x" value="1" onclick="return sales_validateData();"><i class="glyphicon glyphicon-plus-sign"></i> ' . $Translation['Save As Copy'] . '</button>', $templateCode);
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
			$templateCode = str_replace('<%%UPDATE_BUTTON%%>', '<button type="submit" class="btn btn-success btn-lg" id="update" name="update_x" value="1" onclick="return sales_validateData();" title="' . html_attr($Translation['Save Changes']) . '"><i class="glyphicon glyphicon-ok"></i> ' . $Translation['Save Changes'] . '</button>', $templateCode);
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
		$jsReadOnly .= "\tjQuery('#approval').replaceWith('<div class=\"form-control-static\" id=\"approval\">' + (jQuery('#approval').val() || '') + '</div>'); jQuery('#approval-multi-selection-help').hide();\n";
		$jsReadOnly .= "\tjQuery('.select2-container').hide();\n";

		$noUploads = true;
	} elseif($AllowInsert) {
		$jsEditable = "\tjQuery('form').eq(0).data('already_changed', true);"; // temporarily disable form change handler
		$jsEditable .= "\tjQuery('form').eq(0).data('already_changed', false);"; // re-enable form change handler
	}

	// process combos
	$templateCode = str_replace('<%%COMBO(user_id)%%>', $combo_user_id->HTML, $templateCode);
	$templateCode = str_replace('<%%COMBOTEXT(user_id)%%>', $combo_user_id->MatchText, $templateCode);
	$templateCode = str_replace('<%%URLCOMBOTEXT(user_id)%%>', urlencode($combo_user_id->MatchText), $templateCode);
	$templateCode = str_replace('<%%COMBO(sales_day)%%>', ($selected_id && !$arrPerm[3] ? '<div class="form-control-static">' . $combo_sales_day->GetHTML(true) . '</div>' : $combo_sales_day->GetHTML()), $templateCode);
	$templateCode = str_replace('<%%COMBOTEXT(sales_day)%%>', $combo_sales_day->GetHTML(true), $templateCode);
	$templateCode = str_replace('<%%COMBO(approval)%%>', $combo_approval->HTML, $templateCode);
	$templateCode = str_replace('<%%COMBOTEXT(approval)%%>', $combo_approval->SelectedData, $templateCode);

	/* lookup fields array: 'lookup field name' => array('parent table name', 'lookup field caption') */
	$lookup_fields = array('user_id' => array('users', 'Buyer id'), );
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
	$templateCode = str_replace('<%%UPLOADFILE(user_id)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(pay_id)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(sales_day)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(generated_by)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(confirmation_id)%%>', '', $templateCode);
	$templateCode = str_replace('<%%UPLOADFILE(approval)%%>', '', $templateCode);

	// process values
	if($selected_id) {
		if( $dvprint) $templateCode = str_replace('<%%VALUE(id)%%>', safe_html($urow['id']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(id)%%>', html_attr($row['id']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(id)%%>', urlencode($urow['id']), $templateCode);
		$templateCode = str_replace('<%%VALUE(user_id)%%>', safe_html($urow['user_id']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(user_id)%%>', urlencode($urow['user_id']), $templateCode);
		$templateCode = str_replace('<%%VALUE(pay_id)%%>', safe_html($urow['pay_id']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(pay_id)%%>', urlencode($urow['pay_id']), $templateCode);
		$templateCode = str_replace('<%%VALUE(sales_day)%%>', @date('m/d/Y', @strtotime(html_attr($row['sales_day']))), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sales_day)%%>', urlencode(@date('m/d/Y', @strtotime(html_attr($urow['sales_day'])))), $templateCode);
		$templateCode = str_replace('<%%VALUE(generated_by)%%>', safe_html($urow['generated_by']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(generated_by)%%>', urlencode($urow['generated_by']), $templateCode);
		$templateCode = str_replace('<%%VALUE(confirmation_id)%%>', safe_html($urow['confirmation_id']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(confirmation_id)%%>', urlencode($urow['confirmation_id']), $templateCode);
		if( $dvprint) $templateCode = str_replace('<%%VALUE(approval)%%>', safe_html($urow['approval']), $templateCode);
		if(!$dvprint) $templateCode = str_replace('<%%VALUE(approval)%%>', html_attr($row['approval']), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(approval)%%>', urlencode($urow['approval']), $templateCode);
	} else {
		$templateCode = str_replace('<%%VALUE(id)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(id)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(user_id)%%>', ( $_REQUEST['FilterField'][1]=='2' && $_REQUEST['FilterOperator'][1]=='<=>' ? $combo_user_id->SelectedData : ''), $templateCode);
		$templateCode = str_replace('<%%URLVALUE(user_id)%%>', urlencode( $_REQUEST['FilterField'][1]=='2' && $_REQUEST['FilterOperator'][1]=='<=>' ? $combo_user_id->SelectedData : ''), $templateCode);
		$templateCode = str_replace('<%%VALUE(pay_id)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(pay_id)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(sales_day)%%>', '', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(sales_day)%%>', urlencode(''), $templateCode);
		$templateCode = str_replace('<%%VALUE(generated_by)%%>', '<%%editorUsername%%>', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(generated_by)%%>', urlencode('<%%editorUsername%%>'), $templateCode);
		$templateCode = str_replace('<%%VALUE(confirmation_id)%%>', '<%%editingTimestamp%%>', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(confirmation_id)%%>', urlencode('<%%editingTimestamp%%>'), $templateCode);
		$templateCode = str_replace('<%%VALUE(approval)%%>', 'Not Approved', $templateCode);
		$templateCode = str_replace('<%%URLVALUE(approval)%%>', urlencode('Not Approved'), $templateCode);
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

	$templateCode .= "\tuser_id_update_autofills$rnd1 = function() {\n";
	$templateCode .= "\t\t\$j.ajax({\n";
	if($dvprint) {
		$templateCode .= "\t\t\turl: 'sales_autofill.php?rnd1=$rnd1&mfk=user_id&id=' + encodeURIComponent('".addslashes($row['user_id'])."'),\n";
		$templateCode .= "\t\t\tcontentType: 'application/x-www-form-urlencoded; charset=" . datalist_db_encoding . "',\n";
		$templateCode .= "\t\t\ttype: 'GET'\n";
	} else {
		$templateCode .= "\t\t\turl: 'sales_autofill.php?rnd1=$rnd1&mfk=user_id&id=' + encodeURIComponent(AppGini.current_user_id{$rnd1}.value),\n";
		$templateCode .= "\t\t\tcontentType: 'application/x-www-form-urlencoded; charset=" . datalist_db_encoding . "',\n";
		$templateCode .= "\t\t\ttype: 'GET',\n";
		$templateCode .= "\t\t\tbeforeSend: function() { \$j('#user_id$rnd1').prop('disabled', true); \$j('#user_idLoading').html('<img src=loading.gif align=top>'); },\n";
		$templateCode .= "\t\t\tcomplete: function() { " . (($arrPerm[1] || (($arrPerm[3] == 1 && $ownerMemberID == getLoggedMemberID()) || ($arrPerm[3] == 2 && $ownerGroupID == getLoggedGroupID()) || $arrPerm[3] == 3)) ? "\$j('#user_id$rnd1').prop('disabled', false); " : "\$j('#user_id$rnd1').prop('disabled', true); ")."\$j('#user_idLoading').html(''); \$j(window).resize(); }\n";
	}
	$templateCode .= "\t\t});\n";
	$templateCode .= "\t};\n";
	if(!$dvprint) $templateCode .= "\tif(\$j('#user_id_caption').length) \$j('#user_id_caption').click(function() { user_id_update_autofills$rnd1(); });\n";


	$templateCode.="});";
	$templateCode.="</script>";
	$templateCode .= $lookups;

	// handle enforced parent values for read-only lookup fields
	if( $_REQUEST['FilterField'][1]=='2' && $_REQUEST['FilterOperator'][1]=='<=>') {
		$templateCode.="\n<input type=hidden name=user_id value=\"" . html_attr($_REQUEST['FilterValue'][1]) . "\">\n";
	}

	// don't include blank images in lightbox gallery
	$templateCode = preg_replace('/blank.gif" data-lightbox=".*?"/', 'blank.gif"', $templateCode);

	// don't display empty email links
	$templateCode=preg_replace('/<a .*?href="mailto:".*?<\/a>/', '', $templateCode);

	/* default field values */
	$rdata = $jdata = get_defaults('sales');
	if($selected_id) {
		$jdata = get_joined_record('sales', $selected_id);
		if($jdata === false) $jdata = get_defaults('sales');
		$rdata = $row;
	}
	$templateCode .= loadView('sales-ajax-cache', array('rdata' => $rdata, 'jdata' => $jdata));

	// hook: sales_dv
	if(function_exists('sales_dv')) {
		$args=[];
		sales_dv(($selected_id ? $selected_id : FALSE), getMemberInfo(), $templateCode, $args);
	}

	return $templateCode;
}