<?php
   require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/Sregister.css">
</head>
<header>
<body >
			<header>
  <marquee direction="right" behaviour="scroll" bgcolor="white"><h1><u>FoodieGuy</u></h1></marquee>
</header>

   <br></br>
  <div id="main-wrapper">
      <center><h2 style="color: white"><u>Registration Form</u></h2>
        
      </center>
  
  
       <form class="myform" action="register.php" method="post">
   <p style="color:white"> 
  
           <label><b> Id:</br></label>
           <input name="1" type="text" class="inputvalues" placeholder="Type your id" required/></br >
           <label><b>Username:</br></label>
           <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/></br >
           <label><b>E-mail:</br></label>
           <input name="email" type="text" class="inputvalues" placeholder="Type your e-mail" required/></br >
            <label><b>Phone:</br></label>
           <input name="phone" type="text" class="inputvalues" placeholder="Type your phone-number" required/></br >
  
           <label><br>Password:</br></label>
           <input name="password" type="password" class="inputvalues" placeholder="Your password" required/>
           <label><br>Confirm Password:</br></label></p>
           <input name="cpassword" type="password" class="inputvalues" placeholder="Confrim password" required/>
           <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/></br>
           <a href="index.php"><input type="button" id="back_btn" value="Back"/></a>

       </form>
  
       <?php
           if(isset($_POST['submit_btn']))
	       {
		      //echo '<script type="text/javascript"> alert("Sign Up button clicked")</script>';
	   
	          $username2=$_POST['username'];
			  
			  $phone=$_POST['phone'];
			  $id1=$_POST['1'];
			  
			  $email3 =$_POST['email'];
			  
	          $password=$_POST['password'];
	          $cpassword=$_POST['cpassword'];
	   
	          if($password==$cpassword)
	          {
		         $query= "select * from user WHERE id1='$id'";
		   
		         $query_run = mysqli_query($con,$query);
		   
		          if(mysqli_num_rows($query_run)>0){
			   
			          echo '<script type="text/javascript"> alert("id already exists.. try another id")</script>';
		            }
		         else{
			          $query= "insert into user values('$id1','$username2','$email3','$phone','$password')";
			          $query_run= mysqli_query($con,$query);
			   
			   if($query_run){
				    echo '<script type="text/javascript"> alert("User registered.. Go to login page to login")</script>';
				   
			    }
			   else{
				    echo '<script type="text/javascript"> alert("Error!")</script>';
				   
			    }
			   
		    }
		   		   
	    }
	   
	   else{
		      echo '<script type="text/javascript"> alert("Password and Confirm Password does not match")</script>';
		   
	    }
	   
	
	 }
       ?>
	   
	   
  </div>
</body>
</header>
</html>