<!doctype html>
<html lang="fr">
	<head>
		<title>Commande validée</title>
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
    <div class="container">
		    <?php echo $message;?>
        <p>Contactez le vendeur pour réaliser le paiement : <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
    </div>
      <?php require ("view/footer.php");?>
  	</body>
  </html>
