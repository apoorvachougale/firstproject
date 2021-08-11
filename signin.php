
<?php
    
    session_start();
        include 'dbconnect.php' ;

	$username=$_POST['username'];
	
	$password=$_POST['password'];
	
   
  $sql="SELECT * from user_reg where username='$username' and password='$password'";

        $result=  mysqli_query( $con, $sql);
        
        if(mysqli_num_rows($result)>0)
            {
            $row=mysqli_fetch_assoc($result);
            
            if($row['username']==$username && $row['password']==$password)
            {
				$query="INSERT INTO `signin`(`username`,`password`)
                        VALUES('$username','$password');";
                    

                 $q=mysqli_query($con , $query);
	
                $_SESSION['id']=$username;
				
                
                header("location:index1.php");
                                
            }
            else
                {
                    header("location:log1.html?ans=failed");
                }
             }
        
        else{
            header("location:log1.html?ans=failed");
        }  
	 
      

	
        
       
?>

