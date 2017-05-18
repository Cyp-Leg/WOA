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
							<input id="firstname" name="firstname" type="text" class="validate">
							<label for="firstname" data-error="wrong" data-success="right">Prénom</label>
						</div>
					</div>

  				<div class="row">
  					<div class="input-field col s9">
  						<input id="lastname" name="lastname" type="text" class="validate">
  						<label for="lastname" data-error="wrong" data-success="right">Nom</label>
  					</div>
  				</div>

          <div class="row">
            <p>
              <input name="gender" type="radio" id="homme" value="homme" />
              <label for="homme">Homme</label>
            </p>
            <p>
              <input name="gender" type="radio" id="femme" value="homme" />
              <label for="femme">Femme</label>
						</p>
          </div>

					<div class="row">
						<div class="input-field col s9">
							<input id="nick" name="nick" type="text" class="validate">
							<label for="nick" data-error="wrong" data-success="right">Pseudo</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
            <label for="password">Mot de passe</label>
              <input id="password" name="password" type="password" class="validate">
            </div>
					</div>

					<div class="row">
						<div class="input-field col s12">
            <label for="password_check">Vérification du mot de passe</label>
              <input id="password_check" name="password_check" type="password" class="validate">
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
      <div class="container">
        <table class="bored highlight grey lighten-5">
  				<thead>
  					<tr>
  						<th>Liste des utilisateurs</th>
  					</tr>
  				</thead>
  				<tbody>
						<tr><td>Prénom</td>
							<td>Nom</td>
							<td>Pseudo</td>
							<td>Mail</td>
  					<?php
  						foreach($lesUsers as $row)
  							{
  								echo "<tr><td>".$row['usersfirstname']."</td>";
  								echo "<td>".$row['userslastname']."</td>";
  								echo "<td>".$row['usersnick']."</td>";
  								echo "<td>".$row['usersmail']."</td></tr>";
  							}
  					?>
  				</tbody>
			  </table>
      </div>
		</div>
		<?php require ("view/footer.php");?>
	</body>
</html>
