<?php
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;


require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

function envoi_mail($from_name, $from_email, $subject, $message){
    $mail = new PHPMailer();
    $mail ->isSMTP();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPSecure = 'ss1';
    $mail ->Host = 'smtp.gmail.com';
    $mail ->SMTPAuth = true;
    $mail ->Username = 'glennwouagam@gmail.com';
    $mail ->Password = '';
    $mail ->SMTPSecure = PHPMaoler::ENCRYPTION_SMTPS;
    $mail ->Port = 465;

    $mail ->setFrom($from_email, $from_name);
    $mail ->addAddress('glennwouagam@gmail.com','DEMO');
    $mail ->isHTML(true);
    $mail ->Subject = $subject;
    $mail ->Body = $message;
    $mail ->setLanguage('fr', '/optional/path/to/language/directory/');



    if (!$mail -> Send()){
        return false;
    }
    else {
        return true;
    }
}

if (envoie_mail($_POST['name'],$_POST['email'],$_POST['subject'],$POST['message'])){
    echo 'ok';
}
else {
    echo "Une erreur s'est produite";
}























?>