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

<style type="text/css">
      .scrollable {
        height: 100%;
        overflow-y: scroll;
      }
    </style>
</head>

<body>

<?php include('admin/function.php'); ?>

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
		
		<?php require('header.php');?>
	</div>
	
<div class="scrollable" style="height:600px; width:730px; margin:auto; margin-top:10px; margin-bottom:10px;margin-left:10px; background-color:#f8f1e4; border:0px solid red; box-shadow:4px 1px 20px green; float:left ">
    
    <div style="height:10%; width:100%; background-color:#f8ff90; ">
        <h1 align="center" style="font-size:50px; color: darkred;">Blood Requests</h1>
        </div>
    
				<form method="post" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" width="500px" height="100%" style="margin:auto" >
                
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:bisque" align="center" class="bold">            
             <td class="bold" style="color:red"  >Blood Group</td><td align="center">Name</td><td align="center">Gender</td><td align="center">Contact No</td><td align="center">Mobile No</td><td align="center">Email</td>
            <td align="center">Till Required Date</td>
        </tr>
                   

<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from requestes";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:50px'>$data[0]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[3]</td><td  style=' padding-left:50px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td><td  style=' padding-left:60px'>$data[6]</td></tr>";
			}
			mysqli_close($cn);
			?>
			
			<tr><td>&nbsp;</td></tr>
			</table>

			</form>
        </div>
    
    <div class="scrollable" style="height:600px; width:500px; margin:auto; margin-top:10px; margin-bottom:10px;margin-right:10px; background-color:#f8f1e4; border:0px solid red; box-shadow:4px 1px 20px green; float:right ">
        <div style="height:10%; width:100%; background-color:#f8ff90; ">
        <h1 align="center" style="font-size:50px; color: darkred;">Newsfeed</h1>
        </div>
				<form method="post" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" width="500px" height="100%" style="margin:auto" >

			<tr><td colspan="2" align="center"></td></tr><br>
                
                <tr style="background-color:bisque" align="center" class="bold">            
             <td class="bold" style="color:red"  >Serial</td><td align="center">Title</td><td align="center">Details</td>
        </tr>
               

			<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from news";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:50px'>$data[0]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td></tr>";
    
			}
			mysqli_close($cn);
			?>
			<tr><td>&nbsp;</td></tr>
			</table>

			</form>
        </div>
    
          
			<div class="clear"></div>
	<div class="ftr-bg">
	<div class="wrap">
	<div class="footer">
		<div class="f_nav">
			<ul>
				<li><a href="home(afer).php">Home</a></li>			
				<li><a href="donar.php">Donor</a></li>
				<li><a href="index.php">Log out</a></li>
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

<?php
if(isset($_POST["sbmt"])) 
{	
	$cn=makeconnection();
		$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
			$s="insert into requestes(name,gender,age,mobile,bgroup,email,reqdate,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."')";
			
			
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