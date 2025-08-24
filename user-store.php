<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
  header('location:index.php');
}

require_once('db/connexion.php');

foreach ($_POST as $key => $value) {
  $$key = mysqli_real_escape_string($connexion, $value);
}

$mot_de_passe =  password_hash($mot_de_passe, PASSWORD_BCRYPT, ['cost' => 10]);


$sql = "INSERT INTO utilisateur (nom, nom_utilisateur, mot_de_passe, date_naissance) VALUES('$nom', '$nom_utilisateur', '$mot_de_passe', '$date_naissance');";

if (mysqli_query($connexion, $sql)) {
  header('location:index.php');
} else {
  echo mysqli_error($connexion);
}
