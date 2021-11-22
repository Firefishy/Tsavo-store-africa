<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'products';

		/* data for selected record, or defaults if none is selected */
		var data = {
			category: <?php echo json_encode(array('id' => $rdata['category'], 'value' => $rdata['category'], 'text' => $jdata['category'])); ?>,
			category_id: <?php echo json_encode($jdata['category_id']); ?>,
			male_shoes: <?php echo json_encode(array('id' => $rdata['male_shoes'], 'value' => $rdata['male_shoes'], 'text' => $jdata['male_shoes'])); ?>,
			male_shoes_id: <?php echo json_encode($jdata['male_shoes_id']); ?>,
			male_pants: <?php echo json_encode(array('id' => $rdata['male_pants'], 'value' => $rdata['male_pants'], 'text' => $jdata['male_pants'])); ?>,
			male_pants_id: <?php echo json_encode($jdata['male_pants_id']); ?>,
			male_shirts: <?php echo json_encode(array('id' => $rdata['male_shirts'], 'value' => $rdata['male_shirts'], 'text' => $jdata['male_shirts'])); ?>,
			male_shirts_id: <?php echo json_encode($jdata['male_shirts_id']); ?>,
			female_shoes: <?php echo json_encode(array('id' => $rdata['female_shoes'], 'value' => $rdata['female_shoes'], 'text' => $jdata['female_shoes'])); ?>,
			female_shoes_id: <?php echo json_encode($jdata['female_shoes_id']); ?>,
			female_dresses: <?php echo json_encode(array('id' => $rdata['female_dresses'], 'value' => $rdata['female_dresses'], 'text' => $jdata['female_dresses'])); ?>,
			female_dresses_id: <?php echo json_encode($jdata['female_dresses_id']); ?>,
			female_skirts: <?php echo json_encode(array('id' => $rdata['female_skirts'], 'value' => $rdata['female_skirts'], 'text' => $jdata['female_skirts'])); ?>,
			female_skirts_id: <?php echo json_encode($jdata['female_skirts_id']); ?>,
			female_pants: <?php echo json_encode(array('id' => $rdata['female_pants'], 'value' => $rdata['female_pants'], 'text' => $jdata['female_pants'])); ?>,
			female_pants_id: <?php echo json_encode($jdata['female_pants_id']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for category */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'category' && d.id == data.category.id)
				return { results: [ data.category ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for category autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'category' && d.id == data.category.id) {
				$j('#category_id' + d[rnd]).html(data.category_id);
				return true;
			}

			return false;
		});

		/* saved value for male_shoes */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'male_shoes' && d.id == data.male_shoes.id)
				return { results: [ data.male_shoes ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for male_shoes autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'male_shoes' && d.id == data.male_shoes.id) {
				$j('#male_shoes_id' + d[rnd]).html(data.male_shoes_id);
				return true;
			}

			return false;
		});

		/* saved value for male_pants */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'male_pants' && d.id == data.male_pants.id)
				return { results: [ data.male_pants ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for male_pants autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'male_pants' && d.id == data.male_pants.id) {
				$j('#male_pants_id' + d[rnd]).html(data.male_pants_id);
				return true;
			}

			return false;
		});

		/* saved value for male_shirts */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'male_shirts' && d.id == data.male_shirts.id)
				return { results: [ data.male_shirts ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for male_shirts autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'male_shirts' && d.id == data.male_shirts.id) {
				$j('#male_shirts_id' + d[rnd]).html(data.male_shirts_id);
				return true;
			}

			return false;
		});

		/* saved value for female_shoes */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'female_shoes' && d.id == data.female_shoes.id)
				return { results: [ data.female_shoes ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for female_shoes autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'female_shoes' && d.id == data.female_shoes.id) {
				$j('#female_shoes_id' + d[rnd]).html(data.female_shoes_id);
				return true;
			}

			return false;
		});

		/* saved value for female_dresses */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'female_dresses' && d.id == data.female_dresses.id)
				return { results: [ data.female_dresses ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for female_dresses autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'female_dresses' && d.id == data.female_dresses.id) {
				$j('#female_dresses_id' + d[rnd]).html(data.female_dresses_id);
				return true;
			}

			return false;
		});

		/* saved value for female_skirts */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'female_skirts' && d.id == data.female_skirts.id)
				return { results: [ data.female_skirts ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for female_skirts autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'female_skirts' && d.id == data.female_skirts.id) {
				$j('#female_skirts_id' + d[rnd]).html(data.female_skirts_id);
				return true;
			}

			return false;
		});

		/* saved value for female_pants */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'female_pants' && d.id == data.female_pants.id)
				return { results: [ data.female_pants ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for female_pants autofills */
		cache.addCheck(function(u, d) {
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'female_pants' && d.id == data.female_pants.id) {
				$j('#female_pants_id' + d[rnd]).html(data.female_pants_id);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

