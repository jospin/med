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


$name = in_array('name', $_REQUEST) || isset($_REQUEST['name']) ? $_REQUEST['name'] : NULL;
$email = in_array('email', $_REQUEST) || isset($_REQUEST['email']) ? $_REQUEST['email'] : NULL;
$msg = in_array('msg', $_REQUEST) || isset($_REQUEST['msg']) ? $_REQUEST['msg'] : NULL;
$fone = in_array('fone', $_REQUEST) || isset($_REQUEST['fone']) ? $_REQUEST['fone'] : NULL;
$referencia = in_array('referencia', $_REQUEST) || isset($_REQUEST['referencia']) ? $_REQUEST['referencia'] : NULL;

$mail->setFrom('medeiros.imoveis@ig.com.br', 'Medeiros Imoveis');
$mail->addAddress('medeiros.imoveis@ig.com.br', 'Joe User');     // Add a recipient
$mail->addReplyTo($email, $name);

$mail->isHTML(true);                                  // Set email format to HTML

$mensagem = "Referencia: ".$referencia."<br>".
            "Nome: ". $name."<br>".
            "E-mail: ".$email."<br>".
            "Telefone: ".$fone."<br>".
            "Mensagem: ".$msg;

$mail->Subject = '[Contato] - Mensagem enviada pelo site';
$mail->Body    = $mensagem;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
