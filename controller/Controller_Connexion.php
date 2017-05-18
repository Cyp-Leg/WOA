<?php
require_once("../model/Users.php");

$nick=htmlspecialchars($_POST['nick']);
$password=htmlspecialchars($_POST['password']);

if(empty($nick) || empty($password)){
  $message="Merci de remplir tous les champs!";
  header("Location: ../Erreur.php?=".$message);
}

else
{
  $password=sha1(sha1($password));

  if(User::Check_Password($nick,$password)){

    $cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);

		setcookie("cookieperso", $cookiecode, time()+(60*60*24*30), "/");

		User::Set_User_Coockie_Code($mail,$cookiecode);
		header("Location: ../Accueil.php");
  }
}

?>
