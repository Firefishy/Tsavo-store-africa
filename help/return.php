<?php session_start()?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Return goods</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<!-----icon-------->
	 <link rel="shortcut icon" href="../tsavo_vendor/images/icon.png" type="images/x-icon" />
	


<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,700);
* {
  box-sizing: border-box;
}
 @media screen and (max-width:768px) {
 body {
 height:100%;
  display: flex;
  background-color: #eaeaea;
  font-family: Open Sans;
  font-weight: 300;
  line-height: 1.8;
  background-image: url(https://wallpaperaccess.com/full/1668941.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}

.contact {
  position: absolute;
  top: 30px;
  left: 50px;
  z-index: 6;
  color: rgba(0, 0, 0, 0.5);
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 12px;
  font-weight: 700;
  padding: 5px 15px;
  border-radius: 20px;
  background: rgba(0, 0, 0, 0.1);
  line-height: 1;
  cursor: pointer;
  text-shadow: 0 1px 0px rgba(255, 255, 255, 0.1);
}
.contact2 {
  position: absolute;
  z-index: 6;
  color: rgba(0, 0, 0, 0.5);
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 12px;
  font-weight: 700;
  padding: 5px 15px;
  border-radius: 20px;
  background: rgba(0, 0, 0, 0.1);
  line-height: 1;
  cursor: pointer;
  text-shadow: 0 1px 0px rgba(255, 255, 255, 0.1);
}
.contact-form {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: white;
  z-index: 5;
  padding: 80px 50px;
  transform: translate3d(-100%, 0, 0);
  transition: 0.3s ease;
  border-radius: 5px;
}
.contact-form.active {
  transform: translate3d(0, 0, 0);
}
.contact-form .close {
  color: rgba(0, 0, 0, 0.7);
  position: absolute;
  right: 30px;
  top: 30px;
}

.cards {
  margin: auto;
  background: #fefefe;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1), 3px 5px 20px rgba(0, 0, 0, 0.2);
  width: 768px;
  height: 550px;
  position: relative;
  display: flex;
  align-items: flex-end;
  padding: 30px;
}
 }
 /*--------other bigger screens----------------*/
 
body {
  min-height: 100vh;
  width:100%;
  display: flex;
  background-color: #eaeaea;
  font-family: Open Sans;
  font-weight: 300;
  line-height: 1.8;
  background-image: url(https://wallpaperaccess.com/full/1668941.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}

.contact {
  position: absolute;
  top: 30px;
  left: 50px;
  z-index: 6;
  color: rgba(0, 0, 0, 0.5);
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 12px;
  font-weight: 700;
  padding: 5px 15px;
  border-radius: 20px;
  background: rgba(0, 0, 0, 0.1);
  line-height: 1;
  cursor: pointer;
  text-shadow: 0 1px 0px rgba(255, 255, 255, 0.1);
}
.contact2 {
  position: absolute;
  z-index: 6;
  color: rgba(0, 0, 0, 0.5);
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 12px;
  font-weight: 700;
  padding: 5px 15px;
  border-radius: 20px;
  background: rgba(0, 0, 0, 0.1);
  line-height: 1;
  cursor: pointer;
  text-shadow: 0 1px 0px rgba(255, 255, 255, 0.1);
}
.contact-form {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: white;
  z-index: 5;
  padding: 80px 50px;
  transform: translate3d(-100%, 0, 0);
  transition: 0.3s ease;
  border-radius: 5px;
}
.contact-form.active {
  transform: translate3d(0, 0, 0);
}
.contact-form .close {
  color: rgba(0, 0, 0, 0.7);
  position: absolute;
  right: 30px;
  top: 30px;
}

.cards {
  margin: auto;
  background: #fefefe;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1), 3px 5px 20px rgba(0, 0, 0, 0.2);
  width:95%;
  height: 550px;
  position: relative;
  display: flex;
  align-items: flex-end;
  padding: 30px;
}
.cards .card {
  display: inline-block;
  margin-right: 20px;
}
.cards .card-toggle {
  z-index: 4;
  position: relative;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: block;
  text-align: center;
  line-height: 1.8;
  font-size: 24px;
  cursor: pointer;
  border: 2px solid transparent;
  transition: 0.3s ease;
}
.cards .card-toggle.active {
  color: white;
  border-color: white;
}
.cards .card-content {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  transition: -webkit-clip-path 1s ease;
  padding: 100px 0 0;
  overflow: hidden;
  border-radius: 5px;
}
.cards .card-content .row {
  display: table;
  width: 100%;
  height: 100%;
}
.cards .card-content .col {
  width: 50%;
  height: 100%;
  display: table-cell;
  transition: 0.3s ease 0.3s;
  transform: translate3d(0, 0, 0);
  vertical-align: top;
}
.cards .card-content .col h2 {
  font-weight: 300;
  font-size: 3em;
  line-height: 1;
  margin: 0 0 30px;
}
.cards .card-content .col h2 strong {
  font-weight: 700;
  display: block;
}
.cards .card-content .col img {
  max-width: 90%;
  width: 100%;
}
.cards .card-content .col.left {
  transform: translate3d(0, 0, 0);
  opacity: 0;
  padding-left: 50px;
}
.cards .card-content .col.right {
  transform: translate3d(100px, 0, 0);
  opacity: 0;
  padding-left: 30px;
}
.cards .card.active .col {
  transform: translate3d(0, 0, 0);
  opacity: 1;
}
.cards #overview .card-toggle {
  position: absolute;
  top: 30px;
  right: 30px;
  opacity: 1;
  color: white;
}
.cards #overview .card-content {
  background-color: #efefef;
  -webkit-clip-path: circle(0% at 91.5% 75px);
}
.cards #overview.active .card-toggle {
  opacity: 0;
}
.cards #overview.active .card-content {
  -webkit-clip-path: circle(270% at 91.5% 75px);
}
.cards #overview .right {
  background: url(https://dl.dropboxusercontent.com/u/26808427/cdn/james.png) no-repeat bottom right;
  background-size: contain;
}
.cards #dribbble .card-content, .cards #behance .card-content, .cards #linkedin .card-content, .cards #twitter .card-content {
  color: white;
}
.cards #dribbble .card-content p, .cards #behance .card-content p, .cards #linkedin .card-content p, .cards #twitter .card-content p {
  color: rgba(255, 255, 255, 0.8);
}
.cards #dribbble .card-content {
  background-color: #F469E7;
  -webkit-clip-path: circle(0% at 76px 88%);
  clip-path: circle(0% at 50px 88%);
}
.cards #dribbble.active .card-content {
  -webkit-clip-path: circle(270% at 76px 88%);
  clip-path: circle(270% at 50px 88%);
}
.cards #behance .card-content {
  background-color: #2F98D1;
  -webkit-clip-path: circle(0% at 150px 88%);
  clip-path: circle(0% at 150px 88%);
}
.cards #behance.active .card-content {
  -webkit-clip-path: circle(270% at 150px 88%);
  clip-path: circle(270% at 150px 88%);
}
.cards #linkedin .card-content {
  background-color: #03679B;
  -webkit-clip-path: circle(0% at 220px 88%);
  clip-path: circle(0% at 220px 88%);
}
.cards #linkedin.active .card-content {
  -webkit-clip-path: circle(270% at 220px 88%);
  clip-path: circle(270% at 220px 88%);
}
.cards #twitter .card-content {
  background-color: #7FD0ED;
  -webkit-clip-path: circle(0% at 292px 88%);
  clip-path: circle(0% at 292px 88%);
}
.cards #twitter.active .card-content {
  -webkit-clip-path: circle(270% at 292px 88%);
  clip-path: circle(270% at 292px 88%);
}

form .control {
  position: relative;
  margin-bottom: 10px;
  padding-top: 20px;
}
form .control label {
  position: absolute;
  top: 30px;
  left: 0;
  transition: 0.3s ease;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  font-size: 14px;
}
form .control.submit {
  text-align: right;
}
form input, form textarea {
  width: 100%;
  border: none;
  border-bottom: 1px solid #e3e3e3;
  outline: none;
  padding: 10px 0;
}
form .filled label, form input:focus + label, form textarea:focus + label {
  top: 0;
  font-size: 12px;
}
form textarea {
  height: 100px;
}
form input[type=submit] {
  width: auto;
  background-color: #F06292;
  padding: 10px 40px;
  color: white;
  border-radius: 40px;
}
</style>
</head>

			
<body>
<!-- partial:index.partial.html -->
<div class="cards">
	
	<div class="contact">Return Item</div>
	<div class="contact-form">
		<a href="#" class="close"><i class="fa fa-times"></i></a>
		<form method="POST" action="help/sender.php">
			<div class="control">
			<input type="text"  id="name" name="subject" required>
			<label for="name">Item name<small style="text-transform:lowercase;"> (Full item name)</small></label>
			</div>
			<div class="control">
			<input type="text"  id="url" name="number" required>
			<label for="url">Order number</label>
			</div>
			<div class="control">
			<textarea id="message" name="message" required></textarea>
			<label for="message">Reason for return</label>
			</div>
			<div class="control">
			<input  type="email"  id="email" name="email" required/>
			<label for="email">Email Address</label>
			</div>
			
			
			
			<div class="control submit">
			<button style="border-color:#DC40FF; width:25%; border:none; height:50px" class="btn btn-success" type="submit" name="send">send</button>
			</div>
			
		</form>
	</div>
	
	 <div class="card active" id="overview">
		<a class="card-toggle"><i class="fa fa-arrow-circle-left"></i></a>
		<div class="card-content">
			<div class="row">
				<div class="left col">
				<?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<p style="color:#0EB632"><?php echo $_SESSION['result']?></p>
						
			<?php
					}else{
			?>
						<p style="color:#F81212"><?php echo $_SESSION['result']?></p>
						
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
					<h2>Tsavo <strong>Returns Center</strong></h2>
					
				
					<p>Welcome to the Tsavo items returning center. Kindly read and  understand our Return policy 
					<a href="../ReturnPolicy" target="_blank" style="border:none; background-color:#F8C3FF; border-radius:10px; text-align:center; text-transform:uppercase; line-height:1; padding: 0.2px 10px; text-decoration:none;"> Here </a>
					before filling the returns form. 
					 <br />
					 <em>Incase you need our customer care help use the links below to contact us.</em>
					 </p>
					
				</div>
				<div class="right col">
				</div>
			</div>
		</div>
	</div> 
	

	<div class="card" id="dribbble">
		<a class="card-toggle"><i><span class="fa fa-phone"></span></i></a>
		<div class="card-content">
			<div class="row">
				<div class="left col">
					<h2>Our <strong>Returns Contacts</strong></h2>
					
					<p>Contact Us </p>
					<ul>
					<li><a href="tel:254716912002" style="text-decoration:none; border:none; background-color:#0C000E; color:#FFFFFF; border-radius:15px; padding:2px 15px;">+254716 912 002</a></li>
					<li><a href="tel:254793060164" style="text-decoration:none; border:none; background-color:#0C000E; color:#FFFFFF; border-radius:15px; padding:2px 15px;">+254793 060 164</a></li>
					</ul>
					<ul>
					    <li><a href="mailto:returns@tsavo.store" target="_blank" style="text-decoration:none; border:none; background-color:#0C000E; color:#FFFFFF; border-radius:15px; padding:2px 15px;">returns@tsavo.store</a></li>
					</ul>
					
				</div>
				<div class="right col"><img src="https://dl.dropboxusercontent.com/u/26808427/cdn/preview.jpg" alt="" /></div>
			</div>
		</div>
	</div> 
	
	
	
	
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
  $(".card-toggle").on("click", function(){
	
	// Card toggle state 	
	$(".card-toggle").removeClass("active");
	$(this).addClass("active");
	
	var isAnimating = false;
	
	if( !isAnimating ){
		isAnimating = true;
		
		$(".card").find(".card-content").css("z-index",0);
		$(".card").removeClass("active");

		var that = $(this);

		$(this).siblings().css("z-index",1);

		setTimeout(function(){
			that.parent().toggleClass("active").find(".card-content").on("transitionend", function(){
				isAnimating = false;
			});	;
			
		},10);
	} else {
		return;
	}
});

$("input,textarea").blur(function(){
	if( $(this).val() ){
		$(this).parent().addClass("filled");
	} else {
		$(this).parent().removeClass("filled");
	}
});

$(".contact").on("click",function(){
	$(".contact-form").toggleClass("active");
});
$(".contact-form input[type=submit], .contact-form .close").on("click",function(e){
	e.preventDefault();
	$(".contact-form").toggleClass("active")
});
  </script>

</body>
</html>
