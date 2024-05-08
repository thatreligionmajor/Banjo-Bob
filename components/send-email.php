<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// https://www.youtube.com/watch?v=fIYyemqKR58 4:00
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

//leave this commented out if you aren't actively debugging
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

//insert host name of the SMTP server :
// $mail->Host = "smtp.example.com";
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port = 587;

// $mail->Username = "theresa.barkasy@gmail.com";
// $mail->Password = "mypassword";

// $mail->setForm($email, $name);
$mail->addAddress("theresa.barkasy@gmail.com", "Captain Banjo Bob");

// $mail->send();
echo "Email sent successfully";

//to redirect
// header("Location:")

?>

<!-- To Do: -->
<!-- Create an account for Bob on https://www.smtp2go.com/pricing/ -->
<!-- add data validation -->