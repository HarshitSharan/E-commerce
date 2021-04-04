<?php 
	$name=$_POST['name'];
	$phn=$_POST['ph_no'];
	$uname=$_POST['u_name'];
	$pw=$_POST['pw'];
	$con=mysqli_connect("localhost","root","","project1");
	$sql="insert into user (u_name,password,phone_no,name) values('$uname','$pw','$phn','$name')";
	if(mysqli_query($con,$sql))
		header("location:login.php");
	else
	{
		echo "Something Went Wrong Looks like the user name already exist or you have not filled each detail";
		echo '<br><a href="signup.php">Get back to Signup page</a>';
	}
?>