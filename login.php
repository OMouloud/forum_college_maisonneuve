<?php

$msg = null;
if (isset($_GET['msg']) && $_GET['msg'] == 1) {
  $msg = "Please check username";
} elseif (isset($_GET['msg']) && $_GET['msg'] == 2) {
  $msg = "Please password";
}


$title = "Login";
require_once('header.php');
?>
<form action="auth.php" method="POST" class="form__login">
  <h1>Connexion</h1>
  <span class="text-danger"><?= $msg ?></span>
  <label for="nom_utilisateur">Nom utilisateur</label>
  <input type="email" name="nom_utilisateur" placeholder="Nom d'utilisateur" id="nom_utilisateur" required>
  <label for="mot_de_passe">Mot de passe</label>
  <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe" required>
  <input type="submit" value="Login">
</form>
<p>
  <?php
  require_once('footer.php');
  ?>