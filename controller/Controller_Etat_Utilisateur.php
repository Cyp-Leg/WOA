<?php
require_once("model/Users.php");

function isLogged(){
  if(isset($_COOKIE['cookieperso'])){
    $cookie=$_COOKIE['cookieperso'];
    $user=Users::Get_User_Id($cookie);

    return(!empty($user));
  }
  else return false;
}

function loggedOnly(){
  if(!isLogged()){
    header("Location: ../Connexion.php");
  }
}

function unloggedOnly(){
  if(isLogged()){
    header("Location: ../Accueil.php");
  }
}

function isAdmin(){
  if(isset($_COOKIE['cookieperso'])){
    $cookie=$_COOKIE['cookieperso'];
    $userid=Users::Get_User_Id($cookie);
    $role=Users::Get_Users_Role($userid);

    return(!empty($user));
  }
}
 ?>
