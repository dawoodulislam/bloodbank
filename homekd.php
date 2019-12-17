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
	

    
    <div class="scrollable" style="height:600px; width:800px; margin:auto; margin-top:10px; margin-bottom:10px;margin-right:10px; background-color:#f8f1e4; border:0px solid red; box-shadow:4px 1px 20px green; float:none">
        <div style="height:10%; width:100%; background-color:#f8ff90; ">
        <h1 align="center" style="font-size:50px; color: darkred;">Newsfeed</h1>
        </div>
				<form method="post" enctype="multipart/form-data">
		          <div style="height:150px; width:500px; margin:auto; margin-top:10px; margin-bottom:10px;background-color:grey;float:none;">
       
                              <div style="height:30%; width:100%; margin:auto; margin-top:10px; margin-bottom:10px;margin-right:10px; background-color:skyblue;float:none; "> 
                      
                                  <div style="height:100%; width:30%; margin:auto;margin-left:10px; background-color: white;float:left; ">Image </div>
                                  <div style="height:100%; width:65%; margin:auto;margin-right:10px; background-color:#ffffff;float:right;">Name:</div>
                                </div>
                      <div style="height:60%; width:100%; margin:auto; background-color:#566611;float:right; "></div>
                      <div style="height:20%; width:100%; margin:auto; background-color:#ffffff;float:right; "><input type="button" name="response"style="height:100%; width:200px;" value="Response"><input type="button" name="comment"style="height:100%; width:200px;margin-left:5px;" value="Comment"> </div>
                                 
                                </div>
                             
                    
                              
        

			</form>
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