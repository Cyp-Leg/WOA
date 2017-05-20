<?php
var_dump($_FILES);

$dir_info='../medias/annpics';
$dir=opendir($dir_info) or die('Erreur : le dossier n\'existe pas.');
$fichier=array();

while($element = readdir($dir)) {
	if($element != '.' && $element != '..') {
	   $fichier[]=$element;
  }
}

closedir($dir);

echo "Liste des fichiers/documents accessibles dans '$dir_info' : \n\n";
	echo "\t\t<ul>\n";
		foreach($fichier as $lien) {
			echo "\t\t\t<li><a href=\"$dir_nom/$lien \">$lien</a></li>\n";
		}
	echo "\t\t</ul>";

?>
