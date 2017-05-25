<?php
require_once("../model/Announce.php");
require_once("../model/Photo.php");
require_once("../model/Orders.php");
require_once("../model/Product.php");
require_once("../model/Events.php");
//require_once("../controller/Controller_Etat_Utilisateur.php");
$annid=htmlspecialchars($_GET['annid']);

Photo::Delete_Photo_From_Announce($annid);
Orders::Delete_Order_From_Announce($annid);
Product::Delete_Product($annid);
Events::Delete_Event($annid);
Announce::Delete_Announce($annid);

header("Location: ../Administrateur.php");
?>
