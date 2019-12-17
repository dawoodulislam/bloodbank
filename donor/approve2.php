<?php if(!isset($_SESSION)) {session_start();}  
//echo $_SESSION['email'];
$em=$_SESSION['email'];
$_SESSION['varname'] = 0;
$r=7;
?>


<?php

if(isset($_GET['uid'])){
    $updateid=$_GET['uid'];
    echo $updateid;
}
if(isset($_GET['uid1'])){
    $updateid1=$_GET['uid1'];
    echo $updateid1;
}
try{
    $conn=new PDO("mysql:host=localhost:3306;dbname=bloodbank",'root','');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
    echo "<script>window.alert('db connection error')</script>";
}

try{
    $updatequery="UPDATE requestes SET r_email1='$em',quan=quan-1, flag='1' WHERE req_id='$updateid'";

    $conn->exec($updatequery); 
    
    header('location: viewrequest.php');
}
catch(PDOException $e){
    echo "<script>window.alert('update error');</script>";
}


?>

