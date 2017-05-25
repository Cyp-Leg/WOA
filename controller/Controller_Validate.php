<?php
  require('model/Orders.php');
  require('model/Users.php');
  require('model/Notification.php');
  require('model/Announce.php');
  require('controller/Controller_Etat_Utilisateur.php');

  $userid=Users::Get_User_Id($_COOKIE['cookieperso']);
  $announceid=htmlspecialchars($_POST['announceid']);
  $quantity=htmlspecialchars($_POST['prodQuantity']);
  $date=date('Y\-m\-d');

  $usermail=Users::Get_Users_Mail($userid);

  if(empty($userid) || empty($announceid) || empty($quantity) || empty($date)){
    $msg='Merci de remplir tous les champs!';
    header('Location: Erreur.php?erreur='.$msg);
  }
  else
  {
    Orders::Add_Order($date,$userid,$announceid,$quantity);

    $msg='Un client a commandé votre produit! Mail : <a href="mailto:'.$usersmail.'">'.$usermail.'</a>';
    $sellerid=Announce::Get_Announce_User($announceid);

    Notification::Add_Notification($msg,$date,$announceid,$sellerid);


      $message='Commande validée!';
      header('Location: Success.php?code='.$message);
    }

?>
