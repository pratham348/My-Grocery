<?php
	require_once("../CheckSession.php");
	require("../connect.php");
	extract($_POST);

	if(isset($SellerUpdata))
    {
    	$Name = $txtName;
		$gender = $gen;
		$email = $txtEmail;
		$phone = $txtContect;
		//$password = $Password;
		$licence = $txtLicence;
		
		// print_r($_POST);
    	// exit();

	 	/*$q = "UPDATE seller SET 
	 			seller_Name='$Name',
	 			gender='$gender',
	 			contact_no='$phone',
	 			email_id='$email',
	 			password='$password',
	 			licence_no='$licence' WHERE seller_id= $editID";*/
	 	$q = "UPDATE seller SET 
	 			seller_Name='$Name',
	 			gender='$gender',
	 			contact_no='$phone',
	 			email_id='$email',
	 			licence_no='$licence' WHERE seller_id= $editID";

    	// print_r($q);
    	// exit();		    
	    
	    $data = mysqli_query($con,$q);
	     //print_r($data);
    	 //exit();
	    if($data == true)
		{
			header("location:../ChangeDetails.php?message=Update Successfully");
		}
		else
		{
			header("location:../ChangeDetails.php?error=Error While Updating Seller Profile");
		}
	}
	elseif(isset($CustomerUpdata))
    {
    	$Name = $txtName;
		$gender = $gen;
		$email = $txtEmail;
		$phone = $txtContect;
		//$password = $Password;
		//$licence = $txtLicence;
		
		// print_r($_POST);
    	// exit();

	 	/*$q = "UPDATE customer SET 
	 			cust_name='$Name',
	 			gender='$gender',
	 			contact_no='$phone',
	 			email_id='$email',
	 			password='$password' WHERE cust_id= $editID";*/
	 	$q = "UPDATE customer SET 
	 			cust_name='$Name',
	 			gender='$gender',
	 			contact_no='$phone',
	 			email_id='$email' WHERE cust_id= $editID";

    	// print_r($q);
    	// exit();		    
	    
	    $data = mysqli_query($con,$q);
	     //print_r($data);
    	 //exit();
	    if($data == true)
		{
			header("location:../ChangeCustomerDetails.php?message=Update Successfully");
		}
		else
		{
			header("location:../ChangeCustomerDetails.php?error=Error While Updating Seller Profile");
		}
	}
?>