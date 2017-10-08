<?php
require_once("../model/Users.php");

$nick=($_POST['nick']);
$password=htmlspecialchars($_POST['password']);

if(empty($nick) || empty($password)){
  $message="Merci de remplir tous les champs!";
  header("Location: ../Erreur.php?=".$message);
}

else
{
  $password=sha1(sha1($password));

  if(Users::Check_Password($nick,$password)){

    $cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);

		setcookie("cookieperso", $cookie, time()+(60*60*24*30), "/");

		Users::Set_User_Cookie($nick,$cookie);
		header("Location: ../Accueil.php");
  }

  else {
    $message="Mauvais mdp";
    header("Location: ../Erreur.php?=".$message);
  }
}

?>
