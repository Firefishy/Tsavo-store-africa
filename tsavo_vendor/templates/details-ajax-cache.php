<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'details';

		/* data for selected record, or defaults if none is selected */
		var data = {
			supp_name: <?php echo json_encode($jdata['supp_name']); ?>,
			sales_id: <?php echo json_encode(array('id' => $rdata['sales_id'], 'value' => $rdata['sales_id'], 'text' => $jdata['sales_id'])); ?>,
			payy_id: <?php echo json_encode($jdata['payy_id']); ?>,
			product_id: <?php echo json_encode(array('id' => $rdata['product_id'], 'value' => $rdata['product_id'], 'text' => $jdata['product_id'])); ?>,
			size: <?php echo json_encode($jdata['size']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for sales_id */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'sales_id' && d.id == data.sales_id.id)
				return { results: [ data.sales_id ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for sales_id autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'sales_id' && d.id == data.sales_id.id) {
				$j('#payy_id' + d[rnd]).html(data.payy_id);
				return true;
			}

			return false;
		});

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
				$j('#supp_name' + d[rnd]).html(data.supp_name);
				$j('#size' + d[rnd]).html(data.size);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

