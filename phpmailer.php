<?php

require_once("/home/cocorich/public_html/phpmailer/src/PHPMailer.php");

require_once("/home/cocorich/public_html/phpmailer/src/SMTP.php");

$errorMSG = "";


if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["subject"])) {
    $errorMSG = "Subject is required ";
} else {
    $subject = $_POST["subject"];
}

if (empty($_POST["message"])) {
    $errorMSG = "Message is required ";
} else {
    $message = $_POST["message"];
}

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
$mail->FromName = $name;
$mail->addAddress("info@cocorichindo.com", "Marcella Dharsono");
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = "(This is the plain text version of the email content)";

if(!$mail->send()) 

{
    echo "Mailer Error:" . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>