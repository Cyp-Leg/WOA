<?php
require_once("model/Category.php");
require_once("controller/Controller_Etat_Utilisateur.php");
loggedOnly();

$cookie=htmlspecialchars($_POST['cookieperso']);
$userid=Users::Get_User_Id($cookie);

$lesCategories=Category::Get_All_Categories();

require("view/deposit.php");
?>
