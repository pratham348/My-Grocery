<?php
// include database configuration file
include 'connect.php';
require_once("CheckSession.php");

// initializ shopping cart class
include 'AddToCart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
//$_SESSION['id'] = 1;

// get customer details by session customer ID
//$query = $db->query("SELECT * FROM customers WHERE id = ".$_SESSION['sessCustomerID']);
$query = mysqli_query($con,"SELECT * FROM customer WHERE cust_id = ".$_SESSION['id']);
//print_r($query);
$custRow = mysqli_fetch_assoc($query);
//print_r($custRow);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Grocery | Checkout</title>
    <?php
        include_once("head.php");
    ?>
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
<div class="contact agileits">
        <div class="contact-agileinfo">
          <div class="contact-form wthree" >
<div class="container">
    <h1><center>Order Preview</center></h1>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo 'Rs.'.$item["price"].' INR'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo 'Rs.'.$item["subtotal"].' INR'; ?></td>

        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total: <?php echo 'Rs.'.$cart->total().' INR'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</tr>
</tbody>
</table>
    <div class="shipAddr">
        <h4>Shipping Details</h4>
        <p><?php echo $custRow['cust_name']; ?></p>
        <p><?php echo $custRow['email_id']; ?></p>
        <p><?php echo $custRow['contact_no']; ?></p>
        <p><?php
            $cust=$custRow['cust_id'];
            $q="SELECT address FROM customer_address WHERE cust_id='$cust'";
            $data=mysqli_query($con,$q);
            $c=mysqli_fetch_assoc($data);
            echo "Address: ".$c['address'];?></p>
    </div>
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</tr>
</tbody>
</table>
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