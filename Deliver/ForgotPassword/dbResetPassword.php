<?php
require("../connect.php");


	if(isset($_POST["btnReset"])) 
	{
		$pass=$_POST["Password"];
		$uname=$_POST["user"];
		$confirmPassword=$_POST['ConfirmPassword'];

		if($pass===$confirmPassword)
		{
			$sql = "UPDATE deliver SET password = '$pass' WHERE deliver_name = '$uname'";
			$result = mysqli_query($con,$sql);
			if ($result==true) 
			{
				header("location:../DeliverLogin.php?message=Password is reset successfully.");
			}
			else
			{
				header("location:../DeliverLogin.php?error=Error while reset password.");
			}
		}
		else
		{
			header("location:../DeliverLogin.php?error=Password and Confirm Password does not match.");
		}
		
	}
?>