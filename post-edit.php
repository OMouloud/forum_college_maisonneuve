<?php
// session_start();
require_once('db/connexion.php');
$title = "Modifier le post";
require_once('header.php');

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
  header('Location: login.php');
  exit;
}

// Vérifie si l'id du post est passé dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
  die("Aucun post spécifié.");
}

$id_forum = (int) $_GET['id'];

// Récupère le post
$sql = "SELECT * FROM forum WHERE id_forum = $id_forum";
$result = mysqli_query($connexion, $sql);

if (!$post = mysqli_fetch_assoc($result)) {
  die("Post introuvable.");
}

// Vérifie que le post appartient bien à l’utilisateur connecté
if ($post['utilisateur_id'] != $_SESSION['id']) {
  die("Accès refusé : vous ne pouvez pas modifier ce post.");
}


?>

<h1>Modifier votre post</h1>
<div class="container__post">
  <form action="post-update.php" method="POST" class="form__post">
    <input type="hidden" name="id_forum" value="<?= htmlspecialchars($post['id_forum']); ?>">

    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" value="<?= htmlspecialchars($post['titre']); ?>" required>

    <label for="article">Article :</label>
    <textarea id="article" name="article" rows="5" required><?= htmlspecialchars($post['article']); ?></textarea>

    <input type="submit" value="Mettre à jour" />
  </form>
</div>
<?php require_once('footer.php'); ?>