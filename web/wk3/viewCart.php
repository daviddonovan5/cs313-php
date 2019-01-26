<?php
session_start();
$subTotal = number_format(($_SESSION[quantity1] * 12.00) + ($_SESSION[quantity2] * 48.00) + ($_SESSION[quantity3] * 25.00) + ($_SESSION[quantity4] * 95.00), 2);
$tax = number_format($subTotal * .085, 2); 
$total = number_format($subTotal + $tax, 2);
$_SESSION['subTotal'] = number_format($subTotal, 2);
$_SESSION['tax'] = number_format($tax, 2);
$_SESSION['totalCost'] = number_format($total, 2); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Widget Cart</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>

<div id="heading">
  <CENTER> <img id="logo" src="logo.png" alt="logo" width="725" height="242">
  <p id="contact">info@widgets.com<br>800-234-5678</p> </CENTER>
</div>

<div class="main">
  <CENTER>
    
    <h4>Your Shopping Cart</h4><hr/>

    <table style="width:100%">
      <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Quantinty</th>
        <th>Cost</th>
      </tr>
      <tr>
        <form method="post" action="viewCart.php" name="cart">
        	<tr><td><b>Multifunctional OTG Card Reader</b></td>  
        	<td>$12.00</td><td><?php echo ($_SESSION['quantity1']. "</td><td>$" . $_SESSION['quantity1'] * 12.00)?>.00 </td><td> <input type="submit" name="reset1" value="Remove"></button></td> </tr>
        <?php
        if(isset($_POST['reset1'])){
        	
        	$_SESSION['quantity1'] =0;
        	header("Refresh:0");
        }
        ?>
        

        <tr><td><b>Mobile Phone Camera Lens Kit</b></td>  
        <td>$48.00</td><td><?php echo ($_SESSION['quantity2']. "</td><td>$" . $_SESSION['quantity2'] * 48.00)?>.00 </td><td> <input type="submit" name="reset2" value="Remove"></button></td> </tr>
        <?php
        if(isset($_POST['reset2'])){
        	$_SESSION['quantity2'] =0;
        	header("Refresh:0");
        }
        ?>

        <tr><td><b>Creative 3D Magical Moon Lamp</b></td>  
        <td>$25.00</td><td><?php echo ($_SESSION['quantity3']. "</td><td>$" . $_SESSION['quantity3'] * 25.00)?>.00 </td><td> <input type="submit" name="reset3" value="Remove"></button></td> </tr>
        <?php
        if(isset($_POST['reset3'])){
        	$_SESSION['quantity3'] =0;
        	header("Refresh:0");
        }
        ?>

        
		<tr><td><b>4 Modes Rainproof Mechanical Zoom Headlamp</b></td>  
        <td>$95.00</td><td><?php echo ($_SESSION['quantity4']. "</td><td>$" . $_SESSION['quantity4'] * 95.00)?>.00 </td><td> <input type="submit" name="reset4" value="Remove"></button></td> </tr>
        <?php
        if(isset($_POST['reset4'])){
        	$_SESSION['quantity4'] =0;
        	header("Refresh:0");
        }
        ?>
        
        <tr><td></td><td></td><td class="subtotal"><b>Subtotal</b></td><td class="subtotal">$<?php  echo $subTotal  ?></td></tr>
        <tr><td></td><td></td><td><b>Tax</b></td><td>$<?php  echo $tax  ?></td></tr>
        <tfoot><td></td><td></td><td class="total"><b>TOTAL</b></td><td class="total"> $<?php  echo $total  ?></td></tfoot>
    </table>
 </form><form action="shopping.php">
<input type="submit" value="Continue Shopping" name="goShop" class="navagation" />
</form><form action="checkout.php">
<input type="submit" value="Check Out" class="navagation">



</html>
</body>