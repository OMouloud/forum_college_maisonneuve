<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">

  <title><?= $title ?></title>
</head>

<body>

  <nav>
    <ul class="accueil">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="post-create.php">Article</a></li>
      <li><a href="user-create.php">Inscription</a></li>
    </ul>
    <ul>

      <!-- Menu dynamique -->
      <?php if (isset($_SESSION['fingerPrint'])) {
      ?>

        <li style="color:white; margin-right:20px"><span>Bonjour : <?= $_SESSION['nom']; ?></span> <a href="logout.php">Logout</a></li>
      <?php } else { ?>
        <li> <a href="login.php">Login</a></li>
      <?php
      }
      ?>


    </ul>
  </nav>
  <main>