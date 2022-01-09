<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=secure_bank', "secure_bank_adm", "banque76");
} catch (\Exception $e) {
  echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
  die();
}

?>