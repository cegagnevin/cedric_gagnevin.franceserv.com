<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Fiche descriptive du site personnel de Cédric GAGNEVIN, développeur web à Clermont-Ferrand." >
		<meta name="Keywords" content="site perso, site personnel, cedric gagnevin, etudiant informatique, cézeaux, iut, clermont ferrand, site web" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>Site personnel de Cédric GAGNEVIN</title>

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
				<img src="../Common/img/ribbon.png" id="ribbon" alt="Développeur Web"/>
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
		
				<h1 class="siteperso_h1">Site personnel de Cédric GAGNEVIN</h1>

				<p>Cette fiche est dédiée au développement du site sur lequel vous vous trouvez actuellement : mon site personnel !
				</p>
				
				<h2 class="siteperso_h2">Quel est le but de ce site?</h2>
				<p>J'ai conçu ce site afin de présenter les réalisations que j'ai pu créer de ma 1ère année de DUT Informatique jusqu'à aujourd'hui.
				<br/>Je présente mon CV et je propose mes services.
				Mes prestations concernent la création de site internet mais également des formations allant de l'initiation à
				l'informatique jusqu'à l'apprentissage d'un langage de développement.
				</p><br/>
				
				<p>Si vous êtes intéressé par mes services, merci de me contacter via le <a href="../Contact/contact.php">formulaire de contact</a>.
				</p>
				
				<h2 class="siteperso_h2">L'interface d'administration</h2>
				<p>Dans le but de suivre les visites sur mon site, j'ai développé une interface d'administration
				permettant un suivi des statistisques via Google Analytics et Piwik.</p>
				<p>En plus de cela, j'ai développé un suivi des visites pour connaître qui accède à mon site, quand, et qui est actuellement connecté.
				<br/>Un croisement des données permet donc d'obtenir des statistiques plus fiables.</p>
						
				
				<h2 class="siteperso_h2">Outils et langages utilisés</h2>
				<ul>
					<li>PHP</li>
					<li>HTML 5</li>
					<li>CSS 3</li>
					<li>Base de données MySQL</li>
					<li>Javascript</li>
					<li>JQuery</li>
				</ul>
				<br/><br/>
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/SitePerso/siteperso_screen1.png" width="750" height="400" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/SitePerso/siteperso_screen2.png" width="750" height="400" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/SitePerso/siteperso_screen3.png" width="750" height="400" />
						</div>					
					</div>

					<div id="accordion">
						<div class="link-header">Page d'accueil du site</div>
						<div class="link-content">
							<p>Voici la page d'accueil de mon site personnel.</p><br/>
							<p>J'ai intégré un slider JQuery pour présenter sous forme de diaporama mes réalisations.</p><br/>
							<p>Le menu permet d'accèder aux différentes pages de mon site (CV, Portfolio, Contact...)</p>
						</div>
						<div class="link-header">Le formulaire de contact</div>
						<div class="link-content">
							<p>Pour me contacter (devis, conseil, remarque ou autre...), rendez-vous sur cette <a href="http://www.cedric_gagnevin.franceserv.com/Contact/contact.php">page</a>.
							</p><br/>
							<p>Un email me sera automatiquement envoyé et vous receverez une réponse sous peu !</p>
						</div>
						<div class="link-header">Mon interface d'administration</div>
						<div class="link-content">
							<p>Cette interface me permet de consulter les statistiques de mon site en croisant les données Piwik,
							 Google Analytics et d'un programme que j'ai développé.</p><br/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
