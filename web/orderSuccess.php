<?php
require_once("CheckSession.php");
require_once("connect.php");
include 'AddToCart.php';
$cart = new Cart;

if(!isset($_REQUEST['id'])){
    header("Location: index1.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>My Grocery | Order Success</title>
	<?php
		include_once("head.php");
	?>
</head>
</head>
<body>
	<?php
		include_once("header.php");
	?>
	<?php

		if (isset($_SESSION['user']))
			include_once("navigation.php");
		else
			include_once("navigation1.php");
							 
	?>
	<br>
<div class="contact agileits">
        <div class="contact-agileinfo">
          <div class="contact-form wthree" >
<div class="container">
    <h1>Order Status</h1>
    <p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
    <!--<p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>-->
</div>
</div>
</div>
</div>
<?php
		include_once("footer.php");
	?>
	<?php
		include_once("footer_script.php");
	?>
</body>
</html>