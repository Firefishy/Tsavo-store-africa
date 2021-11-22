<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'sales_monitor';

		/* data for selected record, or defaults if none is selected */
		var data = {
			product_id: <?php echo json_encode(array('id' => $rdata['product_id'], 'value' => $rdata['product_id'], 'text' => $jdata['product_id'])); ?>,
			product_name: <?php echo json_encode($jdata['product_name']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for product_id */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'product_id' && d.id == data.product_id.id)
				return { results: [ data.product_id ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for product_id autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'product_id' && d.id == data.product_id.id) {
				$j('#product_name' + d[rnd]).html(data.product_name);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

