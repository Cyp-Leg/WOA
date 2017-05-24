<?php
require_once("../model/Users.php");
require_once("../model/City.php");
//require_once("../controller/Controller_Etat_Utilisateur.php");
require_once("../model/Announce.php");
require_once("../model/Photo.php");

$title=htmlspecialchars($_POST['announceTitle']);
$descrip=htmlspecialchars($_POST['announceDescrip']);
$price=htmlspecialchars($_POST['announcePrice']);
$city=htmlspecialchars($_POST['announceCity']);
$categ=htmlspecialchars($_POST['announceCategory']);
$cookie=htmlspecialchars($_COOKIE['cookieperso']);

$userid = Users::Get_User_Id($cookie);
$time=time();
if(isset($_FILES['announcePic']))
{
  $ext=substr(strrchr($_FILES['announcePic']['name'],'.'),1);
  $nom = $userid."_".$time.".".$ext;
  $dir="../medias/avatars/{$nom}";
  move_uploaded_file($_FILES['announcePic']['tmp_name'],$dir);
}

if(is_numeric($price))
{
  $message="Merci d'indiquer un prix correct!";
  header("Location: ../Erreur.php?erreur=".$message);
}
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
  $descrip = pg_escape_string($descrip);
  $price = str_replace(",",".",$price);
  $city=strtoupper($city);
  $userid=Users::Get_User_Id($cookie);
  $citycheck=City::Get_City_By_Name($city);

  if(empty($userid)){
    $message = "Vous devez être connecté pour poster une annonce!".$userid;
    header("Location: ../Erreur.php?erreur=".$message);
    ?>
    <script type="text/javascript">alert('Pseudo inexistant');</script>
    <?php
  }
  else
  {
    if(empty($citycheck))
    {
      City::Add_City($city);
    }
    $city=City::Get_City_By_Name($city);
    $city=$city['cityid'];
    Announce::Add_Announce($title,$descrip,$price,$city,$categ,$userid);
    $annid=Announce::Get_Last_Announce_Id();
    /*$message="INSERT INTO photo(photoname,announceid) VALUES($nom,$annid)";
    header("Location: ../Erreur.php?erreur=".$message);*/
    Photo::Add_Photo($nom,$annid);

    header('Location: ../Consult.php');
  }
}

?>
