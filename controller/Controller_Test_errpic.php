<?php

mkdir("../medias/annpics");
$dir="../medias/annpics/errpic.png";
move_uploaded_file($_FILES['announcePic']['tmp_name'],$dir);

header("Location: ../Accueil.php");
?>
