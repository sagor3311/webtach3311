<!DOCTYPE html>
<html>
<style type="text/css">
        .err{
            color: red;
        }
    </style>



<body>

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