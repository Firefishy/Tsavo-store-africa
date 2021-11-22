<!DOCTYPE html>
<html onLoad="disableClick()">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Tsavo | Kenya</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-----icon-------->
	 <link rel="shortcut icon" href="tsavo_vendor/images/icon.png" type="images/x-icon" />
	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">
	<!---flaticons---->
	<link rel="stylesheet" type="text/css" href="includes/font/flaticon.css">
	<!----banners--------->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  	<!-- Custom CSS -->
    <style type="text/css">
	
	 .elegantshadow {  color: #131313;  background-color: #e7e5e4;  letter-spacing: 0.15em;  text-shadow: 1px -1px 0 #767676, -2px -4px 1px #828181, ;  text-align: center;  text-transform: uppercase;  text-rendering: optimizeLegibility;  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;   font-size: calc(1.5vw + 1.5vh + .6.vmin);   padding: 20px 10px;   width:100%;}

	
	::-moz-selection { /* Code for Firefox */
  color: #FFFFFF;
  background: #FF69FF;
}

::selection {
  color: #FFFFFF;
  background: #FF69FF;
}
	
	 .btn-primary{
  background-image: linear-gradient(to right, #FF39EC , #20D7FF);
  }
	 .gra{
  background-image: linear-gradient(to right, #FF39EC , #20D7FF);
  }
  .graa{
  background-image: linear-gradient(to right, #20D7FF , #FF39EC);
  }
  .btn-primary{
 background-image: linear-gradient(to right, #FF39EC , #20D7FF);
 border:none;
   }
   .booi-b{
	height:200px;
width:100%;
	 }
	 .booi{
	height:230px;
width:100%;
	 }
	 .ba{
display: block; /* or inline-block */
  text-overflow: ellipsis;
  white-space: nowrap;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 3.5em;
  line-height: 2.5em;
		  }
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){ 
      #navbar-search-input{ 
        width: 60px; 
      }
      #navbar-search-input:focus{ 
        width: 100px; 
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){ 
      #navbar-search-input{ 
        width: 150px; 
      }
      #navbar-search-input:focus{ 
        width: 250px; 
      } 
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: -1.3em; 
      width: 1.3em;
    }

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }
/*
 * modernaweb.net
 * * * * * * * * * */
 /*------------for phones-------------------------*/

 @media screen and (max-width:768px) {
.list-grid {
    position: relative !important;
        top: auto !important;
        left: auto !important;
        width: 60%;
        width: calc( 50% - 10px );
        float: left;
margin-left:6px;
}
.list-grid-search {
    position: relative !important;
        top: auto !important;
        left: auto !important;
        width: 60%;
        width: calc( 50% - 10px );
        float: left;
margin-left:6px;
}
.list-grid-sidebar {
    position: relative !important;
        top: auto !important;
        left: auto !important;
        width: 60%;
        width: calc( 50% - 10px );
        float: left;
margin-left:10px;


}
.booi{
height:135px;
width:100%;
 }
#review{
font-size:2rem;
text-wrap: normal;
 }
 .hidder{
 display: none;
  }
 .fox{
 width:100%;
  }
 .cats{
 width:30.3%;
 float:left;
 margin-left:5px;
 font-size:25px;
  }
  cot{
  font-size:35px;
  
   }
}

/*------------for laptops-------------------------*/
@media screen 
  and (min-device-width: 992px) 
  and (max-device-width: 1920px) 
   { 
  .booi{
  height:230px;
width:100%;
   }
 .review{
 font-size:1.25rem;
  } 
  .list-grid{
  width:20%;
  float:left;
   }
   .list-grid-sidebar{
   width:100%;
  
   }
   .list-grid-search{
  width:25%;
  float:left;
   }
   .cats{
   width:15.70%;
   float:left;
   margin-left:10px;
   font-size:35px;
   
    }
	cot{
  font-size:45px;
  
   }
   .hidder-desktop{
   display: none;
    }
}
/*--------marquee sliders---------*/
logo-slider {
  --image-size: 100px;
  border: 1px solid #575757;
  padding: 20px;
  overflow: hidden;
  
  width: 100%;
  margin: 0 auto;
  position: relative;
  display: flex;
}
logo-slider:hover div {
  animation-play-state: paused;
}
logo-slider div {
  display: flex;
  position: relative;
  animation: marquee 5s linear infinite;
  justify-content: space-around;
}
logo-slider img {
  display: block;
  min-width: var(--image-size);
  height: var(--image-size);
  margin: 0 1vw;
}
logo-slider:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: linear-gradient(to right, white, rgba(255, 255, 255, 0) 80px, rgba(255, 255, 255, 0) calc(100% - 80px), white);
}
@media (max-width: 900px) {
  logo-slider {
    --image-size: 50px;
    --image-size: min(max(50px, 10vw), 100px);
  }
}

@keyframes marquee {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}

/*===============rating stuff=================================*/
.btn-grey{
    background-color:#D8D8D8;
	color:#FFF;
}
.btn-tsavo{
    background-color:#D807D8;
	color:#FFF;
}
.btn-tsavo:hover {
background-color: #B707B7; 
color:#FFF;
}
.rating-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px 15px 20px 15px;
	border-radius:3px;
}
.bold{
	font-weight:700;
}
.padding-bottom-7{
	padding-bottom:7px;
}

.review-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px;
	border-radius:3px;
	margin-bottom:15px;
}
.review-block-name{
	font-size:12px;
	margin:10px 0;
}
.review-block-date{
	font-size:12px;
}
.review-block-rate{
	font-size:13px;
	margin-bottom:15px;
}
.review-block-title{
	font-size:15px;
	font-weight:700;
	margin-bottom:10px;
}
.review-block-description{
	font-size:13px;
}
.average {
	background-color:#388e3c;
	line-height: normal;
    display: inline-block;
    color: #fff;
    padding: 2px 4px 2px 6px;
    border-radius: 3px;
    font-weight: 500;
    font-size: 12px;
    vertical-align: middle;
}
.rating-reviews {
	    padding-left: 8px;
    font-weight: 500;
    color: #878787;
}


@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #667;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
.hidden {
  display:none;
}
.logged-user {
  font-weight:bold;
}
.user-pic {
	width: 60px;
	height: 60px;
}
/*---------==========context menu======================------------------*/

    </style>

</head>
