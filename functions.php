<?php 
function validate_email($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
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


?>
