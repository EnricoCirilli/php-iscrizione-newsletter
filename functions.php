<?php

// Funzione per controllare la validità di un indirizzo email
function validaEmail($email) {
  // Controlla che l'indirizzo email sia ben formattato
  if (!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z]+$/", $email)) {
    return false;
  }

  // Controlla che l'indirizzo email contenga un punto ed una chiocciola
  if (!strpos($email, "@") || !strpos($email, ".")) {
    return false;
  }

  return true;
}

?>
