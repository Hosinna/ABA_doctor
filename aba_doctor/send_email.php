<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $to = 'hosnaamr412@gmail.com';
    $subject = 'Nouveau message de contact de ' . $name;
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message envoyé avec succès!';
    } else {
        echo 'Erreur lors de l\'envoi du message.';
    }
}
?>
