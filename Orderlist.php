	<?php
	 session_start();
	   require 'dbconfig/config.php'
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Order list</title></title>
	<link rel="stylesheet" href="css/Sorderlist.css">
	</head>
	<header>
	<body >
		<header>
  <marquee direction="right" behaviour="scroll" bgcolor="white"><h1><u>FoodieGuy</u></h1></marquee>
</header>

	   <br></br>
	  <div id="main-wrapper">
		  <center><h2><title>Order list</title></h2>
			<!-- <img src="bracu_logo.png" class="avatar"/>-->
		  </center>
	  
	  
		   <form class="myform" action="Orderlist.php" method="post">
	   <p style="color:white"> 
	  
	 
			  
			  <label><b><br>RICE<br></label>
			   <label><b>Steamed rice: 40 TK-</br></label>
			   <input name="s1" type="number" class="inputvalues" placeholder="Rice amount" min="0" max="5" value="0" required/></br >
			   <label><b>Khichuri: 120 TK-</br></label>
			   <input name="s2" type="number" class="inputvalues" placeholder="Rice amount" min="0" max="5" value="0" required/></br >
			   
			   <label><b><br>MEAT</br></label>
			   <label><b>Chicken: 110 TK-</br></label>
			   <input name="s3" type="number" class="inputvalues" placeholder="Meat amount" min="0" max="5" value="0" required/></br >
			   <label><b>Beef: 150 TK-</br></label>
			   <input name="s4" type="number" class="inputvalues" placeholder="Meat amount" min="0" max="5" value="0" required/></br >
			   
			  
			   
				<label><b><br>VEG</br></label>
			   <label><b>Mixed Veg: 40 TK-</br></label>
			   <input name="s5" type="number" class="inputvalues" placeholder="Veg amount" min="0" max="5" value="0" required/></br >
			  <label><b>Spinach: 25 TK-</br></label>
			   <input name="s6" type="number" class="inputvalues" placeholder="Veg amount" min="0" max="5" value="0" required/></br >
			   <label><b>Dal: 20 TK-</br></label>
			   <input name="s7" type="number" class="inputvalues" placeholder="Veg amount" min="0" max="5" value="0" required/></br >
			   
			   
				<label><b><br>FISH</br></label>
			   <label><b>Rui fish: 90 TK-</br></label>
			   <input name="s8" type="number" class="inputvalues" placeholder="Fish amount" min="0" max="5" value="0" required/></br >
			  <label><b>Prawn: 130 TK</br></label>
			   <input name="s9" type="number" class="inputvalues" placeholder="Fish amount" min="0" max="5" value="0" required/></br >
			   
			   
				<label><b><br>SNACKS</br></label>
			   <label><b>Nuggets : 60 Tk-</br></label>
			   <input name="s10" type="number" class="inputvalues" placeholder="Snacks amount" min="0" max="5" value="0" required/></br >
			  <label><b>Burger: 60 TK-</br></label>
			   <input name="s11" type="number" class="inputvalues" placeholder="Snacks amount" min="0" max="5" value="0" required/></br >
			   <label><b>Sandwich: 35 TK-</br></label>
			   <input name="s12" type="number" class="inputvalues" placeholder="Snacks amount" min="0" max="5" value="0" required/></br >
			   <label><b>Roll: 80 TK</br></label>
			   <input name="s13" type="number" class="inputvalues" placeholder="Snacks amount" min="0" max="5" value="0" required/></br >
			   <label><b>Sausage: 25 TK</br></label>
			   <input name="s14" type="number" class="inputvalues" placeholder="Snacks amount" min="0" max="5" value="0" required/></br >
			   
			   <label><b><br>DRINKS</br></label>
			   <label><b>Coffee: 15 TK</br></label>
			   <input name="s15" type="number" class="inputvalues" placeholder="Drinks amount" min="0" max="5" value="0" required/></br >
			  <label><b>Cold drinks: 20 TK</br></label>
			   <input name="s16" type="number" class="inputvalues" placeholder="Drinks amount" min="0" max="5" value="0" required/></br >
	  
			  
			   <input name="submit_btn" type="submit" id="signup_btn" value="Confirm order"/></br>
			   <a href="homepage.php"><input type="button" id="back_btn" value="Back"/></a>

		   </form>
	  <?php
			   if(isset($_POST['submit_btn']))
			   {
				  $id=$_SESSION['id'];
			   
					 $query= "select * from orderfood WHERE User_id='$id'";
			   
					 $query_run = mysqli_query($con,$query);
			   
					  if(mysqli_num_rows($query_run)==0){ 
						  
						  
				  $s1=$_POST['s1'];

				  $s2=$_POST['s2'];
				  $s3=$_POST['s3'];
				  $s4=$_POST['s4'];
				  $s5=$_POST['s5'];
				  $s6=$_POST['s6'];
				  $s7=$_POST['s7'];
				  $s8=$_POST['s8'];
				  $s9=$_POST['s9'];
				  $s10=$_POST['s10'];
				  $s11=$_POST['s11'];
				  $s12=$_POST['s12'];
				  $s13=$_POST['s13'];
				  $s14=$_POST['s14'];
				  $s15=$_POST['s15'];
				
				   $s16=$_POST['s16'];
				   $query= "insert into orderfood values('$id','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15','$s16')";
						 
						  $query_run= mysqli_query($con,$query);
				   
				   if($query_run){
						echo '<script type="text/javascript"> alert("Food Ordered....Go to Homepage")</script>';
					   
					}
				   else{
						echo '<script type="text/javascript"> alert("Error!")</script>';
					   
					}
				   
						  
					  } 
					  
			         else{
						   
				  echo '<script type="text/javascript"> alert("Food already ordered...Go to edit option to edit")</script>';
				  
				   
				} 
					   
			
		   
		
		   
		
		 }
		   ?>
		  
		   
		   
	  </div>
	</body>
	</header>
	</html>






