<!doctype html>
<?php
$cookiepers=$_GET['cookieperso'];
?>
<html lang="fr">
	<head>
		<title>Accueil LCDE</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Lieu d\'échange entre étudiants">
		<meta name="Keywords" content="échange offre offer event événement ville étudiant student">
		<meta name="Subject" content="Le Coin des étudiants">
		<meta name="Copyright" content="CyprienLegrand">
		<meta name="Author" content="CyprienLegrand">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<?php //include ("css/css_config.php") ?>
	  <link rel="icon" href="medias/favicon.ico" />
	</head>
	<body>
		<?php //require ("view/header.php");?>
		<div>
			<h4 class="center-align">Le Coin des étudiants</h4>
		</div>
		<br>
		<div class="container">
			<br>
			<div class="row z-depth-4 blue-grey lighten-5 general-container">
				<div class="input-field col s12">
					<h4>Qu'est-ce que le coin des étudiants?</h4>
					<p>FAIL ! Cookie : <?php echo $cookiepers;?></p>
				</div>
			</div>
			<a href="Rapport_Web_LEGRAND_Cyprien.pdf" target="blank">Vous pouvez consulter mon rapport ici (dans un nouvel onglet)</a>
		</div>


		<?php //require ("view/footer.php");?>
	</body>
</html>