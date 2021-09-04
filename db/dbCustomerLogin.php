<?php
	require("../connect.php");
	extract($_POST);

	
	if(isset($btnLogin))
	{
		$user = $Username;
		$pass = $Password;

		$q = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
		//print_r($_POST);
		//exit();
		$data = mysqli_query($con,$q);
		$q1 = mysqli_num_rows($data);
		mysqli_error_list($q1);
		//print_r($data);
		//exit();

		if($q1==0)
		{
			header("location:../AdminLogin.php?message=Invalid Username or Password");

			//header("Location:../cust_view.php". mysqli_error($con));
		}
		else
		{
			$_SESSION["user"]=$username;

			header("location:../cust_view.php");
		}
		
	}
	else
	{
			header("location:../AdminLogin.php");
	}
	
	
?>