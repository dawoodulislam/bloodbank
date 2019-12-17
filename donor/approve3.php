<?php if(!isset($_SESSION)) {session_start();}  
//echo $_SESSION['email'];
$em=$_SESSION['email'];
$_SESSION['varname'] = 0;
?>


<?php

if(isset($_GET['uaid'])){
    $updateid=$_GET['uaid'];
}
try{
    $conn=new PDO("mysql:host=localhost:3306;dbname=bloodbank",'root','');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
    echo "<script>window.alert('db connection errror')</script>";
}

try{
    $updatequery="UPDATE requestes SET r_email1='$em',quan=quan-2, flag='1' WHERE req_id='$updateid'";

    $conn->exec($updatequery);
    echo "<script>window.alert('update successful.');</script>";
    header('location: viewrequest.php');


}
catch(PDOException $e){
    echo "<script>window.alert('update error');</script>";
}
?>