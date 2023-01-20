<?php
date_default_timezone_set('America/Sao_Paulo');

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não informado';
$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : 'Não informado';
$msg = isset($_POST['msg']) ? $_POST['msg'] : 'Não informado';

$mail = new PHPMailer();

if($email && $msg){
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '1anodsintegral@gmail.com';
    $mail->Password = '2anoetimDS';
    $mail->Port = 587;

    $mail->setFrom('1anodsintegral@gmail.com');
    $mail->addAddress('1anodsintegral@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "Nome: {$nome}<br>
                   Email: {$email}<br>
                   Mensagem: {$msg}";
    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado :(';
    }
}else{
    echo "Email nao enviado: Informar email e a mensagem";
}