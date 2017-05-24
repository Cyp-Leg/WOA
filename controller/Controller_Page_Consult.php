<?php
require_once("model/Announce.php");
require_once("model/City.php");
require_once("controller/Controller_Etat_Utilisateur.php");
require_once("model/Photo.php");
require_once("model/Product.php");
require_once("model/Events.php");

$lesAnnonces = Announce::Get_All_Announces();
$lesProduits = Announce::Get_All_Announces_From_Product();
$lesEvents = Announce::Get_All_Announces_From_Events();

require_once("view/consult.php");
?>
