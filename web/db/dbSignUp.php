<?php
 	session_start();
	require("../connect.php");
	extract($_POST);
	
if(isset($CustReg))
	{
		$Name=$CustName;
		$Gen=$CustGen;
		$Mail=$CustEmail;
		$Phone=$CustContect;
		$Pass=$CustPass;
		$CPass=$CustCPass;

	if ($Pass===$CPass) 
	{
		$sql=mysqli_query($con,"select email_id from customer where email_id='$Mail'");
		$get=mysqli_fetch_assoc($sql);
		$rowcount=mysqli_num_rows($sql);
		 //if($rowcount==1)
			if(mysqli_num_rows($sql))
			{
				if($get['email_id']==$Mail)
				{
					header("location:../SignUp.php?message1=Email Id is Already Used!!");
				}
				else
				{
					header("location:../SignUp.php?message1=Customer Already Exsist!!");
				}
			}
			else
			{
			$ins_query = "insert into customer(`cust_name`,`gender`,`password`,`contact_no`,`email_id`) values('$Name','$Gen','$Pass','$Phone','$Mail')";
			$data=mysqli_query($con,$ins_query);
			$q1 = mysqli_num_rows($data);
			$arr=mysqli_fetch_assoc($data);
		    if($data == true)
			{	
				$req=mysqli_query($con,"select * from customer where cust_name='$Name';");
				$a=mysqli_fetch_assoc($req);
				$_SESSION['id']=$a['cust_id'];
				$_SESSION['user']=$a['cust_name'];
				$_SESSION['email']=$a['email_id'];
				//$AddID=mysqli_insert_id($con);
				//echo "".mysqli_insert_id($con);
				header("location:../CustomerAddress.php");
			}
			else
			{
			header("location:../SignUp.php?message1=Registration Failed");
			}
		}
	}
	else
	{
		header("location:../SignUp.php?message1=Password and Confirm Password does not match!!");
	}
   }
elseif(isset($SellerReg))
{
    	$Name = $txtName;
		$gender = $gen;
		$email = $txtEmail;
		$phone = $txtContect;
		$password = $Password;
		$licence = $txtLicence;
		$CPassword=$ConfirmPassword;
		
		// print_r($_POST);
    	// exit();
    if ($password===$CPassword) 
    {
		$sql=mysqli_query($con,"select email_id from seller where email_id='$email'");
		$sql1=mysqli_query($con,"select licence_no from seller where licence_no='$licence'");
		$get=mysqli_fetch_assoc($sql);
		$get1=mysqli_fetch_assoc($sql1);
		$rowcount=mysqli_num_rows($sql);
		 //if($rowcount==1)
		if(mysqli_num_rows($sql))
			{
				if($get['email_id']==$email)
				{
					header("location:../SignUp.php?message=Email Id is Already Used!!");
				}
				else
				{
					header("location:../SignUp.php?message=Seller Already Exsist!!");
				}
			}
			elseif (mysqli_num_rows($sql1)) 
			{
				if($get1['licence_no']==$licence)
				{
					header("location:../SignUp.php?message=Licence is Already Used!!");
				}
				else
				{
					header("location:../SignUp.php?message=Seller Already Exsist!!!");
				}
			}
			else
			{
		 	$q = "insert into seller(seller_Name,gender,contact_no,email_id,password,licence_no)values('$Name','$gender','$phone','$email','$password','$licence')";

	    	// print_r($q);
	    	// exit();		    
		    
		    $data = mysqli_query($con,$q);
		     //print_r($data);
	    	 //exit();
		    if($data == true)
			{
				$req=mysqli_query($con,"select * from seller where seller_name='$Name';");
				$arr=mysqli_fetch_assoc($req);
				$_SESSION['id']=$arr['seller_id'];
				$_SESSION['user']=$arr['seller_name'];
				$_SESSION['email']=$arr['email_id'];

				//$_SESSION['username']=$uname;
				//$_SESSION['id']=$req['sellerid'];
				//session_write_close();
				//$subject="Successfull Registration";
				//$message='Dear Seller,'."\r\n".' Thank you for registering with us.'."\r\n".' We wish you have better sales with us.'."\r\n"."\r\n"."\r\n".'Regards'."\r\n".'Team Opticonnect';
				//$to="".$arr['email'];
				//$res=mail($to, $subject, $message);
			//	header("location:seller_upload.php");
				header("location:../SellerAddress.php");
			}
			else
			{
				header("location:../SignUp.php?message=Registration Failed");
			}
		}
	}
	else
	{
		header("location:../SignUp.php?message=Password and Confirm Password does not match!!");
	}
}
else
{
	//header("location:../SignUp.php");
}

?>