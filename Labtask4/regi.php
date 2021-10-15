<!DOCTYPE html>
<html>
<style type="text/css">
        .err{
            color: red;
        }
    </style>



<body>
<?php include 'headfoot/headfoot2.php';?><br><br>


    <?php
$flag=1;
$nameErr = $emailErr = $genderErr = $dobErr = $name = $email = $dob = $gender = "";
$uname = $pass = "";
$userNameErr = $passErr = $confirmpassErr = $cpass = "";
$message = '';  
$error = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      $nameErr = "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      $nameErr = "At least two words needed";
      $name ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format Give valid";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Select gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["uname"])) {
    $userNameErr = "Give user name or nick name";
    $flag=0;
  } else {
    $uname = test_input($_POST["uname"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$uname)) {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $uname ="";
      $flag=0;
    }
    else if (strlen($uname)<2) {
      $userNameErr = "At least two charecter needed";
      $uname ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
    $flag=0;
  } else {
    $pass = test_input($_POST["pass"]);
    if (strlen($pass)<8) {
      $passErr = "Password must be 8 charecter";
      $pass ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$pass)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
      $pass ="";
      $flag=0;
    }
  }
  if (empty($_POST["cpass"])) {
    $confirmpassErr = "Retype The Current Password";
    $flag=0;
  } else {
    $cpass = test_input($_POST["cpass"]);
    if (strcmp($pass, $cpass)==1) {
      $confirmpassErr = "Password & Retyped Password Dose not Match";
      $cpass ="";
      $flag=0;
    }
  } 
 if ($flag==1) {
    if(isset($_POST["submit"]))  
    {
    if(file_exists('data.json'))
        {
            $current_data = file_get_contents('data.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                 'name'               =>     $_POST['name'],
                 'email'          =>     $_POST["email"],
                 'uname'          =>     $_POST["uname"],
                 'pass'          =>     $_POST["cpass"],  
                 'gender'          =>     $_POST["gender"],  
                 'dob'     =>     $_POST["dob"]  
                );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('data.json', $final_data))  
            {  
                 $message = "<label>Data Recorded Successfully</p>";  
            }  
        }  
        else  
        {  
           $error = 'JSON File not exits';  
        }  
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
    <legend> <label for="reg"><b>REGISTRATION</b></label><br></legend><br>

    <label for="username"><b>Name : </b></label>  <input type="text" id="name" name="name" value="">
    

    <span class="error">* <?php echo $nameErr;?></span>









    <br><br><hr><br>
     <label for="email"><b>Email : </b>  </label>    <input type="text" id="email" name="email" value="">  <b>i</b><span class="error">* <?php echo $emailErr;?></span><br><br><hr><br>


     <label for="uname"><b>User Name : </b>  </label>    <input type="text" id="uname" name="uname" value=""><span class="error">* <?php echo $userNameErr;?></span><br><br><hr><br>





     <label for="password"><b>Password : </b>  </label>    <input type="password" id="pass" name="pass" value=""><span class="error">* <?php echo $passErr;?></span><br><br><hr><br>
s



    <label for="cpassword"><b>Confirm Password : </b>  </label>    <input type="password" id="cpass" name="cpass" value=""> <span class="error">* <?php echo $confirmpassErr;?></span><br><br><hr><br>
       
    
    <fieldset>
    <legend> <label for="gender"><b>GENDER</b></label><br></legend>
   <input type="radio" id="male" name="gender" value="MALE">
   <label for="male">Male</label><input type="radio" id="female" name="gender" value="FEMALE">
   <label for="female">Female</label>
   <input type="radio" id="other" name="gender" value="OTHER">
   <label for="other">Other</label><span >

                


        </span><br><br><hr><br>
</fieldset><br><br>




<fieldset>
    <legend> <label for="dob"><b>Date of Birth</b></label><br></legend>
     <label for="dob"></label>
  <input type="date" id="dob" name="dob" >
   <span>

            

        </span><br><br><br>
</fieldset><br><br>
 
 
  
   <input type="submit" name="submit" value="Submit">  <input type="reset" value="reset">

</fieldset>
</form>

<?php
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
<br><br>


 <?php include 'headfoot/headfoot.php';?>

</body>
</html>   