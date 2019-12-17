<?php if(!isset($_SESSION)) {session_start();}  
//echo $_SESSION['email'];
$em=$_SESSION['email'];

?>

<ul class="nav">
    <li><a href="home(after).php">Home</a></li>	
    <li><a href="requests.php">Send Blood Request</a></li>
    <li><a href="viewrequest.php">View Blood Request</a></li>
    <li><a href="index.php">Profile</a></li>
    <li><a href="#">News Feed</a></li>
    <li><a href="#">Blood Bank</a></li>
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
            if($data[11]==$_SESSION['email'] && $data[12]==1){
    ?>
    <li><a href="response.php">Response!!</a></li>
    <?php
            }
        }
    }catch(PDOException $ex){
        //        echo "<script>window.alert('query errror')</script>";
    }
    ?>

    <!--    <li><a href="search.php">Search</a></li>-->
    <!--			            <li><a href="admin/admimlogin.php">Admin Login</a></li>-->
    <!--    <li><a href="#">Contact Us</a></li>-->
    <!--    <li><a href="#">About</a></li>-->
    <li><a href="logout.php">Log out</a></li>
</ul>