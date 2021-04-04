<html>
<head>
	<title>Front</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
</head>
<body>
<div class="back">
<div class="navbar navbar-inverse">
<div class="container-fluid">	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-target="#box" data-toggle="collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>

		<a href="index.php" class="navbar-brand">Welcome Home</a>
</div>
				<div class="collapse navbar-collapse" id="box">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
				</ul>
				<?php
				 if(!isset($_SESSION['data']))
				{ ?>
				<ul class="nav navbar-nav navbar-right " style="padding:0px 50px;">
					<li><a href="adm_login.php">Admin Login</a></li>
					<li>
						<a href="login.php?link=<?php echo $uri = $_SERVER['REQUEST_URI'];?>">Login</a>
					</li>
					<li>
						<a href="signup.php">signup</a>
					</li>
					<li><a href="view_cartm.php?msg=dir"><img src="uploads/cart.png" height="25px" width="25px"></a></li>

				</ul>

				<?php 
				}
				else
				{ 
					?>
				<ul class="nav navbar-nav navbar-right">
					
					<li style="color:white;"><a href=""><?php echo "Welcome ".$_SESSION['data']['Name']; ?></a></li>
					<li><a href="login.php?nte=Logout">Logout</a></li>
					<li><a href="view_cartm.php?msg=dir"><img src="uploads/cart.png" height="25px" width="25px"></a></li>

				</ul>

				<?php 
				}
				 ?>
				</div>
</div>
</div>
</div>
</body>
</html>