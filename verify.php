<?php 
$chk=$_GET['msg'];
$con=mysqli_connect("localhost","root","","project1");
$qry="select * from user where u_name='$chk'";
$sql=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($sql);
if(!$row)
	echo " ";
else
	echo "Already Registered User";
 ?>