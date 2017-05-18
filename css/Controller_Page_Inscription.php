<?php
require_once ("model/Users.php");

$lesUsers=Users::Get_All_Users();

require_once('view/inscription.php');

?>
