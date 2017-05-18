<?php
require_once("../model/Users.php");
require_once("../model/City.php");

$title=htmlspecialchars($_POST['announceTitle']);
$descrip=htmlspecialchars($_POST['announceDescrip']);
$price=htmlspecialchars($_POST['announcePrice']);
$nick=htmlspecialchars($_POST['nick']);
$mail=htmlspecialchars($_POST['mail']);
$city=htmlspecialchars($_POST['announceCity']);
$categ=htmlspecialchars($_POST['announceCategory']);


if(empty($title) || empty($descrip) || empty($price) || empty($nick) || empty($mail) || empty($city))
{
  ?>
  <script type="text/javascript">alert('Merci de renseigner tous les champs!');</script>
  <?php
  header('Location: ../Deposit2.php');
}
else if(empty($categ)){
  header('Location: ../Deposit4342.php');
}
else
{
  $userid=Users::Get_Userid_By_Nick($nick);
  $citycheck=City::Get_City_By_Name($city);

  if(empty($userid)){
    header('Location: ../Deposit.php?userid='.$userid.'');
    ?>
    <script type="text/javascript">alert('Pseudo inexistant');</script>
    <?php
  }
  else
  {
    if(empty($citychek))
    {
      City::Add_City($city);
      $citycheck=City::Get_City_By_Name($city);
    }
    Announce::Add_Announce($title,$descrip,$price,$citycheck,$categ,$userid);
    header('Location: ../Consult.php');
  }
}

?>
