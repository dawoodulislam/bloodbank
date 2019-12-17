<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
.dropdown {
  float: left;
  overflow: hidden;
}
    

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 18px 16px;
  background-color: inherit;
  font-family: inherit;
  text-transform: capitalize;
  text-shadow: 0 1px 0 #5C2830;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  color: #D13949;
  background-color:  #E5E5E5;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
    background-color: darkred;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<body>
<div style= "background-color : #E9DCC9; border-top: 1px solid rgba(214, 195, 167, 0.34);">
<div class="wrap">
<div class="header">
		<div class="logo">
            <a href="index.php"><img src="pic/logo.png" alt="" style="height:80px;width:120px;" ><img src="Images/nameddd.png" alt="" style="height:90px;width:180px;" ></a>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			
            <li><a href="../index.php" target="_blank">Preview Website</a></li>
			<div class="dropdown">
				<button class="dropbtn">User</button>
				<div class="dropdown-content">
				  <a href="adduser.php">Add User</a>
				  <a href="upuser.php">Update User</a>
				  <a href="deluser.php">Delete User</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Camp</button>
				<div class="dropdown-content">
				  <a href="addcamp.php">Add Camp</a>
				  <a href="updatecamp.php">Update Camp</a>
				  <a href="deletecamp.php">Delete Camp</a>
				  <a href="viewcamp.php">View camps</a>
				</div>
			 </div> 
			 
			<div class="dropdown">
				<button class="dropbtn">Gallary</button>
				<div class="dropdown-content">
				  <a href="addgallery.php">Add Gallery</a>
				  <a href="deletegallery.php">Delete Gallery</a>
				</div>
			 </div> 
			 <div class="dropdown">
				<button class="dropbtn">News</button>
				<div class="dropdown-content">
				  <a href="addnews.php">Add News</a>
				  <a href="deletenews.php">Delete News</a>
				  <a href="viewnews.php">View News</a>
				</div>
			 </div> 
             <li><a href="logout.php">Log Out</a></li>
         </ul>
	</div>
    </div>
</body>
</html>