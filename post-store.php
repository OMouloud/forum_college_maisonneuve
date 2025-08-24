<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] != "POST") {
  header('location:index.php');
}

require_once('db/connexion.php');

foreach ($_POST as $key => $value) {
  $$key = mysqli_real_escape_string($connexion, $value);
}


$utilisateur_id = $_SESSION['id'];
$date = date('Y-m-d');

$sql = "INSERT INTO forum (titre, article, date_creation, utilisateur_id) VALUES('$titre', '$article', '$date', '$utilisateur_id');";

if (mysqli_query($connexion, $sql)) {
  header('location:index.php');
} else {
  echo mysqli_error($connexion);
}
