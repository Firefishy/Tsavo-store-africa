<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'wishlist';

		/* data for selected record, or defaults if none is selected */
		var data = {
			user_id: <?php echo json_encode(array('id' => $rdata['user_id'], 'value' => $rdata['user_id'], 'text' => $jdata['user_id'])); ?>,
			w_fname: <?php echo json_encode($jdata['w_fname']); ?>,
			w_lname: <?php echo json_encode($jdata['w_lname']); ?>,
			w_email: <?php echo json_encode($jdata['w_email']); ?>,
			w_pnumber: <?php echo json_encode($jdata['w_pnumber']); ?>,
			product_id: <?php echo json_encode(array('id' => $rdata['product_id'], 'value' => $rdata['product_id'], 'text' => $jdata['product_id'])); ?>,
			w_product: <?php echo json_encode($jdata['w_product']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for user_id */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'user_id' && d.id == data.user_id.id)
				return { results: [ data.user_id ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for user_id autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'user_id' && d.id == data.user_id.id) {
				$j('#w_fname' + d[rnd]).html(data.w_fname);
				$j('#w_lname' + d[rnd]).html(data.w_lname);
				$j('#w_email' + d[rnd]).html(data.w_email);
				$j('#w_pnumber' + d[rnd]).html(data.w_pnumber);
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
				$j('#w_product' + d[rnd]).html(data.w_product);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

