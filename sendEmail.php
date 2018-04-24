<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


    $name    = $_POST['custName'];
    $email   = $_POST['inputEmail'];
    $problem = $_POST['problemOption'];
    $message = $_POST['problemText'];


    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "volumeincclothing@gmail.com";
    $mail->Password = "bostonred18";
    $mail->setFrom('volumeincclothing@gmail.com', 'Volume Inc');
    $mail->addAddress('aows-r@live.co.uk', 'To');

    $mail->Subject = "$name $problem";
    $mail->Body    =  "$email $problem $message";

    if (!$mail->send()) {
        echo "Error sending message";
    } else {
        echo "Message sent!";
    }




?>

