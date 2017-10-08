<?php
class Notification
{
  public static function Add_Notification($msg,$date,$annid,$userid){
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('INSERT INTO Notification (notiftext,notifdate,announceid,usersid) VALUES(:notiftext,:notifdate,:annid,:userid)');
    $req->bindParam(':notiftext',$msg);
    $req->bindParam(':notifdate',$date);
    $req->bindParam(':annid',$annid);
    $req->bindParam(':userid',$userid);

    $req->execute();
  }
  
  public static function Delete_Notification_From_Announce($annid){
	  require_once('Pdo.php');
	  $bdheroku = connexion();
	  
	  $req = $bdheroku->prepare('DELETE FROM Notification WHERE announceid= ::annid');
	  $req->bindParam(':annid',$annid);
	  
	  $req->execute();
  }

  public static function Get_Users_Notification($userid){
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare('SELECT * FROM Notification WHERE announceid IN (SELECT announceid FROM Announce WHERE usersid= :usersid)');
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
