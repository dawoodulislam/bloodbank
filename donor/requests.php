<?php if(!isset($_SESSION)) {session_start();}  
//echo $_SESSION['email'];
$em=$_SESSION['email'];

?>
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
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('../admin/function.php'); ?>

 <div style= "background-color : #E9DCC9; border-top: 1px solid rgba(214, 195, 167, 0.34);">
<div class="wrap">
<div class="header">
		<div class="logo">
            <a href="home(after).php"><img src="pic/logo.png" alt="" style="height:80px;width:120px;" ><img src="Images/nameddd.png" alt="" style="height:90px;width:180px;" ></a>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
<div style="height:530px; width:500px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="0" cellspacing="0" width="500px" height="480px" style="margin:auto" >

   <tr><td colspan="2" align="center"><h1 style="font-size:50px; color: darkred;">Request for Blood</h1/></td></tr><br>

<!--   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   -->

                   
<tr><td class="lefttd" align="center"> Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /></td></tr>
<!-- <tr><td>&nbsp;</td></tr>-->
<tr><td class="lefttd" align="center">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female">Female</td></tr>
<!-- <tr><td>&nbsp;</td></tr>-->
<tr><td class="lefttd" align="center">Age</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
<!-- <tr><td>&nbsp;</td></tr>-->
<tr><td class="lefttd" align="center">Mobile No</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
<!-- <tr><td>&nbsp;</td></tr>-->
<tr><td class="lefttd" align="center">Blood Group </td><td><select name="bl"><option value="">Select</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="A+">A+</option>
<option value="A-">A-</option>

</select>
<!-- <tr><td>&nbsp;</td></tr>-->
     <tr><td class="lefttd" align="center">Address</td><td><input type="text" name="t11" required="required" pattern="[a-zA-Z _ ,]{5,50}" title="please enter only character  between 5 to 50 for Address" /></td></tr>
      <tr><td class="lefttd" align="center">Quantity</td><td><input type="number" name="t10"  required="required" pattern="[1-3]{1}" title="please enter only numbers between 1 to 3" /></td></tr>
<tr><td class="lefttd" align="center">E-Mail</td><td><input type="email" name="t5" required="required" /></td></tr>
<!-- <tr><td>&nbsp;</td></tr>-->
<tr><td class="lefttd" align="center">Till Required Date</td><td>
<select name="month">
<option value="1">JAN</option>
<option value="2">FEB</option>
<option value="1">MARCH</option>
<option value="1">APRIL</option>
<option value="1">MAY</option>
<option value="1">JUNE</option>
<option value="1">JULY</option>
<option value="1">AUG</option>
<option value="1">SEPT</option>
<option value="1">OCT</option>
<option value="1">NOV</option>
<option value="1">DEC</option>
</select>
<select name="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<input type="text" name="year" style=" width:50px"  /></td></tr>
<!-- <tr><td>&nbsp;</td></tr>-->
<tr><td class="lefttd" align="center">Detail</td><td><textarea name="t7"></textarea></td></tr>
<!-- <tr><td>&nbsp;</td></tr>-->
<tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>

</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li><a href="home(afer).php">Home</a></li>			
<!--			<li><a href="donar.php">Donor</a></li>-->
			<li><a href="logout.php">Log out</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">Blood Aid 2019</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>

<?php
if(isset($_POST["sbmt"])) 
{
			
		
	$cn=makeconnection();
		$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
			$s="insert into requestes(name,gender,age,mobile,email,bg_name,reqdate,detail,quan,Address,poster) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t5"] . "','" . $_POST["bl"] . "','" . $d .  "','" .  $_POST["t7"]  ."','" .  $_POST["t10"]  ."','" .  $_POST["t11"]  ."','$em')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>