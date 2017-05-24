<?php
class Product
{
  public static function Add_Product($quantity,$annid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('INSERT INTO Product VALUES(:quantity, :annid)');
    $req->bindParam(':quantity',$quantity);
    $req->bindParam(':annid',$annid);

    $req->execute();
  }

  public static function Delete_Product($annid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('DELETE FROM Product WHERE annid= : annid');
    $req->bindParam(':annid',$annid);

    $req->execute();
  }

  public static function Get_All_Products()
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT * FROM Products');
    $req->execute();

    while($data=$req->fetch())
    {
      $result[]=$data;
    }
    return $result
  }
} ?>
