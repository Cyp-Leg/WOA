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

  $data=Users::Check_Password($nick,$password);
  if($data['userspassword'] == $password){

    $cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);

		setcookie("cookieperso", $cookie, time()+(60*60*24*30), "/");

		User::Set_User_Cookie_Code($nick,$cookie);
		header("Location: ../Accueil.php");
  }

  else {
    $message="Mauvais mdp";
    header("Location: ../Erreur.php?=".$data);
  }
}

?>
