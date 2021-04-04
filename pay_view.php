<?php session_start();
include('nav.php'); ?>
<!DOCTYPE html>
		<html>
		<head>
			<title>Payment</title>
		</head>
		<body>
		<div class="container">
			<div class="Col-lg-6 col-md-6 col-sm-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Contact Detail
					</div>
					<div class="panel-body">
						<b>Delivery Adresss :</b>
							<?php echo $_SESSION['data']['Address']; ?><br>
						<b>State :</b> 
							<?php echo $_SESSION['data']['state'];?><br>
						<b>Contact Number:</b>
							<?php echo $_SESSION['data']['phn_no']; ?>
					</div>
					<div class="panel-footer">
						<b>Name:</b><?php echo $_SESSION['data']['Name']; ?>
					</div>
				</div>
			</div>
			<form action="gateway.php" method="post">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Payment Preference
					</div>
					<div class="panel-body">
						<input type="radio" name="method" value="cod">
						Cash on Delivery<br>
						<input type="radio" name="method" value="cpay">
						Card Payment<br>
						<!-- <input type="radio" name="method" value="phnpe">
						phone pe<br>
						<input type="radio" name="method" value="dr">
						Pay Directly To Harshit<br> -->
					</div>
				</div>
			</div>
			<a href=""><button type="submit">Proceed</button></a>
		</div>
	</form>
		</body>
		</html>
