<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require '../vendor/autoload.php';      // Load Composer's autoloader
require_once './const.php';

function mail_it($to, $sub, $msg, $atch)
{
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
   //Server settings
   $mail->SMTPDebug = 2;                                       // Enable verbose debug output
   $mail->isSMTP();                                            // Set mailer to use SMTP
   $mail->Host       = EM_HOST ;                               // Specify main and backup SMTP servers
   $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   $mail->Username   = EM_FROM;                     // SMTP username
   $mail->Password   = EM_PASS;                               // SMTP password
   $mail->SMTPSecure = EM_SECURITY;                                  // Enable TLS encryption, `ssl` also accepted
   $mail->Port       = EM_PORT;                                    // TCP port to connect to

   //Recipients
   $mail->setFrom(EM_FROM, EM_FROM_NAME);
   $mail->addAddress($to);                              // Add a recipient
   //Uncomment below to control over More options
   // $mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

   // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
   if(isset($atch)) {
   $mail->AddAttachment($atch);    
   }
   // Content
   $mail->isHTML(true);                                  // Set email format to HTML
   $mail->Subject = $sub;
   $mail->Body    = $msg;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   $mail->send();
   echo 'Message has been sent';
} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




// $mail->IsSMTP();                                      // Set mailer to use SMTP
// $mail->Host = EM_HOST ;  // Specify main and backup server
// $mail->Port = EM_PORT;
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = EM_FROM;                            // SMTP username
// $mail->Password = EM_PASS;                           // SMTP password
// $mail->SMTPSecure = EM_SECURITY;                            // Enable encryption, 'ssl' also accepted

// $mail->From = EM_FROM;
// $mail->FromName = EM_FROM_NAME;
// $mail->AddAddress($to);               // Name is optional
// $mail->Subject = $sub;
// $mail->Body    = $msg;
// if(isset($atch))
// {
// $mail->AddAttachment($atch);    
// }
// if(!$mail->Send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//    if(EXIT_ON_ERROR){
//    exit;       
//    }
// }
// echo 'Message has been sent';
}
?>
