<!DOCTYPE html>
<html>
<style type="text/css">
        .newpass{
            color: darkgreen;
        }
    </style>
    <style type="text/css">
        .repass{
            color: red;
        }
    </style>



<body>
   
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









<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
    <legend> <label for="cngpass"><b>CHANGE PASSWORD</b></label><br></legend><br>
   


   <label for="cpass"><b>Current Password : </b></label>  <input type="password" id="cupass" name="cupass" value=""><span>



    </span><br><br>


   <label for="npass"><b><span class="newpass">
   New Password : </b></span></label>  <input type="password" id="nwpass" name="nwpass" value=""><span>



    </span><br><br>




   <label for="repass"><b><span class="repass">
   Retype New Password : </b></span></label>  <input type="password" id="nwpass" name="nwpass" value=""><span>



    </span><br><br><hr>


               
 

  
  <input type="submit" value="submit">  

</fieldset>
</form>


</body>
</html>   