<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	</style>
</head>
<body>
	<?php
	include('top.php');
	?>
	<br>
	<div class="container" align="left">
  		<div class="row">
  			<div class="col-12" align="center">
  				<?php
				include('COMBINE.php');
				?><br>
  			</div>


    		<div class="col-12">
    			<div id="bb"><br>
				      <img src="profile.png" height="200" width="200"><br><br>
				      <meta><b>Name : ALAMIN ISLAM</b></meta><br><br>
				      <meta><b>ID : 123456</b></meta><br><br>
				      <meta><b>EMAIL : 123@GMAIL.COM</b></meta><br><br>
				      <meta><b>CONTACT NO : 1234567890</b></meta><br><br>
      			</div>
   			</div>
  		</div><br>
	</div>


	<?php
	include('footer.php');
	?>

</body>
</html>