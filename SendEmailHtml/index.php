<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    ///$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'stefanchuk.roman@gmail.com';                     //SMTP username
    $mail->Password   = 'djxixfsxuulvhnal';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  
  
  // stefanchuk.roman@yahoo.com
  // stefanchuk.roman@gmail.com
  // roman@yyy-net.com

    $mail->setFrom('stefanchuk.roman@gmail.com', 'Ehhh hh hhh hhh hh ');
    $mail->addAddress('alex@yyy-net.com');     //Add a recipient
	
	$body = file_get_contents('mail.html');
//	$mail->AddEmbeddedImage('cssm', 'b_eng');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Important';
    $mail->Body    = $body;
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}