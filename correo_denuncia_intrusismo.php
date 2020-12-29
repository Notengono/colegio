<?php

include_once 'assets/mailer/PHPMailerAutoload.php'; // libreria de phpMailer
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message_ = $_POST['message'];

//$correo = 'colegiopodologos@hotmail.com';

// $correo = 'remedi.martin@gmail.com';
//$correo = 'leonardo.vergaraok@gmail.com';
//            $correo = 'info@copoder.com.ar';
$correo = 'colegiopodologos@hotmail.com';
//////////////////////////////////////////////////////////////////////////////////////////////

$mail = new PHPMailer;
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'mail.copoder.com.ar'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'denuncias@copoder.com.ar'; // SMTP username
$mail->Password = 'C0p0d3r--'; // SMTP password
$mail->SMTPSecure = ''; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 26; // TCP port to connect to
$mail->setFrom('denuncias@copoder.com.ar', 'COPODER');
$mail->addAddress($correo); // Add a recipient
$mail->addCC('remedi.martin@gmail.com'); 
//$mail->addBCC('leonardo.vergaraok@gmail.com')
// $mail->addAddress('remedi.martin@gmail.com'); // Add a recipient

$mail->isHTML(true); // Set email format to HTML
///////////////////////////////////////////////////////////////////////////////////////////////

$mail->Subject = utf8_decode('AVISO DE INTRUSISMO');

///////////////////////////////////////////////////////////////////////////////////////////////

$message = file_get_contents('cuerpo_correo.php'); // llamo al html y le paso los datos.

$message = str_replace('%name%', $name, $message);

$message = str_replace('%email%', $email, $message);

$message = str_replace('%phone%', $phone, $message);

$message = str_replace('%message%', $message_, $message);

////////////////////////////////////////////////////////////////////////////////////////////////
// $mail->Body = $cuerpo;

$mail->msgHTML($message);

$mail->CharSet = 'UTF-8';

if (!$mail->send()) {

    echo $mail->ErrorInfo;
}

//**************
// Correo para el denunciante
//*/
// $mail_ = new PHPMailer;
// $mail_->isSMTP();                                      // Set mailer to use SMTP
// $mail_->Host = 'mail.copoder.com.ar';                        // Specify main and backup SMTP servers
// $mail_->SMTPAuth = true;                                // Enable SMTP authentication
// $mail_->Username = 'info@copoder.com.ar';           // SMTP username
// $mail_->Password = 'Inf0C0p0d3r';                         // SMTP password
// $mail_->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
// $mail_->Port = 26;                                    // TCP port to connect to
// $mail_->setFrom('info@copoder.com.ar', 'COPODER');
// $mail_->addAddress($email); // Add a recipient
// $mail_->isHTML(true);                                  // Set email format to HTML
// $mail_->Subject = utf8_decode('AVISO DE RECEPCIÓN');
// $message__ = 'Usted ha dado aviso de irregularidades al Colegio de Podólogos de Entre Ríos<br>';
// $message__ = 'A la brevedad nos pondremos en contacto con usted';
// // $mail->Body = $cuerpo;
// $mail_->msgHTML($message__);
// $mail_->CharSet = 'UTF-8';
// if(!$mail_->send()){
//    echo $mail_->ErrorInfo;
// }

echo json_encode(10);
