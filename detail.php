<?php 
session_start();
include('nav.php');
$con= mysqli_connect("localhost","root","","project1");
$id=$_GET['id'];
$qry= "Select * from product where Id='$id'";
$sql=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Detail</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 	<style type="text/css">

 		.borderless td, .borderless th ,.borderless tr
 		{
				border: none !important;		
		}
 	</style>
 </head>
 <body>
 <div class="container">
 <div class="col-lg-6 col-md-6 col-sm-6">
 	<img height="300px" width="300px" src="uploads/<?php echo $row['loc']; ?>">
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
	<div class="panel panel-danger">
		<div class="panel-heading ">
			<h1><?php echo $row['P_name']; ?></h1>
		</div>
		<div class="panel-body">
			<h2>Id : <?php echo $row['Id']; ?>
			<h2> Price :₹<?php echo $row['Quantity']; ?>/<?php echo $row['Amount']; ?>kg</h2></h2>
			<div class="panel-footer">
				Updated by-<?php echo $row['Us_name']; ?>	
			</div>
		</div>
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 ">
	<form action="cart.php" method="POST" >
		<table class="table borderless" style="border: none;">
		<tr>
		<td>Enter Quantity(in kg)</td>
		<td><div class="form-group"> <input style="margin:10px 0px 0px; border: none; border-bottom: solid grey; outline: none;" type="number" name="qty"></div></td>
		</tr>
		<tr>
		<td>Enter Address </td>
		<td><div class="form-group"><input style="margin:10px 0px 0px;border: none; border-bottom: solid grey; outline: none;" type="text" name="add"></div><td>
		</tr>
		<input type="hidden" name="id" value=<?php echo $row['Id']; ?> >
		<tr>
			<td><button type="submit" class="btn btn-danger">
				Proceed to Cart
			</button></td>
		</tr>
	</form>
</div>	
 </body>
 </html>