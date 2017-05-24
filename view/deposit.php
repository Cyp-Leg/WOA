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
		</div>
		<br>
		<div class="event">
			<a class="waves-effect waves-light btn" onclick="afficherEvenement();"><i class="material-icons right">cloud</i>Evenement</a>
		</div>
		<div class="product">
			<a class="waves-effect waves-light btn" onclick="afficherProduit();"><i class="material-icons right">cloud</i>Produit</a>
		</div>
		<div class="container" id="event" style="display: none;">
    	<table class="bored highlight grey lighten-5">
    		<thead>
    			<tr>
    				<th>Déposez votre événement!</th>
    			</tr>
    		</thead>
    		<tbody>
          <form class="col s12" method="post" action="controller/Controller_Add_Deposit.php" enctype="multipart/form-data">

						<tr><td><label for="announceTitle"><div class="oblig">*</div>Titre de l'annonce : </label></td>
              	<td><input type="text" name="announceTitle" id="announceTitle"></td></tr>

						<tr><td><label><div class="oblig">*</div>Catégorie</label></td>
							<td>
							<?php foreach($lesCategories as $row)
								{
									?><input name="announceCategory" value="<?php echo $row['categoryid']?>" type="radio" id="<?php echo $row['categoryid']?>" />
										<label for="<?php echo $row['categoryid']?>"><?php echo $row['categoryname']?></label>
							<?php
								}
							?>
							</td>
						</tr>

            <tr><td><label for="announceDescrip"><div class="oblig">*</div>Description : </label></td>
              	<td><textarea name="announceDescrip" id="announceDescrip"></textarea></td></tr>

            <tr><td><label for="announcePrice"><div class="oblig">*</div>Prix : </label></td>
            		<td><input type="text" name="announcePrice" id="announcePrice"></td></tr>

						<tr><td><label for="announceCity"><div class="oblig">*</div>Ville : </label></td>
		           	<td><input type="text" name="announceCity" id="announceCity"></td></tr>

						<tr><td><label for="announcePic">(optionnel) Photographie/affiche (max. 10 Mo) : </label>
									<div class="file-field input-field">
										<div class="btn">
											<span>Importer...</span>
											<input type="file" name="announcePic">
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text">
										</div>
									</div></td></tr>

										<tr><td><input type="submit" value="Valider"></tr></td>
            </form>
        </tbody>
      </table>
		</div>

		<div class="container" id="product" style="display: none;">
			<table class="bored highlight grey lighten-5">
				<thead>
					<tr>
						<th>Déposez votre produit!</th>
					</tr>
				</thead>
				<tbody>
					<form class="col s12" method="post" action="controller/Controller_Add_Deposit.php" enctype="multipart/form-data">

						<tr><td><label for="announceTitle"><div class="oblig">*</div>Titre de l'annonce : </label></td>
								<td><input type="text" name="announceTitle" id="announceTitle"></td></tr>

						<tr><td><label><div class="oblig">*</div>Catégorie</label></td>
							<td>
							<?php foreach($lesCategories as $row)
								{
									?><input name="announceCategory" value="<?php echo $row['categoryid']?>" type="radio" id="<?php echo $row['categoryid']?>" />
										<label for="<?php echo $row['categoryid']?>"><?php echo $row['categoryname']?></label>
							<?php
								}
							?>
							</td>
						</tr>

						<tr><td><label for="announceDescrip"><div class="oblig">*</div>Description : </label></td>
								<td><textarea name="announceDescrip" id="announceDescrip"></textarea></td></tr>

						<tr><td><label for="announcePrice"><div class="oblig">*</div>Prix : </label></td>
								<td><input type="text" name="announcePrice" id="announcePrice"></td></tr>

						<tr><td><label for="announceCity"><div class="oblig">*</div>Ville : </label></td>
								<td><input type="text" name="announceCity" id="announceCity"></td></tr>

						<tr><td><label for="announcePic">(optionnel) Photographie/affiche (max. 10 Mo) : </label>
									<div class="file-field input-field">
										<div class="btn">
											<span>Importer...</span>
											<input type="file" name="announcePic">
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text">
										</div>
									</div></td></tr>

										<tr><td><input type="submit" value="Valider"></tr></td>
						</form>
				</tbody>
			</table>
		</div>
		<?php require ("view/footer.php");?>
	</body>
</html>

<script src="css/jQuery.js"></script>
<script src="css/materialize/js/materialize.js"></script>
<script>
$(document).ready(function() {
    $('select').material_select();
  });
</script>
