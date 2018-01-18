<?php

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.ig.com.br';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'medeiros.imoveis@ig.com.br';                 // SMTP username
$mail->Password = 'm1e9d47';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;     
                               // TCP port to connect to
$email = $_REQUEST['email'];
$name = $_REQUEST['name'];

$mail->setFrom($email, $name);
#$mail->addAddress('medeiros.imoveis@ig.com.br', 'Medeiros Imoveis');     // Add a recipient
$mail->addAddress('lucien.carbonare@gmail.com', "gg");     // Add a recipient
$mail->addReplyTo($email, $name);

$mail->isHTML(true);                                  // Set email format to HTML

$fone = $_REQUEST['fone'];

if(!empty($fone)){
$fone = "Telefone: ".$fone;
}
$mail->Subject = '[Contato] Mensagem enviada pelo site';
$mail->Body    = 'Referencia: '.$_REQUEST['ref'].'<br><br>'.$_REQUEST['msg']."<br><br>".$fone;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
