<?php
  session_start();
   require 'dbconfig/config.php'
?>
<html>
<head>
   <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
   </head>
   <body>
<!--   <header>
   <marquee direction="left" behaviour="scroll" bgcolor="white"><h1>Good Food Good Mood !!!</h1></marquee></header>-->
 
 <!--  <div class="main">
     <div class="logo">
	   <img src="bracu_logo.png">
	 </div>-->
   <header>
   <ul>
   <li class="active"><a href="#">Home</a></li>
    <li><a href="Services.html">Services</a></li>
	 <li><a href="review.html">Review</a></li>
	  <li><a href="about.html">About</a></li>
	   <li><a href="contact.html">Contact</a></li>
   </ul>
   </div>
   <div class="title">
   <h1><font color='white'><b><u>FoodieGuy</u><b></font><br></h1>
   </div>
 </header>


   <!--   <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="table_with_food_top_view_900x700.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="sodium-salt-1083487948.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="hand.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->
   
    <?php
     $id=$_SESSION['id'];
	 
  $query="select * from user WHERE id=$id ";


    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
	{   
   $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
   
   echo "<br><br><br></br><br></br> ";


echo "<div align='center'><font size='8' face='Century Gothic' color='white'><b><br>Welcome {$row['username']}<br></font></div>";
echo "<font color='white'><br><br>     Your ID:  </font>";
echo "<font size='3' face='Century Gothic' color='white'>{$row['id']}</font>";
        $_SESSION['username']=$row['username'];
	
echo "<font color='white'><br><br>     Your Email:  </font>";

echo "<font size='3' face='Century Gothic' color='white'>{$row['email']}</font>";
echo "<font color='white'><br><br>Your Phone:  </font>";

echo "<font size='3' face='Century Gothic' color='white'>{$row['phone']}</font>";

	}
  ?>
   
   
   <br>
   
   <div class="button">
   <br><br><br><br><a href="Orderlist.php" class="btn">Order food</a>
    <a href="OrderEdit.php" class="btn">Edit Current Order</a><br><br><br><br>
	<a href="DeleteOrder.php" class="btna">Delete Current Order</a>
	<a href="ShowCurrentOrder.php" class="btn">Current Order</a>
	
	</center>
  
  <div class="buttona">
   <div>
    <a href="index.php" class="btna">Log Out</a>
   </div>
   </body>
   </html>