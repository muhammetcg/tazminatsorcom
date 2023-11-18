<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
if ($_POST) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $formType = $_POST['formType'];
    $city = $_POST['city'];
    $mail_content = "Merhaba Tazminatsor Admini, web sitenizden yeni bir iletişim formu alındı. Form bilgileri aşağıdadır:<br><br>";
    $mail_content .= "Adı Soyadı: $name<br>";
    $mail_content .= "Telefon: $phone<br>";
    $mail_content .= "Hesaplanan Değer: $subject<br>";
    $mail_content .= "Hesap Türü: $formType<br>";
    $mail_content .= "Şehir: $city<br>";
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
				$mail->Port = 587;
        $mail->Username = $_ENV['SMTP_MAIL'];
        $mail->Password = $_ENV['SMTP_PASSWORD'];
        $mail->setFrom($_ENV['SMTP_MAIL'], 'Hesaplama Formu');
        $mail->addAddress($_ENV['SMTP_MAIL'], 'Admin');
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Hesaplama Müşteri Formları (Gelen)';
        $mail->Body = $mail_content;
        $mail->AltBody = $mail_content;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
				die();
    }
}
?>