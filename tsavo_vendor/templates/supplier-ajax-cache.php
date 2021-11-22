<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'supplier';

		/* data for selected record, or defaults if none is selected */
		var data = {
			drop_off_point: <?php echo json_encode(array('id' => $rdata['drop_off_point'], 'value' => $rdata['drop_off_point'], 'text' => $jdata['drop_off_point'])); ?>,
			drop_off_contact: <?php echo json_encode($jdata['drop_off_contact']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for drop_off_point */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'drop_off_point' && d.id == data.drop_off_point.id)
				return { results: [ data.drop_off_point ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for drop_off_point autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'drop_off_point' && d.id == data.drop_off_point.id) {
				$j('#drop_off_contact' + d[rnd]).html(data.drop_off_contact);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

