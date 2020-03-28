<?php
  session_start();
   require 'dbconfig/config.php'
?>
<html>
<head>
   <title>ShowCurrentOrder</title>
   <link rel="stylesheet" type="text/css" href="css/Sregister.css">
   </head>
   <body>
      <header>
  <marquee direction="right" behaviour="scroll" bgcolor="white"><h1><u>FoodieGuy</u></h1></marquee>
</header>
 
   
	
   <div class="title">
   <h1><font color='white'><b>Current Order<b></font></h1>
   </div>

    <?php
     $id=$_SESSION['id'];
	 
  $query="select * from orderfood WHERE User_id=$id  ";


    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
	{   
   $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC); 
echo "<div align='center'><font size='5' face='Century Gothic' color='white'><b><br>Steamed_rice ({$row['Steamed_rice']}) ..... Khichuri ({$row['Khichuri']}).....Chicken ({$row['Chicken']}).....Beef ({$row['Beef']}).....Mixed_Veg ({$row['Mixed_Veg']}).....Spinach ({$row['Spinach']})</font></div>";





echo "<div align='center'><font size='5' face='Century Gothic' color='white'><b><br>Dal ({$row['Dal']}).....Rui_fish ({$row['Rui_fish']}).....Prawn ({$row['Prawn']}).....Nuggets ({$row['Nuggets']}).....Burger ({$row['Burger']}).....Coffee ({$row['Coffee']})</font></div>";


echo "<div align='center'><font size='5' face='Century Gothic' color='white'><b><br>Sandwich ({$row['Sandwich']}).....Roll ({$row['Roll']}).....Sausage ({$row['Sausage']}).....Cold_drinks ({$row['Cold_drinks']})</font></div>";



}
  ?>

   </br>
</br> <a href="homepage.php"><input type="button" id="back_btn" value="Back"/></a>
    
   
 
	
	
	</center>
  
 
  
   </body>
   </html>