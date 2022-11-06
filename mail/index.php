<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';



SendMail($_GET['mail'], $_GET['subject'],  $_GET['body']);

function SendMail($customerMail, $subject, $body)
{

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'skybank2020@gmail.com';
        $mail->Password = 'omeiikbbzpnolqik';

        //Recipients
        $mail->setFrom("skybank2020@gmail.com", "Deccan Bank");
        $mail->addAddress($customerMail);
        $mail->addReplyTo("skybank2020@gmail.com");

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
