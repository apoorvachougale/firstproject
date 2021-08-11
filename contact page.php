<?php 
   session_start();
   if($_SESSION['id']==""){
            
            header("location:log1.html");
        }
      
        $a= $_SESSION['id'];
      
 ?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	  <link rel="stylesheet" href="css/contact page.css">
   </head>
   <body>
      <header id="header" class="top-head">
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
                        <a href="index1.php" class="navbar-brand"><b><i>SIMBA</i></b></a>
                     </div>
                     <form class="navbar-form navbar-left web-sh">
                        <div class="form">
                           <input type="text" class="form-control" placeholder="Search for the things you need">
                        </div>
                     </form>
                  </div>
                  
                     
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="about-us.php">About-Us</a></li>
                                 <li><a href="feed back page.php">Feed-Back</a></li>
								        <li><a href="contact page.php">Contact</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                
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
	  
	  <div class="contact">
	    
		
		<div class="content">
		  
		  <h1> Contact Us </h1><br>
	      <p>We would love to help you!!</p>
		  <img src="images/Contact us-bro.png" class="bg-image">
	    </div>
		
		<div class="container">
		  <div class="contactinfo">
		    
			<div class="box" >
		       <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
		          <div class="text">
				    <h3>Address</h3>
					   <p> 9032 fort road, near bhartesh <br>college belgaum.<br>  </p>
	               </div>
			   </div>
			  
			  <div class="box"> 
		       <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
		          <div class="text">
				    <h3>Email</h3>
					   <p>yyrub7d789@gmail.com </p>
				  </div>
			   </div>
			   
			   <div class="box"> 
		       <div class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></div>
		          <div class="text">
				    <h3>Website</h3>
					   <p>www.simbashoppingcart.com </p>
				  </div>
			   </div>
		  
		     <div class="box">
		           <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
		          <div class="text">
				    <h3>Phone</h3>
					   <p>1800 258 3333</p>
				  </div>
			   </div>
		    
			 </div>
			 
			 </div> 
			 
	    
	   
	  </div>    
	  </body>
	  </html>
	 
	 
	 
	 