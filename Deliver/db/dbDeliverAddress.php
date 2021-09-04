<?php
	require_once("../CheckSession.php");
	require("../connect.php");
	extract($_POST);

	if(isset($RegAddress))
    {
    	$add = $address;
		$pin = $txtpin;
		$deliver = $AddId;
		
		// print_r($_POST);
    	// exit();

	 	$q = "INSERT INTO deliver_address(deliver_id,address,pincode) VALUES ('$deliver','$add','$pin')";

    	//print_r($q);
    	//exit();		    
	    
	    $data = mysqli_query($con,$q);
	     //print_r($data);
    	 //exit();
	    if($data == true)
		{
			header("location:../DeliverAddress.php?message=Address Registration Successfully");
		}
		else
		{
			header("location:../DeliverAddress.php?error=Error While Deliver Address Registration");
		}
	}
?>