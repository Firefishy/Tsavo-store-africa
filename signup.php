<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: MyCart');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
  }

?>
<?php include 'includes/header.php'; ?>
<!---flaticons---->
	<link rel="stylesheet" type="text/css" href="includes/font/flaticon.css">
<img src="includes/images/tsavo.png" width="20%" height="auto"  style="margin-top:5%; margin-left:40%">
 <style>
/* The contain */
.contain {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.contain input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.contain:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.contain input:checked ~ .checkmark {
  background-color: #CD23F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.contain input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.contain .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<body class="hold-transition register-page" style="background-image: linear-gradient(to bottom right, #BB07EA, #EA9100);">
<div class="register-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="register-box-body" style="border-radius:8px">
    	<h4 class="login-box-msg">Registration</h4>

    	<form id="address-form" action="register.php" method="POST">
          <div class="form-group has-feedback">
            <input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
            <span class="form-control-feedback"><i class="flaticon-user"></i></span>
          </div>
          <div class="form-group has-feedback">
            <input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" type="text" spellcheck="false" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
            <span class=" form-control-feedback"><i class="flaticon-user"></i></span>
          </div>
      		<div class="form-group has-feedback">
        		<input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
        		<span class=" form-control-feedback"><i class="flaticon-mail-inbox-app"></i>  </span>
      		</div>
          <div class="form-group has-feedback">
           <input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" id="Password" type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="form-control-feedback"><i class="flaticon-padlock"></i></span>
			<span id="StrengthDisp" class="badge displayBadge">No password</span>
          </div>
          <div class="form-group has-feedback">
            <input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" id="rePassword" type="password" class="form-control" name="repassword" placeholder="Retype password" required>
            <span class=" form-control-feedback"><i class="flaticon-synchronize"></i></span>
          </div>
		  <hr />
<label class="contain">Show passwords
  <input type="checkbox" onclick="showPassword()">
  <span class="checkmark"></span>
</label>
<hr />
		  <!---===================================address===================================------------->
		   
		   <h4 class="display-4" style="text-align:center;">Delivery Address</h4>
		   <div class="form-group has-feedback">
            <input   id="address" style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" type="text" autocomplete="off" class="form-control" name="address" placeholder="Address" required>
            <span class="form-control-feedback"><i class="flaticon-location"></i></span>
          </div>
          <div class="form-group clearfix">
		  <input style="width:45%; float:right"  readonly="readonly" id="state" name="state" placeholder="County" />
		   <input style="width:45%; float:left"  readonly="readonly" id="locality" name="locality" placeholder="Nearest Town" />
		   </div>
          <div class="form-group has-feedback">
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.3/build/css/intlTelInput.css'>
            <input style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF; width:100%" type="tel"  id="phone" class="form-control" name="contact_info" pattern="[0-9]{9}" required>
   
			<span class=" form-control-feedback"><i class="flaticon-smartphone-1"></i></span>
   <script src='https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.3/build/js/intlTelInput.js'></script>
         
			<br />
			<small>Format: <b>740295282</b>. Do not include the zero.</small><br><br>
  </div>
		  
		  <div class="form-group">
				<button style="width:100%" type="button" class="btn btn-tsavo mx-auto" data-toggle="collapse" data-target="#demo">What is a zone?</button>
                <div id="demo" class="collapse">
                 A zone is a geographical area usually measured as per the difference between the Tsavo Headquarter location and your 
				 location. To know under what zone your location is click <mark><a href="zone.php">Here.</a></mark>
                </div></div>
                 <h5 for="address" class="col-sm-12 control-label" style="text-align:center;">Zone</h5>
                  
				<div class="form-group">
                     <div style="width:100%">
                      <select class="form-control" id="cost" name="zone" style="border-color:#BA00BA; border-radius:7px;font-family: 'Trebuchet MS', sans-serif;background-color:#FFE4FF" required>
					   <option value="">Delivery zone</option>
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
                  <h5 for="address" class="col-sm-12 control-label" style="text-align:center;"></h5>
             
                <!------=====================================ReCAPTCHA=====================================-------------->
		  <div class="form-group" style="width:100%;">
          <?php
            if(!isset($_SESSION['captcha'])){
              echo '
                <div class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LdFZWwbAAAAAI-0meZ9BBXuafjGNYK0l_JE7hrv"></div>
                </div>
              ';
            }
          ?>
          <hr/>
		  </div>
		
			 <h5 for="address" class="col-sm-12 control-label" style="text-align:center;"></h5>
			<div class="form-group " >
    			<div class="">
          			<button type="submit" class="btn btn-primary col-sm-12" name="signup"><i class="flaticon-quill"></i> Sign Up</button>
        		</div>
      		</div>
    	</form>
      <br>
     <hr/>
      <a href="Welcome" style="border:none; border-radius:7px;font-family: 'Trebuchet MS', sans-serif; text-align:center;">I am already registered</a><br>
     	</div>
     
   <a href="TsavoHome" class="btn btn-success well well-sm" style="border:none; border-radius:7px;font-family: 'Trebuchet MS', sans-serif; margin-left:35%; margin-top:5%"><i class="flaticon-home"></i> Home</a>

</div>
<script>

    // timeout before a callback is called

    let timeout;

    // traversing the DOM and getting the input and span using their IDs

    let password = document.getElementById('Password')
    let strengthBadge = document.getElementById('StrengthDisp')

    // The strong and weak password Regex pattern checker

    let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
    let mediumPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})')
    
    function StrengthChecker(PasswordParameter){
        // We then change the badge's color and text based on the password strength

        if(strongPassword.test(PasswordParameter)) {
            strengthBadge.style.backgroundColor = "green"
            strengthBadge.textContent = 'Strong'
        } else if(mediumPassword.test(PasswordParameter)){
            strengthBadge.style.backgroundColor = 'blue'
            strengthBadge.textContent = 'Medium'
        } else{
            strengthBadge.style.backgroundColor = 'red'
            strengthBadge.textContent = 'Weak'
        }
    }

    // Adding an input event listener when a user types to the  password input 

    password.addEventListener("input", () => {

        //The badge is hidden by default, so we show it

        strengthBadge.style.display= 'block'
        clearTimeout(timeout);

        //We then call the StrengChecker function as a callback then pass the typed password to it

        timeout = setTimeout(() => StrengthChecker(password.value), 500);

        //Incase a user clears the text, the badge is hidden again

        if(password.value.length !== 0){
            strengthBadge.style.display != 'block'
        } else{
            strengthBadge.style.display = 'none'
        }
    });
</script>
	<script>
	//comment out the iti section to see the default bootstrap error display

var input = document.querySelector("#phone");
var iti = window.intlTelInput(input, {
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.3/build/js/utils.js",
});

// store the instance variable so we can access it in the console e.g. window.iti.getNumber()
window.iti = iti;



//Bootstrap test form feedback
'use strict';
window.addEventListener('load', function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {

      console.log(form.checkValidity());

      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
}, false);
	</script>    
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
		  
<?php include 'includes/scripts.php' ?>
 <script>
      // This sample uses the Places Autocomplete widget to:
      // 1. Help the user select a place
      // 2. Retrieve the address components associated with that place
      // 3. Populate the form fields with those address components.
      // This sample requires the Places library, Maps JavaScript API.
      // Include the libraries=places parameter when you first load the API.
      // For example: <script
      // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      let autocomplete;
      let address1Field;
      let address2Field;
      let postalField;

      function initAutocomplete() {
        address1Field = document.querySelector("#address");
        address2Field = document.querySelector("#address2");
        postalField = document.querySelector("#postcode");
        // Create the autocomplete object, restricting the search predictions to
        // addresses in the US and Canada.
        autocomplete = new google.maps.places.Autocomplete(address1Field, {
          componentRestrictions: { country: ["ke"] },
          fields: ["address_components", "geometry"],
          types: ["address"],
        });
        address1Field.focus();
        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener("place_changed", fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        let address1 = "";
        let postcode = "";

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        // place.address_components are google.maps.GeocoderAddressComponent objects
        // which are documented at http://goo.gle/3l5i5Mr
        for (const component of place.address_components) {
          const componentType = component.types[0];

          switch (componentType) {
            case "street_number": {
              address1 = `${component.long_name} ${address1}`;
              break;
            }

            case "route": {
              address1 += component.short_name;
              break;
            }

            case "postal_code": {
              postcode = `${component.long_name}${postcode}`;
              break;
            }

            case "postal_code_suffix": {
              postcode = `${postcode}-${component.long_name}`;
              break;
            }
            case "locality":
              document.querySelector("#locality").value = component.long_name;
              break;

            case "administrative_area_level_1": {
              document.querySelector("#state").value = component.short_name;
              break;
            }
            case "country":
              document.querySelector("#country").value = component.long_name;
              break;
          }
        }
        address1Field.value = address1;
        postalField.value = postcode;
        // After filling the form with address components from the Autocomplete
        // prediction, set cursor focus on the second address line to encourage
        // entry of subpremise information such as apartment, unit, or floor number.
        address2Field.focus();
      }
    </script>
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWYpz_4Ga6NJkbDCUece2up4a_Cxr-c4A&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
	<script>
	function showPassword() {
  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
 var y = document.getElementById("rePassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  } 
}
	</script>
</body>
</html>