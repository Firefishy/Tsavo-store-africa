<?php
	$currDir = dirname(__FILE__);
	include_once("{$currDir}/lib.php");
	include_once("{$currDir}/header.php");

	if($_GET['redir'] == 1) {
		echo '<META HTTP-EQUIV="Refresh" CONTENT="5;url=index.php?signIn=1">';
	}
?>
<style>
*{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
.bidy{
background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#E958FF ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#E958FF;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#FAE9FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#E958FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#E958FF;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  box-shadow: 4px 8px 40px 8px rgba(245, 66, 236, 0.2);
}
  
}
</style>
<body class="bidy">
<!-- partial:index.partial.html -->
<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1><?php echo $Translation['thanks']; ?></h1>
      <p><?php echo $Translation['sign in no approval']; ?>  </p>
	  <hr />
      <p><?php echo $Translation['sign in wait approval']; ?></p>
	  <hr />
      <a href="https://tsavo.store" class="go-home">
      go home
      </a>
    </div>
    <div class="footer-like">
      <p>Email not received?
       <a href="#">Click here to send again</a>
      </p>
    </div>
</div>
</div>



<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
<!-- partial -->
  
</body>

<?php include_once("$currDir/footer.php");
