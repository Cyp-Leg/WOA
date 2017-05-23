<?php
class Orders
{
  public static function Add_Order($date,$userid,$announceid,$quantity)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare("INSERT INTO Orders(ordersdate, usersid, announceid, quantity) VALUES(:ordersdate, :usersid, :announceid, :quantity)");
    $req->bindParam(':ordersdate',$date);
    $req->bindParam(':usersid',$userid);
    $req->bindParam(':announceid',$announceid);
    $req->bindParam(':quantity',$quantity);

    $req->execute();
  }

  public static function Get_Last_Order($userid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT MAX(ordersid) FROM Orders WHERE usersid= :usersid');
    $req->bindParam(':usersid',$userid);
    $req->execute();

    $data = $req->fetch();

    return $data[0];
  }

  public static function Get_Announce_From_Order($orderid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT announceid FROM Orders WHERE ordersid= :ordersid');
    $req->bindParam(':ordersid',$orderid);
    $req->execute();

    $data = $req->fetch();

    return $data['announceid'];
  }

  public static function Get_User_Orders($userid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT * FROM Orders WHERE usersid= :usersid');
    $req->bindParam(':usersid',$userid);
    $req->execute();

    while($data = $req->fetch())
    {
      $result[] = $data;
    }

    return $result;
  }

  public static function Delete_Order_From_Announce($annid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('DELETE FROM Orders WHERE announceid= :annid');
    $req->bindParam(':annid',$annid);

    $req->execute();
  }

} ?>
