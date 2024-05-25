<?php

require_once (__DIR__ . "/../vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . "/../config/");
$dotenv->load();

// Debugging
// $smtpPassword = $_ENV['SMTP_PASSWORD'];
// if ($smtpPassword === false) {
//     die('.env file is not set/loaded correctly');
// } else {
//     echo "SMTP Password: " . $smtpPassword;
// }

// var_dump($smtpPassword);
// exit; // Exit after dumping the variable to prevent further script execution

?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

//leave this commented out if you aren't actively debugging
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

//insert host name of the SMTP server :
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587; //465 //80?

//use the values from your own SMTP server
$mail->Username = "theresa.barkasy@gmail.com"; //change to .env variable
$mail->Password = $_ENV['SMTP_PASSWORD'];

$mail->setFrom($email, $name);
$mail->addAddress("theresa.barkasy@gmail.com", "Captain Banjo Bob");

$mail->isHTML(true); // set email format to HTML
$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = strip_tags($message); // strip HTML tags for plain text

if ($mail->send()) {
    // echo "Email sent successfully";
    header("Location: http://localhost/Banjo-Bob/");
    exit();
} else {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//to redirect
// header("Location: index.php");

?>

<!-- To Do: -->
<!-- Create an account for Bob on https://www.smtp2go.com/pricing/ -->
<!-- add data validation -->