<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "lenny.fisbeck@gmx.de"; // <-- Deine E-Mail
    $subject = "Neue Nachricht von LENNY.DEV";
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        // Erfolgreich → weiterleiten zu Danke-Seite
        header("Location: danke.html");
        exit;
    } else {
        echo "<p>Fehler beim Absenden. Bitte versuche es später erneut.</p>";
    }
} else {
    // Wenn jemand send.php direkt öffnet → zurück zum Kontakt
    header("Location: contact.html");
    exit;
}
?>
