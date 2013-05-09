<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Fiche descriptive de la réalisation d'un site de gestion de flux RSS en JAVA JEE." >
		<meta name="Keywords" content="JAVA, JEE, site dynamique, flux RSS, parser, fichier xml" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>Site dynamique gérant les flux RSS</title>

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
				<img src="../Common/img/ribbon.png" id="ribbon" alt="Développeur Web à Clermont-Ferrand"/>
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
		
				<h1 class="siterss_h1">Site de gestion des flux RSS</h1>

				<p>Ce site a été développé en binôme en fin de 2ème année de DUT Informatique. Le site web a été conçu en JAVA EE et
				le parser a été développé en JAVA.</p>
				
				<h2 class="siterss_h2">Le cahier des charges</h2>
				<p>Nous avons disposé d'un mois pour réaliser un parser JAVA permettant de parser des flux RSS donnés afin de remplir une base de données
				MySQL. <br/>
				Afin d'afficher le contenu des flux, nous devions concevoir un site web dynamique en JEE pour ajouter, supprimer et consulter des flux RSS.</p>
				<br/><p>Une authentification administrative devrait être mise en place afin que l'ajout et la suppression des flux
				ne se fasse que par l'administrateur du site.</p><br/>
				
				<p>Le développement du site devait se faire en respectant le <strong>pattern MVC</strong> afin de produire un code facile maintenable.</p>
				
				<h2 class="siterss_h2">Langages et technologies utilisés</h2>
				<ul>
					<li>JAVA EE</li>
					<li>JAVA (parser)</li>
					<li>HTML 5</li>
					<li>CSS 3</li>
					<li>Base de données MySQL</li>
					<li>XML(flux RSS)</li>
					<li>Pattern MVC</li>
				</ul>
				<br/><br/>
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/SiteRSS/siterss_screen1.png" width="750" height="400" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/SiteRSS/siterss_screen2.png" width="750" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/SiteRSS/siterss_screen3.png" width="750" height="400" />
						</div>					
					</div>

					<div id="accordion">
						<div class="link-header">La page d'accueil</div>
						<div class="link-content">
							<p>Voici la page d'accueil du site, accessible par tous les visiteurs.</p><br/>
							
							<p>Elle permet l'affichage des news correspondant aux flux paramétrés par l'administrateur.</p><br/>	
							<p>L'administrateur peut s'authentifier à partir de cette page pour accèder à son interface d'administration.</p>
						</div>
						<div class="link-header">La liste des flux</div>
						<div class="link-content">
							<p>Une fois authentifié en tant qu'administrateur, cette page permet de lister tous les flux RSS.</p><br/>
						</div>
						<div class="link-header">Ajouter un flux</div>
						<div class="link-content">
							<p>L'ajout de flux se fait via cette interface par l'administrateur du site.</p><br/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
