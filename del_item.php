<?php 
session_start();
unset($_SESSION['cart'][$_GET['index']]);
print_r($_SESSION['cart']);
header("location:view_cartm.php");
$ar ?>