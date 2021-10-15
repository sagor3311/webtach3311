<!DOCTYPE html>
<html>

    <style type="text/css">
        .repass{
            color: red;
        }
    </style>



<body>
  <?php include 'headfoot/headfoot2.php';?><br><br>
   
   <?php
   $cupass=$npass=$repass="";
   $cpasswordErr=$npasswordErr=$rnpasswordErr="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["cupass"])) {
       $cpasswordErr = "Current Password is required";
     }
     else {
      $cpassword = test_input($_POST["cupass"]);

       if (strcmp($cupass,"sagor3311")) {
          $cpasswordErr = "Incorrect Password";
        }

        }

        if (empty($_POST["npass"])) {
          $npasswordErr = "New Password is required";
        }
        else {
         $npass = test_input($_POST["npass"]);

          if (!strcmp($npass,"sagor3311")) {
             $npasswordErr = "Current and New Password can not be same.";
           }

           }

           if (empty($_POST["repass"])) {
             $rnpasswordErr = "Retype New Password is required";
           }
           else {
            $repass = test_input($_POST["repass"]);

             if (strcmp($npass,$rnpassword)) {
                $rnpasswordErr = "Retype password and New Password need to be same.";
              }

              }
     }





   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }

     ?>




Account<hr>
        <div style="float: left; text-align: left;">
        * <a href="dash.php">Dashboard</a><br><br>
        * <a href="profile.php">View Profile</a><br><br>
        * <a href="cngprofile.php">Edit Profile</a><br><br>
        * <a href="cngprfPic.php">Change Profile Picture</a><br><br>
        * <a href="cngpass.php">Change Password</a><br><br>
        * <a href="logout.php">Logout</a><br><br><hr><div>





<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
    <legend> <label for="forgot"><b>Forgot Password</b></label><br></legend><br>
   


  


   <label for="eml"><b>
    Email:  </b></label>  <input type="text" id="email" name="email" value="">
    <span class="repass">*




    </span><br><br><hr>

               
 

  
  <input type="submit" value="submit">  

</fieldset>
</form><br><br>


 <?php include 'headfoot/headfoot.php';?>


</body>
</html>   