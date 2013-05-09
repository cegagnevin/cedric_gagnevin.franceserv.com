<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="" >
		<meta name="Keywords" content="" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>FormerStudent</title>

		<script src="../Common/js/jquery.js"></script><!-- Jquery 1.7.2 -->		
		<!-- Slidorion -->
		<link rel="stylesheet" href="../Common/slidorion/css/slidorion.css" />
		<script src="../Common/slidorion/js/jquery.easing.js"></script>
		<script src="../Common/slidorion/js/jquery.slidorion.min.js"></script>
		
		<script type="text/javascript"><!-- Initialisation du slider -->
			$(document).ready(function(){
				$('#slidorion').slidorion({
					speed: 1000,
					interval: 8000,
					effect: 'slideUp'
				});
			});
		</script>
	
		<!-- google analytics (début) -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-30197543-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		<!-- google analytics (fin) -->
	</head>
	<body>
		<!-- Pour module FB -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!--===================================-->
		<div id="header">
			<div id="haut_page">
				<div id="FB" class="fb-like" data-href="www.facebook.com/CedricGagnevinDeveloppeurWeb" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
				<h1 id="nom" onclick="window.location.href= '../index.php';">Cédric GAGNEVIN</h1>
				<img src="../Common/img/background-menu.png" class="background-menu" alt="Menu"/>
				<img src="../Common/img/ribbon.png" id="ribbon" alt="Etudiant en DUT Informatique"/>
				<a href="../flux_rss.xml"><img src="../Common/img/rss.png" alt="Flux RSS" width=40 id="RSS" title="Suivre mes réalisations !" /></a>
				
				<div id="menu">
					<table>
						<tr>
							<td >
								<a href="../index.php">
									Accueil
								</a>
							</td>
							<td class="ongletCourant">
								Portfolio
							</td>
							<td>
								<a href="../CV/cv.php">
									Mon CV
								</a>
							</td>
							<td>
								<a href="../Contact/contact.php">
									Me contacter
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		<div id="body">
			<div id="bloc_principal">
				<p onclick="window.location.href='realisations.php'" class="back_portfolio">Retour au portfolio</p>
		
				<h1 class="formerstudent_h1">FormerStudent - Réseau social entre étudiants</h1>
					
				<p>FormerStudent est le fruit d'un projet web de 1ère année de DUT Informatique qui a été réalisé en binôme.
				C'est mon 1er projet dans le domaine de la programmation web et c'est de là qu'est née cette passion.
				</p><br/>
					
				<p>Nous avions des consignes et obligations à respecter mais rien ne nous empechait de faire preuve d'imagination et d'ajouter des
				fontionnalités supplémentaires à ce qui était demandé.</p><br/>
				
				<p>Je vous invite à consulter les <a href="Downloads/projet_web_formerstudent.pdf">consignes</a> qui nous étaient données.</p><br/>
				
				<p>A terme, nous avions développer le site selon cette structure : <a href="Downloads/diagramme_formerstudent.pdf">voir</a>.</p><br/>
				
				<h2 class="formerstudent_h2">Les fonctionnalités</h2>
				<ul>	
					<li>Création d'un livre d'or avec utilisation de bbcode pour modifier le texte</li>
					<li>Gestion de comptes : visiteurs/membres/administrateurs</li>
					<li>Recherche par promotion</li>
					<li>Compteur de visiteurs</li>
					<li>Choix du thème visuel de la page (Green/Ocean/Sunshine)</li>
					<li>Formulaire d'inscription avec upload de photos (jusqu'à 3)</li>
				</ul>
				
				<h2 class="formerstudent_h2">Outils et langages utilisés</h2>
				<ul>
					<li>PHP 4</li>
					<li>Base de données MySQL</li>
					<li>Javascript</li>
					<li>HTML</li>
					<li>CSS</li>
				</ul>
				<br/><br/>
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/FormerStudent/formerstudent_screen1.png" width="750" height="400" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/FormerStudent/formerstudent_screen2.png" width="750" height="400" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/FormerStudent/formerstudent_screen3.png" width="750" height="400" />
						</div>					
					</div>

					<div id="accordion">
						<div class="link-header">Accueil de FormerStudent</div>
						<div class="link-content">
							<p>Voici la page d'accueil de FormerStudent. Les membres du site peuvent s'authentifier pour gérer leur page et consulter les pages des autres membres.
							Les visiteurs peuvent accèder au livre d'or et poster un message</p>
						</div>
						<div class="link-header">L'interface des administrateurs</div>
						<div class="link-content">
							<p>Les administrateurs peuvent, à partir de leur interface dédiée, valider les pages créées et les pages modifiées.</p>
						</div>
						<div class="link-header">L'interface des membres</div>
						<div class="link-content">
							<p>Les membres peuvent, à partir de leur interface dédiée, consulter leur page personnelle qu'ils ont créée, la modifier, la supprimer ou même demander supprimer leur compte.</p>
						</div>
					</div>
				</div>
				
				
				
				
				
				
			</div>	
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
