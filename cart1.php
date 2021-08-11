<!DOCTYPE HTML>
<html>
 <title> </title>
 <head>
<meta name="description" content="This is the description">
     
        <script src="store.js" async></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  href="cartstyle.css">
</head>

            <h2 class="section-header">MY CART</h2>
           <center>
            <table class="cart-page">
                <th>ITEM</th>
                <th>NAME</th>
                <th>MODEL</th>
                <th>QUANTITY</th>
                <th>PRICE PER UNIT</th>
                <th>TOTAL</th>
                <th></th>
            
            
            
           
        
<?php
include "dbconnect.php";
session_start();
$e=$_SESSION['id'];

$query = "SELECT * FROM `cart` WHERE `username` = '$e';";
$result = mysqli_query($con, $query);


		while($row = mysqli_fetch_array($result))
		{ 
			$p= $row['price'];
			$q= $row['qty'];
			$t=$p*$q;

	?>
	<form name="f" method="POST" action="qtycal.php" >
	<input type="hidden" name="total" value="<?php echo $t; ?>">
	
		<tr >
			<td><img  src="admin p1/<?php echo "{$row['image1']}"?>" style="width:100px; height:100px;"></td>

			<td><?php echo $row['prod_name'];?></td>

			<td><?php echo $row['varient']; ?></td>
			<td><input type="number" class="qty" min="1" max="3" name="qty" value="<?php echo $row['qty']; ?>"> 
				<button type="submit" name="sub"> <i class="fa fa-refresh"></i></button></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $t;  ?></td>
			<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
			<td><a href="deleteproduct.php?r=<?php echo "{$row['varient']}"?>" class="btn">&#128465;Remove</a></td>
</form>
			
			
</div></td>

		</tr>
		<?php	
	}	
?>
	</table>  
    </center>
<?php
$que3="SELECT SUM(total) AS 'total_all' FROM `cart`   WHERE `username`='$e';";

$res3=mysqli_query($con , $que3);


$row3 = mysqli_fetch_assoc($res3); 

	$cou = $row3['total_all'];
	
     

?>
  <div class="cart-items"></div>
           
 <div class="cart-row">
 <section class="container content-section">
</div>
          
<div class="cart-total">
	            <table>
                <td><strong class="cart-total-title">Total</strong></td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cart-total-price"><?php echo $cou; ?></span></td>
                <td><a href="checkout/checkout.php"><button class="btn btn-primary btn-purchase" type="button"style="background-color:#5D9CEC;color:white; font-weight: 600">Purchase</button></a>  </td>        
            </table>
            </div> 
             
         
             </section>

             