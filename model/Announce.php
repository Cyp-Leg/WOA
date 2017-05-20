<?php
class Announce
{
    public static function Get_All_Announces()
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare('SELECT * FROM announce');

      $req->execute();
      while($data = $req->fetch())
      {
        $result[] = $data;
      }

      return $result;
    }

    public static function Get_All_Announces_By_Category($categoryId)
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare('SELECT * FROM announce WHERE categoryid= :categoryId');
      $req->bindParam(':categoryId',$categoryId);

      $req->execute();

      while($data = $req->fetch())
      {
        $result[] = $data;
      }

      return $result;
    }

    public static function Get_All_Announces_By_City($cityId)
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare('SELECT * FROM announce WHERE cityid= :cityId');
      $req->bindParam(':cityId',$cityId);

      $req->execute();

      while($data = $req->fetch())
      {
        $result[] = $data;
      }

      return $result;
    }

    public static function Get_All_Announces_By_User($userId)
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare('SELECT * FROM announce WHERE userid= :userId');
      $req->bindParam('::userId',$userId);

      $req->execute();

      while($data = $req->fetch())
      {
        $result[] = $data;
      }

      return $result;
    }

    public static function Add_Announce($announceTitle,$announceDescrip,$announcePrice,$announceCity,$announceCateg,$announceUser)
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare("INSERT INTO Announce(announcetitle, announcedescrip,announceprice,cityid,categoryid,usersid) VALUES('".$announceTitle."','".$announceDescrip."',".$announcePrice.",".$announceCity.",".$announceCateg.",".$announceUser.")");
      /*$req->bindParam(':announcetitle',$announceTitle);
      $req->bindParam(':announcedescrip',$announceDescrip);
      $req->bindParam(':announceprice',$annoucePrice);
      $req->bindParam(':announcecity',$announceCity);
      $req->bindParam(':announcecateg',$announceCateg);
      $req->bindParam(':announceuser',$announceUser);*/

      $req->execute();
    }

    public static function Get_Last_Announce_Id()
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare("SELECT MAX(announceid) AS max_id FROM Announce");
      $req->execute();

      $data = $req->fetch();

      return $data['announceid'];
    }
} ?>
