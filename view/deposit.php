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
          <table class="bored highlight grey lighten-5">
    				<thead>
    					<tr>
    						<th>Déposez votre annonce!</th>
    					</tr>
    				</thead>
    				<tbody>
              <form action="deposit.php">
                <tr><td><label for="announceTitle">Titre de l'annonce : </label></td>
              	<td><input type="text" name="announceTitle" id="announceTitle"><br></td></tr>
              	<tr><td><label for="announceDescrip">Description : </label></td>
              	<td><textarea name="announceDescrip" id="announceDescrip"><br></td></tr>
              	<tr><td><label for="annoucePrice">Prix : </label></td>
              	<td><input type="text" name="announcePrice" id="announcePrice"><br></td></tr>
              	<tr><td><label for="mail">Mail de contact : </label></td>
              	<td><input type="text" name="mail" id="mail"><br></td></tr>
              	<tr><td><input type="submit" value="Valider"></td></tr>
              </form>
          </tbody>
		</div>
		<?php require ("view/footer.php");?>
	</body>
</html>
