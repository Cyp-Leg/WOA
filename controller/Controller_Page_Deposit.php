<?php
require_once("model/Category.php");
require_once("../controller/Controller_Etat_Utilisateur.php");

$lesCategories=Category::Get_All_Categories();

require("view/deposit.php");
?>
