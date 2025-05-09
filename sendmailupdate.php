<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// 驗證 CAPTCHA
$captcha = $_POST['cf-turnstile-response'];

if (!$captcha) {
    // CAPTCHA 未填寫
    echo '<h2>Please check the captcha form.</h2>';
    exit;
}

$secretKey = "xxxxxxxxxxxxxxxxxxxxx"; // 替換為您的 Secret Key
$ip = $_SERVER['REMOTE_ADDR'];

$url_path = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
$data = array('secret' => $secretKey, 'response' => $captcha, 'remoteip' => $ip);

$options = array(
    'http' => array(
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$stream = stream_context_create($options);
$result = file_get_contents($url_path, false, $stream);
$responseKeys = json_decode($result, true);

if (intval($responseKeys["success"]) !== 1) {
    echo '<h2>CAPTCHA verification failed. Are you a bot?</h2>';
    exit;
}

// CAPTCHA 驗證成功，繼續執行郵件發送邏輯

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
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>
</head>
<body>
    <form method="POST" action="sendmail.php">
        <!-- 表單內容 -->
        <input type="email" name="to" placeholder="Recipient Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="content" placeholder="Message Content" required></textarea>

        <!-- Cloudflare Turnstile -->
        <div class="cf-turnstile" data-sitekey="0x4AAAAAABYh8FH6VNeF6ml8"></div>

        <button type="submit">Send Email</button>
    </form>
</body>
</html>