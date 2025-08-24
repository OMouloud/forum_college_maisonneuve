<?php
session_start();
require_once('db/connexion.php');

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
  header("Location: login.php");
  exit;
}

foreach ($_POST as $key => $value) {
  $$key = mysqli_real_escape_string($connexion, $value);
}

// Vérifie que le post existe et appartient à l'utilisateur connecté
$sql = "SELECT utilisateur_id FROM forum WHERE id_forum = $id_forum";
$result = mysqli_query($connexion, $sql);


// Mise à jour du post
$sql_update = "UPDATE forum SET titre = '$titre', article = '$article' WHERE id_forum = $id_forum";
if (mysqli_query($connexion, $sql_update)) {
  header("Location: index.php?msg=Post modifié avec succès");
  exit;
} else {
  die("Erreur lors de la mise à jour : " . mysqli_error($connexion));
}
