<?php
function connexion()
{
	try
	{
		$heroku = new PDO('mysql:host=ec2-107-20-141-145.compute-1.amazonaws.com;dbname=dab5use60t2lcj;charset=utf8','rdsvzxqbycrkku','cc7fb0ce567ba1edcc6c6a87be84b98d0058b4e7efac1ebe0cd11a73eccf9640');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($heroku);
}
?>
