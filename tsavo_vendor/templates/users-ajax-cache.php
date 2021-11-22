<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'users';

		/* data for selected record, or defaults if none is selected */
		var data = {
			discount: <?php echo json_encode(array('id' => $rdata['discount'], 'value' => $rdata['discount'], 'text' => $jdata['discount'])); ?>,
			coupon_id: <?php echo json_encode(array('id' => $rdata['coupon_id'], 'value' => $rdata['coupon_id'], 'text' => $jdata['coupon_id'])); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for discount */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'discount' && d.id == data.discount.id)
				return { results: [ data.discount ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for coupon_id */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'coupon_id' && d.id == data.coupon_id.id)
				return { results: [ data.coupon_id ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

