<?php 

//mailer
include('mailer/class.phpmailer.php');
include('mailer/class.smtp.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'mail.eposta.com';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username = '';
$mail->Password = '';
$mail->SetFrom($mail->Username, '');
$mail->AddAddress('');
$mail->CharSet = 'UTF-8';
$mail->Subject = 'TEST';
$mail->MsgHTML('

    TEST
    
    ');

if ($mail->Send()) {
    echo "";
} else {
    echo 'Bir hata oluştu ' . $mail->ErrorInfo;
}



?> 

