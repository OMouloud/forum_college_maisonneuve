<?php
require_once('db/connexion.php');

$sql = "SELECT f.*, u.nom_utilisateur FROM forum f JOIN utilisateur u ON f.utilisateur_id 
= u.id ORDER BY id_forum ASC";

$result = mysqli_query($connexion, $sql);

$title = 'ACCUEIL - FORUM';
require_once('header.php');
?>


<h1>Forum du Collège Maisonneuve :</h1>
<article class="article">
  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="post">
      <div class="post__auteur">
        <h2><?= ($row['titre']); ?></h2>
        <p><?= nl2br(($row['article'])); ?></p>
        <p>
          <small class="user">Auteur : <strong><?= ($row['nom_utilisateur']); ?></strong>
          </small>
        </p>
        <p>
          <small class="user">Le : <strong><?= ($row['date_creation']); ?></strong>
          </small>
        </p>
      </div>
      <div class="post__liens">
        <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $row['utilisateur_id']) : ?>
          <a href="post-edit.php?id=<?= $row['id_forum']; ?>" class="post__liens-edit">Edit</a>
          <a href="post-delete.php?id=<?= $row['id_forum']; ?>" class="post__liens-delete">
            Delete
          </a>
        <?php endif; ?>
      </div>
    </div>
  <?php endwhile; ?>
</article>

<?php
require_once('footer.php');
?>