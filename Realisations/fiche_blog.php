<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Fiche descriptive d'un blog de publication des news." >
		<meta name="Keywords" content="Blog, Projet Web, Flux RSS, Publication de news, Moteur de blog" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>Blog - Publication de news</title>

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
		
				<h1 class="blog_h1">Blog - Publication de news</h1>
					
				<p>Ce blog a été réalisé en fin de 2ème année de DUT Informatique lors d'un projet Web. L'objectif de ce projet, réalisé en binôme, était
				de concevoir un moteur de blog ou des auteurs peuvent écrire et publier des news. Les droits de publication sont gérés par les administrateurs.
				</p><br/>
				
				<ul><strong>Les administrateurs :</strong>
					<li>Peuvent créer des comptes "administrateur" ou "auteur"</li>
					<li>Peuvent choisir un avatar pour un compte</li>
				</ul><br/>
				
				<ul><strong>Les auteurs :</strong>
					<li>Peuvent créer,modifier ou supprimer des news</li>
					<li>Peuvent ajouter une image à une news</li>
					<li>Gèrent l'état de leurs news ("publiées" ou "en attente de publication")</li>
				</ul><br/>
				
				<ul><strong>Les internautes :</strong>
					<li>Consultent les news publiées</li>
				</ul>
				
				<h2 class="blog_h2">Les fonctionnalités</h2>
				<ul>	
					<li>Cryptage des mots de passe (SHA)</li>
					<li>Upload d'images pour les news et pour les avatars des comptes utilisateurs</li>
					<li>Contrôle de disponibilité des logins (AJAX)</li>
					<li>Génération d'un flux RSS pour les news (format XML et JSON)</li>
				</ul>
				
				<h2 class="blog_h2">Outils et langages utilisés</h2>
				<ul>
					<li>PHP 5</li>
					<li>Base de données MySQL</li>
					<li>Javascript et Ajax</li>
					<li>HTML 5</li>
					<li>CSS 3</li>
					<li>Fichiers XML et JSON</li>
				</ul>
				<br/><br/>
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/Blog/blog_screen1.png" width="750" height="400" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/Blog/blog_screen2.png" width="750" height="400" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/Blog/blog_screen3.png" width="750" height="400" />
						</div>					
					</div>

					<div id="accordion">
						<div class="link-header">Page d'accueil du blog</div>
						<div class="link-content">
							<p>Voici la page d'accueil du blog. Les internautes peuvent consulter les news qui ont été publiées. Ils peuvent également accéder au flux RSS situé en haut de la page.</p>
							<p>Les administrateurs ainsi que les auteurs peuvent d'identifier pour accèder à leur interface.</p>
						</div>
						<div class="link-header">L'interface des auteurs</div>
						<div class="link-content">
							<p>Une fois identifiés, les auteurs peuvent voir toutes les news qu'ils ont crées.</p>
							<p>Ils peuvent également ajouter, modifier ou supprimer des news.</p>
						</div>
						<div class="link-header">L'interface des administrateurs</div>
						<div class="link-content">
							<p>Une fois identifiés, les administrateurs peuvent voir tous les utilisateurs, auteurs comme administrateurs, qui
							ont un compte sur le site.</p>
							<p>A partir de là, ils peuvent ajouter, modifier ou supprimer un utilisateur.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
