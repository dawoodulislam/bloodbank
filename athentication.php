<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood AID</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>


div#myDIV2 {display: none;}

div#myDIV {display: block;}

</style>
 
</head>

<body>
   <?php
// Start the session
session_start();
$_SESSION["code"] = rand(10,10000);
?>
    <?php $token = "4ad33580cc92624b98db481cc3336334"; ?>
  <div style= "background-color : gainsboro;">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1 style="font-size:60px; color: #bb0c00; align:center;"><img src="pic/logo.png" alt="">BLOOD AID</h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('athentic_header.php');?>
	</div>
<div style="height:400px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >
<br>
    <tr><td colspan="2"  align="center"><h1 style="font-size:30px; color: darkred;"><u>Authentication Required</u></h1/></td></tr>
   
<tr><td colspan="2">&nbsp;</td></tr>
   
                <tr><td  style=" padding-left:20px;" >&nbsp; </td>
                    <td style="vertical-align:top;padding-top:10px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%; height:300px;">

<tr><td class="lefttd"><p1>You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.</p1></td></tr>
<br>
<tr><td><p1>Enter the 6-digit code from your code generator or third-party app below.</p1></td></tr>
<tr><td><div style="height:100px; width:300px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
   
   
<div id="myDIV">
<input type="text" name="to" id="to" placeholder="+8801xxxxxxxxx" />

<button type="submit" name="submit" onclick="submitnumber()" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "/>Submit Name</button>
</div>
<p id="demo"></p>
<div id="myDIV2">
<input type="text" name="code" id="code" placeholder="code" />

<button type="submit" name="submit" onclick="submitcode()" class="btn btn-success btn-large">Submit Code</button>
</div>
        </div></td></tr>
<tr><td><input type="submit" value="Continue" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
</td></tr>
</table>
</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li><a href="index.php">Home</a></li>			
            <li><a href="login.php">log Out</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">Blood Aid 2019</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
<script>

function submitnumber() {
	var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
   var x2 = document.getElementById("myDIV2");
  if (x2.style.display === "none") {
    x2.style.display = "block";
  } else {
    x2.style.display = "block";
  }
	var to,token,msg,code;
	to=document.getElementById("to").value;
	code = "<?php echo $_SESSION["code"] ?>"; 
	token = "4ad33580cc92624b98db481cc3336334"; 
	const url="http://api.greenweb.com.bd/api.php?token="+token+"&to="+to+"&message="+code ;
	const Http = new XMLHttpRequest();

Http.open("GET", url, true);
Http.send();
  
Http.onreadystatechange = (e) => {
  console.log(Http.responseText)
  document.getElementById("demo").innerHTML = Http.responseText;
	
}
}
function submitcode() {
	 var code1=document.getElementById("code").value;
	 if (code1==code) {
	 	document.getElementById("demo").innerHTML = "Verified";
	 }

}
</script>
</body>
</html>