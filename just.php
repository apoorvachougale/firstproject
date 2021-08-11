<?php
include 'db.php';

	$que4="SELECT COUNT(stars) AS tc FROM comm";
	$res4= mysqli_query($con, $que4);
	$row = mysqli_fetch_assoc($res4); 
	$cou = $row['tc'];



	$que3="SELECT SUM(stars) as t FROM comm";
	$res3= mysqli_query($con, $que3);
// 	$row3 = mysql_fetch_assoc($res3); 

$row = mysqli_fetch_assoc($res3); 

$sum = $row['t'];

$avg=$sum/$cou;
echo ("This is the sum: $avg");

?>