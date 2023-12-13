<!DOCTYPE html>
<html lang="it">
<head>
  <title>Iscrizione alla newsletter</title>
</head>
<body>
  <?php

  // Include il file functions.php
  include "functions.php";

  // Controlla se il form è stato inviato
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controlla che l'indirizzo email sia valido
    if (!validaEmail($_POST["email"])) {
      echo "<div class='alert {$setClassAlert(false)}'>L'indirizzo email non è valido.</div>";
    } else {
      // Inserisci i dati nel database
      inserisciDati($_POST["nome"], $_POST["email"], $_POST["interessi"]);

      // Mostra un messaggio di successo
      echo "<div class='alert {$setClassAlert(true)}'>Iscrizione avvenuta con successo.</div>";
    }
  }

  ?>

  <form action="newsletter.php" method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="email" name="email" placeholder="Indirizzo email">
    <input type="submit" value="Iscriviti">
  </form>
</body>
</html>

