<?php
require("../connect.php");


	if(isset($_POST["btnReset"])) 
	{
		$pass=$_POST["Password"];
		$uname=$_POST["user"];

		$sql = "UPDATE customer SET password = '$pass' WHERE cust_name = '$uname'";
		$result = mysqli_query($con,$sql);
		if ($result==true) 
		{
			header("location:../SignIn.php?message=Password is reset successfully.");
		}
		else
		{
			header("location:../CustomerResetPassword.php?message=Error while reset password.");
		}
		
	}
	elseif(isset($_POST["btnReset1"])) 
	{
		$pass=$_POST["Password"];
		$uname=$_POST["user"];

		$sql = "UPDATE seller SET password = '$pass' WHERE seller_name = '$uname'";
		$result = mysqli_query($con,$sql);
		if ($result==true) 
		{
			header("location:../SignIn.php?message11=Password is reset successfully.");
		}
		else
		{
			header("location:../SellerResetPassword.php?message=Error while reset password.");
		}
		
	}
	else
	{
		header("location:../SignIn.php");
	}
?>