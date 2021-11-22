<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'stock';

		/* data for selected record, or defaults if none is selected */
		var data = {
			company_stock_quantity: <?php echo json_encode($jdata['company_stock_quantity']); ?>,
			product_name: <?php echo json_encode(array('id' => $rdata['product_name'], 'value' => $rdata['product_name'], 'text' => $jdata['product_name'])); ?>,
			product_id: <?php echo json_encode($jdata['product_id']); ?>,
			supplier: <?php echo json_encode($jdata['supplier']); ?>,
			stock_quantity: <?php echo json_encode($jdata['stock_quantity']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for product_name */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'product_name' && d.id == data.product_name.id)
				return { results: [ data.product_name ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for product_name autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'product_name' && d.id == data.product_name.id) {
				$j('#company_stock_quantity' + d[rnd]).html(data.company_stock_quantity);
				$j('#product_id' + d[rnd]).html(data.product_id);
				$j('#supplier' + d[rnd]).html(data.supplier);
				$j('#stock_quantity' + d[rnd]).html(data.stock_quantity);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

