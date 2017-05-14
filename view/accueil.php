<!doctype html>
<html lang="fr">
	<head>
		<title></title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Acueil du test Riasec">
		<meta name="Keywords" content="">
		<meta name="Subject" content="">
		<meta name="Copyright" content="">
		<meta name="Author" content="Groupe K Piscine">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		 <?php include ("../css/css_config.php") ?>
	</head>
	<body>
		<nav>
			<div class="nav-wrapper">
				<a href="" class="brand-logo right">The place to bee</a>
				<a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="left hide-on-med-and-down">
					<li><a href="../controller/Controller_Page_Test.php">Mes événements</a></li>
					<li><a href="">Accéder aux propositions</a></li>
					<li><a href="">Créer une offre</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a class="waves-effect waves-light btn" href="../controller/Controller_Page_Test.php">Mes événements</a></li>
					<li><a class="waves-effect waves-light btn" href="">Accéder aux propositions</a></li>
					<li><a class="waves-effect waves-light btn" href="">Créer une offre</a></li>
				</ul>
			</div>
		</nav>
		<br>
		<div>
			<h4 class="center-align">Bienvenue to the place to bee</h4>
		</div>
		<br>
		<div class="row rowSpe">
			<a href="../controller/Controller_Page_Test.php" class="col s4 center-align button2" ><i class="amazing material-icons">assignment</i><h5>Faire le test</h5></a>
			<a href="test.html" class="col s4 center-align button2"><i class="amazing material-icons">replay</i><h5>Reprendre le test</h5></a>
			<a href="index.html" class="col s4 center-align button2"><i class="amazing material-icons">perm_identity</i><h5>Admins</h5></a>
		</div>
		<br>
		
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Footer Content</h5>
						<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
				© 2014 Copyright Text
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			</div>
        </footer>
	</body>
</html>
<script src="jQuery.js"></script>
<script src="materialize/js/materialize.js"></script>
<script>
$( document ).ready(function(){
	$(".button-collapse").sideNav();
})
</script>