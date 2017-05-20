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


$nom = md5(uniqid(rand(), true));
$dir="../medias/annpics/{$nom}";
move_uploaded_file($_FILES['announcePic']['tmp_name'],$nom);


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
    $message = "Pseudo non reconnu :".$userid;
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
    /*$message="INSERT INTO Announce(announcetitle, announcedescrip,announceprice,cityid,categoryid,usersid) VALUES('".$title."','".$descrip."',".$price.",'".$city."',".$categ.",".$userid.")";
    header("Location: ../Erreur.php?erreur=".$message);*/
    Announce::Add_Announce($title,$descrip,$price,$city,$categ,$userid);
    $annid=Announce::Get_Last_Announce_Id();
    Photo::Add_Photo($nom,$annid);
    
    header('Location: ../Consult.php');
  }
}

?>
