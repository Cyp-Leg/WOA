<?php
require_once('controller/Controller_Etat_Utilisateur.php');
adminOnly();
require_once('model/Announce.php');
require_once('model/Photo.php');
require_once('model/City.php');

$lesAnnonces=Announce::Get_All_Announces();
$lesUsers=Users::Get_All_Users();

require_once('view/administrateur.php');
?>
