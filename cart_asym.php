<?php 
include('nav.php');
session_start();
$con=mysqli_connect("localhost","root","","project1");
if(!isset($_GET['msg']))
{
$id=$_POST['id'];
"select * from tab where id=$id";
$qty=$_POST['qty'];
$pr=array();
$pr[$id]=$qty;
if(isset($_SESSION['cart']))
{
		if(empty($_SESSION['cart']))
			array_push($_SESSION['cart'], $pr);
		else
		{
				$fl=0;
				foreach ($_SESSION['cart'] as $key => $value)
				{
						if($key==$id)
						{
							$_SESSION['cart'][$id]=$_SESSION['cart'][$id]+$qty;
							$fl=1;
							break;
						}	
				}
				if($fl==0)
				{
					$_SESSION['cart'][$id]=$qty;
				}
		}
}
else
{
	$_SESSION['cart']=$pr;
}
}
echo "<pre>";
print_r($_SESSION['cart']);
	//header("location:view_cart.php");
 ?>
 