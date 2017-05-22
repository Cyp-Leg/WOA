<?php
require_once("../model/Announce.php");
require_once("../controller/Controller_Etat_Utilisateur");
$annid=htmlspecialchars($_GET['annid']);

Announce::Delete_Announce($annid);

header("Location: ../Administrateur.php");
?>
