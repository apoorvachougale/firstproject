<?php

    if(isset($_REQUEST['sub'])){
            include 'dbconnect.php';
    

	$username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	
	
	
	
	        $query="INSERT INTO `user_reg` (`username`, `email`,  `phone`, `dob`, `password`,`question`, `answer`) 
	        	  				VALUES ('$username', '$email', '$phone', '$dob', '$password','$question', '$answer');";
        $result= mysqli_query($con,$query);
        if($result){
        	echo "<script> alert ('inserted'); </script>";
        	 echo "<meta http-equiv=Refresh content=0.1;url=log1.html?>";
        }else{
        	echo "error";
        }
    }
?>
