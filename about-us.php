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
      <title>About us</title>
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
      <link rel="stylesheet" href="css/about-us.css">
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
                           <input type="text" class="form-control" placeholder="Search for products or companies">
                        </div>
                     </form>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                <li><a href="logout.php">Logout</a></li>
                                 
                              </ul>
                           </div>
                        </div>
                        
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="about-us.php">About-Us</a></li>
                                 <li><a href="feed back page.php">Feed-Back</a></li>
								 <li><a href="contact page.php">Contact </a></li>
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
      <!-- Modal -->
	  <div class="girl">
	  <img src="images/girl.png"  >
      </div>     
      <div class="about">
        			
        
            <div class="main">
			
    <style> .main { background-image: url("images/abt.jpeg"); background-repeat:no-repeat; background-size:700px 200px;}</style> 
        			
                  <h1> About Us </h1>
				  
                  <div class="icon"><i class="fa fa-book"></i></div>
				  <br>
				  <br>
                  <p> "This website is designed for the local vendors of belgaum.We believe in the power of open source so that each and everyone 
                  can use it .It's an opportunity for all the small scale industries who wanna grow more and more  .We dream it,and then do it together everyday reinventing what's possible and easy for local vendors .Our goal is to help the local vendors sell their products easily
                  according to their convinence on our platform and provide people with the best and happiest products around" </p>
				  
            </div>
			</div>
	  
	  
      
      </body>
      </html>