<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["_replyto"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "bessasabdeljalil@gmail.com";
    $subject = "Nouveau message de $name";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci pour votre message !";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode invalide.";
}
?>
