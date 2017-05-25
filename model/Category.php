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
    return $result;
  }

  public static function Get_Category_Name($categid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare("SELECT categoryname FROM category WHERE categoryid= :categid");
    $req->bindParam(':categid', $categid);
    $req->execute();

    $data = $req->fetch();

    return $data['categoryname'];
  }

  public static function Get_Product_Categories()
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT * FROM Category WHERE categoryid<8 OR categoryid=18');
    $req->execute();

    while($data=$req->fetch())
    {
      $result[]=$data;
    }
    return $result;
  }

  public static function Get_Event_Categories()
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT * FROM Category WHERE categoryid>7 AND categoryid!=18');
    $req->execute();

    while($data=$req->fetch())
    {
      $result[]=$data;
    }
    return $result;
  }
}
?>
