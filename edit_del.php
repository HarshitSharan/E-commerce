<?php 
	$con=mysqli_connect("localhost","root","","project1");
	$id=$_GET['id'];
	$qry="select * from product where Id='$id'";
	$sql=mysqli_query($con,$qry);
	$row=mysqli_fetch_assoc($sql);
	$qry="delete from product where Id='$id'";
	mysqli_query($con,$qry) or die("Not Able to delete");
	if($_GET['msg']=='edit')
	{
		echo $_GET['msg'];
	 ?>
<html>
<head>
	<title>Edit Detail</title>
</head>
<body>
<form action="sql_product.php" method="POST" enctype="multipart/form-data">
	<table>
		<h2> Product</h2>
		<tr>
			<td>Enter Id of Product : </td>
			<td><input type="number" name="id" value=<?php echo $row['Id'];?> > </td>
		</tr>
		<tr>
			<td>Input Product Name : </td>
			<td><input type="text" name="P_name" value=<?php echo $row['P_name'];?>></td>
		</tr>
		<tr>
			<td>Enter Quantity : </td>
			<td><input type="number" name="qty" value=<?php echo $row['Quantity'];?>></td>
		</tr>
		<tr>
			<td>Enter Price of each Product (in ₹) : </td>
			<td><input type="number" name="amt" value=<?php echo $row['Amount'];?>></td>
		</tr>
		<tr>
			<td>Upload image : </td>
			<td><input type="file" name="img" ></td>
		</tr>
		<input type="hidden" name="loc" value=<?php echo $row['loc'];?> >
		<tr>
			<td colspan="2" align="center"><button type='submit'>Submit</button></td>
		</tr>

	</table>
</form>
</body>
<?php
 }
 else
 {
 	header("location:site_gate.php");
 }
 ?>

</html>