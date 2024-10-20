<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP ayarları
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';   // Gmail SMTP sunucusu
    $mail->SMTPAuth   = true;
    $mail->Username   = 'yunusemre53ak@gmail.com'; // Gmail adresiniz
    $mail->Password   = 'ujuh ssrw egsv uetj';       // Uygulama şifreniz
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Alıcılar
    $mail->setFrom('yunusemre53ak@gmail.com', 'Yunus Emre Akbulut');
    $mail->addAddress('yunusemre53ak@gmail.com'); // Kendi adresinize veya başka bir adrese gönderim

    // İçerik
    $mail->isHTML(true);
    $mail->Subject = 'İletişim Formu Mesajı';
    $mail->Body    = 'Bu, formdan iletilen mesajdır.';

    // E-postayı gönder
    $mail->send();
    echo 'Mesaj başarıyla gönderildi';
} catch (Exception $e) {
    echo "Mesaj gönderilemedi. Hata: {$mail->ErrorInfo}";
}
?>
