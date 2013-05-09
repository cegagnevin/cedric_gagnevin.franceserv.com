<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Fiche descriptive du module EXPEDITIONS du logiciel PhpMyLab. Gestion de l'envoi de colis, flux d'emails vers les gestionnaires, suivi des colis par numéro de tracking." >
		<meta name="Keywords" content="expéditions, envoi, colis, tracking, tracker" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>Module EXPEDITIONS - Gestion de l'envoi de colis, flux d'emails vers les gestionnaires, suivi des colis par numéro de tracking.</title>

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
		
				<h1 class="expeditions_h1">Module EXPEDITIONS</h1>
					
				<p>Le module EXPEDITIONS du logiciel PhpMyLab permet d'effectuer des demandes d'envoi de colis auprès des gestionnaires des expéditions.<p>
				
				<h2 class="expeditions_h2">Fonctionnalités</h2>
				<ul>
					<li>Les demandes d'expéditions sont faites par les utilisateurs</li>
					<li>Les gestionnaires valides les demandes en les complétant avec le numéro de tracker</li>
					<li>Les gestionnaires peuvent ajouter une pièce jointe telle que des bordereaux d'expéditions</li>
				</ul>
				
				<h2 class="expeditions_h2">Outils et langages utilisés</h2>
				<ul>
					<li>PHP 4</li>
					<li>Base de données MySQL</li>
					<li>Javascript et JQuery</li>
					<li>HTML 5</li>
					<li>CSS 3 pour le design</li>
				</ul><br/><br/>
				
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/Module_Expeditions/expeditions_screen1.png" width="750" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/Module_Expeditions/expeditions_screen2.png" width="750" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/Module_Expeditions/expeditions_screen3.png" width="750" />
						</div>
					</div>

					<div id="accordion">
						<div class="link-header">Demande d'expédition</div>
						<div class="link-content">
							<p>Les utilisateurs peuvent faire une demande d'expédition via ce formulaire. Cette dernière sera transmise aux gestionnaires pour être complétée et validée.</p>
						</div>
						<div class="link-header">Popup pour les gestionnaires</div>
						<div class="link-content">
							<p>Lorsque les gestionnaires se connectent à ce module, un popup listant les demandes d'expédition en attente apparaît.</p>
						</div>
						<div class="link-header">Résultats de la recherche</div>
						<div class="link-content">
							<p>Tous les utilisateurs peuvent effectuer une recherche dans la base des demandes par critères (nom, prénom, numéro de demande).</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
