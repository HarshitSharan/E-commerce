<?php
session_start();
if(isset($_SESSION['data']))
{
	?>
<html>
<head>
	<title>site.php</title>
</head>
<body>
<form action="sql_product.php" method="POST" enctype="multipart/form-data">
	<table>
		<h2>Register Product</h2>
		<tr>
			<td>Enter Id of Product : </td>
			<td><input type="number" name="id"></td>
		</tr>
		<tr>
			<td>Input Product Name : </td>
			<td><input type="text" name="P_name"></td>
		</tr>
		<tr>
			<td>Enter Quantity : </td>
			<td><input type="number" name="qty"></td>
		</tr>
		<tr>
			<td>Enter Price of each Product (in ₹) : </td>
			<td><input type="number" name="amt"></td>
		</tr>
		<tr>
			<td>Upload image : </td>
			<td><input type="file" name="img"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><button type='submit'>Submit</button></td>
		</tr>
	</table>
</form>
<h2>Product detail</h2>
<?php 
$con= mysqli_connect("localhost","root","","project1");
$qry="select * from product";
$sql=mysqli_query($con,$qry);?>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Product Name</td>
		<td>Quantity</td>
		<td>Amount</td>
		<td>User name</td>
		<td>Contact</td>
		<td>Image</td>
		<td>Operation</td> 
	</tr>

<?php 
while($row=mysqli_fetch_assoc($sql))
{

?>
	<tr>
		<td><?php echo $row['Id'];?></td>
		<td><?php echo $row['P_name'];?></td>
		<td><?php echo $row['Quantity'];?></td>
		<td><?php echo $row['Amount'];?></td>
		<td><?php echo $row['Us_name'];?></td>
		<td><?php echo $row['Contact'];?></td>
		<td><img height="200px" width="200px" src="uploads/<?php echo $row['loc']?>"></td>
		<td>
			<a href="edit_del.php?msg=del&id=<?php echo $row['Id'];?>">Delete</a><br>
			<a href="edit_del.php?msg=edit&id=<?php echo $row['Id'];?>">Edit</a>
		</td>
	</tr>
<?php 
}?>
</table>
<a href="login.php?nte=Logout">Logout</a>
</body>
</html>
<?php 
}
else
{
	header("location:login.php?msg=Please login First");
}

 ?>