<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.ig.com.br';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'medeiros.imoveis@ig.com.br';                 // SMTP username
$mail->Password = 'm1e9d47';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_REQUEST['email'], $_REQUEST['name']);
$mail->addAddress('medeiros.imoveis@ig.com.br', 'Medeiros Imóveis);     // Add a recipient
$mail->addReplyTo($_REQUEST['email'], $_REQUEST['name']);

$mail->isHTML(true);                                  // Set email format to HTML
if(!empty($_REQUEST['fone'])){
$fone = "Telefone: ".$_REQUEST['fone'];
}
$mail->Subject = '[Contato] Mensagem enviada pelo site';
$mail->Body    = 'Referencia: '.$_REQUEST['referencia'].'<br><br>'.$_REQUEST['mensagem']."<br><br>".$fone;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
