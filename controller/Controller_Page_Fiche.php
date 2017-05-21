<?php
  require_once("model/Announce.php");
  require_once("model/Photo.php");
  require_once("model/Category.php");
  require_once("model/City.php");

  require_once("controller/Controller_Etat_Utilisateur.php");

  $annid = $_GET['ann'];
  $annprop = Announce::Get_Announce($annid);
  $photoname = Photo::Get_Photo_By_Annid($annid);
  $cat = Category::Get_Category_Name($annprop['categoryid']);
  $city = City::Get_City_Name($annprop['cityid']);

  require_once('view/fiche.php');
?>
