<?php if(!isset($_SESSION)) {session_start();} 
$em="";
$em1="";
//try{
//
//    $conn=new PDO("mysql:host=localhost:3306;dbname=bloodbank",'root','');
//
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}
//catch(PDOException $ex){
//    //        echo "<script>window.alert('db connection errror')</script>";
//}
//try{
//    $sqlquery="Select * from requestes";
//
//    $object=$conn->query($sqlquery);
//    $table=$object->fetchAll();
//    foreach($table as $data){
//        if($data[12]==1 && $data[11]==$_SESSION['email']){
//            
//             $em=$data[13];
////            echo $em;
//            $em1=$data[14];
//        }
//    }
//}catch(PDOException $ex){
//    //        echo "<script>window.alert('query errror')</script>";
//}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
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

        <div style= "background-color : #E9DCC9; border-top: 1px solid rgba(214, 195, 167, 0.34);">
            <div class="wrap">
                <div class="header">
                    <div class="logo">
                        <a href="home(after).php"><img src="pic/logo.png" alt="" style="height:80px;width:120px;" ><img src="Images/nameddd.png" alt="" style="height:90px;width:180px;" ></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="h_bg">
            <div class="wrap">
                <div class="header">
                    <div class="logo">
                        <!--			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="nav_bg">
            <div class="wrap">

                <?php require('header.php');?>
            </div>
        </div>
        <div style="height:1000px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">




            <?php


            try{

                $conn=new PDO("mysql:host=localhost:3306;dbname=bloodbank",'root','');

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $ex){
                //        echo "<script>window.alert('db connection errror')</script>";
            }
            try{
                $sqlquery="Select * from requestes";

                $object=$conn->query($sqlquery);
                $table=$object->fetchAll();
                foreach($table as $data){
                    if($data[12]==1 && $data[11]==$_SESSION['email']){

                        $em=$data[13];
                        //            echo $em;
                        $em1=$data[14];

                        $con = mysqli_connect("localhost","root","");

                        //Select Database
                        if(!mysqli_select_db($con,'bloodbank'))
                        {
                            echo "Database Not Selected";
                        }
                        //Select Query
                        $sql = "SELECT * FROM donarregistration WHERE email='$em'";

                        //Execute the SQL query
                        $records = mysqli_query($con,$sql);


                        while($row3 = mysqli_fetch_array($records))
                        { 
                            $name=$row3['name'];
                            $bg=$row3['bg_name'];
                            $mobile=$row3['mobile'];
                            $email=$row3['email'];
                            $add=$row3['Address'];

                        }
                    }
                }
            }catch(PDOException $ex){
                //        echo "<script>window.alert('query errror')</script>";
            }

            //Create Connection with MySQL Database

            ?>


            <form>

                <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">

                    <tr><td style="padding-bottom:40px" colspan="2" align="center"><img src="Images/responselogo.png" width="200px";height="70px" /></td></tr>

                    <tr><td colspan="2">&nbsp;</td></tr>
                    <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">
                        <tr><td  align="right">&nbsp;</td>

                            <td style="vertical-align:top" width="450px" height="400px">
                                <table cellpadding="0" cellspacing="0" width="450px">
                                    <td style="vertical-align:top; padding-left:70px" width="500px">
                                        <table cellpadding="0" cellspacing="0" width="450px" align="center" >
                                            <tr><td class="lefttd"  style="vertical-align:middle"> Name :</td><td><?php echo @$name;  ?></td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                            <tr><td class="lefttd"  style="vertical-align:middle"> Blood Group</td><td><?php echo @$bg;?></td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                            <tr><td class="lefttd"  style="vertical-align:middle"> Mobile No</td><td><?php echo @$mobile;?></td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

                                            <tr><td class="lefttd"  style="vertical-align:middle"> Email</td><td><?php echo @$email;?></td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                            <tr><td class="lefttd"  style="vertical-align:middle"> Address</td><td><?php echo @$add;?></td></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

                                            <!--		<tr><td>&nbsp;</td><td><input type="submit" value="Update" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	-->

                                            <tr><td colspan="2"  align="center"></td></tr>

                                        </table></table></td></tr>	</table>

                    </form>
                <?php
                if($em1 != ""){
                    $sql1 = "SELECT * FROM donarregistration WHERE email='$em1'";

                    //Execute the SQL query
                    $records1 = mysqli_query($con,$sql1);


                    while($row31 = mysqli_fetch_array($records1))
                    { 
                        $name1=$row31['name'];
                        $bg1=$row31['bg_name'];
                        $mobile1=$row31['mobile'];
                        $email1=$row31['email'];
                        $add1=$row31['Address'];

                    }

                ?>

                <form>

                    <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">
                        <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">
                            <tr><td  align="right">&nbsp;</td>

                                <td style="vertical-align:top" width="450px" height="400px">
                                    <table cellpadding="0" cellspacing="0" width="450px">
                                        <td style="vertical-align:top; padding-left:70px" width="500px">
                                            <table cellpadding="0" cellspacing="0" width="450px" align="center" >
                                                <tr><td class="lefttd"  style="vertical-align:middle"> Name :</td><td><?php echo @$name1;  ?></td></tr>
                                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                                <tr><td class="lefttd"  style="vertical-align:middle"> Blood Group</td><td><?php echo @$bg1;?></td></tr>
                                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                                <tr><td class="lefttd"  style="vertical-align:middle"> Mobile No</td><td><?php echo @$mobile1;?></td></tr>
                                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

                                                <tr><td class="lefttd"  style="vertical-align:middle"> Email</td><td><?php echo @$email1;?></td></tr>
                                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                                <tr><td class="lefttd"  style="vertical-align:middle"> Address</td><td><?php echo @$add1;?></td></tr>
                                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

                                                <!--		<tr><td>&nbsp;</td><td><input type="submit" value="Update" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	-->

                                                <tr><td colspan="2"  align="center"></td></tr>

                                            </table></table></td></tr>	</table></table>

                </form>
                <?php
                }
                ?>
                </div>





        </div>








        <div class="clear"></div>
        <!--
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
<div class="f_nav">
<ul>
<li class="active"><a href="index.php">Home</a></li>			
<li><a href="donor.php">Donor</a></li>
<li><a href="login.php">log In</a></li>
<li><a href="aboutus.php">About</a></li>
<li><a href="contact.php">Contact Us</a></li>

</ul>
</div>
<div class="copy">
<p class="title">© All Rights Reserved | Design by Mr. Bhatia |</p>
</div>
<div class="clear"></div>
</div>
</div>
</div>
-->
    </body>
</html>