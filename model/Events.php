<?php
class Events
{
  public static function Add_Event($eventdate,$eventplaces,$announceid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('INSERT INTO Events VALUES(:eventdate, :eventplaces, :annid)');
    $req->bindParam(':eventdate',$eventdate);
    $req->bindParam(':eventplaces',$eventplaces);
    $req->bindParam(':annid',$announceid);

    $req->execute();
  }

  public static function Delete_Event($announceid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('DELETE FROM Events WHERE announceid= :annid');
    $req->bindParam(':annid',$announceid);

    $req->execute();
  }

  public static function Get_All_Events()
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT * FROM Events');
    $req->execute();

    while($data=$req->fetch())
    {
      $result[]=$data;
    }
    return $result
  }
} ?>
