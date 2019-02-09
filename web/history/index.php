<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ward History</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">



</head>

<body>

<div id="heading">
  <CENTER> <img id="Annual Hisotry" src="annual-history.jpg" alt="Annual Hisotry" width="650" height="242">
  <p id="title">Mather Ward</p> </CENTER>

</div>

<div class="main">
  <CENTER>
    
    <h4>Enter Information For a New Event</h4><hr/>

      <h5> Select the Orginization/Auxiliary</h5>

      
      <input type="radio" name="org" value= 1> Bishopric<br>
      <input type="radio" name="org" value= 3> Elders Quorum<br>
      <input type="radio" name="org" value= 6> Primary<br>
      <input type="radio" name="org" value= 2> Relief Society<br>
       <input type="radio" name="org" value= 8> Sunday School<br>
      <input type="radio" name="org" value= 9> Ward Activities<br>
      <input type="radio" name="org" value= 7> Ward Missionary<br>
      <input type="radio" name="org" value= 4> Young Men<br>
      <input type="radio" name="org" value= 5> Young Women<br>
      
     
     
      
<input type="submit" value="Add to Cart" name="addCart" class="navagation" />
</form><form action="viewCart.php">
<input type="submit" value="Go to Cart" class="navagation">
</html>
</body>