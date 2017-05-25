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

    public static function Get_Announce_User($annid)
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare("SELECT usersid FROM Announce WHERE announceid= :annid");
      $req->bindParam(':annid', $annid);
      $req->execute();

      $data = $req->fetch();

      return $data['usersid'];
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

    public static function Get_Announce($announceid)
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare("SELECT * FROM Announce WHERE announceid= :announceid");
      $req->bindParam(':announceid',$announceid);
      $req->execute();

      $data = $req->fetch();

      return $data;
    }

    public static function Get_Last_Announce_Id()
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare("SELECT MAX(announceid) AS max_id FROM Announce");
      $req->execute();

      $data = $req->fetch();

      return $data[0];
    }

    public static function Delete_Announce($annid)
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare("DELETE FROM Announce WHERE announceid= :annid");
      $req->bindParam(':annid',$annid);
      $req->execute();
    }

    public static function Get_All_Announces_From_Product()
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare('SELECT * FROM Announce WHERE announceid IN (SELECT announceid FROM Product)');
      $req->execute();

      while($data = $req->fetch())
      {
        $result[]=$data;
      }
      return $result;
    }

    public static function Get_All_Announces_From_Events()
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare('SELECT * FROM Announce WHERE announceid IN(SELECT announceid FROM Events)');
      $req->execute();

      while($data=$req->fetch())
      {
        $result[]=$data;
      }
      return $result;
    }

    public static function Get_Announce_Title($annid)
    {
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroky->prepare('SELECT announcetitle FROM Announce WHERE announceid= :annid');
      $req->bindParam(':annid',$annid);

      $req->execute();

      $data = $req->fetch();

      return $data['announcetitle'];
    }
} ?>
