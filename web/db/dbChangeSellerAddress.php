<?php
	require_once("../CheckSession.php");
	require("../connect.php");
	extract($_POST);

	if(isset($SellerUPD))
	{
		$add=$address;
		/*$ar=$area;
		$ct=$city;
		$dis=$district;
		$st=$state;
		$coun=$country;*/
		$pin=$pincode;
		$ph=$phone;
		$id=$seller;

		/*$q1="UPDATE seller_address SET 
				address='$add',
				area='$ar',
				city='$ct',
				district='$dis',
				state='$st',
				country='$coun',
				pincode='$pin',
				phone_no='$ph' WHERE seller_id='$id'";*/
		$q1="UPDATE seller_address SET 
				address='$add',
				pincode='$pin',
				phone_no='$ph' WHERE seller_id='$id'";
		//mysqli_query($con,$q1) or die(mysqli_error($con));
		
		$data=mysqli_query($con,$q1);
		if($data==true)
		{
			header("location:../ChangeSellerAddress.php?message=Address Updated");
		}
		else
		{
			header("location:../ChangeSellerAddress.php?error= Failed to Updated Address");
		}
	}

?>