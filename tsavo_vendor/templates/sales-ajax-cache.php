<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'sales';

		/* data for selected record, or defaults if none is selected */
		var data = {
			user_id: <?php echo json_encode(array('id' => $rdata['user_id'], 'value' => $rdata['user_id'], 'text' => $jdata['user_id'])); ?>,
			first_name: <?php echo json_encode($jdata['first_name']); ?>,
			last_name: <?php echo json_encode($jdata['last_name']); ?>,
			email: <?php echo json_encode($jdata['email']); ?>,
			phone: <?php echo json_encode($jdata['phone']); ?>,
			address: <?php echo json_encode($jdata['address']); ?>,
			zone: <?php echo json_encode($jdata['zone']); ?>,
			zone_fee: <?php echo json_encode($jdata['zone_fee']); ?>
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
				$j('#first_name' + d[rnd]).html(data.first_name);
				$j('#last_name' + d[rnd]).html(data.last_name);
				$j('#email' + d[rnd]).html(data.email);
				$j('#phone' + d[rnd]).html(data.phone);
				$j('#address' + d[rnd]).html(data.address);
				$j('#zone' + d[rnd]).html(data.zone);
				$j('#zone_fee' + d[rnd]).html(data.zone_fee);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

