<?php
require_once('controller/Controller_Etat_Utilisateur.php');
adminOnly();
require_once('model/Announce.php');

$lesAnnonces=Announce::Get_All_Announces();

require_once('view/administrateur.php');
?>
