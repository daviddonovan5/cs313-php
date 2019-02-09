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
      <form>
      <select name="org">
      <option value=1>Bishopric</option>
      <option value=3>Elders Quorum</option>
      <option value=6>Primary</option>
      <option value=2>Relief Society</option>
      <option value=8>Sunday School</option>
      <option value=9>Ward Activities</option>
      <option value=7>Ward Missionary</option>
      <option value=4>Young Men</option>
      <option value=5>Young Women</option>
      </select>

      
      
     
     
      
<input type="submit" value="Add to Cart" name="addCart" class="navagation" />
</form>
</html>
</body>