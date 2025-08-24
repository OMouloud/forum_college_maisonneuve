<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = 'root';
$DB_NAME = 'forum_maisonneuve';


$connexion = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, 3306);

if (mysqli_connect_error()) {
  echo "Erreur de connexion " . mysqli_connect_error();
  exit();
}
mysqli_set_charset($connexion, "utf8");
