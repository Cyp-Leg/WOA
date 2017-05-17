<?php
require_once("model/Users");

$title=htmlspecialchars($_POST['announceTitle']);
$descrip=htmlspecialchars($_POST['announceDescrip']);
$price=htmlspecialchars($_POST['announcePrice']);
$nick=htmlspecialchars($_POST['nick']);
$mail=htmlspecialchars($_POST['mail']);
$city=htmlspecialchars($_POST['city']);



if(empty($title) || empty($descrip) || empty($price) || empty($nick) || empty($mail) || empty($city) || empty($nick))
{
  ?>
  <script type="text/javascript">alert('Merci de renseigner tous les champs!');</script>
  <?php
  header('Location: ../Deposit.php');
}
else
{
  $userid=Users::Get_Userid_By_Nick($nick);
  $citycheck=City::Get_City_By_Name($city);

  if(empty($userid)){
    header('Location: ../Deposit.php');
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
  }
}

?>
