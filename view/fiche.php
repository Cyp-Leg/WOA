<!doctype html>
<html lang="fr">
	<head>
		<title>Informations annonce</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Lieu d\'échange entre étudiants">
		<meta name="Keywords" content="échange offre offer event événement ville étudiant student">
		<meta name="Subject" content="Le Coin des étudiants">
		<meta name="Copyright" content="CyprienLegrand">
		<meta name="Author" content="CyprienLegrand">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		 <?php include ("css_config.php"); ?>
	</head>
	<body>
		<?php require ("view/header.php");?>
		<div>
			<h4 class="center-align"><?php echo $annprop['announcetitle']; ?></h4>
		</div>

    <div class="container">
      <div class="left-photo">
      	<?php
        	if(empty($photoname)){$photoname="medias/avatars/errpic.png";}
        	echo "<img src=\"".$photoname."\" class=\"left-photo\"/>";
      	?>
      </div>
      <div class="ann-caract">
        <ul>
          <?php
            echo "<li>Catégorie : ".$cat."</li>";
            echo "<li>Prix : ".$annprop['announceprice']." € </li>";
            echo "<li>Ville : ".$city."</li>";
          ?>
        </ul>
      </div>
			<div class="command">
				<a href="/commander/<?php echo $annprop['announceid'];?>" class="btn waves-effect waves-light" id="submit" value="valider">Commander
      		<i class="material-icons right">shopping_cart</i>
				</a>
			</div>
      <div class="ann-descrip">
				<table>
					<thead>
						<th>Description du produit</th>
					</thead>
					<tbody>
        		<tr><td><?php echo $annprop['announcedescrip']; ?></td></tr>
					</tbody>
				</table>
      </div>
    </div>
    <?php require("/view/footer.php"); ?>
  </body>
</html>
