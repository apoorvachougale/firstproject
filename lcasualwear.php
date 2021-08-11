<?php 

session_start();
$_SESSION['id']='a@g.com';
// $a=$_SESSION['id'];
// die($a);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
    
      <meta charset="UTF-8">
      <title>Product</title>
      <meta http-equiv="X-UA
      -Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
       <style>

   #cc{
      margin-left: 20%;
      margin-top: -70%;
      background-color: #FFD700;
      font-weight:bold;
    }  
    /*.product-position{
      width:100%;
      height:60%;
      background: #007bbf;
      display: flex;
      flex-direction:row;
      justify-content: space-around;
      flex-flow:wrap;

  
 } */
    
.no-outline:focus {
  outline: none;
  border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: blue 2px;
}

*{
  box-sizing: border-box;
}


/* Create four equal columns that floats next to each other */
.row{
  margin:5px 10px 0 20px;



}
.column {

  display:flex-inline;
  flex-flow:wrap;
  flex-direction:row;
  justify-content: space-around;
 padding:5px;
 /*flex-grow:1;
 flex-basis:16%;*/
 float: left;
  width: 30%;
  height: 430px;
  margin:20px; 
  box-shadow: 5px 5px 5px 5px #888888;

 
}


/* Clear floats after the columns */
.row:after {

/*content: "";*/
display: table;
/* clear: both; */
}
.size{
	float: left;
	width: 40%;
	height: 300px;
}
.size:after {
  content: "";
  display: table;
  clear: both;
}
.space{
	padding-top: 50px;
	padding-left: 5px;
}
input[type=button] {
	margin:10px;
	padding: 5px;
	padding-right: 20px;
	padding-left: 20px;
}

td{
  padding-top: 15px;
  font-weight:bold;
  padding-left: 3px; 
}


      </style>
   </head>
   <body>
   <?php
   include "dbconnect.php";
  $que4="SELECT COUNT(id) AS tc FROM `cart`";
  $res4= mysqli_query($con, $que4);
  $row = mysqli_fetch_assoc($res4); 
  $cou = $row['tc'];
?>
      <header id="header" class="top-head"  style="position:fixed; width:1550px;">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="index1.html" class="navbar-brand"><b> <i> SIMBA </i></b></a>
                     </div>
                     <form class="navbar-form navbar-left web-sh">
                        <div class="form">
                           <input type="text" class="form-control" placeholder="Search here for your needs">
                        </div>
                     </form>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                 <li><a href="log1.html">Logout</a></li>
                                 <li><a href="cart1.php"> <i class="fa fa-shopping-cart" aria-hidden="true"><?php echo $cou;  ?><input type="text" name="ff" id="ff" size="1%"  class="no-outline" style="color:#FF0000; font-weight:bold;">
                                 </i></a></li>
                              </ul>  
                           </div>  
                        </div> 
                  
				  <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="about-us.html">About-Us </a></li>
                                 <li><a href="feed back page.html">Feed-Back</a></li>
                                 <li><a href="contact page.html">Contact</a></li>
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
      
<div class="product-position" >
  <br><br><br> <br>
   <!-- <form action="" name="f" method="POST">
       <input type="id" name="id" value="<?php ?>"> -->
   
      <?php 
       include "dbconnect.php"; 
       $query = "SELECT * FROM `lcasualwear` ";
       $result = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($result))
       { 
        $prod_id=$row['id'];
      ?>
    
    <div class="row" >
       <div class="column" >
  	     <div class="size">
  		      <img src=" ladies footwear/<?php echo "{$row['image1']}";?>">
  	     </div>
  	     <div class="size space">
          <h3> <?php echo $row['name']; ?> </h3>
            <table>
                <tr><td>Brand:</td>
                <td style="color: red;"><?php echo $row['brand'];  ?> </td> </tr>
                <tr><td>Price:</td>
                <td> <?php echo $row['price'];  ?></td></tr>
                <tr><td>Closure:</td>
                <td><?php echo $row['closure'];  ?></td></tr>
                <tr><td>Width:</td>
                <td> <?php echo $row['width'];  ?></td></tr>
                <tr><td>Sole:</td>
                <td><?php echo $row['sole'];  ?> </td></tr>
                <tr><td>Heeltype:</td>
                <td><?php echo $row['heeltype'];  ?> </td></tr>
                <tr><td>Color:</td>
                <td><?php echo $row['color'];  ?></td></tr>
                <tr><td>Size:</td>
                <td> <?php echo $row['size'];  ?> </td></tr>
                <tr><td>Material:</td>
                <td><?php echo $row['material'];  ?></td></tr>
                <tr><td>Description:</td>
                <td><?php echo $row['description'];  ?></td></tr>
              
            </table> 		
  	</div>
    <br>
          <h6><a class="btn btn-success btn-round" id="elementId" style="background:#5D9CEC; font-weight:700;" title="Click for more details!" 
            href="cart.php?category=lcasualwear&&pid=<?php echo $row['id'];?>&&pname=<?php echo $row['name'];?>&&pprice=<?php echo $row['price'];?>&&varient=<?php echo $row['size'];?>" onclclick="check;">
            <i class="now-ui-icons gestures_tap-01"></i>Add To Cart</a></h6>
     <br><!-- <a type="submit" name="cartc" id="cc" onclick='numbershow();' value="Add To Cart"> --><br>
     <input type="submit" name="cc"  value="Buy Now" style="padding:5px 30px; background:#45b8fe; color:white; font-weight:700; "> 
  </div> 
</div>
</div>
 </form>
<?php
//  if(isset($_REQUEST['cartc'])){
//   include 'dbconnect.php';
//   $prod_id = $_POST['id'];
//   $prod_model = $row['model'];
//   $que= "INSERT INTO `order_details` (`prod_id`,`prod_name`) VALUES ('$prod_id','$prod_model');";
//   $res=mysqli_query($con, $que);
  
// }

}


?>





</body>
<script type="text/javascript">
  var cartnumber=0;
  function numbershow() {
        cartnumber++;
        document.getElementById("ff").value=cartnumber;
      
      }
      function check('elementId') {
    if (link.className != "visited") {
       //alert("new");
       link.className = "visited";
       return true;     
    }
    //alert("old");
    return false;
}​​
</script>
</html>