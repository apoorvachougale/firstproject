<?php

include "dbconnect.php";

$qty=$_POST['qty'];
$id=$_POST['id'];
session_start();
$e=$_SESSION['id'];

// $t=$_POST['total'];

// die($qty.''. $id);
$query = "UPDATE `cart` SET `qty` = '$qty' WHERE `cart`.`id` = '$id';";
$result = mysqli_query($con, $query);


if($result){
	// echo "<script> alert('inserted');</script>";
	echo"<meta http-equiv='refresh' content='0.1; url=cart2.php?a=$id' />";
}






?>