<?php 
	$uname=$_POST['u_name'];
	$pw=$_POST['pw'];
	$s=$_POST['s'];
	session_start();
	$con=mysqli_connect("localhost","root","","project1");
	$sql="select * from puser where u_name='$uname' and password='$pw'";
	$sq=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($sq);
	//if($row['u_name']==$uname && $row['password']==$pw)
	if($row)
	{	
		$ar=$row;
		$_SESSION['data']=$ar;	
		echo "congratulation if its visible to you are a lucky champ";
		header("location:".$s);
	}
	else
	{
		//echo "nhi mila ";
		//echo "wrong user name or password <br><a href ='login.php'>lets Try this again </a><br><a href ='signup.php'>SignUp </a>";
		header('location:login.php?msg=Invalid details');
	}
?>