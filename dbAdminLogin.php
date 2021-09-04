<?php	

	require("connect.php");
	extract($_POST);		

	if(isset($adminLogin))
	{
		$username = $aname;
		$password = $psw;

		$q = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
		// print_r($q);
    	 //exit();

    	$data = mysqli_query($con,$q);
		//print_r($data);
    	//exit();

    	$rows = mysqli_num_rows ($data);
	    if($rows > 0)
	    {
	        //successfull login
	     	$_SESSION['username'] = $username;
	    } else {
	        $msg = "Invalid Login Credentials";
	    }

	}
	else
	{
		header("location:Admin.php");
	}
?>