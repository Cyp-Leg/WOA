<?php
function connexion()
{
	<?php
$dsn = "pgsql:"
    . "host=ec2-184-73-194-179.compute-1.amazonaws.com;"
    . "dbname=ul28zxpr39no1rr;"
    . "user=dj1wcxb3x9fy3x5;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=p28xwd9pjcrzyzp6mf74m99cze";

$db = new PDO($dsn);
return($db);
}
?>
