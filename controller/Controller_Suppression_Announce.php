<?php
require_once("../model/Announce.php");
require_once("../model/Photo.php");
require_once("/controller/Controller_Etat_Utilisateur.php");
adminOnly();
$annid=htmlspecialchars($_GET['annid']);

Photo::Delete_Photo_From_Announce($annid);
Announce::Delete_Announce($annid);

header("Location: ../Administrateur.php");
?>
