<?php

//require_once ('../model/User.php');



//if (isset($_COOKIE['codeconnexion']))
//{
//	$cookieperso=$_COOKIE['codeconnexion'];
//	$userId=User::Get_User_Id($cookieperso);
//	if (empty($userId)) {

//		header("Location: Controller_Page_Connexion.php");
//	}
//	else {
		require_once("model/Users.php");
		require_once("controller/Controller_Etat_Utilisateur.php");


		require_once("view/accueil.php");
?>
<!--//	}

//}
//else
//{
//	header("Location: Controller_Page_Connexion.php");
//}-->
