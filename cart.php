<?php 
session_start();
$con=mysqli_connect("localhost","root","","project1");

$qty=$_POST['qty'];
$id=$_POST['id'];

$qry="select * from product where Id='$id'";
$sql=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($sql);

$p=array();
$p['pid']=$id;
$p['qty']=$qty;
$p['pname']=$row['P_name'];
$p['amt']=$row['Amount']/$row['Quantity']*$qty;
$p['pic']=$row['loc'];

if(empty($_SESSION['cart']))
{
	$_SESSION['cart']=array($p);
}
else
{
	$fl=0;
	$al=$_SESSION['cart'];
	for($i=0;$i<sizeof($al);$i++)
	{
		if($al[$i]['pid']==$id)
		{
			$al[$i]['qty']+=$qty;
			$fl=1;
		}
	}	

	if($fl==0)
		array_push($al, $p);

	$_SESSION['cart']=$al;
}


//echo "<pre>";
//print_r($_SESSION['cart']);
header("location:view_cartm.php");
 ?>
