<?php
//session_start();
// initialize shopping cart class
include 'AddToCart.php';
$cart = new Cart;

// include database configuration file
include 'connect.php';
require_once("CheckSession.php");

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];

        // get product details
        //$query = $db->query("SELECT * FROM product WHERE id = ".$productID);
        $query = mysqli_query($con,"SELECT * FROM product WHERE product_id = ".$productID);
        ///$row = $query->fetch_assoc();
        $row = mysqli_fetch_assoc($query);
        $itemData = array(
            'id' => $row['product_id'],
            'seller'=>$row['seller_id'],
            'customer'=>$_SESSION['id'],
            'name' => $row['product_name'],
            'price' => $row['product_amt'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart.php':'index1.php';
        //$redirectLoc = $insertItem?'javascript:load();':'viewCart.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['id'])){
    // insert order details into database
    //$insertOrder = $db->query("INSERT INTO order (customer_id, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");

    // insert order details into database
        $insertOrder = $con->query("INSERT INTO product_order (cust_id, total_amount, order_date_time) VALUES ('".$_SESSION['id']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."')");

           if($insertOrder)
           {
            $orderID = $con->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item)
            {
                //$price_total=$item['qty']*$item['price'];
                $sql .= "INSERT INTO order_details (order_id, seller_id, product_id, qty, product_amount) VALUES ('".$orderID."', '".$item['seller']."', '".$item['id']."', '".$item['qty']."','".$item['subtotal']."');";

                $sql .="UPDATE product SET Qty=(Qty-'".$item['qty']."') WHERE product_id='".$item['id']."';";
            }
            // insert order items into database
            $insertOrderItems = $con->multi_query($sql);
            //$porUpdate = $con->multi_query($sqlUpdate);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }

         }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}


?>