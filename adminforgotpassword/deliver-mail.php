<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $Name . ",<br><br><p>Click this link to Enter in your Account<br><a href='" . PROJECT_HOME . "PHP/My Grocery/admin_panel/Deliver/ResetPassword.php?name=" . $Name . "'>" . PROJECT_HOME . "PHP/My Grocery/admin_panel/Deliver/ResetPassword.php?name=" . $Name . "</a><br><br></p>Regards,<br> Admin.</div>";

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
$mail->AddAddress($email);
$mail->Subject = "My Grocery Deliver Registration";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	header("Location:../AddDeliver.php?error=Problem in Sending Registration Email");
	//$error_message = 'Problem in Sending Password Recovery Email';
} else {
	header("Location:../AddDeliver.php?message=Deliver Added Successfully Please check your email to Login ");
	//$success_message = 'Please check your email to reset password!';
}

?>
