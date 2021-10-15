<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<?php 
session_start();
	echo "<div>"; include 'headfoot/headfoot2.php';echo "</div>";



 ?>

    	Account<hr>
    	<div style="float: left; text-align: left;">
    	* <a href="dash.php">Dashboard</a><br><br>
    	* <a href="profile.php">View Profile</a><br><br>
    	* <a href="cngprofile.php">Edit Profile</a><br><br>
    	* <a href="cngprfPic.php">Change Profile Picture</a><br><br>
    	* <a href="cngpass.php">Change Password</a><br><br>
    	* <a href="logout.php">Logout</a><br><br><hr><div>

<?php if (isset($_SESSION['uname'])) {
	echo "<div style= 'margin-right: 850px;'> Welcome ".$_SESSION['uname']."</div>";


}?>
<img src="headfoot/prfl.jpg" alt="" width="200" height="200"><br><br>



    		<?php include 'headfoot/headfoot.php';?></div>
    </div>

  


  
 

</body>
</html>