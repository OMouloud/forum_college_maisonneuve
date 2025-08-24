<?php
require_once('db/connexion.php');

$sql = "SELECT * FROM utilisateur ORDER BY nom";
$result = mysqli_query($connexion, $sql);


?>



<?php
$title = "Login";
require_once('header.php');
// require_once('liberary/check-session.php');
?>
<form action="user-store.php" method="post" class="form__user">
  <label for="nom">Nom</label>
  <input type="text" name="nom" id="nom">
  <label for="nom_utilisateur">Nom utilisateur</label>
  <input type="text" name="nom_utilisateur" id="nom_utilisateur">
  <label for="mot_de_passe">Mot de passe</label>
  <input type="password" name="mot_de_passe" id="mot_de_passe">
  <label for="date_naissance">Date naissance</label>
  <input type="date" name="date_naissance" id="date_naissance">
  <input type="submit">

</form>
<?php
require_once('footer.php');
?>