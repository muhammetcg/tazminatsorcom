<?php
	// $mail_content = "Merhaba Tazminatsor Admini!, websitenizden yeni bir iletişim formu gönderildi. Bilgileri aşağıdadır.<br><br>";
	// $mail_content .= "Adı Soyadı: $name<br>";
	// $mail_content .= "phone: $phone<br>";
	// $mail_content .= "Sonuç: $subject<br>";
	// $mail_content .= "Şehir: $city<br>";

   // $mail->SMTPKeepAlive = true;
		// $mail->SMTPOptions = array(
		// 	'ssl' => array(
		// 		'verify_peer' => false,
		// 		'verify_peer_name' => false,
		// 		'allow_self_signed' => true
		// 	)
		// );

	$name = $_POST['name'];    
	$phone = $_POST['phone'];    
	$subject = $_POST['subject'];    
	$city = $_POST['city'];      
  
  require "vendor/autoload.php";
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  


	require 'phpmailler/src/Exception.php';
	require 'phpmailler/src/PHPMailer.php';
	require 'phpmailler/src/SMTP.php';
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->isSMTP(); 
    $mail->SMTPAuth = true;	

		$mail->Host = 'smtp.gmail.com';   
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port = 587;
		$mail->Username = 'merenozcan.dev@gmail.com';                     
		$mail->Password = 'TekBasina.4445'; 


		$mail->setFrom("merenozcan.dev@gmail.com", 'Hesaplama Formu');
		$mail->addAddress("info@tazminator.com", 'Tazminatsor');     

		$mail->isHTML(true);  
		$mail->CharSet = 'UTF-8';                 
		$mail->Subject = 'Hesaplama Müşteri Formları (Gelen)';
		$mail->Body    = $mail_content;
		$mail->AltBody = $mail_content;

		$mail->send();
		
		echo "mail sent";
		// die();
	

?>