<?php 
	session_start();
	include('nav.php');
	$con=mysqli_connect("localhost","root","","project1");
	foreach ($_SESSION['cart'] as $id => $ar) 
	{
			$qry="insert into cart values ('".$ar['pid']."',".$ar['qty'].",'".$ar['pname']."',".$ar['amt'].",'".$_SESSION['data']['Name']."',".$_SESSION['tot'].")";
			mysqli_query($con,$qry);
	}
	unset($_SESSION['tot']);
	if(isset($_SESSION['data']))
		header("location:pay_view.php");	
	else
		header("location:login.php?msg=Please Login First To Continue");
?>