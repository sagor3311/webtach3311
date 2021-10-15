<!DOCTYPE html>
<html>
<style type="text/css">
        .err{
            color: red;
        }
    </style>



<body>
    Account<hr>
        <div style="float: left; text-align: left;">
        * <a href="dash.php">Dashboard</a><br><br>
        * <a href="profile.php">View Profile</a><br><br>
        * <a href="cngprofile.php">Edit Profile</a><br><br>
        * <a href="cngprfPic.php">Change Profile Picture</a><br><br>
        * <a href="cngpass.php">Change Password</a><br><br>
        * <a href="logout.php">Logout</a><br><br><hr><div>

<form action="upload.php" method="post" enctype="multipart/form-data">
<fieldset>
    <legend> <label for="prfl"><b>PROFILE</b></label><br></legend><br>
    <?php
        echo "Select image to upload:"

    ?><br><br>

<img src="prfl.jpg" alt="" width="200" height="200"><br><br>

  <input type="file" name="fileToUpload" id="fileToUpload"><br><br><hr>


  <input type="submit" value="submit">

</fieldset>
</form>


</body>
</html>   