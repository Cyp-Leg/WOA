<?php
class Notification
{
  public static function Add_Notification($msg,$userid,$date){
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('INSERT INTO Notification (notiftext,usersid,notifdate) VALUES(:notiftext,:userid,:notifdate)');
    $req->bindParam(':notiftext',$msg);
    $req->bindParam(':userid',$userid);
    $req->bindParam(':notifdate',$date);

    $req->execute();
  }

  public static function Get_Users_Notification($userid){
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT * FROM Notification WHERE usersid= :usersid');
    $req->bindParam(':usersid',$userid);
    $req->execute();

    while($data = $req->fetch())
    {
      $result[]=$data;
    }

    return $result;
  }
}
?>
