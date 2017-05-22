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
		 <?php include ("css/css_config.php") ?>
	</head>
	<body>
		<?php require ("view/header.php");?>
		<div>
			<h4 class="center-align">Le Coin des étudiants</h4>
		</div><
    <div class="container">
      <a href="mailto:<?php echo $usersmail; ?>">Contacter le vendeur</a>
    </div>

		<form action="Validate.php" method="POST" enctype="multipart/form-data">

		  <div>
				<label for="prodQuantity">Quantité désirée : </label>
				<input type="text" name="prodQuantity" id="prodQuantity" />
				<input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" />
				<input type="hidden" name="announceid" id="announceid" value="<?php echo $annid; ?>" />
				<a href="Validate.php?prod=<?php echo $annid;?>" class="btn waves-effect waves-light" id="submit" value="valider">Valider la commande
	    		<i class="material-icons right">shopping_cart</i>
				</a>
	    </div>

		</form>

    <?php require("view/footer.php"); ?>
  </body>
</html>
