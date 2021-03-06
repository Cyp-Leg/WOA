<nav>
	<div class="nav-wrapper greyperso">
		<a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<a href="/accueil" class="logosite"> LCDE</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="/accueil">Accueil</a></li>
			<li><a href="/deposit">Désposer une annonce</a></li>
			<li><a href="/annonces">Consulter les annonces</a></li>
			<?php if(isLogged()){ ?><li><a href="/mescommandes">Mes commandes</a></li><?php } ?>
			<?php if(isAdmin()){ ?><li><a href="/administrateur">Administrateur</a></li><?php } ?>
		  <?php if(!isLogged()){ ?><li><a href="/connexion">Connexion</a></li><?php } ?>
			<?php if(isLogged()){ ?><li><a title="Déconnexion" href="/controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i></a></li><?php } ?>
		</ul>
		<ul class="side-nav left-aligned" id="mobile-demo">
			<li><a class="waves-effect waves-light btn" href="/accueil"><i class="large material-icons">store</i>Accueil</a></li>
			<li><a class="waves-effect waves-light btn" href="/deposit"><i class="large material-icons">play_circle_outline</i>Désposer une annonce</a></li>
			<li><a class="waves-effect waves-light btn" href="/annonces"><i class="large material-icons">replay</i>Voir les annonces</a></li>
			<?php if(isLogged()){ ?><li><a class="waves-effect waves-light btn" href="mescommandes"><i class="large material-icons">class</i>Mes commandes</a></li><?php } ?>
			<?php if(isAdmin()){ ?><li><a class="waves-effect waves-light btn" href="administrateur"><i class="large material-icons">supervisor_account</i>Administrateur</a></li><?php } ?>
			<?php if(!isLogged()){ ?><li><a class="waves-effect waves-light btn" href="connexion"><i class="large material-icons">input</i>Connexion</a></li><?php } ?>
			<?php if(isLogged()){ ?><li><a class="waves-effect waves-light btn" href="/controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i>Déconnexion</a></li><?php } ?>
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
