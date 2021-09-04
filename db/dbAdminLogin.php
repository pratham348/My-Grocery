	<?php
	session_start();

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
		//$q1 = mysqli_num_rows($data);
		//mysqli_error_list($q1);
		$q1 = mysqli_num_rows($data);
		$arr=mysqli_fetch_assoc($data);
		//print_r($data);
		//exit();

		if($q1==0)
		{
			header("location:../AdminLogin.php?message=Invalid Username or Password");

			//header("Location:../cust_view.php". mysqli_error($con));
		}
		else
		{
			//session_unset();
			//session_destroy(); 
			//session_start();
			//session_start();
			//session_regenerate_id();
			//session_destroy();
			//session_destroy($_SESSION['id']);
			//session_destroy($_SESSION['user']);
			$_SESSION['id']=$arr['admin_id'];
			$_SESSION['user']=$arr['username'];
			//$_SESSION['email']=$arr['email_id'];

			header("location:../Dashboard.php");
		}
		
	}
	else
	{
			header("location:../AdminLogin.php");
	}
	
	
?>