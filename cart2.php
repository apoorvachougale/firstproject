<?php

include "dbconnect.php";

session_start();
$e=$_SESSION['id'];
$id=$_GET['a'];
$query1 = "SELECT * FROM `cart` WHERE `id` = '$id';";
$result1 = mysqli_query($con, $query1);
while($row = mysqli_fetch_array($result1))
{ 
$p= $row['price'];
$q= $row['qty'];
$t=$q*$p;

$query2 = "UPDATE `cart` SET `total` = '$t' WHERE `cart`.`id` = '$id';";
$result2 = mysqli_query($con, $query2);
if($result2){
	// echo "<script> alert('inserted');</script>";
	echo"<meta http-equiv='refresh' content='0.1; url=cart1.php' />";
}
}
?>


