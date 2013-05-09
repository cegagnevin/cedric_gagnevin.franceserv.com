<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Site personnel de Cédric GAGNEVIN, Etudiant en Licence développement d'applications Intranet/Internet à l'IUT des Cézeaux à Clermont-Ferrand. Présentation de mes réalisations de sites internet, Application ATOME, Site de locations d'appartements meublés sur Annecy, FormerStudent, Site de la Maison de Quartier de Croix-de-Neyrat, Blog avec flux RSS. Présentation de mon Curriculum Vitae" >
		<meta name="Keywords" content="Cédric GAGNEVIN, Site personnel, Site perso, DUT Informatique, Licence professionnelle, Licence développement d'applications Intranet/Internet, Etudiant Clermont-Ferrand, Site internet Clermont-Ferrand" >
		<link rel="shortcut icon" href="Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="Common/css/slider.css" >
		<link rel="stylesheet" href="Common/css/background.css" >
		<link rel="stylesheet" href="Common/css/global.css" >
		<link rel="alternate" type="application/rss+xml" href="http://www.cedric_gagnevin.franceserv.com/flux_rss.xml" />
		<title>Bienvenue sur le site perso de Cédric Gagnevin - Etudiant en Licence développement d'applications Intranet/Internet aux Cézeaux à Clermont-Ferrand</title>
		
		<script src="Common/js/jquery.js" type="text/javascript"></script>
		<script src="Common/js/slides.min.jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				$('#slides').slides({
					preload: true,
					preloadImage: 'Common/img/loading.gif',
					play: 5000,
					pause: 2500,
					hoverPause: true,
					animationStart: function(current){
						$('.caption').animate({
							bottom:-35
						},100);
						if (window.console && console.log) {
							// example return of current slide number
							console.log('animationStart on slide: ', current);
						};
					},
					animationComplete: function(current){
						$('.caption').animate({
							bottom:0
						},200);
						if (window.console && console.log) {
							// example return of current slide number
							console.log('animationComplete on slide: ', current);
						};
					},
					slidesLoaded: function() {
						$('.caption').animate({
							bottom:0
						},200);
					}
				});
			});
		</script>
		
		<!-- google annalytics (début) -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-30197543-1']);
		  _gaq.push(['_setDomainName', 'cedric_gagnevin.franceserv.fr']);
		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		<!-- google annalytics (fin) -->
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
				<h1 id="nom" onclick="window.location.href= 'index.php';">Cédric GAGNEVIN</h1>
				<img src="Common/img/background-menu.png" class="background-menu" width=1120 height=50 alt="Menu"/>
				<img src="Common/img/ribbon.png" id="ribbon" alt="Développeur Web"/>	
				<a href="flux_rss.xml"><img src="Common/img/rss.png" alt="Flux RSS" width=40 id="RSS" title="Suivre mes réalisations !" /></a>
				
				<div id="menu">
					<table>
						<tr>
							<td class="ongletCourant">
								Accueil
							</td>
							<td>
								<a href="Realisations/realisations.php">
									Portfolio
								</a>
							</td>
							<td>
								<a href="CV/cv.php">
									Mon CV
								</a>
							</td>
							<td>
								<a href="Contact/contact.php">
									Me contacter
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		<div id="body"  style="margin-bottom:20px;">
			<div id="bloc_principal">
				<div id="container">
					<div id="example">
						<div id="slides">
							<div class="slides_container">
								<div class="slide">
									<a href="Realisations/fiche_pml_site.php" title="Site web de PhpMyLab" ><img src="Common/img/pml_site.png" width="600" height="357" alt="Site web de PhpMyLab" /></a>
									<div class="caption">
										<p>Site de PhpMyLab - Téléchargement, Démonstration...</p>
									</div>
								</div>
								<div class="slide">
									<a href="Realisations/fiche_pml.php" title="PhpMyLab" ><img src="Common/img/pml.png" width="600" height="357" alt="PhpMyLab" /></a>
									<div class="caption">
										<p>PhpMyLab - Logiciel open source, congés, missions, plannings</p>
									</div>
								</div>
								<div class="slide">
									<a href="Realisations/fiche_siteperso.php" title="Site personnel de Cédric GAGNEVIN" ><img src="Common/img/siteperso.png" width="600" height="357" alt="Site personnel de Cédric GAGNEVIN" /></a>
									<div class="caption">
										<p>Site personnel de Cédric GAGNEVIN</p>
									</div>
								</div>
								<div class="slide">
									<a href="Realisations/fiche_siterss.php" title="Site RSS"><img src="Common/img/siterss.png" width="600" alt="Site de flux RSS" /></a>
									<div class="caption">
										<p>Site de visualisation de flux RSS </p>
									</div>
								</div>		
								<div class="slide">
									<a href="Realisations/fiche_atome.php" title="Application Atome" ><img src="Common/img/Atome.png" width="600" height="357" alt="Application Atome" /></a>
									<div class="caption">
										<p>Application Atome</p>
									</div>
								</div>
								<div class="slide">
									<a href="Realisations/fiche_c2n.php" title="ALSH 3/6ans Croix-de-Neyrat" ><img src="Common/img/C2N.png" width="600" height="357" alt="ALSH 3/6ans Croix-de-Neyrat" /></a>
									<div class="caption">
										<p>Centre de loisirs de la Maison de quartier de Croix-de-Neyrat</p>
									</div>
								</div>
								<div class="slide">
									<a href="Realisations/fiche_location.php" title="Location d'appartements meublés sur Annecy" ><img src="Common/img/location_annecy.png" width="600" height="357" alt="Location d'appartements meublés sur Annecy" /></a>
									<div class="caption">
										<p>Site de location d'appartements sur Annecy</p>
									</div>
								</div>
								<div class="slide">
									<a href="Realisations/fiche_formerstudent.php" title="FormerStudent"><img src="Common/img/former_student.png" width="600" height="357" alt="FormerStudent" /></a>
									<div class="caption">
										<p>FormerStudent - Réseau social d'anciens étudiants </p>
									</div>
								</div>
								<div class="slide">
									<a href="Realisations/fiche_blog.php" title="Blog"><img src="Common/img/blog.png" width="600" height="357" alt="Blog" /></a>
									<div class="caption">
										<p>Blog - Publication d'articles </p>
									</div>
								</div>							
							</div>
							<a href="#" class="prev"><img src="Common/img/arrow-prev.png" title="Réalisation précédente" width="24" height="43" alt="Arrow Prev" /></a>
							<a href="#" class="next"><img src="Common/img/arrow-next.png" title="Réalisation suivante" width="24" height="43" alt="Arrow Next" /></a>
						</div>
						<img src="Common/img/example-frame.png" width="769" height="428" alt="Example Frame" id="frame" />
					</div>
				</div>
				<table id="activites">
					<tr>
						<td>
							<img src="Common/img/creation.png" alt="Création de sites internet" /><br/>
							<p>Vous voulez créer un site web pour présenter votre activité professionnelle ou refondre un site existant ?</p><br/>
							<!--<a href="prestations.php" class="more">En savoir plus ...</a><br/>-->
						</td>
						<td>
							<img src="Common/img/maintenance.png" alt="Maintenance" /><br/>
							<p>Besoin d'un webmaster pour administrer le contenu de votre site web déjà en ligne ou trouver une solution à votre problème dans le domaine d'internet ?<p>
							<!--<a href="services.php" class="more">En savoir plus ...</a><br/>-->
						</td>
						<td>
							<img src="Common/img/formation.png" alt="Formation" /><br/>
							<p>Apprendre à se servir d'internet, approfondir ses connaissances dans l'usage de Word/Excel ou même apprendre 
							un langage de développement?</p><br/>
							<!--<a href="formations.php" class="more">En savoir plus ...</a><br/>-->
						</td>
					</tr>
				</table>
				
				<div id="img_contact"><a href="Contact/contact.php"><img src="Common/img/contact2.png" alt="Contactez-moi!" width=465 height=242 /></a></div>
				
			</div>
		</div>
		<!-- Pied de page -->
		<div id="footer">
			<?php 
				include_once("Administration/configuration/connexion.php");
				include_once("Administration/stats.php"); 
			?>
			<div id="pied_page">
					<table>
						<tr>
							<td>
								<a href="Contact/contact.php">
									Contact
								</a>
							</td>
							<td>
								<a href="Common/plan.php">
									Plan du site
								</a>
							</td>
						</tr>
					</table>
					
					<p id="signature">Created by Cédric Gagnevin</p>
					<p>
						<a href="http://validator.w3.org/check?uri=referer">
							<img src="Common/img/validhtml5.png" alt="Valid HTML 5" height="31" width="88">
						</a>
					</p>
			</div>
		</div>
		
		<!--<script  type="text/javascript" src="js/global.js"></script>-->
		
		<!-- Piwik -->
		<script type="text/javascript">
		var pkBaseURL = (("https:" == document.location.protocol) ? "https://cedric_gagnevin.franceserv.fr/piwik/" : "http://cedric_gagnevin.franceserv.fr/piwik/");
		document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script><script type="text/javascript">
		try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
		} catch( err ) {}
		</script><noscript><p><img src="http://cedric_gagnevin.franceserv.fr/piwik/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
		<!-- End Piwik Tracking Code -->
	</body>
</html>
