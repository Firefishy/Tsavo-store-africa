<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'item_rating';

		/* data for selected record, or defaults if none is selected */
		var data = {
			userId: <?php echo json_encode(array('id' => $rdata['userId'], 'value' => $rdata['userId'], 'text' => $jdata['userId'])); ?>,
			rater_name: <?php echo json_encode($jdata['rater_name']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for userId */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'userId' && d.id == data.userId.id)
				return { results: [ data.userId ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for userId autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'userId' && d.id == data.userId.id) {
				$j('#rater_name' + d[rnd]).html(data.rater_name);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

