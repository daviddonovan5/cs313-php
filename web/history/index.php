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
      <input type="radio" name="org" value="bisopric"> <label class="container">Bishopric<br>
      <input type="radio" name="org" value="elders_quorum"> <label class="container">Elders Quorum<br>
      <input type="radio" name="org" value="primary"> <label class="container">Primary<br>
      <input type="radio" name="org" value="relief_society"> <label class="container">Relief Society<br>
       <input type="radio" name="org" value="Sunday School"> <label class="container">Sunday School<br>
      <input type="radio" name="org" value="activities"> <label class="container">Ward Activities<br>
      <input type="radio" name="org" value="missionary"> <label class="container">Ward Missionary<br>
      <input type="radio" name="org" value="young_men"> <label class="container">Young Men<br>
      <input type="radio" name="org" value="young_women"> <label class="container">Young Women<br>
      
     
     
      
<input type="submit" value="Add to Cart" name="addCart" class="navagation" />
</form><form action="viewCart.php">
<input type="submit" value="Go to Cart" class="navagation">
</html>
</body>