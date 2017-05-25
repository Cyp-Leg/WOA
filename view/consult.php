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
    <div class="container">
			<p>Filtrer par : </p>
				<table>
					<tbody>
						<tr><td><a class="waves-effect waves-light btn" onclick="afficherEvenement();"><i class="material-icons right">call_received</i>Evenements</a></td>

							<td><a class="waves-effect waves-light btn" onclick="afficherProduit();"><i class="material-icons right">call_received</i>Produits</a></td>

							<td><a class="waves-effect waves-light btn" onclick="afficherTout();"><i class="material-icons right">call_received</i>Toutes les annonces</a></td></tr>
						</tbody>
					</table>
				<div class="general-container" id="event" style="display: none;">
		      <table class="bored highlight grey lighten-5">
		    		<thead>
		    			<tr>
		    				<th>Tous les événements</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		          <tr><th>Photo</th>
									<th>Titre</th>
		              <th>Lieu</th>
		              <th>Prix</th>
		          </tr>
		          <?php
		          foreach($lesEvents as $row)
		          {
								$photoname = Photo::Get_Photo_By_Annid($row['announceid']);

								if(empty($photoname)){$photoname="medias/avatars/errpic.png";}

								echo "<tr><td><img src=\"".$photoname."\" class=\"annpic\" alt=\"Photographie du produit\"/></td>";
								echo "<td>".$photoname."</td>";
								echo "<td><a href=\"Fiche.php?ann=".$row['announceid']."\">".$row['announcetitle']."</a></td>";
								$cityname = City::Get_City_Name($row['cityid']);
								echo "<td>".$cityname."</td>";
								echo "<td>".$row['announceprice']."</td></tr>";
		           } ?>
		         </tbody>
		       </table>
				</div>

				<div class="general-container" id="product" style="display: none;">
		      <table class="bored highlight grey lighten-5">
		    		<thead>
		    			<tr>
		    				<th>Tous les produits</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		          <tr><th>Photo</th>
									<th>Titre</th>
		              <th>Lieu</th>
		              <th>Prix</th>
		          </tr>
		          <?php
		          foreach($lesProduits as $row)
		            {
									$photoname = Photo::Get_Photo_By_Annid($row['announceid']);
									if(empty($photoname)){$photoname="errpic.png";}
									echo "<tr><td><img src=\"medias/avatars/".$photoname."\" class=\"annpic\" /></td>";
		              echo "<td><a href=\"Fiche.php?ann=".$row['announceid']."\">".$row['announcetitle']."</a></td>";
		              $cityname = City::Get_City_Name($row['cityid']);
		              echo "<td>".$cityname."</td>";
		              echo "<td>".$row['announceprice']."</td></tr>";
		            } ?>
		          </tbody>
		        </table>
					</div>


			<div class="general-container" id="other" style="display: none;">
	      <table class="bored highlight grey lighten-5">
	    		<thead>
	    			<tr>
	    				<th>Toutes les annonces</th>
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
								if(empty($photoname)){$photoname="errpic.png";}
								echo "<tr><td><img src=\"medias/avatars/".$photoname."\" class=\"annpic\" /></td>";
	              echo "<td><a href=\"Fiche.php?ann=".$row['announceid']."\">".$row['announcetitle']."</a></td>";
	              $cityname = City::Get_City_Name($row['cityid']);
	              echo "<td>".$cityname."</td>";
	              echo "<td>".$row['announceprice']."</td></tr>";
	            } ?>
	          </tbody>
	        </table>
				</div>
      </div>
      <?php require ("view/footer.php");?>
  	</body>
  </html>
