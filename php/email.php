<?php
    $email=$_POST['email'];
    $comments=$_POST['message'];
    $nom=$_POST['nom'];
    require("../PHPMailer-master/src/PHPMailer.php");
    require("../PHPMailer-master/src/SMTP.php");
    require("../PHPMailer-master/src/Exception.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    // Envoi par smtp
    $mail->IsSMTP();
    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 0;
    $mail->Port = 587 ; //465 or 587
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "amielbaptiste@gmail.com";
    $mail->Password = "25091999";

    // On définit l’envoyeur du mail
    // Ne fonctionne pas avec gmail, le mail définit dans Username sera utilisé.
    $mail->SetFrom($email, $nom);

    // à la place on peut définir un destinataire pour la réponse au mail.
    $mail->AddReplyTo($email, $nom);

    // Le mail
    $mail->AddAddress("amielbaptiste@gmail.com");
    $mail->Subject = "Contact Form lapatriote.fr";
    $mail->Body = $comments;

    // On envoie
    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "xd";
        //header("Location: ../pages/contact.html");
    }
