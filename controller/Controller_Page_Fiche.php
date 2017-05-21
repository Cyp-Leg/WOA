<?php
  require_once("model/Announce.php");
  require_once("model/Photo.php");
  require_once("model/Category.php");
  
  $annid = $_GET['ann'];
  $annprop = Announce::Get_Announce($ann);
  $photoname = Photo::Get_Photo_By_Annid($ann);

  require_once('view/fiche.php');
?>
