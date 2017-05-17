<?php
class Category
{
  public static function Get_All_Categories()
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT * FROM Category');
    $req->execute();

    while($data=$req->fetch())
    {
      $result[]=$data;
    }
  }
  return $result;
}
?>
