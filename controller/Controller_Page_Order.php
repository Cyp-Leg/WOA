<?php
  require_once("model/Announce.php");
  require_once("model/Users.php");
  require_once("controller/Controller_Etat_Utilisateur.php");
  $annid=htmlspecialchars($_GET['prod']);
  $userid=Announce::Get_Announce_User($annid);
  $usersmail=Users::Get_Users_Mail($userid);

  require_once('view/order.php');
?>
