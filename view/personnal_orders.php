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
		<?php include ("css/css_config.php") ?>
	  <link rel="icon" href="medias/favicon.ico" />
	</head>
	<body>
		<?php require ("view/header.php");?>
		<div>
			<h4 class="center-align">Le Coin des étudiants</h4>
		</div>
    <div class="container">
  		<div class="general-container">
        <table class="bored highlight grey lighten-5">
          <thead>
            <tr>
              <th>Vos commandes</th>
            </tr>
          </thead>
          <tbody>
            <tr><th>Numéro de commande</th>
                <th>Date</th>
                <th>Titre de l'annonce</th>
                <th>Vendeur</th>
            </tr>
            <?php
            foreach($lesOrders as $row)
            {
              $announceid=Orders::Get_Announce_From_Order($row['ordersid']);
              $announce=Announce::Get_Announce($announceid);
              $seller=Users::Get_Users_Mail($announce['usersid']);
              echo "<tr><td>".$row['ordersid']."</td>";
              echo "<td>".$row['ordersdate']."</td>";
              echo "<td><a href=\"Fiche.php?ann=".$announce['announceid']."\">".$announce['announcetitle']."</a></td>";
              echo "<td>".$seller."</td></tr>";
            }?>
          </tbody>
        </table>
      </div>
    </div>
		<div class="container">
			<div class="general-container">
				<table class="bored highlight grey lighten-5">
          <thead>
            <tr>
              <th>Vos notifications</th>
            </tr>
          </thead>
          <tbody>
						<tr><th>Intitulé</th>
                <th>Date</th>
            </tr>
            <?php
            foreach($lesNotifs as $row)
            {
							echo "<tr><td>".$row['notiftext']."</td>";
              echo "<td>".$row['notifdate']."</td></tr>";
            }?>
          </tbody>
        </table>
			</div>
		</div>
    <?php require ("view/footer.php");?>
  </body>
</html>
