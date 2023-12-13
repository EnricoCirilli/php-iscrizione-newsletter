<!DOCTYPE html>
<html lang="it">
<head>
  <title>Iscrizione alla newsletter</title>
</head>
<body>
  <?php

  // Controlla se il form è stato inviato
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controlla che l'indirizzo email sia valido
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<div class='alert alert-danger'>L'indirizzo email non è valido.</div>";
    } else {
      echo "<div class='alert alert-success'>L'indirizzo email è valido.</div>";
    }
  }

  ?>

  <form action="newsletter.php" method="post">
    <input type="text" name="email" placeholder="Indirizzo email">
    <input type="submit" value="Iscriviti">
  </form>
</body>
</html>