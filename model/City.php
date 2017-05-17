<?php
class City
{
  public static function Add_City($cityname)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $cityname = strtoupper($cityname);
    $req = $bdheroku->prepare('INSERT INTO City(cityname) VALUES(:cityName)');
    $req->bindParam(':cityName',$cityname);

    $req->execute();
  }


  public static function Get_City_By_Name($cityname)
  {
    require_once('Pdo.php');
    $bdheroku = connexion();

    $cityname = strtoupper($cityname);
    $req = $bdheroku->prepare('SELECT cityid FROM City WHERE cityname= :cityname');
    $req->bindParam(':cityname',$cityname);

    $req->execute();

    $data = $req->fetch();

    return $data;
  }
} ?>
