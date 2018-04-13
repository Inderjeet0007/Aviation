<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['textarea'];

echo $name;
echo $phone;
echo $email;
echo $message;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->Username = 'isaluja3@gmail.com';                 // SMTP username
    $mail->Password = 'saluja123';                           // SMTP password

    //sendere
    $mail->setFrom('isaluja3@gmail.com', 'Avaition');
    //Recipients
    $mail->addAddress($email, $name);     // Add a recipient


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hello '.$name;
    $mail->Body    = $message;

    $mail->send();
    echo 'ALERT! : Mail has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sending Mail...</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="http://localhost/Aviation/AboutUs.php">Back To AboutUs</a></body>
</html>
