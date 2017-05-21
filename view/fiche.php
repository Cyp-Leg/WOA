<!doctype html>
<html lang="fr">
	<head>
		<title>Désposer une annonce</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Lieu d\'échange entre étudiants">
		<meta name="Keywords" content="échange offre offer event événement ville étudiant student">
		<meta name="Subject" content="Le Coin des étudiants">
		<meta name="Copyright" content="CyprienLegrand">
		<meta name="Author" content="CyprienLegrand">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		 <?php include ("css/css_config.php"); ?>
	</head>
	<body>
		<?php require ("view/header.php");?>
		<div>
			<h4 class="center-align"><?php echo $annprop['announcetitle']; ?></h4>
		</div>

    <div class="container">
      <div class="left-photo">
        <?php
        if(empty($photoname)){$photoname="errpic.png";}
        echo "<img src=\"medias/annpics/".$photoname."\" class=\"annpic\" />";
        ?>
      </div>
      <div class="ann-caract">
        <ul>
          <?php
            $cat = Category::Get_Category_Name($annprop['categoryid']);
            echo "<li>Catégorie : ".$cat."</li>";
            echo "<li>Prix : ".$annprop['announceprice']."€ </li>";
            $city = City::Get_City_Name($annprop['cityid']);
            echo "<li>".$city."</li>";
          ?>
        </ul>
      </div>
      <div class="ann-descrip">
        <?php echo $annprop['announcedescrip']; ?>
      </div>
    </div>
    <?php require("view/footer.php"); ?>
  </body>
</html>
