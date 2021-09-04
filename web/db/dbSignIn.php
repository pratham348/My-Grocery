<?php
	session_start();

	require("../connect.php");

	extract($_POST); 

	if(isset($CustLogin))
	{

		$email = $txtEmail;
		$pass = $Password;

		$q = "SELECT * FROM customer WHERE email_id='$email' AND password='$pass'";
		//print_r($_POST);
		//exit();
		$data = mysqli_query($con,$q);
		$q1 = mysqli_num_rows($data);
		$arr=mysqli_fetch_assoc($data);
		//print_r($data);
		//exit();
		if($arr['status']==1)
		{
			if($q1==0)
			{
				header("location:../SignIn.php?message1=Invalid Username or Password");

				//header("Location:../cust_view.php". mysqli_error($con));
			}
			else
			{
				//$_SESSION["user"]=$email;
						
				$_SESSION['id']=$arr['cust_id'];
				$_SESSION['user']=$arr['cust_name'];
				$_SESSION['email']=$arr['email_id'];

				header("location:../Index.php");
			}
		}
		else
		{
			header("location:../SignIn.php?message1=Customer is Not Active!!");	
		}
		
	}
	else if(isset($SellerLogin))
	{
		$email = $txtEmail;
		$pass = $Password;

		$q = "SELECT * FROM seller WHERE email_id='$email' AND password='$pass'";
		//print_r($_POST);
		//exit();
		$data = mysqli_query($con,$q);
		$q1 = mysqli_num_rows($data);
		$arr=mysqli_fetch_assoc($data);
		//mysqli_error_list($q1);
		//print_r($data);
		//exit();
		if($arr['status']==1)
		{
			if($q1==0)
			{
				header("location:../SignIn.php?message=Invalid Username or Password");

				//header("Location:../cust_view.php". mysqli_error($con));
			}
			else
			{
				$_SESSION['id']=$arr['seller_id'];
				$_SESSION['user']=$arr['seller_name'];
				$_SESSION['email']=$arr['email_id'];

				header("location:../SellerHome.php");
			}
		}
		else
		{
			header("location:../SignIn.php?message=Seller is Not Active!!");	
		}
		
	}
	else
	{
			header("location:../SignIn.php");
	}
	
	
?>