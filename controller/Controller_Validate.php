<?php
  //require_once('model/Orders.php');
  require_once('../model/Users.php');
  require_once('../controller/Controller_Etat_Utilisateur.php');

  $userid=Users::Get_User_Id($_COOKIE['cookieperso']);
  $announceid=htmlspecialchars($_POST['announceid']);
  $quantity=htmlspecialchars($_POST['prodQuantity']);
  $date=date('Y\-m\-d');

  require_once('view/validate.php');

?>
