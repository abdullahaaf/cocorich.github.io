<?php

require_once("/home/cocorich/public_html/phpmailer/src/PHPMailer.php");

require_once("/home/cocorich/public_html/phpmailer/src/SMTP.php");


$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                   

$mail->Host = "mail.cocorichindo.com";

$mail->SMTPAuth = true;                            

$mail->Username = "ask@cocorichindo.com";                 

$mail->Password = "passwordcocorich";                           

$mail->SMTPSecure = "tls";                           
$mail->Port = 587;                                   
$mail->From = "ask@cocorichindo.com";
$mail->FromName = "Cocorich Indo SMTP Testing";
$mail->addAddress("info@cocorichindo.com", "Marcella Dharsono");
$mail->isHTML(true);
$mail->Subject = "PHP Mailer Tes";
$mail->Body = "<i>This a testing mail using PHPMailer SMTP</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 

{
    echo "Mailer Error:" . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>