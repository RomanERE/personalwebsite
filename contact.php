<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}


$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Required fields missing']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email']);
    exit;
}


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'gercroman77@gmail.com';      // Gmail акаунт
    $mail->Password   = 'jcjo vvsg lmkp kcnz';          // App Password з Google
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom('mail@romanherts.com.ua', 'Roman Herts'); // доменна пошта
    $mail->addAddress('gercroman77@gmail.com', 'Roman Herts'); // напряму на Gmail
    $mail->addReplyTo($email, $name);

    $mail->Subject = '[CV Site] Нове повідомлення від ' . $name;
    $mail->Body    =
        "Нове повідомлення з форми зворотного зв'язку\n" .
        str_repeat('─', 50) . "\n" .
        "Ім'я:     $name\n" .
        "Email:    $email\n" .
        "Телефон:  " . ($phone ?: '—') . "\n" .
        str_repeat('─', 50) . "\n\n" .
        $message . "\n";

    $mail->send();
    http_response_code(200);
    echo json_encode(['ok' => true]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $mail->ErrorInfo]);
}
