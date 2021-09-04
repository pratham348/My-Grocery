<?php
	require_once("../CheckSession.php");
	require("../connect.php");
	extract($_POST);

	if(isset($AddDeliver))
    {
    	$Name = $txtName;
		$gender = $gen;
		$email = $txtEmail;
		$phone = $txtContect;
		$pass = $txtPass;
		$confirmPass = $ConfirmPass;
		
		// print_r($_POST);
    	// exit();
    	if ($pass===$confirmPass) 
    	{
		 	$q = "INSERT INTO deliver(deliver_name,gender,contact_no,email_id,password)VALUES ('$Name','$gender','$phone','$email','$pass')";

	    	//print_r($q);
	    	//exit();		    
		    
		    $data = mysqli_query($con,$q);
		    //$user1 = mysqli_fetch_array($data);
		     //print_r($data);
	    	 //exit();
		    if($data == true)
			{
				$email;
				require_once("deliver-mail.php");
				//header("location:../AddDeliver.php?message=Diliver Added Successfully");
			}
			else
			{
				header("location:../AddDeliver.php?error=Error While Adding Deliver's Details");
			}
		}
		else
		{
			header("location:../AddDeliver.php?error=Password And Confirm Password does not match");
		}
	}
	else
	{
		header("location:../AddDeliver.php?error=Error While Inserting Deliver's Details");
	}
?>