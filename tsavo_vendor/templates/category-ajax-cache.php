<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'category';

		/* data for selected record, or defaults if none is selected */
		var data = {
			cat_name: <?php echo json_encode(array('id' => $rdata['cat_name'], 'value' => $rdata['cat_name'], 'text' => $jdata['cat_name'])); ?>,
			sub_cat: <?php echo json_encode(array('id' => $rdata['sub_cat'], 'value' => $rdata['sub_cat'], 'text' => $jdata['sub_cat'])); ?>,
			code: <?php echo json_encode($jdata['code']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for cat_name */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'cat_name' && d.id == data.cat_name.id)
				return { results: [ data.cat_name ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for cat_name autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'cat_name' && d.id == data.cat_name.id) {
				$j('#code' + d[rnd]).html(data.code);
				return true;
			}

			return false;
		});

		/* saved value for sub_cat */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'sub_cat' && d.id == data.sub_cat.id)
				return { results: [ data.sub_cat ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

