<?php
require_once("../model/Announce.php");
require_once("../model/Photo.php");
require_once("../model/Orders.php");
require_once("../model/Users.php");
require_once("../model/Product.php");
require_once("../model/Events.php");
//require_once("../controller/Controller_Etat_Utilisateur.php");
$userid=htmlspecialchars($_GET['userid']);

$lesAnnonces=Announce::Get_All_Announces_By_User($userid);


foreach($lesAnnonces as $row)
{
  echo $row['announceid'];
  /*$annid=$row['announceid'];
  Photo::Delete_Photo_From_Announce($annid);
  Orders::Delete_Order_From_Announce($annid);
  Product::Delete_Product($annid);
  Events::Delete_Event($annid);
  Announce::Delete_Announce($annid);*/
}

//Users::Delete_User($userid);


//header("Location: ../Administrateur.php");
?>
