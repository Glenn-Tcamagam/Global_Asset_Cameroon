<?php
require_once 'phpmailer/PHPMailerAutoload.php';

// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Configuration de l'envoi d'e-mail
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'glennwouagam@gmail.com';
$mail->Password = 'lacassure';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Expéditeur et destinataire
$mail->setFrom($email, $nom);
$mail->addAddress('glennwouagam@gmail.com');

// Sujet et corps de l'e-mail
$mail->Subject = 'Nouveau message depuis le formulaire';
$mail->Body = $message;

// Envoi de l'e-mail
if (!$mail->send()) {
    echo 'Erreur : ' . $mail->ErrorInfo;
} else {
    echo 'Message envoyé avec succès !';
}
?>