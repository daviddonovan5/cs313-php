<?php
session_start();
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['input'];
$_SESSION['nameFirst'] = $firstName;
$_SESSION['nameLast'] = $lastName;
$_SESSION['address'] = $address;
$_SESSION['city'] = $city;
$_SESSION['zip'] = $zip;
$_SESSION['state'] = $state;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Confirmation</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>

<div id="heading">
  <CENTER> <img id="logo" src="logo.png" alt="logo" width="725" height="242">
  <p id="contact">info@widgets.com<br>800-234-5678</p> </CENTER>
</div>

<div class="main">
  <CENTER>
    
    <h4>Confirmation</h4><hr/>

    <?php
    echo ("<h3>Thank you " .$_SESSION['nameFirst']. " " .$_SESSION['lastName']. " for your order! <br> your order summary </h3>")
    
    ?>
    <table style="width:100%">
      <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Quantinty</th>
        <th>Cost</th>
      </tr>
      <tr>
        <form method="post" action="viewCart.php" name="cart">
        	<td><b>Multifunctional OTG Card Reader</b></td>  
        	<td>$12.00</td><td><?php echo ($_SESSION['quantity1']. "</td><td>$" . $_SESSION['quantity1'] * 12.00)?>.00 </td></tr>


        <tr><td><b>Mobile Phone Camera Lens Kit</b></td>  
        <td>$48.00</td><td><?php echo ($_SESSION['quantity2']. "</td><td>$" . $_SESSION['quantity2'] * 48.00)?>.00 </td></tr>
        
        <tr><td><b>Creative 3D Magical Moon Lamp</b></td>  
        <td>$25.00</td><td><?php echo ($_SESSION['quantity3']. "</td><td>$" . $_SESSION['quantity3'] * 25.00)?>.00 </td></tr>
      
        <tr><td><b>4 Modes Rainproof Mechanical Zoom Headlamp</b></td>  
        <td>$95.00</td><td><?php echo ($_SESSION['quantity4']. "</td><td>$" . $_SESSION['quantity4'] * 95.00)?>.00 </td></tr>
        <tr><td></td><td></td><td class="subtotal"><b>Subtotal</b></td><td class="subtotal">$<?php  echo $_SESSION['subTotal'] ?></td></tr>
        <tr><td></td><td></td><td><b>Tax</b></td><td>$<?php  echo $_SESSION['tax'] ?></td></tr>
        <tfoot><td></td><td></td><td class="total"><b>TOTAL</b></td><td class="total"> $<?php echo $_SESSION['totalCost'] ?></td></tfoot>
    </table>

    <h3>The order will be shipped to:</h3>
    <p><?php
    echo ($_SESSION['nameFirst'] . " " . $_SESSION['nameLast']. "<br>". $_SESSION['address'] ."<br>" . $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['zip']);
     ?>
        
    </p>
 </form><form action="prove.php">
<input type="submit" value="Process another order" name="newOrder" class="navagation" />
</form>
</html>
</body>