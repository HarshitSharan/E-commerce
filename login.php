<?php include('nav.php'); ?>
<html>
<head>
	<title>Login page</title>
</head>
<body>

	<h1>
		<?php
		session_start();
		if(isset($_GET['nte']))
			unset($_SESSION['data']);
		if(isset($_GET['msg']))
			echo $_GET['msg'];
		if(isset($_GET['link']))
			$link=$_GET['link'];
		else {
		 	$link="pay.php";
		 } ?>
	</h1>

<form action="process.php" method="POST">
	<table>
		<input type="hidden" name="s" value='<?php echo $link ;?>'>
		<tr>
			<td>Enter Username :</td>
			<td><input type="text" name="u_name" placeholder="Enter Username"></td>
		</tr>
		<tr>
			<td>Enter Password :</td>
			<td><input type="Password" name="pw" placeholder="Enter Password"></td>
		</tr>
		<tr>
			<td colspan="2" align="Center"><button type="submit">Submit</button></td>
		</tr>
	</table>
</form>
</body>
</html>