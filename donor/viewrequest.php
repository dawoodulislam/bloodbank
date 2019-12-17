<?php if(!isset($_SESSION)) {session_start();}  
//echo $_SESSION['email'];
$em=$_SESSION['email'];
//$f=1;
$em1=1;
$count=0;
//if(!empty($_GET['myVariable'])){
//    $em1=$_GET['myVariable'];
//    echo $em1;
//}

$var_value = $_SESSION['varname'];
if($var_value==0){
    $em1=0;
    //    echo $em1;
}

//if($count>=1){
//    $em1=0;
//}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--        <meta http-equiv="refresh" content="4" > -->
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

        <!--
<style>
table, th, td{
border: 1.5px solid blue;
border-collapse: collapse;
}
td{
text-align: center;
}
</style>
-->

        <style>
            input[type=button],button {
                border: 1px solid #D50000;
                background-color: #b30000;
                color: #ffffff;
                padding: 5px 10px;
            }

            input[type=button],button:hover {
                border: 1px solid #e60000;
                background-color: #e60000;
                color: #ffffff;
                padding: 5px 10px;
            }

            button:disabled,
            button[disabled]{
                border: 1px solid #999999;
                background-color: #a6a6a6;
                color: #ffffff;
            }
            /*
            input[type=button],button {

            border:0px; 
            background:linear-gradient(#900,#D50000); 
            width:60px; 
            height:25px; 
            border-radius:5px 5px 5px 5px; 
            box-shadow:5px 5px 10px red; 
            color:white; 
            font-weight:bold; 
            font-size:12px;
            text-shadow:5px 1px 6px black;
            }

            input[type=button], button:hover {
            border: 1px solid #0099cc;
            background-color: #00aacc;
            color: #ffffff;
            padding: 5px 10px;
            }

            button:disabled,
            button[disabled]{

            border: 1px solid #999999;
            background-color: #cccccc;
            color: #e6e6e6;
            border-radius:5px 5px 5px 5px; 
            box-shadow:5px 5px 10px white; 
            width:60px; 
            height:25px;
            font-weight:bold; 
            font-size:12px;
            text-shadow:5px 1px 6px black;
            }
            */
        </style>
    </head>

    <body>

        <?php

        if($_SESSION['donorstatus']=="")
        {
            header("location:../login.php");
        }
        ?>
        <?php include('function.php'); ?>

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
            <!--
<div class="nav_bg">
<div class="wrap">
<ul class="nav">
<li><a href="chngpwd.php">Change Password</a></li>	
<li><a href="updateprofile.php">Update Profile</a></li>            
<li><a href="blooddonated.php">Blood Donated</a></li>
<li><a href="viewdonations.php">View Donations</a></li>
<li><a href="viewrequest.php">View Requestes</a></li>
<li><a href="logout.php">log Out</a></li>

</ul>
</div>
</div>
-->
            <div style="height:2500px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
                <form method="post" enctype="multipart/form-data">
                    <div align="center"><img src="Images/brequest.png" height="90px" ></div>
                    <br>
                    <br>
                    <div cellpadding="0" cellspacing="0" width="450px" align="center">

                        <?php
                        try{

                            $conn=new PDO("mysql:host=localhost:3306;dbname=bloodbank",'root','');

                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        }
                        catch(PDOException $ex){
                            echo "<script>window.alert('db connection errror')</script>";
                        }

                        try{
                            $sqlquery="Select * from requestes";

                            $object=$conn->query($sqlquery);
                            $table=$object->fetchAll();
                            foreach($table as $data){
                                if($data[13]==$_SESSION['email'] ||$data[14]==$_SESSION['email']){
                                    $count=$count+1;
                                }
                            }
                        }catch(PDOException $ex){
                            echo "<script>window.alert('query errror')</script>";
                        }

                        try{
                            $sqlquery="Select * from requestes";

                            $object=$conn->query($sqlquery);
                            if($object->rowCount()==0){
                        ?>

                        <div  style=' padding-left:30px'>No Request Found!!</div>

                        <?php
                            }
                            $table=$object->fetchAll();
                            foreach($table as $data){
                                //                            $f=1;
                                if(($data[13]==$_SESSION['email'] || $data[14]==$_SESSION['email']) && $data[12]==1){
                                    //                                echo $f;
                                    //                                echo $em1;
                                    //                                $f=0;
                                    //                                echo $f;
                        ?>

                        <div align="center" style="height:200px;width:500px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">

                            <div  align="center" >Name:<?php echo $data[1]?></div>
                            <div  align="center" >Blood Group:<?php echo $data[6]?></div>
                            <div  align="center" >Quantity:<?php echo $data[9]?></div>

                            <div  align="center" >Mobile No:<?php echo $data[4]?></div>
                            <div  align="center" >Address:<?php echo $data[10]?></div>
                            <div  align="center" >Email:<?php echo $data[5]?></div>
                            <div  align="center" >Till Required Date:<?php echo $data[7]?></div>
                            <div align="center" >Response:
                                <button name="bttn11" value="1" disabled >1Bag</button>
                                <button name="bttn22" value="2" disabled>2Bags</button>
                            </div>
                            <?php if($data[12]!="" ||$data[13]!=""){
                            ?>
                            <div align="center">Resposed by:
                                <?php 
                            $sqlr="SELECT name from donarregistration WHERE email='$data[13]'";
                            $name1=$conn->query($sqlr);
                            $name11=$name1->fetch();
                            $name111=$name11['name'];
                            //                        $name1->execute();
                            if($name111!=""){
                                echo $name111 ; ?>&nbsp;<?php
                            }

                            $sqlr1="SELECT name from donarregistration WHERE email='$data[14]'";
                            //                        $name2=$conn->query($sqlr1)->fetchAll(PDO::FETCH_COLUMN);
                            //                        $name2=$conn->prepare($sqlr1);
                            //                        $name2->execute();
                            $name2=$conn->query($sqlr1);
                            $name22=$name2->fetch();
                            $name222=$name22['name'];
                            if($name222!=""){
                                echo $name222 ;
                            }

                                ?>
                            </div>


                            <?php
                        }
                            ?>
                            <br>
                        </div>
                        <?php


                                }

                                else if(($data[12]==0 && $em1==0)||($data[9]<=0 && $data[12]==1)|| $count==1||($data[11])==$em ){
                                    //                                echo $f;
                                    //                                echo $em1;
                                    //                                $f=1;
                                    //                                echo $f;
                        ?>

                        <div align="center" style="height:200px;width:500px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">

                            <div  align="center" >Name:<?php echo $data[1]?></div>
                            <div  align="center" >Blood Group:<?php echo $data[6]?></div>
                            <div  align="center" >Quantity:<?php echo $data[9]?></div>

                            <div  align="center" >Mobile No:<?php echo $data[4]?></div>
                            <div  align="center" >Address:<?php echo $data[10]?></div>
                            <div  align="center" >Email:<?php echo $data[5]?></div>
                            <div  align="center" >Till Required Date:<?php echo $data[7]?></div>
                            <div align="center" >Response:
                                <button name="bttn11" value="1" disabled>1Bag</button>
                                <button name="bttn22" value="2" disabled>2Bags</button>
                            </div>
                            <div align="center">Resposed by:
                                <?php 
                            $sqlr="SELECT name from donarregistration WHERE email='$data[13]'";
                                    $name1=$conn->query($sqlr);
                                    $name11=$name1->fetch();
                                    $name111=$name11['name'];
                                    //                        $name1->execute();
                                    if($name111!=""){
                                        echo $name111 ; ?>&nbsp;<?php
                                    }

                                    $sqlr1="SELECT name from donarregistration WHERE email='$data[14]'";
                                    //                        $name2=$conn->query($sqlr1)->fetchAll(PDO::FETCH_COLUMN);
                                    //                        $name2=$conn->prepare($sqlr1);
                                    //                        $name2->execute();
                                    $name2=$conn->query($sqlr1);
                                    $name22=$name2->fetch();
                                    $name222=$name22['name'];
                                    if($name222!=""){
                                        echo $name222 ;
                                    }

                                ?>
                            </div>
                            <br>
                        </div>
                        <?php
                                }


                                else if(($data[12]==0 &&($data[13]=="") && $em1==1)){
                                    //                                echo $f;
                                    //                                echo $em1;
                                    //                                                                    $f=1;
                                    //                                echo $f;
                        ?>
                        <div align="center" style="height:200px;width:500px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">

                            <div align="center" >Name:<?php echo $data[1]?></div>
                            <div  align="center" >Blood Group:<?php echo $data[6]?></div>
                            <div  align="center" >Quantity:<?php echo $data[9]?></div>

                            <div  align="center" >Mobile No:<?php echo $data[4]?></div>
                            <div  align="center">Address:<?php echo $data[10]?></div>
                            <div  align="center" >Email:<?php echo $data[5]?></div>
                            <div  align="center" >Till Required Date:<?php echo $data[7]?></div>
                            <div align="center" >Response:

                                <input type="button" value="1Bag" onclick="donate1(<?php echo $data[0]  ?>);">


                                <?php
                            //                        $f=0;

                            if($data[9]<=1){

                                ?>
                                <button name="bttn23" disabled>2Bags</button>
                                <?php
                            }
                                    else{
                                ?>
                                <input type="button" value="2bag" onclick="donate2(<?php echo $data[0]  ?>);">
                                <?php
                                    //                                $f=0;
                                    }
                                    //                                reset($table);


                                ?>

                                <!--                            <button name="bttn2" value="2" onclick="donate2();">2Bag</button>-->


                            </div>
                            <div align="center">Resposed by:
                                <?php 
                                    $sqlr="SELECT name from donarregistration WHERE email='$data[13]'";
                                    $name1=$conn->query($sqlr);
                                    $name11=$name1->fetch();
                                    $name111=$name11['name'];
                                    //                        $name1->execute();
                                    if($name111!=""){
                                        echo $name111 ; ?>&nbsp;<?php
                                    }

                                    $sqlr1="SELECT name from donarregistration WHERE email='$data[14]'";
                                    //                        $name2=$conn->query($sqlr1)->fetchAll(PDO::FETCH_COLUMN);
                                    //                        $name2=$conn->prepare($sqlr1);
                                    //                        $name2->execute();
                                    $name2=$conn->query($sqlr1);
                                    $name22=$name2->fetch();
                                    $name222=$name22['name'];
                                    if($name222!=""){
                                        echo $name222 ;
                                    }

                                ?>
                            </div>
                            <br>
                            <?php
                                }
                                else if(($data[12]==1 &&($data[13]!="") && $data[9]>=1)){
                                    //                                echo $f;
                                    //                                echo $em1;
                                    //                                                                    $f=1;
                                    //                                echo $f;
                            ?>
                            <div align="center" style="height:200px;width:500px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">

                                <div align="center" >Name:<?php echo $data[1]?></div>
                                <div  align="center" >Blood Group:<?php echo $data[6]?></div>
                                <div  align="center" >Quantity:<?php echo $data[9]?></div>

                                <div  align="center" >Mobile No:<?php echo $data[4]?></div>
                                <div  align="center">Address:<?php echo $data[10]?></div>
                                <div  align="center" >Email:<?php echo $data[5]?></div>
                                <div  align="center" >Till Required Date:<?php echo $data[7]?></div>
                                <div align="center" >Response:

                                    <input type="button" value="1Bag" onclick="donate3(<?php echo $data[0]  ?>);">


                                    <?php
                                //                        $f=0;

                                if($data[9]<=1){

                                    ?>
                                    <button name="bttn23" disabled>2Bags</button>
                                    <?php
                                }
                                    else{
                                    ?>
                                    <input type="button" value="2bag" onclick="donate4(<?php echo $data[0]  ?>);">
                                    <?php
                                        //                                $f=0;
                                    }
                                    //                                reset($table);


                                    ?>

                                    <!--                            <button name="bttn2" value="2" onclick="donate2();">2Bag</button>-->


                                </div>
                                <div align="center">Resposed by:
                                    <?php 
                                    $sqlr="SELECT name from donarregistration WHERE email='$data[13]'";
                                    $name1=$conn->query($sqlr);
                                    $name11=$name1->fetch();
                                    $name111=$name11['name'];
                                    //                        $name1->execute();
                                    if($name111!=""){
                                        echo $name111 ; ?>&nbsp;<?php
                                    }

                                    $sqlr1="SELECT name from donarregistration WHERE email='$data[14]'";
                                    //                        $name2=$conn->query($sqlr1)->fetchAll(PDO::FETCH_COLUMN);
                                    //                        $name2=$conn->prepare($sqlr1);
                                    //                        $name2->execute();
                                    $name2=$conn->query($sqlr1);
                                    $name22=$name2->fetch();
                                    $name222=$name22['name'];
                                    if($name222!=""){
                                        echo $name222 ;
                                    }

                                    ?>
                                </div>
                                <br>
                                <?php
                                }


                            }
                        }
                        catch(PDOException $e){
                            echo "<script>window.alert('query errror')</script>";
                        }
                                ?>


                            </div>
                        </div>

                        </form>
                    </div>



                <div class="clear"></div>
                <div class="ftr-bg">
                    <div class="wrap">

                    </div>
                </div>
                <script>

                    function donate1(id){
                        ///loading the update.php page to perform the update operation


                        location.assign('approve.php?uid='+id);


                        //                header('location: viewrequests.php');
                    }
                    function donate2(id){
                        ///loading the update.php page to perform the update operation

                        location.assign('approve1.php?uaid='+id);
                    }

                    function donate3(id){
                        ///loading the update.php page to perform the update operation


                        location.assign('approve2.php?uid='+id);


                        //                header('location: viewrequests.php');
                    }
                    function donate4(id){
                        ///loading the update.php page to perform the update operation

                        location.assign('approve3.php?uaid='+id);
                    }



                </script>






                </body>
            </html>