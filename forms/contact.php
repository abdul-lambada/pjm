<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// **PENTING**: Pastikan Anda sudah mengunduh PHPMailer dan meletakkannya di direktori yang benar.
require '../vendor/phpmailer/src/Exception.php';
require '../vendor/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/src/SMTP.php';

// Cek jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // Pengaturan Server
        // **PENTING**: Ganti dengan pengaturan SMTP Anda sendiri.
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com';       // Ganti dengan server SMTP Anda
        $mail->SMTPAuth   = true;
        $mail->Username   = 'user@example.com';     // Ganti dengan username SMTP Anda
        $mail->Password   = 'password';             // Ganti dengan password SMTP Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;                      // Port TCP, gunakan 587 jika SMPSecure adalah ENCRYPTION_STARTTLS

        // Penerima
        // **PENTING**: Ganti dengan alamat email penerima Anda.
        $receiving_email_address = 'penerima@example.com';
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress($receiving_email_address);

        // Konten Email
        $mail->isHTML(true);
        $mail->Subject = 'Pesan Baru dari Formulir Kontak: ' . htmlspecialchars($_POST['subject']);
        $mail->Body    = 'Anda menerima pesan baru dari formulir kontak website Anda.<br><br>' .
                         '<b>Nama:</b> ' . htmlspecialchars($_POST['name']) . '<br>' .
                         '<b>Email:</b> ' . htmlspecialchars($_POST['email']) . '<br>' .
                         '<b>Subjek:</b> ' . htmlspecialchars($_POST['subject']) . '<br>' .
                         '<b>Pesan:</b><br>' . nl2br(htmlspecialchars($_POST['message']));
        $mail->AltBody = 'Anda menerima pesan baru dari formulir kontak website Anda.\n\n' .
                         'Nama: ' . htmlspecialchars($_POST['name']) . '\n' .
                         'Email: ' . htmlspecialchars($_POST['email']) . '\n' .
                         'Subjek: ' . htmlspecialchars($_POST['subject']) . '\n' .
                         'Pesan:\n' . htmlspecialchars($_POST['message']);

        $mail->send();
        echo 'OK';
    } catch (Exception $e) {
        http_response_code(500);
        echo "Pesan tidak dapat dikirim. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(403);
    echo "Terjadi masalah dengan pengiriman Anda, silakan coba lagi.";
}
?>
