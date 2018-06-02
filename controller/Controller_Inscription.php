<?php
require_once ("/model/Users.php");

$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$nick = htmlspecialchars($_POST['nick']);
$mail = htmlspecialchars($_POST['email']);
$gender = htmlspecialchars($_POST['gender']);
$password = htmlspecialchars($_POST['password']);
$password_check = htmlspecialchars($_POST['password_check']);

if (empty($firstname) || empty($lastname) || empty($nick) || empty($mail) || empty($gender) || empty($password) || empty($password_check)) {
		$messageErreur = 'Vous n\'avez pas remplis tous les champs';

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (strlen($password)<6) {
		$messageErreur = 'Votre mot de passe doit faire plus de 6 caractères';

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif ($password != $password_check) {
		$messageErreur = 'Les mots de passe saisis ne sont pas identiques !';

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}

else {


  $password = sha1(sha1($password));
  $cookiecode=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
  setcookie('cookieperso', $cookiecode, time()+(60*60*30), "/");


  Users::Add_User($firstname,$lastname,$nick,$mail,$gender,$password,$cookiecode);
  header("Location: /accueil");
}

require_once('/view/inscription.php');
?>
