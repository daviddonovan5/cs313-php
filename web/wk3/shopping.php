<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Donovan's Widgets</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">



</head>

<body>

<div id="heading">
  <CENTER> <img id="logo" src="logo.png" alt="logo" width="725" height="242">
  <p id="contact">info@widgets.com<br>800-234-5678</p> </CENTER>
</div>

<div class="main">
  <CENTER>
    
    <h4>Please Select Your Purchase</h4><hr/>

    <table style="width:100%">
      <tr>
        <th>Item</th>
        <th>Name/Description</th> 
        <th>Price/Quantity </th>
      </tr>
      <tr>
        <form method="post" action="prove.php" name="input">
        <td><img class="itemPic" src="widget1.png" alt="Multifunctional OTG Card Reader" width="120px" height="120px"></td>
        <td><b>Multifunctional OTG Card Reader</b>--Supported memory card: SD, TF, MicroSD.</td> 
        <td>$12.00<br>
        Quantity:<br> <input id="Quantity1" type="number" name="widget1" min="0" max="20" value="<?php echo($_SESSION['quantity1']);?>"</td>
      </tr>
      <tr>
        <td><img class="itemPic" src="widget2.png" alt="Lens Kit" width="120px" height="120px"></td>
        <td><b>Mobile Phone Camera Lens Kit</b>--This is a detachable jelly lens set for mobile phones including a Fish Eye Lens, Macro Lens,  and a Wide Angle lens. </td> 
        <td>$48.00<br>
        Quantity: <br><input id="Quantity2" type="number" name="widget2" min="0" max="20" value="<?php
        if(isset($_POST['addCart'])){
          echo($_SESSION['quantity2']);
        }
        else{
          echo('0');
        }
        ?>"</td>
      </tr>
      <tr>
        <td><img class="itemPic" src="widget3.png" alt="magical moon lamp" width="120px" height="120px"></td>
        <td><b>Creative 3D Magical Moon Lamp</b>--This is a light that will illuminate to appear like the moon. The battery is re-chargle through a usb cord (included). </td> 
        <td>$25.00<br>
        Quantity: <br><input id="Quantity3" name="widget3" type="number" min="0" max="20" value="<?php
        if(isset($_POST['addCart'])){
          echo($_SESSION['quantity3']);
        }
        else{
          echo('0');
        }
        ?>" </td>
      </tr>
      <tr>
        <td><img class="itemPic" src="widget4.png" alt=head lamp" width="120px" height="120px"></td>
        <td><b>4 Modes Rainproof Mechanical Zoom Headlamp</b>--This is the ultimate headlamp with 5 LED lights can be as bright as 90,000Lm. This headlamp is perfect for all outdoors activities, and will free up your hands. </td> 
        <td>$95.00<br>
        Quantity: <br><input id="Quantity4" name="widget4" type="number" min="0" max="20" value="<?php
        if(isset($_POST['addCart'])){
          echo($_SESSION['quantity4'] );
        }
        else{
          echo('0');
        }
        ?>" </td>
      </tr></tr></table>
 
<input type="submit" value="Add to Cart" name="addCart" class="navagation" />
</form><form action="viewCart.php">
<input type="submit" value="Go to Cart" class="navagation">
</html>
</body>