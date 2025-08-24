<?php
session_start();

require_once('db/connexion.php');

foreach ($_POST as $key => $value) {
  $$key = mysqli_real_escape_string($connexion, $value);
}

//Étape 1 : vérifier l'éxistance du username
$sql = "SELECT * FROM utilisateur WHERE nom_utilisateur = '$nom_utilisateur'";
$result = mysqli_query($connexion, $sql);

//Étape 2 : Compter les résultat de la requête 
$count = mysqli_num_rows($result);
if ($count == 1) {
  $utilisateur = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $dbPassword = $utilisateur['mot_de_passe'];

  //Étape : 3 vérifier password  saisie avec le mot de passe encrypté (db)
  if (password_verify($mot_de_passe, $dbPassword)) {
    session_regenerate_id();
    //créer la session qui s'appelle login pour la transmettre aux autres page
    $_SESSION['fingerPrint'] = md5($_SERVER["HTTP_USER_AGENT"] . $_SERVER["REMOTE_ADDR"]);
    $_SESSION['id'] = $utilisateur['id'];
    $_SESSION['nom'] = $utilisateur['nom'];
    $_SESSION['username'] = $utilisateur['nom_utilisateur'];
    header('location:index.php');
    //Étape : 4
  } else {
    header('location:login.php?msg=2');
  }
} else {
  header('location:login.php?msg=1');
}
