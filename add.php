<?php 
session_start();
$p=++$_SESSION['cart'][$_GET['msg']]['qty'];
echo $p;
header("cart.php");
 ?>