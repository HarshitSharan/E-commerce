<?php 
	$name=$_POST['name'];
	$phn=$_POST['ph_no'];
	$uname=$_POST['u_name'];
	$pw=$_POST['pw'];
	$mail=$_POST['mail'];
	$state=$_POST['state'];
	$add=$_POST['add'];
	$con=mysqli_connect("localhost","root","","project1");
	$sql="insert into puser (u_name,password,phn_no,Name,state,Address,mail) values('$uname','$pw','$phn','$name','$state','$add','$mail')";
	if(mysqli_query($con,$sql))
		header("location:login.php");
	else
	{
		echo "Something Went Wrong Looks like the user name already exist or you have not filled each detail";
		echo '<br><a href="signup.php">Get back to Signup page</a>';
	}
?>