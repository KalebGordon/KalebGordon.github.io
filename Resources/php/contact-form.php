<?php

include("Resources/php/config.php");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "Resources/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-relay.sendinblue.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = $Username;
$mail->Password = $Password;

$mail->setFrom($email, $name);
$mail->addAddress("kalebparkergordon@gmail.com", "Kaleb");

$mail->Body = $message;
$mail->Subject = $name;

$mail->send();

echo "email sent";

