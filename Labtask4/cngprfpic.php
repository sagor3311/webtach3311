<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture</title>
</head>
<body>
	<?php 
session_start();
	echo "<div>";include 'headfoot/headfoot2.php';echo "</div>";
 ?>
	
    	Account<hr>
    	<div style="float: left; text-align: left;">
    	* <a href="dashboard.php">Dashboard</a><br><br>
    	* <a href="profile.php">View Profile</a><br><br>
    	* <a href="cngProfile.php">Edit Profile</a><br><br>
    	* <a href="cngprfPic.php">Change Profile Picture</a><br><br>
    	* <a href="cngePass.php">Change Password</a><br><br>
    	* <a href="logout.php">Logout</a>
    </div> 

    
<form action="upload.php" method="post" enctype="multipart/form-data">
  <fieldset>
<legend><B>PROFILE PICTURE</B></legend> <br>

 <img src="prfl.jpg" alt="" width="200" height="200"><br><br>

  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><hr>
  <input type="submit" name="submit">
</form>
</fieldset>
<div><?php include 'headfoot/headfoot.php';?></div>
</body>
</html>