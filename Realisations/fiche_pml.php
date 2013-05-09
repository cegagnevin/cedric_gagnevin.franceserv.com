<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Fiche descriptive du logiciel open source gratuit : PhpMyLab. Refonte graphique, intallation automatique, intégration d'une authentification par CAS et correction de bugs du logiciel." >
		<meta name="Keywords" content="PhpMyLab, pml, PML, logiciel congés, logiciel missions, open source, missions, déplacements, planning, congés, php, refonte graphique, web design, intallation automatique, CAS, Central Authentication Service." >
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
				<h1 class="pml_h1">PhpMyLab : logiciel open source de congés, missions, plannings</h1>

				<p>Lors de mon stage au Laboratoire de Physique Corpusculaire de Clermont-Ferrand, j'ai été amené à 
				travailler sur le logiciel Open Source : <strong>PhpMyLab</strong>.
				</p>
				
				<h2 class="pml_h2">Présentation du logiciel</h2>
				<p>PhpMyLab est un logiciel Open Source intranet, modulaire, multi-utilisateurs, multi-rôles pour la
				gestion des missions/déplacements, des congés et des plannings du personnel d'une société.
				</p><br/>
				
				<p>Pour visualiser le site dédié à ce logiciel gratuit et obtenir davantage de renseignements,
				je vous invite à vous rendre sur <a href="http://phpmylab.in2p3.fr" target="_blank">http://phpmylab.in2p3.fr</a>.
				</p>
				
				<h2 class="pml_h2">La refonte graphique de PhpMyLab</h2>
				<table id="site_pml_avant">
					<caption>Avant</caption>
					<tr>
						<td><a href="ScreenShot/PhpMyLab/ancien_pml_screen1.png"><img src="ScreenShot/PhpMyLab/ancien_pml_screen1.png" alt="Capture d'écran 1" height="142"/></a></td>
						<td><a href="ScreenShot/PhpMyLab/ancien_pml_screen2.png"><img src="ScreenShot/PhpMyLab/ancien_pml_screen2.png" alt="Capture d'écran 2" height="142"/></a></td>
						<td><a href="ScreenShot/PhpMyLab/ancien_pml_screen3.png"><img src="ScreenShot/PhpMyLab/ancien_pml_screen3.png" alt="Capture d'écran 3" height="142"/></a></td>
					</tr>
				</table><br/><br/>
				
				<table id="site_pml_apres">
					<caption>Après</caption>
					<tr>
						<td><a href="ScreenShot/PhpMyLab/pml_screen2.png"><img src="ScreenShot/PhpMyLab/pml_screen2.png" alt="Capture d'écran 1" height="142"/></a></td>
						<td><a href="ScreenShot/PhpMyLab/pml_screen4.png"><img src="ScreenShot/PhpMyLab/pml_screen4.png" alt="Capture d'écran 2" height="142"/></a></td>
						<td><a href="ScreenShot/PhpMyLab/pml_screen5.png"><img src="ScreenShot/PhpMyLab/pml_screen5.png" alt="Capture d'écran 3" height="142"/></a></td>
					</tr>
				</table>
						
				<h2 class="pml_h2">L'installation automatique</h2>
				<p>Le paramétrage du logiciel se faisait manuellement en modifiant directement le code source
				des fichiers de configuration.</p>
				<p>Pour rendre son installation plus rapide, j'ai développé une procédure composée de 4 étapes
				permettant de générer automatiquement les fichiers de configuration nécessaires.</p><br/>
				
				<p>Pour voir comment se déroule cette installation automatique, je vous invite à vous rendre <a href="http://phpmylab.in2p3.fr/documentations/webmestre/installation.php#tabInstalAuto" target="_blank">ici</a>.</p>
				
				<h2 class="pml_h2">L'intégration de l'authentification par CAS</h2>
				<p>CAS (<i>Central Authentication Service</i>) est un système d'authentification unique utilisé sur le web.
				Cette technologie, développée par l'université de Yale, est très utilisée dans le monde académique et celui de la recherche.</p>
				<p>L'objectif de CAS réside dans le fait que l'utilisateur ne s'authenfie qu'une seule fois pour toutes les applications
				utilisant un même serveur CAS.</p><br/>
				
				<p>Pour plus de détails sur le fonctionnement de CAS, consulter les liens suivant :
					<ul>
						<li><a href="http://fr.wikipedia.org/wiki/Central_Authentication_Service" target="_blank">Wikipedia</a></li>
						<li><a href="http://www.esup-portail.org/consortium/espace/SSO_1B/cas/" target="_blank">Esup</a></li>
					</ul>
				</p>
				
				
				<h2 class="pml_h2">Outils et langages utilisés</h2>
				<ul>
					<li>PHP 4 & 5</li>
					<li>HTML 5 </li>
					<li>CSS 3</li>
					<li>Base de données MySQL</li>
					<li>Javascript</li>
					<li>JQuery</li>
					<li>Ajax</li>
				</ul>
				<br/><br/>
				<!-- Slider Slidorion -->
				<div id="slidorion">
					<div id="slider">
						<div id="slide1" class="slide">
							<img src="ScreenShot/PhpMyLab/pml_screen1.png" width="750" height="400" />
						</div>
						<div id="slide2" class="slide">
							<img src="ScreenShot/PhpMyLab/pml_screen2.png" width="750" />
						</div>
						<div id="slide3" class="slide">
							<img src="ScreenShot/PhpMyLab/pml_screen3.png" width="750" />
						</div>					
					</div>

					<div id="accordion">
						<div class="link-header">L'interface d'authentification</div>
						<div class="link-content">
							<p>Voici l'interface d'authentification à PhpMyLab. Il peut soit saisir ses identifiants du logiciel, soit s'authentifier par CAS.</p><br/>
							
							<p>L'utilisateur peut changer son mot de passe. Un email lui confirmant son nouveau mot de passe lui sera alors envoyé.</p>			
							<p>L'utilisateur peut aussi demander à recevoir son mot de passe par email en cas d'oubli.</p>
							<p>Enfin, si le visiteur ne possède pas de compte sur PhpMyLab il peut s'inscrire afin d'obtenir ses identifiants.</p>
						</div>
						<div class="link-header">Le module "MISSIONS"</div>
						<div class="link-content">
							<p>Le module "MISSIONS" est l'un des 3 modules disponibles sur PhpMyLab (avec "CONGES" et "PLANNING").</p><br/>
							<p> Une mission correspond à un déplacement effectué par un employé pour un service.</p><br/>
							<p>Il est possible d'effectuer une demande, une annulation, une validation ou une recherche de mission en fonction 
							du niveau d'accréditation de l'utilisateur.</p>
						</div>
						<div class="link-header">L'interface d'administration</div>
						<div class="link-content">
							<p>Cette interface n'est accessible que par les utilisateurs désignés comme étant "administrateurs" du logiciel.</p><br/>
							<p>L'administrateur a un droit de validation sur les congés. Il peut également ajouter, modifier ou supprimer des équipes/services ainsi que des utilisateurs du 
							logiciel.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
