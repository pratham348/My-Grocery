<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $user["username"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "PHP/My Grocery/admin_panel/ResetPassword.php?name=" . $user["username"] . "'>" . PROJECT_HOME . "PHP/My Grocery/admin_panel/ResetPassword.php?name=" . $user["username"] . "</a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($user["email_id"]);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	header("Location:../ForgotPassword.php?message=Problem in Sending Password Recovery Email");
	//$error_message = 'Problem in Sending Password Recovery Email';
} else {
	header("Location:../ForgotPassword.php?message1=Please check your email to reset password!");
	//$success_message = 'Please check your email to reset password!';
}

?>
