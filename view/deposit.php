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
		<div class="container">
          <table class="bored highlight grey lighten-5">
    				<thead>
    					<tr>
    						<th>Déposez votre annonce!</th>
    					</tr>
    				</thead>
    				<tbody>
              <form class="col s12" method="post" action="controller/Controller_Add_Deposit.php">

								<tr><td><label for="announceTitle"><div class="oblig">*</div>Titre de l'annonce : </label></td>
              			<td><input type="text" name="announceTitle" id="announceTitle"></td></tr>

								<tr><td><label><div class="oblig">*</div>Catégorie</label></td>
									<td>
									<?php foreach($lesCategories as $row)
										{
											?><input name="announceCategory" type="radio" id="<?php echo $row['categoryid']?>" />
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

								<tr><td><label for="announcePic">(optionnel) Photographie/affiche : </label></td>
										<td><div class="file-path-wrapper">
        									<input name="announcePic" class="file-path validate" type="text">
      									</div>
										</td>
								</tr>

								<tr><td><input type="submit" value="Valider"></td></tr>

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
