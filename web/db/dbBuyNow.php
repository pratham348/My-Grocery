<?php   
require_once("../CheckSession.php");
	require("../connect.php");


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


if(!empty($_SESSION["shopping_cart"]))
{
 $total = 0;
 //$i = 0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
{
//$i++;	
$qty=$values["item_quantity"];
//extract($_POST);
if (isset($_POST['buynow'])) {
	
	
	//$total=$_POST['prototal'];

	$q="INSERT INTO order(qty=$qty);";
	//$q="INSERT INTO order qty='$qty' AND total_amount='$total'";
	$data=mysqli_query($con,$q);

	if ($data==true) {
		echo "Order Successfully";
	}
	else
	{
		echo "Error".mysqli_error($con);
	}
}
}
}

?>