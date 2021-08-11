<?php
include "dbconnect.php";
session_start();
$cat=$_GET['category'];
$pid=$_GET['pid'];
$pname=$_GET['pname'];
$var=$_GET['varient'];
$pprice=$_GET['pprice'];
$e=$_SESSION['id'];
$image1=$_GET['image1'];
// die($e);

    if($cat=='mobile')
    {
      $q = "SELECT * from cart";         
      $res = mysqli_query($con, $q);
      // $row=mysqli_fetch_assoc($res);
      while($row=mysqli_fetch_assoc($res))
      {
      $check_code = $row["varient"];
      
      if($var==$check_code and $e==$row["username"])
      {
      
        echo'<script>alert("product already added to cart")</script>';
        echo"<meta http-equiv='refresh' content='0.1; url=header.php' />";
        die();
      } 
      }   
      $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`,
         `image1`)   VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice','$image1');";

         $result = mysqli_query($con, $query);
      
         if($result)
         {
	// echo "<script> alert('inserted');</script>";
	              echo"<meta http-equiv='refresh' content='0.1; url=header.php' />";
	      }
      
      
        
      

     }


 elseif($cat=='camera')
    {
    	   $query="INSERT INTO `cart` ( `prod_id`, `username`, `prod_name`, `varient`, `price`, `qty`, `total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
           $result = mysqli_query($con, $query);
        if($result){
	               // echo "<script> alert('inserted');</script>";
	                echo"<meta http-equiv='refresh' content='0.1; url=camheader.php' />";
                  }

   }      

elseif($cat=='computer')
    {
    	   $query="INSERT INTO `cart` ( `prod_id`, `username`, `prod_name`, `varient`, `price`, `qty`, `total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
           $result = mysqli_query($con, $query);
        if($result){
	               // echo "<script> alert('inserted');</script>";
	                echo"<meta http-equiv='refresh' content='0.1; url=compheader.php' />";
                  }

   }  

  elseif($cat=='fridge')
           {
    	   $query="INSERT INTO `cart` ( `prod_id`, `username`, `prod_name`, `varient`, `price`, `qty`, `total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
           $result = mysqli_query($con, $query);
        if($result){
	               // echo "<script> alert('inserted');</script>";
	                echo"<meta http-equiv='refresh' content='0.1; url=fridgeheader.php' />";
                  }

        }    

  elseif($cat=='laptop')
           {
    	   $query="INSERT INTO `cart` ( `prod_id`, `username`, `prod_name`, `varient`, `price`, `qty`, `total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
           $result = mysqli_query($con, $query);
        if($result){
	               // echo "<script> alert('inserted');</script>";
	                echo"<meta http-equiv='refresh' content='0.1; url=laptopheader.php' />";
                  }

        }  

 elseif($cat=='tv')
           {
    	   $query="INSERT INTO `cart` ( `prod_id`, `username`, `prod_name`, `varient`, `price`, `qty`, `total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
           $result = mysqli_query($con, $query);
        if($result){
	               // echo "<script> alert('inserted');</script>";
	                echo"<meta http-equiv='refresh' content='0.1; url=tvheader.php' />";
                  }

        }    

 elseif($cat=='tab')
        {
         $query="INSERT INTO `cart` ( `prod_id`, `username`, `prod_name`, `varient`, `price`, `qty`, `total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
           $result = mysqli_query($con, $query);
        if($result){
                 // echo "<script> alert('inserted');</script>";
                  echo"<meta http-equiv='refresh' content='0.1; url=tabheader.php' />";
                  }

        }    
elseif($cat=='menscloth')
{
  $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
  $result = mysqli_query($con, $query);
  if($result)
  {
  // echo "<script> alert('inserted');</script>";
  echo"<meta http-equiv='refresh' content='0.1; url=mencasual.php' />";
  }
}

elseif($cat=='menformal')
{
  $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
  $result = mysqli_query($con, $query);
  if($result)
  {
  // echo "<script> alert('inserted');</script>";
  echo"<meta http-equiv='refresh' content='0.1; url=menformal.php' />";
  }
}

elseif($cat=='menwestern')
{
  $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
  $result = mysqli_query($con, $query);
  if($result)
  {
  // echo "<script> alert('inserted');</script>";
  echo"<meta http-equiv='refresh' content='0.1; url=menwestern.php' />";
  }
}


elseif($cat=='lcasualwear')
{
  $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
  $result = mysqli_query($con, $query);
  if($result)
  {
  // echo "<script> alert('inserted');</script>";
  echo"<meta http-equiv='refresh' content='0.1; url=mencasual.php' />";
  }
}

elseif($cat=='mensfootwear')
{
  $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
  $result = mysqli_query($con, $query);
  if($result)
  {
  // echo "<script> alert('inserted');</script>";
  echo"<meta http-equiv='refresh' content='0.1; url=mensfoot.php' />";
  }
}

elseif($cat=='msportswear')
{
  $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
  $result = mysqli_query($con, $query);
  if($result)
  {
  // echo "<script> alert('inserted');</script>";
  echo"<meta http-equiv='refresh' content='0.1; url=mensfoot2.php' />";
  }
}

elseif($cat=='menwestern')
{
  $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
  $result = mysqli_query($con, $query);
  if($result)
  {
  // echo "<script> alert('inserted');</script>";
  echo"<meta http-equiv='refresh' content='0.1; url=menwestern.php' />";
  }
}

elseif($cat=='lsportswear')
{
  $query = "INSERT INTO `cart` (`prod_id`,`username`,`prod_name`,`varient`, `price`,`qty`,`total`) VALUES ('$pid','$e', '$pname','$var','$pprice',1,'$pprice');";
  $result = mysqli_query($con, $query);
  if($result)
  {
  // echo "<script> alert('inserted');</script>";
  echo"<meta http-equiv='refresh' content='0.1; url=Lsportswear.php' />";
  }
}


?>



