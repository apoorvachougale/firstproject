
        <?php
        session_start();
		include 'dbconnect.php' ;
		// if(session_destroy())
		// {
		// 	echo "<script> alert ('Your logged out'); </script>";;
		// 	echo "<meta http-equiv=Refresh content=0.1;url=log1.html>";
		// }
		session_destroy();
		unset($_SESSION["id"]);
		unset($_SESSION["name"]);
		header("Location:log1.html");

		
		 
        /*$delete_id=$_GET['del'];
		
		$sql="DELETE FROM `signin` WHERE  `signin`.`id` ="; 
        $run=mysqli_query($con,$sql);		
		 if($run)
	
		{
			echo "your loged out";
			echo "<meta http-equiv=Refresh content=0.1;url=log1.html>";
			
		}else
		{
			echo "error";
		} */
		
        
		?> 
       
