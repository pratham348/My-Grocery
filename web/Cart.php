<?php
	//session_start();
	include_once("connect.php");
	include 'AddToCart.php';
	$cart = new Cart;


if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}


if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="Cart.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Grocery | Home</title>
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
	<br>
<div class="contact agileits">
        <div class="contact-agileinfo">
          <div class="contact-form wthree" >
<!--form-->
<?php
                if(isset($_GET["message"]))
                {
                  ?>
                  <h3 class="box-title" style="color: green;">
                    <?php echo $_GET["message"]; ?>
                  </h3>
                  <?php    
                }
                else if(isset($_GET["error"]))
                {
                  ?>
                  <h3 class="box-title" style="color: red;">
                    <?php echo $_GET["error"]; ?>
                  </h3>
                  <?php    
                }
              ?>
    
                

</tabel>
<div style="clear:both"></div>
			<br />
			<h2><center>Order Details</center></h2>
			<br>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr >
						<th width="5%">No</th>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						$i = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
							$i++;

					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Rs. <?php echo $values["item_price"]; ?></td>
						<td>Rs. <?php echo number_format((float)$values["item_quantity"] * (float)$values["item_price"], 2);?></td>
						<td><a href="Cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ((float)$values["item_quantity"] * (float)$values["item_price"]);
						}
					?>
					<tr>
						<td colspan="4"><bold>Total</bold></td>
						<td>Rs. <?php echo number_format($total, 2); ?></td>
						<td><a href="BuyNow.php?action=Buy&id=<?php echo $values["item_id"]; ?>"><center>Buy</center></a> </td>
					</tr>
					<?php
					}
					?>
						
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