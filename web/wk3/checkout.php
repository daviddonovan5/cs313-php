<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Widget Checkout</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>

<div id="heading">
  <CENTER> <img id="logo" src="logo.png" alt="logo" width="725" height="242">
  <p id="contact">info@widgets.com<br>800-234-5678</p> </CENTER>
</div>

<div class="main">
  <CENTER>
    
    <h4>Check out</h4><hr/>

    <h3>Please enter you mailing address</h3><br>

    <form method="POST" action = confirmation.php >
    First Name:<input type="text" name="fname"> Last Name: <input type="text" name="lname"><br>
    Address: <input type="text" name="address" size="45"><br>
    City: <input type="text" name="city"> State: <input type="text" name="state" size="2"> Zip: <input type="text" name="zip" size="5"><br><br>

    <input type="submit" value="Finalize Order" class="navagation"><br>

</form>
    <form method="post" action="viewCart.php">
<input type="submit" value="View Cart" name="backCart" class="navagation" />
</form>



</html>
</body>