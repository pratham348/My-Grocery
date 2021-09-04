<?php
//session_start();
//require_once("../CheckSession.php");
	require("../connect.php");

	//extract($_POST);

	if (isset($_POST['Feedback'])) 
	{

		$feedbk=$_POST['message'];
		$email=$_POST['Email'];
		$name=$_POST['Name'];

		$q="insert into admin_feedback(	name,email_id,feedback) values('$name','$email','$feedbk')";
		$data=mysqli_query($con,$q);

		//print_r($_POST);
		//exit();

		if(!$data==0)
		{
			echo"<script> 
				alert('Thanks For Giving Feedback'); 
				window.location.href='../Feedback.php';
				</script>";
			//header("location:../Product.php?pro_id=$product_id;");
		}
		else 
		{
			echo"<script> 
				alert('Error on submitting feedback!!'); 
				window.location.href='../Feedback.php?';
				</script>";
		}
	}


?>