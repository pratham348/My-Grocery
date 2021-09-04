<?php
	require_once("../CheckSession.php");
	require("../connect.php");
	extract($_POST);

	if(isset($CustomerUPD))
	{
		$add=$address;
		/*$ar=$area;
		$ct=$city;
		$dis=$district;
		$st=$state;
		$coun=$country;*/
		$pin=$pincode;
		$ph=$phone;
		$id=$customer;

		/*$q1="UPDATE customer_address SET 
				address='$add',
				area='$ar',
				city='$ct',
				district='$dis',
				state='$st',
				country='$coun',
				pincode='$pin',
				phone_no='$ph' WHERE cust_id='$id'";*/
		$q1="UPDATE customer_address SET 
				address='$add',
				pincode='$pin',
				phone_no='$ph' WHERE cust_id='$id'";
		//mysqli_query($con,$q1) or die(mysqli_error($con));
		
		$data=mysqli_query($con,$q1);
		if($data==true)
		{
			header("location:../ChangeCustomerAddress.php?message=Address Updated");
		}
		else
		{
			header("location:../ChangeCustomerAddress.php?error= Failed to Update Address");
		}
	}

?>