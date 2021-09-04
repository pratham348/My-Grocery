<?php
	require_once("../CheckSession.php");
	require("../connect.php");
	extract($_POST);

	if(isset($UpdDetails))
    {
    	$Name = $txtName;
		$gender = $gen;
		$email = $txtEmail;
		$phone = $txtContect;
		
		// print_r($_POST);
    	// exit();

	 	$q = "UPDATE deliver SET 
	 			deliver_name='$Name',
	 			gender='$gender',
	 			contact_no='$phone',
	 			email_id='$email' WHERE deliver_id='$editID'";

    	//print_r($q);
    	//exit();		    
	    
	    $data = mysqli_query($con,$q);
	     //print_r($data);
    	 //exit();
	    if($data == true)
		{
			header("location:../ChangeDetails.php?message=Update Successfully");
		}
		else
		{
			header("location:../ChangeDetails.php?error=Error While Updating Deliver Profile");
		}
	}
	elseif(isset($UpdAddress))
    {
    	$add = $address;
		$pin = $txtpin;
		
		// print_r($_POST);
    	// exit();

	 	$q = "UPDATE deliver_address SET 
	 			address='$add',
	 			pincode='$pin' WHERE deliver_id= '$editAdd'";

    	// print_r($q);
    	// exit();		    
	    
	    $data = mysqli_query($con,$q);
	     //print_r($data);
    	 //exit();
	    if($data == true)
		{
			header("location:../ChangeAddress.php?message=Update Successfully");
		}
		else
		{
			header("location:../ChangeAddress.php?error=Error While Updating Deliver Address");
		}
	}
	elseif (isset($UpdPass)) 
	{
		$pass=$txtPass;
		$confirmPass=$ConfirmPass;

		if ($pass===$confirmPass) {
			$q = "UPDATE deliver SET password='$pass' WHERE deliver_id='$editPass'";

    	//print_r($q);
    	//exit();		    
	    
		    $data = mysqli_query($con,$q);
		     //print_r($data);
	    	 //exit();
		    if($data == true)
			{
				header("location:../ChangePassword.php?message=Update Successfully");
			}
			else
			{
				header("location:../ChangePassword.php?error=Error While Updating Password");
			}
			
		}
		else
		{
			header("location:../ChangePassword.php?error=Password And Confirm Password does not match");
		}
	}
	else
	{
		header("location:../ChangeDetails.php?error=Error While Updating Deliver Details");
	}

?>