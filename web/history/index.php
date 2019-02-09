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

      <label class="container">One
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container">Two
        <input type="radio" name="radio">
        <span class="checkmark"></span>
        </label>
      <label class="container">Three
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container">Four
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      
      <input type="radio" name="org" value="bisopric"> Bishopric<br>
      <input type="radio" name="org" value="elders_quorum"> Elders Quorum<br>
      <input type="radio" name="org" value="primary"> Primary<br>
      <input type="radio" name="org" value="relief_society"> Relief Society<br>
       <input type="radio" name="org" value="Sunday School"> Sunday School<br>
      <input type="radio" name="org" value="activities"> Ward Activities<br>
      <input type="radio" name="org" value="missionary"> Ward Missionary<br>
      <input type="radio" name="org" value="young_men"> Young Men<br>
      <input type="radio" name="org" value="young_women"> Young Women<br>
      
     
     
      
<input type="submit" value="Add to Cart" name="addCart" class="navagation" />
</form><form action="viewCart.php">
<input type="submit" value="Go to Cart" class="navagation">
</html>
</body>