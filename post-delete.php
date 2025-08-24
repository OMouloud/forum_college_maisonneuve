<?php
session_start();
require_once('db/connexion.php');

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
  header("Location: login.php");
  exit;
}

// Vérifie si un id de post est passé
if (empty($_GET['id'])) {
  die("Aucun post spécifié.");
}

$id_forum = (int) $_GET['id'];

// Vérifie que le post existe
$sql = "SELECT utilisateur_id FROM forum WHERE id_forum = $id_forum";
$result = mysqli_query($connexion, $sql);



$post = mysqli_fetch_assoc($result);



// Supprime le post
$sql_delete = "DELETE FROM forum WHERE id_forum = $id_forum";
if (mysqli_query($connexion, $sql_delete)) {
  header("Location: index.php?msg=Post supprimé avec succès");
  exit;
} else {
  die("Erreur lors de la suppression : " . mysqli_error($connexion));
}
