<?php  
require_once 'controller/studentInfo.php';

$product = fetchproduct($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Products Name</th>
			<th>Buying price</th>
			<th>Selling Price</th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
				<td><?php echo $product['bprice'] ?></td>
				<td><?php echo $product['sprice'] ?></td>
				<td>
					<a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>
					&nbsp
					<a href="controller/deleteProduct.php?id=<?php echo $product['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
	</tr>

</table>


</body>
</html>