<!doctype html>
<html lang="fr">
	<head>
		<title>Accueil Test Riasec</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Lieu d\'échange entre étudiants">
		<meta name="Keywords" content="échange offre offer event événement ville étudiant student">
		<meta name="Subject" content="Le Coin des étudiants">
		<meta name="Copyright" content="CyprienLegrand">
		<meta name="Author" content="CyprienLegrand">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		 <?php include ("css/css_config.php") ?>
	</head>
	<body>
		<?php require ("view/header.php");?>
		<div>
			<h4 class="center-align">Le Coin des étudiants</h4>
		</div>
		<br>
		<div class="container">
			<br>
					<h4 class="center-align">Déposez votre annonce!</h4>
          <p>
            <form action="deposit.php">
            	<label for="announceTitle">Titre de l'annonce : </label>
            	<input type="text" name="announceTitle" id="announceTitle"><br>
            	<label for="announceDescrip">Description : </label>
            	<textarea name="announceDescrip" id="announceDescrip"><br>
            	<label for="annoucePrice">Prix : </label>
            	<input type="text" name="announcePrice" id="announcePrice"><br>
            	<label for="mail">Mail de contact : </label>
            	<input type="text" name="mail" id="mail"><br>
            	<input type="submit" value="Valider">
            </form>
          </p>
		</div>
		<?php require ("view/footer.php");?>
	</body>
</html>
