<?php
require("controller/Controller_Etat_Utilisateur.php");
require("model/Orders.php");
require("model/Announce.php");
require("model/Users.php");

$message=htmlspecialchars($_GET['code']);
$usermail=htmlspecialchars($_POST['usermail']);

$userid=Users::Get_User_Id($_COOKIE['cookieperso']);
$orderid=Orders::Get_Last_Order($userid);
$annid=Announce::Get_Announce_From_Order($orderid);
$seller=Announce::Get_Announce_User($annid);
$mail=Users::Get_Users_Mail($seller);

require_once('view/success.php');

?>
