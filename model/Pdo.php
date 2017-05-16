<?php
function connexion()
{
$dsn = "pgsql:"
    . "host=ec2-107-20-141-145.compute-1.amazonaws.com;"
    . "dbname=dab5use60t2lcj;"
    . "user=rdsvzxqbycrkku;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=cc7fb0ce567ba1edcc6c6a87be84b98d0058b4e7efac1ebe0cd11a73eccf9640";

		try{
			$db = new PDO($dsn);
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}
return($db);
}
?>
