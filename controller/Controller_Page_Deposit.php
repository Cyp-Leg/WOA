<?php
require_once("model/Category.php");

$categories=Category::Get_All_Categories();

require("view/deposit.php");
?>
