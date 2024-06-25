<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
        header("Location: index.php?message=" . urlencode($message));
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kazzaz.jad@gmail.com';
        $mail->Password   = 'lcyu fqhn vioq vbmc';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('kazzaz.jad@gmail.com', 'WEBSITE TESTING');
        $mail->addAddress('iconsumekidneys8@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body    = "Name: $name<br>Email: $email<br>Message:<br>$message";

        $mail->send();
        $message = 'Message sent successfully!';
    } catch (Exception $e) {
        $message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header("Location: index.php?message=" . urlencode($message));
    exit;
}
?>
