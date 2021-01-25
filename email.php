<?php

require ('PHPMailer/PHPMailerAutoload.php');

$mail=new PHPMailer();

//enable SMTP
$mail->isSMTP();
$mail->SMTPDebug =2; 
$mail->Host="smtp.gmail.com";

$mail->SMTPSecure='tls';

$mail->Port=587;

$mail->SMTPAuth=true ;


//Username and Password from Gmail
$mail->Username = "/*Your Email Address*/";
$mail->Password = "/*Your Password*/";

//Comment from transcript.html
//$_SESSION['comment']=$_POST['comment'];

$mail->isHTML(true);

//Set subject & body
$mail->Subject=$_POST['subject'];
$mail->Body=$_POST['comment'];

//Email Header 
$mail->SetFrom('/*Your Email Address*/','SeafoodRestaurantKlang');
$mail->addAddress($_POST['email']);



if(!$mail->send())
	
	{
		echo "The email could not sent","<br>";
		echo  $mail->ErrorInfo;
		
		return false;
	}
else
{
	echo "Email sent";
    header("Location:admin_feedback.php");
	return true;
}


?>