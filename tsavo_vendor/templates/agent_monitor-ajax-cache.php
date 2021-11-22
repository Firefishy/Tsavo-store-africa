<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'agent_monitor';

		/* data for selected record, or defaults if none is selected */
		var data = {
			pay_number: <?php echo json_encode(array('id' => $rdata['pay_number'], 'value' => $rdata['pay_number'], 'text' => $jdata['pay_number'])); ?>,
			user_id: <?php echo json_encode($jdata['user_id']); ?>,
			sale_date: <?php echo json_encode($jdata['sale_date']); ?>,
			user_name: <?php echo json_encode($jdata['user_name']); ?>,
			phone: <?php echo json_encode($jdata['phone']); ?>,
			email: <?php echo json_encode($jdata['email']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for pay_number */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'pay_number' && d.id == data.pay_number.id)
				return { results: [ data.pay_number ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for pay_number autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'pay_number' && d.id == data.pay_number.id) {
				$j('#user_id' + d[rnd]).html(data.user_id);
				$j('#sale_date' + d[rnd]).html(data.sale_date);
				$j('#user_name' + d[rnd]).html(data.user_name);
				$j('#phone' + d[rnd]).html(data.phone);
				$j('#email' + d[rnd]).html(data.email);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

