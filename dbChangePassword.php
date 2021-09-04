<?php
require_once("CheckSession.php");
require_once("connect.php");
extract($_POST);

if (isset($btnChange)) {
    //$username = $txtUser;
    $password = $txtPass;
    $aid = $id;
    $old = $txtOldPass;
    $confirmPass=$ConfirmPass;
    
   if($password===$confirmPass ) 
   {
    $q = "UPDATE admin SET password='$password' WHERE admin_id ='$aid'";
    $data = mysqli_query($con,$q);
    //print_r($data);

    if(!$data == true)
        {
            header("location:ChangePassword.php?error=Error While Changing Password");
        }
        else
        {
            header("location:ChangePassword.php?message=Password Successfully Changed");
        }
    }
    else
   {
    header("location:ChangePassword.php?error=Could not match Password");
   }
  }
  else
  {
      header("location:ChangePassword.php?error=Confirm Password Not Match");
  }

?>