<?php
include 'connexion.php';
$requette = "SELECT * FROM `users`";
$sql = $db->query($requette);
$information = $sql->fetchAll(PDO::FETCH_ASSOC);
var_dump($information);

try {

  foreach ($information as $selector) {
    if ($_POST['email'] == $selector['email']) {
      echo  $selector['email'];
      if ($_POST['mdp'] == $selector['mdp']) {
        echo  $selector['mdp'];
      }
    }
  }

  if ($_POST['email'] != $selector['email']) {
    echo 'non';
  }
  if ($_POST['mdp'] != $selector['mdp']) {
    echo 'mpu';
  }
} catch (Exception $ex) {
}
// header('Location: ../index.php');
