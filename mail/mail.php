<?php

// $customerMail = "chaudharidigambar52002@gmail.com";
// $name = "jojo";
// $amount = "300";
// $totalAmount = "400";
// $date = date("d/m/Y");
// $AccountNo = "123456789012";

// creditMoneyMail($customerMail,$name,$amount,$totalAmount,$date,$AccountNo);

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


function VerificationMail($email, $subject, $message, $action, $vkey, $flag)
{

    $vlink = "http://localhost/organio/authentication/verify.php?vkey=" . $vkey . "&flag=" . $flag;

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = 'skybank2020@gmail.com';
    $mail->Password = 'omeiikbbzpnolqik';

    $content = file_get_contents('../mail/DebitMailTemp.php');
    $mail->setFrom("skybank2020@gmail.com", "Organio");
    $mail->addAddress($email);
    $mail->addReplyTo("skybank2020@gmail.com");

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message . " <a href='$vlink'>'$action'</a>";


    if (!$mail->send()) {
        $error = "mail not sent";
    }
}
