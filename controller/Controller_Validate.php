<?php
  require_once('model/Orders.php');
  require_once('model/Users.php');
  require_once('controller/Controller_Etat_Utilisateur.php');

  $userid=Users::Get_User_Id($_COOKIE['cookieperso']);
  $announceid=htmlspecialchars($_POST['announceid']);
  $quantity=htmlspecialchars($_POST['prodQuantity']);
  $date=date('Y\-m\-d');

  if(empty($userid) || empty($announceid) || empty($quantity) || empty($date)){
    $msg='Merci de remplir tous les champs!';
    header('Location: Erreur.php?erreur='.$msg);
  }
  else Orders::Add_Order($date,$userid,$announceid,$quantity));


  $message='Commande validée!';
  header('Location: Succes.php?code='.$message);

?>
