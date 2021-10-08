<!DOCTYPE html>
<html>
<style type="text/css">
        .err{
            color: red;
        }
    </style>



<body>
  <?php 
   
    $nameErr = $passwordErr = $newPasswordErr = "";
    $pass = $uname = $newPassword = "";
    $nc =strlen($uname);
    $pc =strlen($pass);
     $flag=1;

    
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $uname = test_input($_POST["uname"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$uname)) {
      $nameErr = "Only letters white space, period & dash allowed";
      $uname ="";
      $flag=0;
    }
    else if (str_word_count($uname)<2) {
      $nameErr = "At least two words needed";
      $uname ="";
      $flag=0;
    }
  }
         

 

          if (empty($_POST["pass"])) {
            $passwordErr = "password is required";
          } else {
            $pass = test_input($_POST["pass"]);
            if ($pc>8)
             {
              $passwordErr = "must not be less than eight (8) characters.must contain at least one of the special characters (@, #, $,
              %)";
              $pass ="";
            }
          }
          if (empty($_POST["newPassword"])) {
            $newPasswordErr = "password is required";
          } else {
            $newPassword = test_input($_POST["pass"]);
            if ($pass != $newPassword)
             {
              $newPasswordErr = "New password did not match";
              $newPassword ="";
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
    <legend> <label for="login"><b>LOGIN</b></label><br></legend><br>

    <label for="username"><b>User Name : </b></label>  <input type="text" id="uname" name="uname" value=""> <span class="err">* <?php echo $nameErr;?></span><br><br>






     <label for="password"><b>Password : </b>  </label>    <input type="password" id="pass" name="pass" value=""> <span class="err">* <?php echo $passwordErr;?></span>


               





        </span>
        <br><br><hr>
 
  <input type="checkbox" id="rmme" name="rmme" value="Remember Me">
  <label for="rmme">Remember me</label><br><br>
  
   <input type="submit" name="submit" value="Submit">  <a href="http://">Forgot password?</a>

</fieldset>
</form>


</body>
</html>   