	<?php
	 session_start();
	   require 'dbconfig/config.php'
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Delete Order</title>
	<link rel="stylesheet" href="css/delete.css">
	</head>
	<header>
	<body >


	   <br></br>
	  <div id="main-wrapper">
		  <center><h2><title>Delete current order</title></h2>

	  <form class="myform" action="DeleteOrder.php" method="post">
	  
	  
	  <input name="submit_btn" type="submit" id="signup_btn" value="Delete order"/></br>
			  <a href="homepage.php"><input type="button" id="back_btn" value="Back"/></a>
	  
	</form>
	  <?php
			   if(isset($_POST['submit_btn']))
			   {
				  $id=$_SESSION['id'];
			   
					
					$query= "select * from orderfood WHERE User_id='$id'";
			   
					 $query_run = mysqli_query($con,$query);
			   
					  if(mysqli_num_rows($query_run)>0){ 	  
						  
				 
				   
				   
				    $query = "delete from orderfood where User_id = '$id'";
				  
						  $query_run= mysqli_query($con,$query);
				   
				   if($query_run){
						echo '<script type="text/javascript"> alert("Order Deleted")</script>';
					   
					}
				   else{
						echo '<script type="text/javascript"> alert("Error!")</script>';
					   
					}
					  }
					  
					  
					  else{
						  echo '<script type="text/javascript"> alert("You have not ordered yet!")</script>';
					   
					}
						  
					  
					  
			     
					   
			
		   
		
		   
		
		 }
		   ?>
		  
		   
		   
	  </div>
	</body>
	</header>
	</html>






