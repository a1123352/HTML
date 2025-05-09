<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// 驗證表單資料
$to = filter_var($_POST["to"], FILTER_VALIDATE_EMAIL);
$subject = htmlspecialchars($_POST["subject"]);
$content = htmlspecialchars($_POST["content"]);

if (!$to) {
    die("Invalid email address.");
}

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'a1123352@mail.nuk.edu.tw';
    $mail->Password   = 'khij fbrl gvwu ngpk';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('a1123352@mail.nuk.edu.tw', 'Mailer');
    $mail->addAddress($to);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $content;
    $mail->AltBody = strip_tags($content);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<html>
<head>
</head>
<body>
<!-- 其他 HTML 內容 -->
</body>
</html>