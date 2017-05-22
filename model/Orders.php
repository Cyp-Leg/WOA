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
} ?>
