<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<?php 
session_start();
	echo "<div>";include 'headfoot/headfoot2.php';echo "</div>";

 ?>

    	Account<hr>
    	<div style="float: left; text-align: left;">
    	* <a href="dash.php">Dashboard</a><br><br>
    	* <a href="profile.php">View Profile</a><br><br>
    	* <a href="cngProfile.php">Edit Profile</a><br><br>
    	* <a href="cngPrfPic.php">Change Profile Picture</a><br><br>
    	* <a href="cngPass.php">Change Password</a><br><br>
    	* <a href="logout.php">Logout</a>
    </div>
    
    <?php if (isset($_SESSION['uname'])) {
	echo "<fieldset>
<legend><B>PROFILE</B></legend><div style= 'margin-right: 900px;float: left; text-align: left;color:black;'> Username: ".$_SESSION['uname']."<hr>
	<br>Name: ALAMIN ISLAM<hr>
	<br>Email: sagor3311@gmail.com<hr>
	<br>Gender: Male<hr>
	<br>Date Of Birth: 09/07/1999<hr><img src='headfoot/prfl.JPG' alt='Profile Picture' width='250' height='250'>
	</div>
	
	<div style= 'float: right;position: absolute;left:600px; top: 240px;color: red;'>
	<fieldset>
	
</fieldset>
	</div></fieldset>";

}?>
  

<div><?php include 'headfoot/headfoot.php';?></div>
</body>
</html>