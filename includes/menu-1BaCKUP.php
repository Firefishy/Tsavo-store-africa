<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="includes/font/flaticon.css">
<style>
@import 'https://fonts.googleapis.com/css?family=Fira+Sans:300,400';
@import 'https://fonts.googleapis.com/icon?family=Material+Icons';
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #EB00E0; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #B300E0; 
}
* {
  box-sizing: border-box;
}


a {
  text-decoration: none;
}

.nav-top {

  display: flex;
  align-items: center;
  position: fixed;
  z-index: 101;
  padding: 10px 20px;
  height: 50px;
  background-color: #9B0569;
  width:15%;
}
.nav-top .hamburger {
margin-top:10px;
  margin-left: auto;
  color: #fff;
  cursor: pointer;
  margin-bottom:10px;
}

.nav-drill {
  margin-top: 50px;
  transform: translateX(100%);
 
}

.nav-is-toggled .nav-drill {
  transform: translateX(0);
}
.nav-is-toggled::after {
  opacity: 1;
  visibility: visible;
}

.nav-drill {
  display: flex;
  position:fixed; 
  z-index: 100;
  top: 0;
  right: 0;
  width: 85%;
  height: 100%;
  background-color: #fff;
  overflow-y: auto;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch;
  transition: 0.45s;
}
.nav-items {
  flex: 0 0 100%;
}
.nav-item:not(:last-child) {
  border-bottom: solid 1px #F4DAF9;
}
.nav-link {
  display: block;
  padding: 0.875em 1em;
  background-color: rgba(0, 0, 0, 0.22);
  color: #9920B4;
  font-size: 1rem;
  line-height: 1.5em;
  font-weight: 300;
}
.nav-expand-content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: translateX(100%);
  background-color: #F4DAF9;
  transition: 0.3s;
  visibility: hidden;
}
.nav-expand-content .nav-item:not(:last-child) {
  border-bottom: solid 1px #9920B4;
}
.nav-expand-content .nav-link {
  background-color: #F4DAF9;
}
.nav-expand-content .nav-back-link {
  display: flex;
  align-items: center;
  background-color: #A120B4 !important;
  color: #fff;
}
.nav-expand-content .nav-back-link::before {
  content: "chevron_left";
  margin-left: 0.5em;
  font-family: "Material Icons";
}
.nav-expand-link {
  display: flex;
  justify-content: space-between;
}
.nav-expand-link::after {
  content: "chevron_left";
  flex: 0 1 auto;
  font-family: "Material Icons";
}
.nav-expand.active > .nav-expand-content {
  transform: translateX(0);
  visibility: visible;
}
.nav-expand .nav-expand-content {
  background-color: #F4DAF9;
}
.nav-expand .nav-expand-content .nav-link {
  background-color: #F4DAF9;
}
.nav-expand .nav-expand-content .nav-expand-content {
  background-color: #aff1e6;
}
.nav-expand .nav-expand-content .nav-expand-content .nav-link {
  background-color: #aff1e6;
}
.nav-expand .nav-expand-content .nav-expand-content .nav-expand-content {
  background-color: #84e9d9;
}
.nav-expand .nav-expand-content .nav-expand-content .nav-expand-content .nav-link {
  background-color: #84e9d9;
}
.nav-expand .nav-expand-content .nav-expand-content .nav-expand-content .nav-expand-content {
  background-color: #59e1cb;
}
.nav-expand .nav-expand-content .nav-expand-content .nav-expand-content .nav-expand-content .nav-link {
  background-color: #59e1cb;
}
 @media (min-width: 768px){
  }
 
 
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<header class="nav-top">
	<span style="font-size:calc(3vw + 3vh + .5vmin); float:left;" class="hamburger material-icons" id="ham">menu</span>
</header>

<nav class="nav-drill">
  <ul class="nav-items nav-level-1">
  
    <li class="nav-item nav-expand">
	
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon-groceries"> Supermarket</i>
			</a>
	<ul class="nav-items nav-expand-content">
	<div class=" nav-item badge">Food Stuffs</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 1 AND sub_cat = 'Food Stuffs' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
	<div class=" nav-item badge">Beverages</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 1 AND sub_cat = 'Beverages' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
				<div class=" nav-item badge">Personal Care</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 1 AND sub_cat = 'Personal Care' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
				
			</ul>
		</li>
   <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
			<i class="flaticon-smartphone"> Electronics</i>	
			</a>
		<ul class="nav-items nav-expand-content">
		<div class=" nav-item badge">Televisions</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 2 AND sub_cat = 'Televisions' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
				<div class=" nav-item badge">Audio System</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 2 AND sub_cat = 'Audio System' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Electronic Accessories</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 2 AND sub_cat = 'Electronic Accessories' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
	<li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon-washing-machine"> Home & Office</i>
			</a>
	<ul class="nav-items nav-expand-content">
	<div class=" nav-item badge">House Appliances</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 3 AND sub_cat = 'House Appliances' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Furniture & Decor</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 3 AND sub_cat = 'Furniture & Decor' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Office Appliances</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 3 AND sub_cat = 'Office Appliances' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
   <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-computer"> Computing</i>
			</a>
		<ul class="nav-items nav-expand-content">
		<div class=" nav-item badge">Desktop Computer</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 4 AND sub_cat = 'Desktop Computer' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Laptops</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 4 AND sub_cat = 'Laptops' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Other Computer Accessories</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 4 AND sub_cat = 'Other Computer Accessories' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<li class="nav-item">
				
			</ul>
		</li>	
		
	 <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-wardrobe"> Fashion</i>
				</a>
<ul class="nav-items nav-expand-content">
<div class=" nav-item badge">Women Grooming</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 6 AND sub_cat = 'Women Grooming' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Men Grooming</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 6 AND sub_cat = 'Men Grooming' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Teens Grooming</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 6 AND sub_cat = 'Teens Grooming' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
   <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-responsive"> Phones & Tablets</i>
			</a>
		<ul class="nav-items nav-expand-content">
		<div class=" nav-item badge">Mobile Phones</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 7 AND sub_cat = 'Mobile Phones' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Tablets</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 7 AND sub_cat = 'Tablets' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Phone Accessories</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 7 AND sub_cat = 'Phone Accessories' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
	<li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-salon"> Health & Beauty Items</i>
			</a>
	<ul class="nav-items nav-expand-content">
	<div class=" nav-item badge">Make-ups</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 8 AND sub_cat = 'Make Ups' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Health</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 8 AND sub_cat = 'Health Care' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Perfumes</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 8 AND sub_cat = 'Perfumes' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
   <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-stroller"> Baby Products</i>
			</a>
		<ul class="nav-items nav-expand-content">
		<div class=" nav-item badge">Baby Feeding</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 10 AND sub_cat = 'Baby Feeding' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Diapering</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 10 AND sub_cat = 'Diapering' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Baby Care</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 10 AND sub_cat = 'Baby Care' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>	
		 <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-game-controller"> Softwares & Gaming Accesssories</i>
			</a>
			<ul class="nav-items nav-expand-content">
			<div class=" nav-item badge">Gaming consoles</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 5 AND sub_cat = 'Gaming Consoles' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Games</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 5 AND sub_cat = 'Games' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Softwares</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 5 AND sub_cat = 'Softwares' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
   <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-sport"> Sporting</i>
			</a>
	<ul class="nav-items nav-expand-content">
	<div class=" nav-item badge">Sports Clothing</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 9 AND sub_cat = 'Sports jersey' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Sports Equipment</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 9 AND sub_cat = 'Sports Equipment' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Nutrition</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 9 AND sub_cat = 'Nutrition' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
	<li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-coffee-shop"> Outdoor</i>
			</a>
	<ul class="nav-items nav-expand-content">
	<div class=" nav-item badge">Pest Control</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 12 AND sub_cat = 'Pest Control' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Lighting</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 12 AND sub_cat = 'Outdoor Lights' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Gardening Tools</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 12 AND sub_cat = 'Gardening Tools' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
   <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-medicine"> Chemist</i>
			</a>
	<ul class="nav-items nav-expand-content">
	<div class=" nav-item badge">OTC Drugs</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 11 AND sub_cat = 'OTC Drugs' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Laboratory Tools & Electronics</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 11 AND sub_cat = 'Laboratory Tools & Electronics' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Get a Prescription</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 11 AND sub_cat = 'Get a Prescription' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>	
		 <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-animal"> Agrovet</i>
			</a>
		<ul class="nav-items nav-expand-content">
		<div class=" nav-item badge">Pest Controllers</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 13 AND sub_cat = 'Pest Controllers' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Feeds</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 13 AND sub_cat = 'Feeds' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Agro-Supplements</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 13 AND sub_cat = 'AgroSupplements' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
   <li class="nav-item nav-expand">
			<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-expand-link" href="#">
				<i class="flaticon flaticon-direction"> Others</i>
			</a>
		<ul class="nav-items nav-expand-content">
		<div class=" nav-item badge">Automobile Accessories</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 14 AND sub_cat = 'Automobile Accessories' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Books & Novels</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 14 AND sub_cat = 'Books & Novels' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				<div class=" nav-item badge">Others</div>
				<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM category WHERE code = 14 AND sub_cat = 'Others' ORDER BY id ASC");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	
	       						echo "
	       							<li class='nav-item'>
					<a style='font-size:calc(1vw + 1vh + .5vmin);' class='nav-link' href='TsavoCategory?category=".$row['cat_slug']."'>
						".$row['name']."
					</a>
				                     </li>
	       						";
	       						}
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
				
			</ul>
		</li>
	 
  </ul>
 </nav>
<!-- partial -->
  <script>
  console.clear();

const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'));
const backLink = `<li class="nav-item">
	<a style="font-size:calc(1vw + 1vh + .5vmin);" class="nav-link nav-back-link" href="javascript:;">
		Back
	</a>
</li>`;

navExpand.forEach(item => {
  item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink);
  item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'));
  item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'));
});


// ---------------------------------------
// not-so-important stuff starts here

const ham = document.getElementById('ham');
ham.addEventListener('click', function () {
  document.body.classList.toggle('nav-is-toggled');
});
  </script>

</body>
</html>
