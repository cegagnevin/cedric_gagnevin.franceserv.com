<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Fiche descriptive du projet Atome : l'application qui permet de créer d'autres applications." >
		<meta name="Keywords" content="Atome, Projet tutoré DUT Informatique Cézeaux, Application dynamique" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>Atome project - L'application qui permet de créer d'autres applications...</title>

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
		
				<h1 class="atome_h1">Atome</h1>
					
				<p>Atome est une application réalisée lors d'un projet tutoré en 2ème année de DUT Informatique.
				L'objectif était de développer une application dynamique qui soit capable de concevoir n'importe quelle application
				telles que des applications de gestion de salle de sport ou même de gestion d'une bibliothèque.<p>
				
				<h2 class="atome_h2">Outils et langages utilisés</h2>
				<ul>
					<li>PHP 4 & 5</li>
					<li>Base de données MySQL</li>
					<li>Javascript et Ajax pour l'ergonomie</li>
					<li>HTML 5</li>
					<li>CSS 3 pour le design</li>
				</ul>
				<p id="PDF"><a href="Downloads/Documentation.pdf"><img src="../Common/img/pdf.png" />Documentation</a></p>
				
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/Atome/atome_screen1.png" width="750" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/Atome/atome_screen2.png" width="750" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/Atome/atome_screen3.png" width="750" />
						</div>
					</div>

					<div id="accordion">
						<div class="link-header">Gestion des entités</div>
						<div class="link-content">
							<p>Cette interface ergonomique permet à l'utilisateur de créer ou supprimer des entités, des propriétés ou des occurrences.</p>
							<p>Les entités ajoutées sont directement accessibles via la barre d'onglets dynamique.</p>
						</div>
						<div class="link-header">Mode modification</div>
						<div class="link-content">
							<p>Ce mode récapitule toutes les occurrences appartenant à une entité. Les propriétés de chaque occurrence sont détaillées sous forme de tableau.</p>
							<p>Il est possible d'ajouter, modifier ou supprimer une entité rapidement via ce mode.</p>
						</div>
						<div class="link-header">Mode relation</div>
						<div class="link-content">
							<p>Ce mode permet de visualiser les relations entre les objets.</p>
							<p>Lorsque l'on sélectionne une entité, une occurrence ou même une propriété, une fiche dressant les caractéristiques de chaque objet est établie.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
