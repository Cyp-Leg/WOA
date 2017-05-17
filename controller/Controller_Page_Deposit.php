<?php
require_once("model/Category.php");

$lesCategories=Category::Get_All_Categories();

require("view/deposit.php");
?>
