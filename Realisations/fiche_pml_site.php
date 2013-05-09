<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Fiche descriptive du site vitrine de PhpMyLab. Téléchargement du logiciel, version de démonstration et documentation en ligne." >
		<meta name="Keywords" content="PhpMyLab, pml, PML, logiciel congés, logiciel missions, open source, missions, déplacements, planning, congés, php" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>Site web du logiciel open source PhpMyLab</title>

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
		
				<img src="../Common/img/stage.png" alt="Stage" id="mention" />
				<h1 class="pml_site_h1">Site web de PhpMyLab</h1>

				<p>Lors de mon stage au Laboratoire de Physique Corpusculaire de Clermont-Ferrand, j'ai été amené à 
				travailler sur le logiciel Open Source : <strong>PhpMyLab</strong>.
				</p>
				
				<h2 class="pml_site_h2">PhpMyLab</h2>
				<p>PhpMyLab est un logiciel Open Source intranet, modulaire, multi-utilisateurs, multi-rôles pour la
				gestion des missions/déplacements, des congés et des plannings du personnel d'une société.
				</p><br/>
				
				<p>Pour visualiser le site en question et obtenir davantage de renseignements sur ce logiciel,
				je vous invite à vous rendre sur <a href="http://phpmylab.in2p3.fr" target="_blank">http://phpmylab.in2p3.fr</a>.
				</p>
				
				<h2 class="pml_site_h2">La refonte graphique du site</h2>
				<table id="site_pml_avant">
					<caption>Avant</caption>
					<tr>
						<td><a href="ScreenShot/Site_PhpMyLab/ancien_site_pml_screen1.png"><img src="ScreenShot/Site_PhpMyLab/ancien_site_pml_screen1_min.png" alt="Capture d'écran 1" /></a></td>
						<td><a href="ScreenShot/Site_PhpMyLab/ancien_site_pml_screen2.png"><img src="ScreenShot/Site_PhpMyLab/ancien_site_pml_screen2_min.png" alt="Capture d'écran 2" /></a></td>
						<td><a href="ScreenShot/Site_PhpMyLab/ancien_site_pml_screen3.png"><img src="ScreenShot/Site_PhpMyLab/ancien_site_pml_screen3_min.png" alt="Capture d'écran 3" /></a></td>
					</tr>
				</table><br/><br/>
				
				<table id="site_pml_apres">
					<caption>Après</caption>
					<tr>
						<td><a href="ScreenShot/Site_PhpMyLab/site_pml_screen1.png"><img src="ScreenShot/Site_PhpMyLab/site_pml_screen1.png" alt="Capture d'écran 1" height="142"/></a></td>
						<td><a href="ScreenShot/Site_PhpMyLab/site_pml_screen2.png"><img src="ScreenShot/Site_PhpMyLab/site_pml_screen2.png" alt="Capture d'écran 2" height="142"/></a></td>
						<td><a href="ScreenShot/Site_PhpMyLab/site_pml_screen3.png"><img src="ScreenShot/Site_PhpMyLab/site_pml_screen3.png" alt="Capture d'écran 3" height="142"/></a></td>
					</tr>
				</table>
						
				
				<h2 class="pml_site_h2">Outils et langages utilisés</h2>
				<ul>
					<li>HTML 5</li>
					<li>CSS 3</li>
					<li>Base de données MySQL</li>
					<li>Javascript</li>
				</ul>
				<br/><br/>
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/Site_PhpMyLab/site_pml_screen1.png" width="750" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/Site_PhpMyLab/site_pml_screen2.png" width="750" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/Site_PhpMyLab/site_pml_screen3.png" width="750" height="400" />
						</div>					
					</div>

					<div id="accordion">
						<div class="link-header">Page d'accueil du site</div>
						<div class="link-content">
							<p>Voici la page d'accueil du site web de PhpMyLab.</p><br/>
							<p>Un menu déroulant permet aux visiteurs d'accèder aux différentes pages 
							du site telles que la documentation en ligne, la page de téléchargement ou la version de démonstration.</p><br/>
							<p>Un slider JQuery a été intégré afin de présenter des captures d'écran du logiciel.</p>
						</div>
						<div class="link-header">La version de démonstration</div>
						<div class="link-content">
							<p>Accessible à partir de ce site, cette version de démonstration permet aux visiteurs d'essayer PhpMyLab sans
							avoir besoin de le télécharger.</p><br/>
							<p>Cette version possède néanmoins des fonctionnalités limitées contrairement à la version disponible en téléchargement.</p>
						</div>
						<div class="link-header">La page de téléchargement</div>
						<div class="link-content">
							<p>PhpMyLab étant un logiciel open source gratuit, il est mis à disposition des internautes et téléchargement 
							à partir de cette page.</p><br/>
							<p>Actuellement, 2 versions sont mises en téléchargement : une version stable et une version en développement intégrant une authentification par CAS (Central Authentication Service).</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
