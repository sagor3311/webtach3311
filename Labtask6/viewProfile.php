<!DOCTYPE html>
<?php
session_start();
require_once 'controller/viewProfile.php';
$instructor = fetchProfile($_SESSION['username']);

?>
<html> 
	 <head>
	 <title> Dashboard </title>
	 </head>  
	 <body>
	      
		     <p> <h1 > Your profile </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged as  <?php echo  $_SESSION['username']?>|
		       <a href="logout.php">Logout</a>     
		   </h3>  
		<fieldset>
	      <h2> <u> Account </u> </h2> 
		   
            <h4> <b>
             <ul>
			   <li> <a href="dashboard.php"> Dashboard   </a></li><hr>
                <li> <a href= "viewProfile.php"> View Profile </a> </li><hr>
                <li> <a href="editProfile.php"> Edit Profile </a></li><hr>
                <li> <a href="changePassword.php">Change Password</a> </li></ul><hr>   
		     <h4/></b> 
		    <h1 > MY PROFILE </h1>
	          Email:  <?php echo $instructor['Email']; ?> <br><br>
		      Contactno: <?php echo $instructor['ContactNo']; ?> <br><br>
		      Username: <?php echo $instructor['Username']; ?> <br><br>

			
	
		  
		
		   
	 </body>
	 
</html>	 