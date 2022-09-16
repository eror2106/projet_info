<?php
include 'connexion.php';
$requette = "SELECT * FROM `users`";
$sql = $db->query($requette);
$information = $sql->fetchAll(PDO::FETCH_ASSOC);
var_dump($information);

try {
  //si identifiant correct
  foreach ($information as $selector) {
    if ($_POST['email'] == $selector['email']) {
      if ($_POST['mdp'] == $selector['mdp']) {
        header('Location: ../index.php');
      }
    }
  }
  //si identifiant ou mdp incorecte

  if ($_POST['email'] != $selector['email']) {
    header('Location: ../login.php');
  }
  if ($_POST['mdp'] != $selector['mdp']) {
    header('Location: ../login.php');
  }
} catch (Exception $ex) {
}
// header('Location: ../index.php');
