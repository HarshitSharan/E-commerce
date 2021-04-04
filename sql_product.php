<?php 
session_start();
if(isset($_SESSION['data']))
{
	include('cont.php');
	//$con=mysqli_connect('localhost','root','','project1');
	$id=$_POST['id'];
	$p_name=$_POST['P_name'];
	$qty=$_POST['qty'];
	$amt=$_POST['amt'];
	$row=$_SESSION['data'];
	$us_name=$row['name'];
	$cnt=$row['phone_no'];
	$img=$_FILES['img'];
	echo $img['name']."<br>";
	$loc="D:/xampp/htdocs/project_1/uploads/".$img['name'];
	echo $loc;
	if($img['error']==0)
	{
		move_uploaded_file($img["tmp_name"],$loc);
		$im=$img['name'];
	}
	else
	{
		$im=$_POST['loc'];
	}
	$qry="insert into product values('$id','$p_name',$qty,$amt,'$us_name','$cnt','$im')";
	$sql=mysqli_query($con,$qry);
	print_r($img);
	 if($sql)
	 	header("location:site_gate.php");
	else
	 	echo "Error";
}
else
{
	echo "This Statement Shouldn't be visible";
	header("login.php?msg=You Need to Login To Enter the page");
}
 ?>
