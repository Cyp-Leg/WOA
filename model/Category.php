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
}
?>
