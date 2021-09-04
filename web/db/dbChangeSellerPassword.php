<?php
require_once("../CheckSession.php");
require_once("../connect.php");
extract($_POST);

if (isset($ChangePass)) {
    //$username = $txtUser;
    $password = $txtPass;
    $id = $id;
    $old = $txtOldPass;
    $email=$Email;

   $sql = "SELECT * FROM seller WHERE email_id ='$email' AND password='$old'";
   //mysql_select_db('test_db');
   $retval = mysqli_query($con,$sql);
   $q1 = mysqli_num_rows($retval);
   $arr=mysqli_fetch_assoc($retval);
   if(!$q1) {
    header("location:../ChangeSellerPassword.php?error=Could not match Email or Password");
     //die('Could not get data: ' . mysqli_error($con));
   }
   else
   {
    $q = "UPDATE seller SET password='$password' WHERE  email_id='$email'";
    $data = mysqli_query($con,$q);
    //print_r($data);

    if(!$data == true)
        {
            header("location:../ChangeSellerPassword.php?error=Error While Changing Password");
        }
        else
        {
            header("location:../ChangeSellerPassword.php?message=Password Successfully Changed");
        }
    }
    }else
        {
            header("location:../ChangeSellerPassword.php?error=Confirm Password Not Match");
        }

?>