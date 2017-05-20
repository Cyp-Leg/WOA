<?php

class Photo
{
  public static function Add_Photo($photoname,$annid){
      require_once('Pdo.php');
      $bdheroku = connexion();

      $req = $bdheroku->prepare("INSERT INTO photo(photoname,announceid) VALUES (:photoname, :annid)");
      $req->bindParam(':photoname',$photoname);
      $req->bindParam(':annid',$annid);

      $req->execute();
  }

  public static function Get_Photo_By_Annid($annid)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $req = $bdheroku->prepare("SELECT photoname FROM Photo WHERE announceid= :annid");
    $req->bindParam(':annid',$annid);

    $req->exeute();

    $data = $req->fetch();

    return $data['photoname'];
  }
} ?>
