<?php
class Users
{
  public static function Get_User_Id($usernick)
	//User_Cookie_Code => User_Id
	//données : $userCookieCode string correspondant à un code cookie
	//résultat : vérifie si un code cookie existe dans la base de données, et le cas échéant renvoie un int correspondant à l'id de l'utilisateur auquel appartient le code cookie
	{
		require_once('Pdo.php');
		$bdheroku=connexion();


		$req = $bdriasec->prepare("SELECT usersid FROM Users WHERE usersNick='".$usernick."'");

		$req->execute();
		$data=$req->fetch();

		return $data["usersid"]; //Verifier si null
	}

  public static function add_User($firstname,$lastname,$nick,$mail,$gender)
  {
    require_once('Pdo.php');
    $bdheroku=connexion();


    $req = $bdheroku->prepare('INSERT INTO User(usersid, usersfirstname, userslastname, usersnick, usersmail, usersgender) VALUES (:id, :firstname,:lastname,:nick,:mail,:gender)');
		$req->bindParam(':id','DEFAULT');
		$req->bindParam(':firstname',$firstname);
		$req->bindParam(':lastname',$lastName);
		$req->bindParam(':nick',$nick);
		$req->bindParam(':mail',$mail);
    $req->bindParam(':gender',$gender);

    $req->execute();

  }
} ?>