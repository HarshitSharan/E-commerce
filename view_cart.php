<?php 
	$c=0;
include('nav.php');
session_start();
$con=mysqli_connect("localhost","root","","project1"); ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Payment Details</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 </head>
 <body>
 	<div class="container-fluid">
 		<div class="panel panel-info">
 			<div class="panel-heading">
 				<h1> Payment Detail</h1>
 			</div>
 			<div class="panel-body">
 				<table class="table">
 					<tr>
 						<th>Product</th>
 						<th>Quantity</th>
 						<th>Cost</th>
 					</tr> 
 					<?php
 					if(!isset($_SESSION['cart']))
 						{?>
 					<tr>
 						<td style="color: red;">Cart Empty</td>
 					</tr>
 					<?php } else{
 						$i=0;
 					foreach ($_SESSION['cart'] as $id => $qty) 
 					{
 						$qry="select * from product where Id=$id";
						$sql=mysqli_query($con,$qry);
						$row=mysqli_fetch_assoc($sql);
 					?>
 					<tr>
 						<td><?php echo " ".$row['P_name']; ?> </td>
 						<td><?php echo $qty ?>kg </td>
 						<td><?php echo $qty*($row['Quantity']/$row['Amount']); ?></td>
 						<td><a href="del_item.php?index=<?php echo $i++; ?>" >delete</a></td>
 					</tr>
 				<?php
 				$c=$c+$qty*($row['Quantity']/$row['Amount']); }} ?>
 				</table>
 			</div>
 			<div class="panel-footer">
 				<table>
 				 	<tr>
 						<td> Total Cost</td>
 						<td>:</td>
 						<td><?php echo " ".$c; ?></td>
 					</tr>
 				</table>
 			</div>
 		</div>
 		<a href="clr_cart.php"><button class="btn btn-warning">Clear Cart</button>
 		<a href="index.php"><button class="btn btn-info">Add More Item</button>
 		<a href="pay.php"><button class="btn btn-success">Proceed To Pay</button>

 	</div>
 </body>
 </html>