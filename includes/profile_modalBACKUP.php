<!-- Transaction History -->
<div class="modal fade" id="transaction">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Order Full Details</b></h4>
            </div>
            <div class="modal-body">
              <p>
                Order Date: <span id="date"></span>
                <span class="pull-right">Order Number: <span id="transid"></span></span> 
              </p>
			  <div class="table-responsive">
              <table class="table table-bordered ">
                <thead>
                  <th>Product</th>
				  <th>Status</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                </thead>
				
                <tbody id="detail">
                  <tr>
                    <td colspan="4" align="right"><b>Total</b></td>
                    <td><span id="total"></span></td>
                  </tr>
				  <tr>
				  <td colspan="6" align="left">
				  <a class="btn btn-primary" href="track" target="_blank">Track your package</a>
				  </td>
				  </tr>
				 
                </tbody>
              </table>
			  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Update Account</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="profile_edit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input readonly="readonly" type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">New Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>" placeholder="New password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact" pattern="[0-9]{9}" value="<?php echo $user['contact_info']; ?>">
                      	<small>Format: <b>740295282</b>. Do not include the zero.</small><br><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address"><?php echo $user['address']; ?></textarea>
                    </div>
                </div>
				<div class="form-group">
				<button type="button" class="btn btn-primary mx-auto" data-toggle="collapse" data-target="#demo">What is a zone?</button>
                <div id="demo" class="collapse">
                 A zone is a geographical area usually measured as per the difference between the Tsavo Headquarter location and your 
				 location. To know under what zone your location is click <mark><a href="zone.php">Here.</a></mark>
                </div></div>
				<div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Delivery Zone</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="cost" name="zone" required>
					  <option value="<?php echo $user['cost']; ?>"><?php echo $user['zone']; ?></option>
					   <?php
                     $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM branches ORDER BY zonee ASC");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <option id='zone' value='".$row['id']."'>".$row['zonee']."--".$row['country']."</option>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }
				   $pdo->close();
				  ?>
			  	  </select>
                    </div>
                </div>
			         <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <hr>
                
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Current Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>
<script>
var password = document.getElementById("zone")
  , confirm_zone = document.getElementById("confirm_zone");

function validatePassword(){
  if(zone.value != confirm_password.value) {
    confirm_zone.setCustomValidity("Zones Don't Match");
  } else {
    confirm_zone.setCustomValidity('');
  }
}

zone.onchange = validateZone;
confirm_zone.onkeyup = validateZone;
</script>