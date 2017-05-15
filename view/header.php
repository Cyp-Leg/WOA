<nav>
	<div class="nav-wrapper">
		<a href="/Accueil.php" class="brand-logo right">Test Riasec</a>
		<a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="left hide-on-med-and-down">
			<li><a href="Accueil.php">Accueil</a></li>
			<li><a href="Test.php">Désposer une annonce</a></li>
			<li><a href="Test.php">Consulter les annonces</a></li>
			<li><a href="Resultat.php">Consulter mes événements</a></li>
			<li><a href="Profil.php">Profil</a></li>
			<li><a href="Administrateur.php">Administrateur</a></li>
		  <li><a href="Connexion.php">Connexion</a></li>
			<li><a title="Déconnexion" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i></a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a class="waves-effect waves-light btn" href="Accueil.php"><i class="large material-icons">store</i>Accueil</a></li>
			<li><a class="waves-effect waves-light btn" href="Test.php"><i class="large material-icons">play_circle_outline</i>Faire le test</a></li>
			<li><a class="waves-effect waves-light btn" href="Test.php"><i class="large material-icons">replay</i>Reprendre le test</a></li>
			<li><a class="waves-effect waves-light btn" href="Resultat.php"><i class="large material-icons">class</i>Revoir ses résultats</a></li>
			<li><a class="waves-effect waves-light btn" href="Administrateur.php"><i class="large material-icons">supervisor_account</i>Administrateur</a></li>
			<li><a class="waves-effect waves-light btn" href="Profil.php"><i class="large material-icons">perm_identity</i>Profil</a></li>
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
