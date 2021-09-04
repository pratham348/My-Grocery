<?php
	session_start();

	require("../connect.php");

	extract($_POST); 

	if(isset($btnLogin))
	{
		$email = $txtemail;
		$pass = $txtPass;

		$q = "SELECT * FROM deliver WHERE email_id='$email' AND password='$pass'";
		//print_r($_POST);
		//exit();
		$data = mysqli_query($con,$q);
		//$q1 = mysqli_num_rows($data);
		//mysqli_error_list($q1);
		$q1 = mysqli_num_rows($data);
		$arr=mysqli_fetch_assoc($data);
		//print_r($data);
		//exit();
		if($arr['status']==1)
		{

			if($q1==0)
			{
			header("location:../DeliverLogin.php?error=Invalid Username or Password");
			}
			else
			{
				$_SESSION['id']=$arr['deliver_id'];
				$_SESSION['user']=$arr['deliver_name'];
				$_SESSION['email']=$arr['email_id'];

				header("location:../DilivaryDashboard.php");
			}
		}
		else
		{
			header("location:../DeliverLogin.php?error=Deliver is Not Active!!");
		}
		
	}
	else
	{
			header("location:../DeliverLogin.php");
	}
	
	
?>