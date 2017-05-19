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
			<h4 class="center-align">Connexion</h4>
      <div class="container">
        <form class="col s12" method="POST" action="controller/Controller_Connexion.php">
          <div class="row">
            <div class="input-field col s12">
            	<label for="nick">Pseudo</label>
            	<input id="nick" name="nick" type="text" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
            	<label for="password">Password</label>
              <input id="password" name="password" type="password" class="validate">
            </div>
          </div>

					<div class="input-field col s9">
						<table class="bored highlight grey lighten-5">
							<tr><td>
								<button class="btn waves-effect waves-light" id="submit" value="valider">Connexion
								<i class="material-icons right">send</i></td>
							</button>
							<td><a class="waves-effect waves-light btn" href="Inscription.php"><i class="material-icons left">library_add</i>Inscription</a></td></tr>
						</table>
					</div>
				</form>
			</div>
		</div>
		<?php require ("view/footer.php");?>
	</body>
</html>
