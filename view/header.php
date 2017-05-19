<nav>
	<div class="nav-wrapper blue lighten-4">
		<!--<a href="/Accueil.php" class="logosite"><img src="medias/logosite.png"></a>-->
		<a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">llll</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="Accueil.php">Accueil</a></li>
			<li><a href="Deposit.php">Désposer une annonce</a></li>
			<li><a href="Consult.php">Consulter les annonces</a></li>
			<?php if(isLogged()){ ?><li><a href="Personnal_events.php">Mes événements</a></li><?php } ?>
			<?php if(isAdmin()){ ?><li><a href="Administrateur.php">Administrateur</a></li><?php } ?>
		  <?php if(!isLogged()){ ?><li><a href="Connexion.php">Connexion</a></li><?php } ?>
			<li><a title="Déconnexion" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i></a></li>
		</ul>
		<ul class="side-nav left-aligned" id="mobile-demo">
			<li><a class="waves-effect waves-light btn" href="Accueil.php"><i class="large material-icons">store</i>Accaaaaaueil</a></li>
			<li><a class="waves-effect waves-light btn" href="Deposit.php"><i class="large material-icons">play_circle_outline</i>Désposer une annonce</a></li>
			<li><a class="waves-effect waves-light btn" href="Consult.php"><i class="large material-icons">replay</i>Consulter une annonce</a></li>
			<li><a class="waves-effect waves-light btn" href="Personnal_events.php"><i class="large material-icons">class</i>Mes événements</a></li>
			<li><a class="waves-effect waves-light btn" href="Administrateur.php"><i class="large material-icons">supervisor_account</i>Administrateur</a></li>
			<li><a class="waves-effect waves-light btn" href="Connexion.php"><i class="large material-icons">input</i>Connexion</a></li>
			<li><a class="waves-effect waves-light btn" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i>Déconnexion</a></li>
		</ul>
	</div>
</nav>
<br>
<script>
$( document ).ready(function(){
	$(".button-collapse").sideNav();
})
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90376618-1', 'auto');
  ga('send', 'pageview');

</script>
