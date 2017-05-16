<!doctype html>
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
		<link rel="icon" href="medias/favicon.ico" />
		 <?php include ("css/css_config.php") ?>
	</head>
	<body>
		<?php require ("view/header.php");?>
		<div>
			<h4 class="center-align">Inscription</h4>
			<div class="row z-depth-4 blue-grey lighten-5">
				<form class="col s12" method="post" action="/controller/Controller_Inscription.php">
					<div class="row">
						<div class="input-field col s9">
							<input id="name" name="lastname" type="text" class="validate">
							<label for="name" data-error="wrong" data-success="right">Nom</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<input id="firstname" name="firstname" type="text" class="validate">
							<label for="firstname" data-error="wrong" data-success="right">Prénom</label>
						</div>
					</div>
          <div class="row">
            <div class="input-field col s12">
              <select name="gender" id="gender">
                <option value="" disabled selected>Entrer votre sexe</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
              </select>
              <label for="gender">Sexe</label>
            </div>
        </div>
					<div class="row">
						<div class="input-field col s9">
							<input id="email" name="email" type="email" class="validate">
							<label for="email" data-error="wrong" data-success="right">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<button class="btn waves-effect waves-light" id="submit" value="valider">Inscription
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php require ("view/footer.php");?>
	</body>
</html>
