<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
    <fieldset>
    <legend> <label for="reg"><b>ADD PRODUCTS</b></label><br></legend><br>
  <label for="name">Product Name:</label><br>

  <input type="text" id="name" name="name"><br><br>

  <label for="bprice1">Buying Price:</label><br>

  <input type="text" id="bprice" name="bprice"><br><br>

  <label for="sprice1">Selling Price:</label><br>

  <input type="text" id="sprice" name="sprice"><br><br>



  <input type="checkbox" name="Display" >DISPLAY<br><br>

  <input type="submit" name = "save" value="save">
  <input type="reset"> 
</form> 

</body>
</html>

