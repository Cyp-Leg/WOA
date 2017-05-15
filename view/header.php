<nav>
	<div class="nav-wrapper">
		<a href="/accueil.php" class="brand-logo left">Le coin des étudiants</a>
		<a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down blue lighten-4">
			<li><a href="accueil.php">Accueil</a></li>
			<li><a href="deposit.php">Désposer une annonce</a></li>
			<li><a href="consult.php">Consulter les annonces</a></li>
			<li><a href="personnal_events.php">Mes événements</a></li>
			<li><a href="Administrateur.php">Administrateur</a></li>
		  <li><a href="Connexion.php">Connexion</a></li>
			<li><a title="Déconnexion" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i></a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a class="waves-effect waves-light btn" href="accueil.php"><i class="large material-icons">store</i>Accueil</a></li>
			<li><a class="waves-effect waves-light btn" href="deposit.php"><i class="large material-icons">play_circle_outline</i>Désposer une annonce</a></li>
			<li><a class="waves-effect waves-light btn" href="consult.php"><i class="large material-icons">replay</i>Consulter une annonce</a></li>
			<li><a class="waves-effect waves-light btn" href="personnal_events.php"><i class="large material-icons">class</i>Mes événements</a></li>
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
