<?php
require("../connect.php");

	if(!empty($_POST["forgot-password"]))
	{	
		$condition = "";
		if(!empty($_POST["user-login-name"])) 
			$condition = " deliver_name	 = '" . $_POST["user-login-name"] . "'";
		if(!empty($_POST["user-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " email_id = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from deliver " . $condition;
		$result = mysqli_query($con,$sql);
		$user = mysqli_fetch_assoc($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
	
?>