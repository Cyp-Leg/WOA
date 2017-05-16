<?php
require_once ("../model/Users.php");

$firstname = htmlspecialchars($_POST['firstname']);
$lastName = htmlspecialchars($_POST['lastname']);
$nick = htmlspecialchars($_POST['nick']);
$mail = htmlspecialchars($_POST['email']);
$gender = htmlspecialchars($_POST['gender']);


if(empty($firstname) || empty($lastname) || empty($nick) || empty($mail) || empty($gender)){
  ?>
  <script>alert('Veuillez remplir tous les champs!');</script>
  <?php
  header("Location: ../Inscription.php");
}
else {
  Users::Add_User($firstname,$lastname,$nick,$mail,$gender);
  header("Location: ../Accueil.php");
}

require_once('view/inscription.php');
?>
