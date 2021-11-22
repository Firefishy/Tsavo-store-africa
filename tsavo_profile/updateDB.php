<?php
	// check this file's MD5 to make sure it wasn't called before
	$prevMD5 = @file_get_contents(dirname(__FILE__) . '/setup.md5');
	$thisMD5 = md5(@file_get_contents(dirname(__FILE__) . '/updateDB.php'));

	// check if setup already run
	if($thisMD5 != $prevMD5) {
		// $silent is set if this file is included from setup.php
		if(!isset($silent)) $silent = true;

		// set up tables
		setupTable(
			'staff', " 
			CREATE TABLE IF NOT EXISTS `staff` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`profile_photo` VARCHAR(40) NULL,
				`first_name` VARCHAR(40) NULL,
				`last_name` VARCHAR(40) NULL,
				`position` VARCHAR(40) NULL,
				`details` TEXT NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'board_member', " 
			CREATE TABLE IF NOT EXISTS `board_member` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`profile_photo` VARCHAR(40) NULL,
				`first_name` VARCHAR(40) NULL,
				`last_name` VARCHAR(40) NULL,
				`position` VARCHAR(40) NULL,
				`details` TEXT NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'about_us', " 
			CREATE TABLE IF NOT EXISTS `about_us` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`main_head` VARCHAR(40) NULL,
				`main_head_content` TEXT NULL,
				`section_2` VARCHAR(40) NULL,
				`a_head` VARCHAR(40) NULL,
				`a_subhead` VARCHAR(40) NULL,
				`a_content` TEXT NULL,
				`b_head` VARCHAR(40) NULL,
				`b_subhead` VARCHAR(40) NULL,
				`b_content` TEXT NULL,
				`c_head` VARCHAR(40) NULL,
				`c_subhead` VARCHAR(40) NULL,
				`c_content` TEXT NULL,
				`section_3` VARCHAR(40) NULL,
				`a2_head` VARCHAR(40) NULL,
				`a2_content` TEXT NULL,
				`a2_head_1` VARCHAR(40) NULL,
				`a2_content_1` TEXT NULL,
				`a2_head_2` VARCHAR(40) NULL,
				`a2_content_2` TEXT NULL,
				`a2_head_3` VARCHAR(40) NULL,
				`a2_content_3` TEXT NULL,
				`section_4` VARCHAR(40) NULL,
				`a3_mainhead` VARCHAR(40) NULL,
				`a3_head` VARCHAR(40) NULL,
				`a3_content` VARCHAR(200) NULL,
				`a3_head_1` VARCHAR(40) NULL,
				`a3_content_1` VARCHAR(200) NULL,
				`a3_head_2` VARCHAR(40) NULL,
				`a3_content_2` VARCHAR(200) NULL,
				`a3_head_3` VARCHAR(40) NULL,
				`a3_content_3` VARCHAR(200) NULL
			) CHARSET utf8",
			$silent, [
				" ALTER TABLE `about_us` CHANGE `main_head_content` `main_head_content` TEXT NULL ",
				" ALTER TABLE `about_us` CHANGE `a_content` `a_content` TEXT NULL ",
				" ALTER TABLE `about_us` CHANGE `b_content` `b_content` TEXT NULL ",
				" ALTER TABLE `about_us` CHANGE `c_content` `c_content` TEXT NULL ",
				" ALTER TABLE `about_us` CHANGE `a2_content` `a2_content` VARCHAR(200) NULL ",
				" ALTER TABLE `about_us` CHANGE `a2_content_1` `a2_content_1` VARCHAR(200) NULL ",
				" ALTER TABLE `about_us` CHANGE `a2_content_2` `a2_content_2` VARCHAR(200) NULL ",
				" ALTER TABLE `about_us` CHANGE `a2_content` `a2_content` TEXT NULL ",
				" ALTER TABLE `about_us` CHANGE `a2_content_1` `a2_content_1` TEXT NULL ",
				" ALTER TABLE `about_us` CHANGE `a2_content_2` `a2_content_2` TEXT NULL ",
				" ALTER TABLE `about_us` CHANGE `a2_content_3` `a2_content_3` TEXT NULL ",
				" ALTER TABLE `about_us` CHANGE `a3_content` `a3_content` VARCHAR(200) NULL ",
				" ALTER TABLE `about_us` CHANGE `a3_content_1` `a3_content_1` VARCHAR(200) NULL ",
				" ALTER TABLE `about_us` CHANGE `a3_content_2` `a3_content_2` VARCHAR(200) NULL ",
				" ALTER TABLE `about_us` CHANGE `a3_content_3` `a3_content_3` VARCHAR(200) NULL ",
			]
		);

		setupTable(
			'privacy_policy', " 
			CREATE TABLE IF NOT EXISTS `privacy_policy` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`main_head` VARCHAR(40) NULL,
				`main_head_content` TEXT NULL,
				`sub_head1` VARCHAR(40) NULL,
				`head_1` TEXT NULL,
				`sub_head2` VARCHAR(40) NULL,
				`head_2` TEXT NULL,
				`sub_head3` VARCHAR(40) NULL,
				`head_3` TEXT NULL,
				`sub_head4` VARCHAR(40) NULL,
				`head_4` TEXT NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'terms_conditions', " 
			CREATE TABLE IF NOT EXISTS `terms_conditions` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`main_head` VARCHAR(40) NULL,
				`main_head_content` TEXT NULL,
				`sub_head1` VARCHAR(40) NULL,
				`head_1` TEXT NULL,
				`sub_head2` VARCHAR(40) NULL,
				`head_2` TEXT NULL,
				`sub_head3` VARCHAR(40) NULL,
				`head_3` TEXT NULL,
				`sub_head4` VARCHAR(40) NULL,
				`head_4` TEXT NULL
			) CHARSET utf8",
			$silent
		);

		setupTable(
			'return_policy', " 
			CREATE TABLE IF NOT EXISTS `return_policy` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`main_head` VARCHAR(40) NULL,
				`main_head_content` TEXT NULL,
				`sub_head1` VARCHAR(40) NULL,
				`head_1` TEXT NULL,
				`sub_head2` VARCHAR(40) NULL,
				`head_2` TEXT NULL,
				`sub_head3` VARCHAR(40) NULL,
				`head_3` TEXT NULL,
				`sub_head4` VARCHAR(40) NULL,
				`head_4` TEXT NULL
			) CHARSET utf8",
			$silent
		);



		// save MD5
		@file_put_contents(dirname(__FILE__) . '/setup.md5', $thisMD5);
	}


	function setupIndexes($tableName, $arrFields) {
		if(!is_array($arrFields) || !count($arrFields)) return false;

		foreach($arrFields as $fieldName) {
			if(!$res = @db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")) continue;
			if(!$row = @db_fetch_assoc($res)) continue;
			if($row['Key']) continue;

			@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
		}
	}


	function setupTable($tableName, $createSQL = '', $silent = true, $arrAlter = '') {
		global $Translation;
		$oldTableName = '';
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)) {
			$matches = [];
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/i", $arrAlter[0], $matches)) {
				$oldTableName = $matches[1];
			}
		}

		if($res = @db_query("SELECT COUNT(1) FROM `$tableName`")) { // table already exists
			if($row = @db_fetch_array($res)) {
				echo str_replace(['<TableName>', '<NumRecords>'], [$tableName, $row[0]], $Translation['table exists']);
				if(is_array($arrAlter)) {
					echo '<br>';
					foreach($arrAlter as $alter) {
						if($alter != '') {
							echo "$alter ... ";
							if(!@db_query($alter)) {
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							} else {
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				} else {
					echo $Translation['table uptodate'];
				}
			} else {
				echo str_replace('<TableName>', $tableName, $Translation['couldnt count']);
			}
		} else { // given tableName doesn't exist

			if($oldTableName != '') { // if we have a table rename query
				if($ro = @db_query("SELECT COUNT(1) FROM `$oldTableName`")) { // if old table exists, rename it.
					$renameQuery = array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)) {
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					} else {
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				} else { // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			} else { // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)) {
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';
				} else {
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}
		}

		echo '</div>';

		$out = ob_get_clean();
		if(!$silent) echo $out;
	}
