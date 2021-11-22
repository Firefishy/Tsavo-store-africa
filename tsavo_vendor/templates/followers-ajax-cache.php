<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'followers';

		/* data for selected record, or defaults if none is selected */
		var data = {
			userid: <?php echo json_encode(array('id' => $rdata['userid'], 'value' => $rdata['userid'], 'text' => $jdata['userid'])); ?>,
			f_fname: <?php echo json_encode($jdata['f_fname']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for userid */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'userid' && d.id == data.userid.id)
				return { results: [ data.userid ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for userid autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'userid' && d.id == data.userid.id) {
				$j('#f_fname' + d[rnd]).html(data.f_fname);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

