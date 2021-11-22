<style>

input[type=checkbox].my-checkbox {
  display: grid;
  place-items: center;
  width: 24px !important;
  height: 24px !important;
  padding: 0;
  margin: 0;
  color: #DD00FF;
  position: relative;
  cursor: pointer;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
input[type=checkbox].my-checkbox:before {
  content: "";
  width: 100%;
  height: 100%;
  line-height: 1;
  color: inherit;
  border-width: 2px;
  border-style: solid;
  border-color: #DD00FF;
  border-radius: 4px;
  transition: all 0.2s ease;
}
input[type=checkbox].my-checkbox:after {
  content: "";
  width: calc(100% - 12px);
  height: calc(100% - 19px);
  border-width: 0px 0px 2px 2px;
  border-style: solid;
  border-color: #DD00FF;
  transform: rotate(-45deg);
  position: absolute;
  top: 6px;
  left: 5px;
  transition: all 0.2s ease;
}
input[type=checkbox].my-checkbox:checked:before {
  background: #DD00FF;
}
input[type=checkbox].my-checkbox:checked::after {
  border-color: #ffffff;
}
input[type=checkbox].my-checkbox:disabled {
  cursor: not-allowed;
}
input[type=checkbox].my-checkbox:disabled:before {
  border-color: darkgray;
}
input[type=checkbox].my-checkbox:disabled:after {
  border-color: transparent;
}
input[type=checkbox].my-checkbox:disabled:checked {
  color: #DD00FF;
  opacity: 0.65;
}
input[type=checkbox].my-checkbox:disabled:checked:before {
  border-color: #DD00FF;
}
input[type=checkbox].my-checkbox:disabled:checked::after {
  border-color: #ffffff;
}
input[type=checkbox].my-checkbox.focus, input[type=checkbox].my-checkbox:focus {
  outline: none;
  box-shadow: none;
}
</style>
<div class=""><div style="width:100%">
	                 <div class="">
	  	                  <div class="box-header with-border">
	        		<div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="300000" />
                    <p id="price_show">1 - 300000</p>
                    <div id="price_range"></div>
                </div>	
		</div>
		</div>
		</div></div>

				<div class=""><div style="width:100%">
             <div class="">
	  	                  <div class="box-header with-border">
				
				<div class="list-group">
					<h3>Percentage Off</h3>
					<input type="hidden" id="hidden_minimum_perc" value="0" />
                    <input type="hidden" id="hidden_maximum_perc" value="100" />
                    <p id="perc_show">10% - 100%</p>
                    <div id="perc_range"></div>
                </div>	
		</div>
		</div>
		</div></div>

				<div class="row">
	                 <div class="box box-solid">
	  	                  <div class="box-header with-border">
							
                <div class="list-group">
					<h3>Brand</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT(brand) FROM products WHERE category_id = :catid AND product_status = '1' ORDER BY brand ASC";
                    $statement = $conn->prepare($query);
                    $statement->execute(['catid' => $catid]);
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand my-checkbox" value="<?php echo $row['brand']; ?>"  > <span style="margin-left:20px"> <?php echo $row['brand']; ?></span> </label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
		</div>
		</div>
		</div>

				<div class="row">
	                 <div class="box box-solid">
	  	                  <div class="box-header with-border">

				<div class="list-group">
					<h3>shipped from</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(ship_orig) FROM products WHERE category_id = :catid AND product_status = '1' ORDER BY ship_orig DESC
                    ";
                    $statement = $conn->prepare($query);
                    $statement->execute(['catid' => $catid]);
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram my-checkbox" value="<?php echo $row['ship_orig']; ?>" ><span style="margin-left:20px"> <?php echo $row['ship_orig']; ?></span> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
		</div>
		</div>
		</div>

				<div class="row">
	                 <div class="box box-solid">
	  	                  <div class="box-header with-border">
				
				<div class="list-group">
					<h3>Material</h3>
					<?php
                    $query = "
                    SELECT DISTINCT(material) FROM products WHERE category_id = :catid AND product_status = '1' ORDER BY material DESC
                    ";
                    $statement = $conn->prepare($query);
                    $statement->execute(['catid' => $catid]);
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage my-checkbox" value="<?php echo $row['material']; ?>"  ><span style="margin-left:20px"> <?php echo $row['material']; ?></span> </label>
                    </div>
                    <?php
                    }
                    ?>	
					
		</div>
		</div>
		</div>

                </div> 
				