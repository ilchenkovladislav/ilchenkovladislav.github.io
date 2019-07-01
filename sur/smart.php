<?php 
$from = $_POST['from'];
$username = $_POST['username'];
$email = $_POST['email'];
$user_message = $_POST['user_message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'eternalsur@gmail.com';                 // SMTP username
$mail->Password = 'dFKlg26wI4yS954l';                           // SMTP password
$mail->SMTPSecure = 'ssl';                          // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('eternalsur@gmail.com', 'Ilchenko Vladislav');
$mail->addAddress('eternalsur@gmail.com', 'Ilchenko Vladislav');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Это сабджект сообщения';
$mail->Body    =  "$from,$username,$email,$user_message";
$mail->AltBody = 'Это сообщение в формате plain text';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>