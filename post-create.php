<?php
require_once('db/connexion.php');

$sql = "SELECT * FROM forum ORDER BY titre";
$result = mysqli_query($connexion, $sql);


$title = "Post create";
require_once('header.php');
require_once('liberary/check-session.php');
?>


<h1>Rédiger un article</h1>
<div class="container__post">
  <form action="post-store.php" class="form__post" method="POST">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" placeholder="Titre" required>
    <label for="article">Article :</label>
    <textarea name="article" placeholder="Votre article..." required></textarea>
    <input type="submit" name="create" value="Enregistrer">
  </form>
</div>
<?php
require_once('footer.php');
?>