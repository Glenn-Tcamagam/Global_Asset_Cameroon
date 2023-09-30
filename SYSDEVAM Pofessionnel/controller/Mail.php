<?php

// use PHPMailer\PHPMailer\PHPMailer;

// require_once "./phpmailer/Exception.php";
// require_once './phpmailer/PHPMailer.php';
// require_once "./phpmailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // data form
    extract($_POST);


    // config smtp
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->isSMTP();
    $mail->Host = "mail44.lwspanel.com";
    $mail->SMTPAuth = true;
    $mail->Username = "idriss.k@globalassetcameroon.net";
    $mail->Password = "Idriss1000$";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // charset
    $mail->CharSet = "utf-8";

    

    // expediteur
    $mail->setFrom('idriss.k@globalassetcameroon.net', $name);
    $mail->addReplyTo($email, $name);

    // destinataire
    $mail->addAddress('idriss.k@globalassetcameroon.net', 'Glabal Asset Cameroon');

    // contenu
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Demande démo Sysdevam Framework';
    $mail->Body    = "
    <p>Bonjour Monsieur/Madame,</p>
    <p>Je suis " . $name . ", répondant au " . $tel . ", " . $fonction . " chez <b>" . $entreprise . "</b>, S.A au capital de " . $capital . " FCFA situé à " . $ville . ". Nous avons trouvés votre solution de 
    dématérialisation intéressante et souhaitons avoir une séance démo plus appropriée</p>" .
            "<p> Cordialement!</p>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // require "./sysdevam-domestique.presentation/";
    header('Location: ../index.php');
} catch (Exception $e) {
    echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
}
