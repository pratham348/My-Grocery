<?php
	require_once("../CheckSession.php");
	require("../connect.php");
	extract($_POST);

	if(isset($CustAdd))
	{
		$add=$address;
		$ar=$area;
		$ct=$city;
		$dis=$district;
		$st=$state;
		$coun=$country;
		$pin=$pincode;
		$ph=$phone;
		$id=$Add;

		//$q="insert into customer_address(cust_id,address,area,city,district,state,country,pincode,phone_no) values('$id','$add','$ar','$ct','$dis','$st','$coun','$pin','$ph')";
		$q="insert into customer_address(cust_id,address,pincode,phone_no) values('$id','$add','$pin','$ph')";
		$data=mysqli_query($con,$q);
		if($data==true)
		{	
			session_destroy();
			header("location:../SignIn.php");
		}
		else
		{
			header("location:../Address.php?message1=Registration Failed");
		}
	}
	elseif(isset($SellerAdd))
	{
		$add=$address;
		$ar=$area;
		$ct=$city;
		$dis=$district;
		$st=$state;
		$coun=$country;
		$pin=$pincode;
		$ph=$phone;
		$id=$seller;
		//$id=$_SESSION['id'];

		//$q1="INSERT INTO seller_address(seller_id,address,area,city,district,state,country,pincode,phone_no)VALUES('$id','$add','$ar','$ct','$dis','$st','$coun','$pin','$ph')";
		$q1="INSERT INTO seller_address(seller_id,address,pincode,phone_no)VALUES('$id','$add','$pin','$ph')";
		//mysqli_query($con,$q1) or die(mysqli_error($con));
		
		$data=mysqli_query($con,$q1);
		if($data==true)
		{	
			session_destroy();
			header("location:../SignIn.php");
		}
		else
		{
			header("location:../Address.php?message=Registration Failed");
		}
	}

?>