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
		<title>Site vitrine de location d'appartements meublés</title>

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
		<!-------------------->
		<div id="header">
			<div id="haut_page">
				<div id="FB" class="fb-like" data-href="www.facebook.com/CedricGagnevinDeveloppeurWeb" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
				<h1 id="nom" onclick="window.location.href= '../index.php';">Cédric GAGNEVIN</h1>
				<img src="../Common/img/background-menu.png" class="background-menu" alt="Menu"/>
				<img src="../Common/img/ribbon.png" id="ribbon" alt="Etudiant en DUT Informatique"/>
				
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
		
				<h1 class="location_h1">Site de location d'appartements</h1>
					
				<p>Site vitrine présentant des appartements meublés en location. Malheureusement ce projet n'a pas 
				abouti mais il présente néanmoins 3 appartements.</p><br/>
				
								
				<h2 class="location_h2">Les fonctionnalités</h2>
				<ul>	
					<li>Présentation des caractéristiques de chaque bien</li>
					<li>Plusieurs photos pour chaque location</li>
					<li>Locatilisation sur Google Map</li>
				</ul>
				
				<h2 class="location_h2">Outils et langages utilisés</h2>
				<ul>
					<li>HTML 5</li>
					<li>Javascript</li>
					<li>CSS 3</li>
				</ul>
				<br/><br/>
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/Location/location_screen1.png" width="750" height="400" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/Location/location_screen2.png" width="750" height="400" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/Location/location_screen3.png" width="750" height="400" />
						</div>					
					</div>

					<div id="accordion">
						<div class="link-header">Page d'accueil du site</div>
						<div class="link-content">
							<p>Voici la page d'accueil du site. Les appartements disponibles sont présentés brièvement.</p>
						</div>
						<div class="link-header">Exemple d'appartement</div>
						<div class="link-content">
							<p>Voici un exemple d'appartement à louer. Plusieurs photos présentant le bien sont visionnables.</p>
						</div>
						<div class="link-header">Description d'un appartement</div>
						<div class="link-content">
							<p>L'appartement est décrit selon des rubriques regroupant certaines caractéristiques.</p>
							<p>On peut voir où est localisé le bien en location sur la carte GoogleMap.</p>
						</div>
					</div>
				</div>
				
			</div>	
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
