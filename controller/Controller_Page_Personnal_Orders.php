<?php
require('controller/Controller_Etat_Utilisateur.php');
//require('model/Users.php');
require('model/Announce.php');
require('model/Orders.php');

$userid=Users::Get_User_Id($_COOKIE['cookieperso']);
$lesOrders=Orders::Get_User_Orders($userid);
require_once('view/personnal_orders.php');
?>
