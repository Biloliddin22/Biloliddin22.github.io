<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo $name;

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'tuychiboevb@mail.ru';                 // Наш логин
$mail->Password = '3%vTrpYYprR3';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('tuychiboevb@mail.ru', 'Customer');   // От кого письмо 
$mail->addAddress('biloliddin500dbmin@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = 'Заказчик оставил данные <br> Имя: ' . $name . ' <br> E-mail: ' . $email . '<br> Сообщение: ' . $message . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>