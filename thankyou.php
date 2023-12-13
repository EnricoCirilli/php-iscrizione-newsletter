<?php
session_start();
$email = $_SESSION['email'];

// Visualizza un messaggio di ringraziamento
echo '<h1>Grazie per esserti iscritto alla nostra newsletter!</h1>';
echo "Il tuo indirizzo email è: $email";

// Cancella l'indirizzo email dalla sessione
session_destroy();

?>
