<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tsavo mailer.
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
		  <?php
		  if(isset($_SESSION['success'])){
		  echo "
		  <div class='callout callout-success'>
	        ".$_SESSION['success']."
	      </div>
		  ";
		  unset($_SESSION['success']);
		  }
		  if(isset($_SESSION['error'])){
		  echo "
		  <div class='callout callout-danger'>
	        ".$_SESSION['error']."
	      </div>
		  ";
		  unset($_SESSION['error']);
		  }
		  ?>
		   <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Dosis:wght@300;500;800&amp;family=Sansita+Swashed:wght@300;500;800&amp;display=swap'>

            <div class="box-header with-border">
         <style>
		 /*
font-family: 'Dosis', sans-serif;
font-family: 'Sansita Swashed', cursive;
font-family: 'Fira Sans', sans-serif;
*/
body{
 font-family: "Dosis", sans-serif;
 }
.option-flex {
  display: flex;
  flex-direction: column;
  align-items: center;
  border: none;
}
.option-flex .custom-radio {
  display: flex;
  flex-direction: row;
  align-items: center;
}
.option-flex .custom-radio [type=radio] {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}
.option-flex .custom-radio .radio-item {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border: 1px solid black;
  position: relative;
  border-radius: 2px;
}
.option-flex .custom-radio .label-icon {
  background-size: auto 40px;
  background-repeat: no-repeat;
  background-position: center 10px;
  margin-bottom: 0;
  padding: 15px 30px;
  padding-top: 65px;
  text-align: center;
  justify-content: center;
  display: flex;
  align-items: baseline;
  -webkit-transition: all 0.3s cubic-bezier(0.07, 0.49, 1, 0.08);
  -moz-transition: all 0.3s cubic-bezier(0.07, 0.49, 1, 0.08);
  transition: all 0.3s cubic-bezier(0.07, 0.49, 1, 0.08);
}
.option-flex .custom-radio .label-icon.option1 {
  background-image: url("https://www.flaticon.com/premium-icon/icons/svg/2931/2931519.svg");
}
.option-flex .custom-radio .label-icon.option2 {
  background-image: url("https://www.flaticon.com/svg/vstatic/svg/1998/1998571.svg?token=exp=1613538216~hmac=a9f5522867e92336717efb247583c5bf");
}
.option-flex .custom-radio .or-separator {
  margin: 0 35px;
}
.option-flex .custom-radio label, .option-flex .custom-radio .or-separator {
  font-family: "Dosis", sans-serif;
  font-size: 17px;
  font-style: normal;
  font-weight: 400;
  line-height: 130%;
  letter-spacing: 0.03em;
  text-align: center;
  color: black;
}

.option-heading {
  display: block;
  font-family: "Dosis", sans-serif;
  font-size: 17px;
  font-style: normal;
  font-weight: 400;
  line-height: 130%;
  letter-spacing: 0.05em;
  text-align: center;
  color: black;
  text-transform: uppercase;
}

/* IMAGE STYLES */
[type=radio] + .label-icon {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + .label-icon {
  background: #c98dbc;
  background-size: auto 40px;
  background-repeat: no-repeat;
  color: black;
}

[type=radio]:checked + .label-icon.option1 {
  background-image: url("https://www.flaticon.com/premium-icon/icons/svg/1660/1660759.svg");
  background-position: center 10px;
}

[type=radio]:checked + .label-icon.option2 {
  background-image: url("https://www.flaticon.com/premium-icon/icons/svg/677/677768.svg");
  background-position: center 10px;
}
		 </style>     
            
            
			
		<form method="post" action="subscriber_mailer.php">
	<!-- partial:index.partial.html -->
<div class="col-sm-12">
      <div class="mc-field-group input-group option-flex">
      <p class="option-heading">Mail to: </p>
    <!-- add custom-radio class to the ul element-->
      <div class="custom-radio">
      <div class="radio-item">
        <input type="radio" value="1" name="users" id="mce-group[274634]-274634-0">
        <label class="label-icon option1" for="mce-group[274634]-274634-0">To all users</label>
      </div>
      <p class="or-separator"> Or</p>
      <div class="radio-item">
        <input type="radio" value="2" name="subs" id="mce-group[274634]-274634-1">
        <label class="label-icon option2" for="mce-group[274634]-274634-1">To Subscribers</label>
      </div>
    </div>
  </div><!-- mc-field-group input-group option-flex -->
  
  
</div>

		<div class="col-sm-12 form-group">
		<label style="text-align:center;">Mail title</label>
		<input class="form-control" type="text" name="title" placeholder="The newsletter title" value="" required/>
		</div>
		<div class="col-sm-12 form-group">
		<label style="text-align:center;">Mail head</label>
		<input class="form-control" type="text" name="head" placeholder="The newsletter head" value="" readonly/>
		</div>
			<p class="option-heading">Use one of the 2 text editor areas below. <b stle="color:red">Do not use the both of them!!!</b> </p>
                  <div class="col-sm-12 form-group">
				  <label style="text-align:center;">Mail body</label>
                    <textarea id="editor1" name="body" rows="10" cols="80" required></textarea>
                  </div>
                  <hr/>
                  <div class="col-sm-12 form-group">
				  <p class="option-heading"><b>Custom Mail body</b> (Paste raw html code) </p>
                    <textarea name="body2" style="width:100%" rows="10"></textarea>
                  </div>
		<div class="col-sm-9 form-group">
		<?php
                $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM subscriber");
                $stmt->execute();
                $urow =  $stmt->fetch();
				if($urow['numrows'] > 0){
				 echo '
				 <input class="btn btn-success" type="submit" name="mail"/>
				 ';
				}
				else{
				echo '
				<input class="btn btn-success" type="submit" name="mail" disabled/>
				';
				}

               
              ?>
		
		</div>
				</form>
       </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include '../includes/profile_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<!-- Date Picker -->
<script>
$(function(){
  //Date picker
  $('#datepicker_add').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker_edit').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })

  //Timepicker
  $('.timepicker').timepicker({
    showInputs: false
  })

  //Date range picker
  $('#reservation').daterangepicker()
  //Date range picker with time picker
  $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
  //Date range as a button
  $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
  )
  
});
</script>
<script>
$(function(){
  $(document).on('click', '.transact', function(e){
    e.preventDefault();
    $('#transaction').modal('show');
    var id = $(this).data('id');
    $.ajax({
      type: 'POST',
      url: 'transact.php',
      data: {id:id},
      dataType: 'json',
      success:function(response){
        $('#date').html(response.date);
        $('#transid').html(response.transaction);
        $('#detail').prepend(response.list);
        $('#total').html(response.total);
      }
    });
  });

  $("#transaction").on("hidden.bs.modal", function () {
      $('.prepend_items').remove();
  });
});
</script>
</body>
</html>
