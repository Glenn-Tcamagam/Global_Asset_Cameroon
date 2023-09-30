<?php











// Paramètres SMTP de Yahoo
$smtp_host = 'smtp.mail.yahoo.com';
$smtp_port = 587;
$smtp_username = 'glennwouagam@yahoo.com';
$smtp_password = 'Lacassure';

// Configuration des paramètres SMTP
ini_set('SMTP', $smtp_host);
ini_set('smtp_port', $smtp_port);
ini_set('username', $smtp_username);
ini_set('password', $smtp_password);

// Destinataire et contenu du message
$to = 'glennwouagam@yahoo.com';
$subject = 'DEMO SYSDEVAM';
$message = 'RRRRRRRRRRRRRRRRRRRRRRRR';

// En-têtes du message
$headers = "From: $smtp_username\r\n";
$headers .= "Reply-To: $smtp_username\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "Return-Path: $smtp_username\r\n";

// Envoi du message
if (mail($to, $subject, $message, $headers, "-f $smtp_username")){
    echo "Le message a été envoyé avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
