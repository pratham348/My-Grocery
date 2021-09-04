<?php
// initializ shopping cart class
include_once("connect.php");
include 'AddToCart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Grocery | View Cart</title>
    <?php
        include_once("head.php");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
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

    <h1><center>Shopping Cart</center></h1>
    <br>
    <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th width="5%">Action</th>
            
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
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo 'Rs.'.$item["subtotal"].' INR'; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash">Remove</i></a>
            </td>
           
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo 'Rs.'.$cart->total().' INR'; ?></strong></td>
            <td style="float: left;"><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
   
</div>
</tr>
</tbody>
</table>
<table>
    <tr style="align-content: center;">
        <td style="float: left;">
            <a href="OrderHistory.php">
                            <span class="fa fa-book" aria-hidden="true"></span> View Order History</a>
        </td>

        <td style="float: right; margin-left: 750px;">
            <a href="TrackOrder.php">
                            <span class="fa fa-truck" aria-hidden="true"></span> Track Order</a>
        </td>
    </tr>
 
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