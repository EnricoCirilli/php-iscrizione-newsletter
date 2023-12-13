<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Iscrizione newsletter</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="email" name="email" placeholder="Inserisci la tua email">
    <input type="submit" value="Iscriviti">
  </form>

  <?php
   include 'functions.php';
  // Controllo dell'email
  if (isset($_POST['email'])) {
    $email = $_POST['email'];

if (validate_email($email)) {
    echo '<div class="alert alert-success">Iscrizione avvenuta con successo!</div>';
  } else {
    echo '<div class="alert alert-danger">L\'indirizzo email non è valido.</div>';
  }

$class = 'alert-danger';

if (validate_email($_POST['email'])) {
  $class = 'alert-success';
}
if (validate_email($_POST['email'])) {
  // Memorizza l'indirizzo email registrato durante la procedura di validazione
  session_start();
  $_SESSION['email'] = $_POST['email'];

  // Redirect alla pagina di ringraziamento
  header('Location: thankyou.php');
}



if (!validate_email($_POST['email'])) {
  // Visualizza l'indirizzo email errato nell'input
  $email = $_POST['email'];
}

  }


  ?>
</body>
</html>

