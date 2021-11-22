<?php if(!isset($conn)){ include 'db_connect.php'; } ?>
<style>
  textarea{
    resize: none;
  }
</style>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="" id="manage-parcel">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
        <div id="msg" class=""></div>
        <div class="row">
          <div class="col-md-6">
              <b>Package Information</b>
              <div class="form-group">
                <label for="" class="control-label">Package Name:</label>
                <input readonly type="text" name="product_name" id="" class="form-control form-control-sm" value="<?php echo isset($product_name) ? $product_name : '' ?>" required>
              </div>
              <div class="form-group">
                <label for="" class="control-label">Product ID:</label>
                <input readonly type="text" name="product_id" id="" class="form-control form-control-sm" value="<?php echo isset($product_id) ? $product_id : '' ?>" required>
              </div>
              <div class="form-group">
                <label for="" class="control-label">Product Quantity:</label>
                <input readonly type="text" name="quantity" id="" class="form-control form-control-sm" value="<?php echo isset($quantity) ? $quantity : '' ?>" required>
              </div>
			  <div class="form-group">
                <label for="" class="control-label">Dispatch Status:</label>
                <input readonly type="text" name="details" id="" class="form-control form-control-sm" value="<?php echo isset($details) ? $details : '' ?>" required>
              </div>
			  <div class="form-group">
                <label for="" class="control-label">Vendor ID:</label>
                <input readonly type="text" id="" class="form-control form-control-sm" value="<?php echo $_SESSION['dropoff'] ? $_SESSION['dropoff'] : '' ?>">
              </div>
          </div>
          <div class="col-md-6">
              <b>Recipient Information</b>
              <div class="form-group">
			    <label for="" class="control-label">Name</label>
                <input readonly type="text" name="" id="" class="form-control form-control-sm" value="<?php echo isset($recipient_fname) ? $recipient_fname : '' ?>|<?php echo isset($recipient_lname) ? $recipient_lname : '' ?>" required>
              </div>
              <div class="form-group">
                <label for="" class="control-label">Set PUS</label>
                <input readonly type="text" name="recipient_address" id="" class="form-control form-control-sm" value="<?php echo isset($pus) ? $pus : '' ?>" required>
              </div>
              <div class="form-group">
                <label for="" class="control-label">Contact #</label>
                <input readonly type="text" name="recipient_contact" id="" class="form-control form-control-sm" value="<?php echo isset($recipient_contact) ? $recipient_contact : '' ?>" required>
              </div>
			  <div class="form-group">
                <label for="" class="control-label">Update Dispatch Status</label>
                <select name="details" type="text" id="" class="form-control form-control-sm" value="<?php echo isset($details) ? $details : '' ?>">
				<option value="<?php echo isset($details) ? $details : '' ?>">---update status--</option>
				<option value="Not Dispatched">Not Dispatched</option>
				<option value="Item Dispatched">Item Dispatched</option>
				<option value="Ready for pickup">Ready for pickup</option>
				<option value="Delivered">Delivered</option>
				</select>
				 </div>
			  
             
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="dtype">Type</label>
              <input type="checkbox" name="type" id="dtype" <?php echo isset($type) && $type == 1 ? 'checked' : '' ?> data-bootstrap-switch data-toggle="toggle" data-on="Deliver" data-off="Pickup" class="switch-toggle status_chk" data-size="xs" data-offstyle="info" data-width="5rem" value="1">
              <small>Deliver = Deliver to Recipient Address</small>
              <small>, Pickup = Pickup to nearest Branch</small>
            </div>
          </div>
          <div class="col-md-6" id=""  <?php echo isset($type) && $type == 1 ? 'style="display: none"' : '' ?>>
            <?php if($_SESSION['login_branch_id'] <= 0): ?>
              <div class="form-group" id="fbi-field">
                <label for="" class="control-label">Drop Off Station</label>
              <select name="from_branch_id" id="from_branch_id" class="form-control select2" required="">
                <option value="">Select </option>
                <?php 
                  $branches = $conn->query("SELECT *,concat(zonee,', ',city,', ',state,', ',zip_code,', ',country) as address FROM branches");
                    while($row = $branches->fetch_assoc()):
                ?>
                  <option value="<?php echo $row['id'] ?>" <?php echo isset($from_branch_id) && $from_branch_id == $row['id'] ? "selected":'' ?>><?php echo $row['id']. ' | '.(ucwords($row['address'])) ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <?php else: ?>
              <input type="hidden" name="from_branch_id" value="<?php echo $_SESSION['login_branch_id'] ?>">
            <?php endif; ?>  
            <div class="form-group" id="tbi-field">
              <label for="" class="control-label">Pick Up Station</label>
              <select name="to_branch_id" id="to_branch_id" class="form-control select2">
                <option value=""></option>
                <?php 
                  $branches = $conn->query("SELECT *,concat(zonee,', ',city,', ',state,', ',zip_code,', ',country) as address FROM branches");
                    while($row = $branches->fetch_assoc()):
                ?>
                  <option value="<?php echo $row['id'] ?>" <?php echo isset($to_branch_id) && $to_branch_id == $row['id'] ? "selected":'' ?>><?php echo $row['branch_code']. ' | '.(ucwords($row['address'])) ?></option>
                <?php endwhile; ?>
              </select>
            </div>
          </div>
        </div>
        <hr>
        <b>Package Information</b>
		<div class="table-responsive">
        <table class="table table-bordered" id="parcel-items">
          <thead>
            <tr>
              <th>Weight</th>
              <th>Height</th>
              <th>Length</th>
              <th>Width</th>
              <th>Price</th>
              <?php if(!isset($id)): ?>
              <th></th>
            <?php endif; ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input readonly type="text" name='weight[]' value="<?php echo isset($weight) ? $weight :'' ?>" required></td>
              <td><input readonly type="text" name='height[]' value="<?php echo isset($height) ? $height :'' ?>" required></td>
              <td><input readonly type="text" name='length[]' value="<?php echo isset($length) ? $length :'' ?>" required></td>
              <td><input readonly type="text" name='width[]' value="<?php echo isset($width) ? $width :'' ?>" required></td>
              <td><input readonly type="text" class="text-right number" name='price[]' value="<?php echo isset($price) ? $price :'' ?>" required></td>
              <?php if(!isset($id)): ?>
              <td><button class="btn btn-sm btn-danger" type="button" onclick="$(this).closest('tr').remove() && calc()"><i class="fa fa-times"></i></button></td>
              <?php endif; ?>
            </tr>
          </tbody>
              <?php if(!isset($id)): ?>
          <tfoot>
            <th colspan="4" class="text-right">Total</th>
            <th class="text-right" id="tAmount">0.00</th>
            <th></th>
          </tfoot>
              <?php endif; ?>
        </table>
              <?php if(!isset($id)): ?>
			  </div>
        <div class="row">
          <div class="col-md-12 d-flex justify-content-end">
            <button  class="btn btn-sm btn-primary bg-gradient-primary" type="button" id="new_parcel"><i class="fa fa-item"></i> Add Item</button>
          </div>
        </div>
              <?php endif; ?>
      </form>
  	</div>
  	<div class="card-footer border-top border-info">
  		<div class="d-flex w-100 justify-content-center align-items-center">
  			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-parcel">Save</button>
  			<a class="btn btn-flat bg-gradient-secondary mx-2" href="./index.php?page=parcel_list">Cancel</a>
  		</div>
  	</div>
	</div>
</div>
<div id="ptr_clone" class="d-none">
  <table>
    <tr>
        <td><input type="text" name='weight[]' required></td>
        <td><input type="text" name='height[]' required></td>
        <td><input type="text" name='length[]' required></td>
        <td><input type="text" name='width[]' required></td>
        <td><input type="text" class="text-right number" name='price[]' required></td>
        <td><button class="btn btn-sm btn-danger" type="button" onclick="$(this).closest('tr').remove() && calc()"><i class="fa fa-times"></i></button></td>
      </tr>
  </table>
</div>
<script>
  $('#dtype').change(function(){
      if($(this).prop('checked') == true){
        $('#tbi-field').hide()
      }else{
        $('#tbi-field').show()
      }
  })
    $('[name="price[]"]').keyup(function(){
      calc()
    })
  $('#new_parcel').click(function(){
    var tr = $('#ptr_clone tr').clone()
    $('#parcel-items tbody').append(tr)
    $('[name="price[]"]').keyup(function(){
      calc()
    })
    $('.number').on('input keyup keypress',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9]/, '');
        val = val.replace(/,/g, '');
        val = val > 0 ? parseFloat(val).toLocaleString("en-US") : 0;
        $(this).val(val)
    })

  })
	$('#manage-parcel').submit(function(e){
		e.preventDefault()
		start_load()
    if($('#parcel-items tbody tr').length <= 0){
      alert_toast("Please add atleast 1 package information.","error")
      end_load()
      return false;
    }
		$.ajax({
			url:'ajax.php?action=save_parcel',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
			// if(resp){
      //       resp = JSON.parse(resp)
      //       if(resp.status == 1){
      //         alert_toast('Data successfully saved',"success");
      //         end_load()
      //         var nw = window.open('print_pdets.php?ids='+resp.ids,"_blank","height=700,width=900")
      //       }
			// }
        if(resp == 1){
            alert_toast('Data successfully saved',"success");
            setTimeout(function(){
              location.href = 'index.php?page=parcel_list';
            },2000)

        }
			}
		})
	})
  function displayImgCover(input,_this) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#cover').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }
  function calc(){

        var total = 0 ;
         $('#parcel-items [name="price[]"]').each(function(){
          var p = $(this).val();
              p =  p.replace(/,/g,'')
              p = p > 0 ? p : 0;
            total = parseFloat(p) + parseFloat(total)
         })
         if($('#tAmount').length > 0)
         $('#tAmount').text(parseFloat(total).toLocaleString('en-US',{style:'decimal',maximumFractionDigits:2,minimumFractionDigits:2}))
  }
</script>