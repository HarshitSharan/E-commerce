<?php 
	
	session_start();
	include('nav.php');
	$c=0;
	?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Payment Details</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<style type="text/css">
 			.me td, .me th ,.me tr
 		{
				border: none !important;		
		}
		button[id^="qty"]
		{
			color: white;
			border: none;
			outline: none;
			background-color: #00b6e8;
			border-radius: 100%;
		}
 	</style>
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
 						<th>Product Image</th>
 						<th>Product</th>
 						<th>Quantity</th>
 						<th>Cost</th>
 						<th>Operation</th>
 					</tr> 
 					<?php
 					 if(empty($_SESSION['cart']))
 						{?>
 					<tr>
 						<td style="color: red;">Cart Empty</td>
 					</tr>
 					<?php } else{
 					foreach ($_SESSION['cart'] as $i => $ar) 
 					{
 					?>
 					<tr>
 						<td>
 							<img height="100px" width="100px" src="uploads/<?php echo $ar['pic'];?>">
 						</td>
 						<td>
 							<?php echo " ".$ar['pname']; ?>
 						</td>
 						<td>
 							<button id="qty<?php echo $i; ?>" onclick="add(<?php echo $i; ?>)">
 								+
 							</button>
 							<span id="res<?php echo $i; ?>"><?php echo $ar['qty'] ?></span>
 							kg 
 						</td>
 						<td><?php echo $ar['amt']; ?></td>
 						<td><a href="del_item.php?index=<?php echo $i++; ?>" > <?php echo $i-1;?> delete</a></td>
 					</tr>
 				<?php
 				$c=$c+$ar['amt']; }} ?>
 				</table>
 			</div>
 				<div class="row panel-footer">
 						<div class="col-sm-8">
 							
 						</div>	
 						<div class="col-sm-4">
 							

 							<div>
 				
 				<table class="table me" >
 				 	<tr>
 						<td>Cost of Cart</td>
 						<td>:</td>
 						<td>
 							<?php echo " ".$c; ?>
 						</td>
 					</tr>
 					<tr>
 						<td>Discount (5%)</td>
 						<td>:</td>
 						<td><?php echo -1*$dis=$c*.05;?></td>
 					</tr>
 					<tr>
 						<td>GST(18%) </td>
 						<td>:</td>
 						<td><?php echo $tax=$c*(.18); ?></td>
 					</tr>
 					<tr>
 						<td>Total Amount</td>
 						<td>:</td>
 						<td><?php echo $tot=$c+$tax-$dis; ?></td>
 					</tr>
 					<tr >
 						<td>
 							<?php $_SESSION['tot']=$tot;?>
 							<a href="pay.php"><button class="btn btn-success">Proceed To Pay</button></a>
 						</td>
 						<td>
 							<a href="clr_cart.php"><button class="btn btn-warning">Clear Cart</button></a>
 						</td>
 						<td>
 							<a href="index.php"><button class="btn btn-info">Add More Item</button></a>
 						</td>
 					</tr>
 				</table>
 			</div>
 						</div>
 				</div>
 		</div> 	
 	</div>
 	<script type="text/javascript">
 		function add(k) 
 		{
 			http= new XMLHttpRequest();
 			http.open("GET","add.php?msg="+k);
 			http.send();
			http.onreadystatechange=function()
			{
		     if (this.readyState==4 && this.status==200)
			 {
				document.getElementById('res'+k).innerHTML=this.responseText;	 	
			 }
			}
		}
 	</script>
 </body>
 </html>
