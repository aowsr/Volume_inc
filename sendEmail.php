<?php
if (isset($_POST["submit"])) {
    $name    = $_POST['custName'];
    $email   = $_POST['inputEmail'];
    $problem = $_POST['problemOption'];
    $message = $_POST['problemText'];


    $from    = 'Volume_inc Help';
    $to      = 'aows-r@live.co.uk';
    $subject = 'Help Message Fom Volume';

    $body = "From: $name\n E-Mail: $email\n Problem-type:\n $problem Message:\n $message";

    mail($to, $subject, $body, $from);
}

