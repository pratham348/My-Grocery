<?php
//session_start();
require_once("../CheckSession.php");
	require("../connect.php");

	//extract($_POST);

	if (isset($_POST['feedbackbtn'])) 
	{
		$seller=$_POST['sellerid'];
		$customer=$_POST['customerid'];
		$feedbk=$_POST['Feedback'];
		$product_id=$_POST['pro_id'];

		$q="insert into feedback(seller_id,cust_id,product_id,feedback) values('$seller','$customer','$product_id','$feedbk')";
		$data=mysqli_query($con,$q);

		//print_r($_POST);
		//exit();

		if(!$data==0)
		{
			echo"<script> 
				alert('Feedback Submitted Successfully'); 
				window.location.href='../Product.php?pro_id=$product_id';
				</script>";
			//header("location:../Product.php?pro_id=$product_id;");
		}
		else 
		{
			echo"<script> 
				alert('Error on submitting feedback!!'); 
				window.location.href='../Product.php?pro_id=$product_id';
				</script>";
		}
	}


?>