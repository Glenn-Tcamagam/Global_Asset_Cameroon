<?php

extract($_POST);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// newsletter
if (isset($mail_visitor) && isset($nom)) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=newsletter;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $requete = $bdd->prepare("INSERT INTO visiteurs(nom, email, date, site_web) values(:nom,:email,:date, :site_web)");

        $status = $requete->execute(array(
            "nom" => $nom,
            "email" => $mail_visitor,
            "date" => date('y/m/d'),
            "site_web" => "SYSDEVAM Domestique"
        ));

        $mail = new PHPMailer(true);

        // envoi mail de remerciement
        try {



            // config smtp
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->isSMTP();
            $mail->Host = "mail44.lwspanel.com";
            $mail->SMTPAuth = true;
            $mail->Username = "contact@globalassetcameroon.net";
            $mail->Password = "Admin1000$";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // charset
            $mail->CharSet = "utf-8";



            // expediteur
            $mail->setFrom('contact@globalassetcameroon.net', 'Glabal Asset Cameroon');
            $mail->addReplyTo($mail_visitor, $nom);

            // destinataire
            $mail->addAddress($mail_visitor, $nom);

            // contenu
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Demande démo Sysdevam Framework';
            $mail->Body    = "Bienvenue Monsieur/Madame " . $nom . " <br>
            Votre histoire avec SYSDEVAM Framework vient de commencer! Ce qui vous attend dans votre boîte mail: <br>
            <ul>
                <li>Les informations sur les mises à jour du système</li>
                <li>Les informations sur nos formations</li>
                <li>Les informations exclusives sur les lois régissant la dématérialisation.</li>
            </ul>";
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            // require "../index.php";
            header('Location: ../index.php');
        } catch (Exception $e) {
            echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
