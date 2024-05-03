<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//uncomment the following after installing php mailer https://www.youtube.com/watch?v=fIYyemqKR58
// require "vendor/autoload.php";

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

// $mail = new PHPMailer(true);

// $mail->isSMTP();
// $mail->SMTPAuth = true;

//insert host name of the SMTP server :
// $mail->Host = "smtp.example.com";
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port = 587;

// $mail->Username = "you@example.com";
// $mail->Password = "mypassword";

// $mail->setForm($email, $name);
// $mail->addAddress("YourEmail@email.com", "YourName");

//

?>

<!-- To Do: -->
<!-- Create an account for Bob on https://www.smtp2go.com/pricing/ -->
<!-- add data validation -->