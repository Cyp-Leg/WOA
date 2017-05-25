<!doctype html>
<html lang="fr">
	<head>
		<title>Espace administrateur</title>
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
	  <link rel="icon" href="medias/favicon.ico" />
	</head>
	<body>
		<?php require ("view/header.php");?>
		<div>
			<h4 class="center-align">Espace administrateur</h4>
		</div>

		<div class="container">
			<div>
				<a class="waves-effect waves-light btn" id="anntab" onclick="afficherTout();"><i class="material-icons right">call_received</i>Annonces</a>
			</div>
		</div>

    <div class="container" id="other" style="display: none;">
	      <table class="bored highlight grey lighten-5">
	    		<thead>
	    			<tr>
	    				<th>Liste des annonces</th>
	    			</tr>
	    		</thead>
					<tbody>
	          <tr><th>Photo</th>
								<th>Titre</th>
	              <th>Lieu</th>
	              <th>Prix</th>
	          </tr>
	          <?php
	          foreach($lesAnnonces as $row)
	            {
								$photoname = Photo::Get_Photo_By_Annid($row['announceid']);
								if(empty($photoname)){$photoname="medias/avatars/errpic.png";}
								echo "<tr><td><img src=\"".$photoname."\" class=\"annpic\" /></td>";
	              echo "<td><a href=\"Fiche.php?ann=".$row['announceid']."\">".$row['announcetitle']."</a></td>";
	              $cityname = City::Get_City_Name($row['cityid']);
	              echo "<td>".$cityname."</td>";
	              echo "<td>".$row['announceprice']."</td></tr>";
                echo "<td> <a href=\"controller/Controller_Suppression_Announce.php?annid=".$row['announceid']."\">Supprimer </a> </td></tr>";
	            } ?>
					</tbody>
				</table>
		</div>


		<div class="container">
			<div>
				<a class="waves-effect waves-light btn" id="usertab" onclick="afficherUsers();"><i class="material-icons right">call_received</i>Utilisateurs</a>
			</div>
		</div>

		<div class="container" id="user" style="display: none;">
	      <table class="bored highlight grey lighten-5">
	    		<thead>
	    			<tr>
	    				<th>Liste des Utilisateurs</th>
	    			</tr>
	    		</thead>
					<tbody>
	          <tr><th>Id</th>
								<th>Nom</th>
	              <th>Prénom</th>
	              <th>Mail</th>
	          </tr>
	          <?php
	          foreach($lesUsers as $row)
	            {
	              echo "<td>".$row['usersid']."</td>";
	              echo "<td>".$row['userslastname']."</td>";
	              echo "<td>".$row['usersfirstname']."</td>";
                echo "<td>".$row['usersmail']."</td></tr>";
	            } ?>
					</tbody>
				</table>
		</div>
		<?php require ("view/footer.php");?>
	</body>
</html>
