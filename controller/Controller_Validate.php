<?php
  //require_once('model/Orders.php');
  require_once('controller/Controller_Etat_Utilisateur');

  $userid=htmlspecialchars($_POST['userid']);
  $announceid=htmlspecialchars($_POST['announceid']);
  $quantity=htmlspecialchars($_POST['quantity']);
  $date=date('Y\-m\-d');

  require_once('view/validate.php');

?>
