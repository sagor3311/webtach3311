<!DOCTYPE html>
<html>
<style type="text/css">
        .err{
            color: red;
        }
    </style>



<body>


<?php


    $nameErr = $emailErr = $genderErr = $dobErr = $BLGPErr = $degreeErr = "";
    $fname = $email = $gender = $dob = $BLGP =  "";
    $checkdegree = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["fname"])) {
        $nameErr = "Name is required";
      } else {
        $fname = test_input($_POST["fname"]);
       
        if (!preg_match("/^[a-zA-Z-']*$/",$fname)) {
          $nameErr = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
       
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }

      if (empty($_POST["dob"])) {
     $dobErr = "Must select date of birth is required";
     } else {
     $dob = test_input($_POST["dob"]);


    if (!filter_var($dob)) {
    $dobErr = " Cannot be empty.";
    }
    }

     if (empty($_POST["BLGP"])) {
    $BLGPErr = "Blood group must be selected";
     } else {
     $BLGP = test_input($_POST["BLGP"]);
     $BLGPErr="";
     }


     if (empty($_POST["checkdegree"])) {
     $degreeErr= "Degree is required. select at least two degree.";
     }
    else {
    foreach ($_POST["checkdegree"] as $key) {
    array_push($checkdegree, $key);
    }
    if(count($checkdegree)<2){
    $degreeErr = "At least two degree must be selecte";
    }
    }

    


      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
  }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>



    <?php 
    if (isset($_POST['submitButton'])) {
        echo "<h1>Your Input</h1>";

        echo $fname . "<br>";
        echo $email . "<br>";
        echo $dob . "<br>";
        echo $comment . "<br>";
        echo $gender . "<br>";
        echo $checkboxxxx . "<br>";
    }

     ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
    <legend> <label for="fname"><b>NAME</b></label><br></legend><br>
<input type="text" id="fname" name="fname" value=""><span class="err">*

            <?php 
            if (isset($nameErr)) {
                echo $nameErr; 
            }
            ?>
        </span>
        <br><br><hr>



</fieldset><br><br>

<fieldset>
    <legend> <label for="email"><b>EMAIL</b></label><br></legend>

 
  <input type="text" id="email" name="email">  <label for="it"><b>i</b></label><span class="err">*

            <?php 
            if (isset($emailErr)) {
                echo $emailErr; 
            }
            ?>
        </span><br><br>  <hr>

</fieldset><br><br>



<fieldset>
    <legend> <label for="dob"><b>DATE OF BIRTH</b></label><br></legend>

  <label for="dob"></label>
  <input type="date" id="dob" name="dob" >
   <span class="err">*

            <?php 
            if (isset($dobErr)) {
                echo $dobErr; 
            }
            ?>

  <br><br><hr>
</fieldset><br><br>



<fieldset>
    <legend> <label for="gender"><b>GENDER</b></label><br></legend>
   <input type="radio" id="male" name="gender" value="MALE">
   <label for="male">Male</label><input type="radio" id="female" name="gender" value="FEMALE">
   <label for="female">Female</label>
   <input type="radio" id="other" name="gender" value="OTHER">
   <label for="other">Other</label><span class="err">*

            <?php 
            if (isset($genderErr)) {
                echo $genderErr; 
            }
            ?>
        </span><br><br><hr>
</fieldset><br><br>



<fieldset>
    <legend> <label for="degree"><b>DEGREE</b></label><br></legend>
  
  <input type="checkbox" id="ssx" name="checkdegree[]" value="SSC">
  <label for="ssx"> SSC</label>
  <input type="checkbox" id="hsc" name="checkdegree[]" value="HSC">
  <label for="hsc"> HSC</label>
   <input type="checkbox" id="bsc" name="checkdegree[]" value="BSc">
  <label for="bsc"> BSc</label>
   <input type="checkbox" id="msc" name="checkdegree[]" value="MSc">
  <label for="msc"> MSc</label><span class="err">*

   <?php
         echo $degreeErr;

   ?>


</span>

  <br><br><hr>


</fieldset><br><br>



<fieldset>
    <legend> <label for="BLGP"><b>BLOOD GROUP</b></label><br></legend><label for="BLGP"></label>
  <input list="browsers" name="BLGP" id="BLGP">
  <datalist id="browsers">
  <option value="A+">
  <option value="A-">
  <option value="B+">
  <option value="B-">
  <option value="AB+">
  <option value="O-">
  <option value="O+">
  <option value="other">
  </datalist><span class="err">*

            <?php 
            if (isset($BLGPErr)) {
                echo $BLGPErr; 
            }
            ?>
<br><br><hr>
  <input type="submit" value="submit">
</fieldset>

</form>




    <?php 
 {
        echo "<h1>Your Input</h1>";

        echo "NAME: ";echo $fname . "<br>";
        echo "EMAIL: ";echo $email . "<br>";
        echo "DATE OF BIRTH: ";echo $dob . "<br>";
        echo "BLOOD GROUP: "; echo $BLGP . "<br>";
        echo "GRENDER: ";echo $gender . "<br>";
        echo "DEGREE: ";
     $arrlength = count($checkdegree);
     for($x = 0; $x < $arrlength; $x++) {
     echo $checkdegree[$x];echo " , ";}
     echo "<br>";
 }

     ?>



</body>
</html>
