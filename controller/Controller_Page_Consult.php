<?php
require_once("model/Announce.php");
$lesAnnonces = Announce::Get_All_Announces();

require_once("view/consult.php");
?>
