<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../include/PHPMailer/src/Exception.php';
require '../include/PHPMailer/src/PHPMailer.php';
require '../include/PHPMailer/src/SMTP.php';

$name = $_POST['name'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    $mail->Username = 'boendemi@mail.com';                 // SMTP username
    $mail->Password = 'b03ndemi';                           // SMTP password
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('boendemi@mail.com', $name);
    $mail->addAddress('boendemi@mail.com');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];

    $mail->send();
    echo 'Mail sent successfully';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
