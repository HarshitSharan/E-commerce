<html>
<head>
	<title>Front</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		session_start();
	 include('nav.php');
 	 ?>
	<div class="container">
	<div class="row">

	<?php 
	$con=mysqli_connect("localhost","root","","project1");
	$qry=mysqli_query($con,"select * from product");
	while($row=mysqli_fetch_assoc($qry))
	{
		?>
		
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<?php echo $row['P_name']; ?>
					</div>
					<div class="panel-body">
						<img height="200px" width="200px" src="uploads/<?php echo $row['loc']?>"><br>
					</div>
					<div class="panel-footer" style="text-align: center;">
						<a href="detail.php?id=<?php echo $row['Id']; ?>">
							<button class="btn btn-success">
								Add to Cart
							</button>
						</a>
					</div>
				</div>
			</div>
	<?php }?>
	</div>
</div>
</body>
</html>