<?php
require_once("../model/Users.php");
require_once("../model/City.php");
require_once("../controller/Controller_Etat_Utilisateur.php");

$title=htmlspecialchars($_POST['announceTitle']);
$descrip=htmlspecialchars($_POST['announceDescrip']);
$price=htmlspecialchars($_POST['announcePrice']);
$city=htmlspecialchars($_POST['announceCity']);
$categ=htmlspecialchars($_POST['announceCategory']);
$cookie=htmlspecialchars($_COOKIE['cookieperso']);


if(empty($title) || empty($descrip) || empty($price) || empty($city))
{
  $message="Merci de remplir tous les champs obligatoires!";
  header("Location: ../Erreur.php?erreur=".$message);
}
else if(empty($categ)){
  $message="Merci de sélectionner une catégorie!";
  header("Location: ../Erreur.php?erreur=".$message);
}
else
{
  $userid=Users::Get_User_Id($cookie);
  $city=City::Get_City_By_Name($city);

  if(empty($userid)){
    $message = "Pseudo non reconnu :".$userid;
    header("Location: ../Erreur.php?erreur=".$message);
    ?>
    <script type="text/javascript">alert('Pseudo inexistant');</script>
    <?php
  }
  else
  {
    if(empty($city))
    {
      City::Add_City($city);
      $city=City::Get_City_By_Name($city);
    }
    Announce::Add_Announce($title,$descrip,$price,$city,$categ,$userid);
    header('Location: ../Consult.php');
  }
}

?>
