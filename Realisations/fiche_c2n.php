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
		<title>Site dynamique d'un centre de loisirs</title>

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

				
				<h1 class="c2n_h1">Site dynamique pour un centre de loisirs</h1>
					
				<p>J'ai commencé à concevoir ce site dynamique pour répondre à un besoin mis en évidence par les parents d'enfants du centre.
				   En effet, le transfert de photos prises au centre de loisirs était compliqué sans plateforme de téléchargement. J'ai donc proposé de créer un site
				   pour que les parents puissent voir et télécharger les photos de leurs enfants</p><br/>
				   
				<p>Malheureusement, je n'ai pas pu venir à bout de ce projet car je n'ai pas eu l'accord nécessaire à sa mise en ligne.
				   J'ai tout de même réalisé une bonne partie de ce que j'avais prévu : </p>
				   
				<h2 class="c2n_h2">Les fonctionnalités</h2>
				<ul>
					<li>Identification pour les utilisateurs autorisés (pour protéger le droit à l'image)</li>
					<li>Mise en place d'un formulaire de contact</li>
					<li>Elaboration d'une bannière et d'une charte graphique répondant aux exigences thématiques du centre</li>
				</ul><br/>
				
				<p>Je regrette de n'avoir pu mettre en place un espace réservé aux animateurs pour visualiser les plannings 
				ainsi qu'un forum pour partager les idées et les activités en animateurs</p>

				
				<h2 class="c2n_h2">Outils et langages utilisés</h2>
				<ul>
					<li>HTML 5</li>
					<li>Javascript</li>
					<li>CSS 3</li>
					<li>GIMP pour le traitement d'images</li>
					<li>PHP 4</li>
				</ul>
				<br/><br/>
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/C2N/c2n_screen1.png" width="750" height="400" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/C2N/c2n_screen2.png" width="750" height="400" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/C2N/c2n_screen3.png" width="750" height="400" />
						</div>					
					</div>

					<div id="accordion">
						<div class="link-header">Page d'accueil du site</div>
						<div class="link-content">
							<p>Voici la page d'accueil du site. Un thème particulier a été conçu pour correspondre un thème des activités du centre ("Monstres et Compagnie").</p>
						</div>
						<div class="link-header">Formulaire de contact</div>
						<div class="link-content">
							<p>Formulaire permettant de joindre le/la directrice du centre ou le gestionaire du site afin qu'un compte utilisateur soit crée pour le demandeur.</p>
						</div>
						<div class="link-header">Téléchargement de photos</div>
						<div class="link-content">
							<p>L'utilisateur authentifié peut télécharger les photos prises au centre sous forme d'archive .zip.</p>
							<p>Les photos sont classées par vacances scolaires et un tutoriel est mis à disposition pour extraire les photos.</p>
						</div>
					</div>
				</div>
				
				
				
			</div>	
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
