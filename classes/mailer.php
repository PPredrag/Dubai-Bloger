<?php
require '../phpmail/PHPMailerAutoload.php';
$name = $_POST['ime'];
$email = $_POST['emailAdresa'];
$text = $_POST['poruka'];
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.dragana.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;      // Enable SMTP authentication
$mail->Username = 'hello@dragana.net';    // SMTP username
$mail->Password = 'uxbridge01';                           // SMTP password
$mail->SMTPSecure = 'tls';  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom($email, $name);
$mail->addAddress('dragana.dubaiblogger@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Dubai';
$mail->Body    = $text;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent';
}
?>