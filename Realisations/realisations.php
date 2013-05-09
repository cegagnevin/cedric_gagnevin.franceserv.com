<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Portfolio de Cédric Gagnevin - Présentation de mes réalisations de sites internet, Application ATOME, Site de locations d'appartements, FormerStudent, Site de centre de loisirs, Blog avec flux RSS." >
		<meta name="Keywords" content="Cédric GAGNEVIN,DUT Informatique, Etudiant Clermont-Ferrand, Site internet Clermont-Ferrand, Cézeaux, Site internet, Site web, Application Web, Clermont" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>Portfolio de Cédric Gagnevin - Réalisations, projets, sites internet que j'ai pu mener.</title>
	
		<!-- FancyBox : lightviewer -->
		<script src="../Common/js/jquery.js"></script><!-- Jquery 1.7.2 -->	
		<script type="text/javascript" src="../Common/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<link rel="stylesheet" href="../Common/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript">
			$(document).ready(function() {
				$("a.grouped_elements").fancybox();
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
				<div id="portfolio">
					<h1><img src="../Common/img/portfolio.png" height=80 />Portfolio</h1>
					
					<table id="vignettes">
						<tr>
							<td class="gauche">
								<div class="inventaire_article article">
									<h2>Module INVENTAIRE<sup>New</sup></h2>
									<div>
										<h3>Module répertoriant tout le matériel disponible pour pouvoir le partager dans une société.</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group11" href="ScreenShot/Module_Inventaire/inventaire_screen1.png"><img src="ScreenShot/Module_Inventaire/inventaire_screen1_min.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group11" href="ScreenShot/Module_Inventaire/inventaire_screen2.png"><img src="ScreenShot/Module_Inventaire/inventaire_screen2_min.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group11" href="ScreenShot/Module_Inventaire/inventaire_screen3.png"><img src="ScreenShot/Module_Inventaire/inventaire_screen3_min.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_inventaire.php" class="voir_fiche inventaire_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
							<td class="droite">
								<div class="expeditions_article article">
									<h2>Module EXPEDITIONS<sup>New</sup></h2>
									<div>
										<h3>Module permettant de gérer l'envoi des colis, envoi d'emails, tracking...</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group10" href="ScreenShot/Module_Expeditions/expeditions_screen1.png"><img src="ScreenShot/Module_Expeditions/expeditions_screen1.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group10" href="ScreenShot/Module_Expeditions/expeditions_screen2.png"><img src="ScreenShot/Module_Expeditions/expeditions_screen2.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group10" href="ScreenShot/Module_Expeditions/expeditions_screen3.png"><img src="ScreenShot/Module_Expeditions/expeditions_screen3.png" width=100 height="60" /></a>
												</td>
											</tr>
										</table>
										<p><a href="fiche_expeditions.php" class="voir_fiche expeditions_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="gauche">
								<div class="pml_article article">
									<h2>PhpMyLab</h2>
									<div>
										<h3>Logiciel de gestion des congés, missions et plannings du personnel d'une société...</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group9" href="ScreenShot/PhpMyLab/pml_screen1.png"><img src="ScreenShot/PhpMyLab/pml_screen1_min.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group9" href="ScreenShot/PhpMyLab/pml_screen2.png"><img src="ScreenShot/PhpMyLab/pml_screen2_min.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group9" href="ScreenShot/PhpMyLab/pml_screen3.png"><img src="ScreenShot/PhpMyLab/pml_screen3_min.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_pml.php" class="voir_fiche pml_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
							<td class="droite">
								<div class="pml_site_article article">
									<h2>Site web de PhpMyLab</h2>
									<div>
										<h3>Site vitrine du logiciel open source PhpMyLab. Téléchargement, essai du logiciel...</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group8" href="ScreenShot/Site_PhpMyLab/site_pml_screen1.png"><img src="ScreenShot/Site_PhpMyLab/site_pml_screen1.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group8" href="ScreenShot/Site_PhpMyLab/site_pml_screen2.png"><img src="ScreenShot/Site_PhpMyLab/site_pml_screen2.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group8" href="ScreenShot/Site_PhpMyLab/site_pml_screen3.png"><img src="ScreenShot/Site_PhpMyLab/site_pml_screen3.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_pml_site.php" class="voir_fiche pml_site_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="gauche">
								<div class="siteperso_article article">
									<h2>Mon site perso</h2>
									<div>
										<h3>Site personnel de Cédric GAGNEVIN, développeur web à Clermont-Ferrand.</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group7" href="ScreenShot/SitePerso/siteperso_screen1.png"><img src="ScreenShot/SitePerso/siteperso_screen1_min.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group7" href="ScreenShot/SitePerso/siteperso_screen2.png"><img src="ScreenShot/SitePerso/siteperso_screen2_min.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group7" href="ScreenShot/SitePerso/siteperso_screen3.png"><img src="ScreenShot/SitePerso/siteperso_screen3_min.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_siteperso.php" class="voir_fiche siteperso_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
							<td class="droite">
								<div class="atome_article article">
									<h2>Projet Atome</h2>
									<div>
										<h3>Application réalisée lors d'un projet tutoré en fin de 2ème année de DUT informatique.</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group6" href="ScreenShot/Atome/atome_screen1.png"><img src="ScreenShot/Atome/atome_screen1_min.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group6" href="ScreenShot/Atome/atome_screen2.png"><img src="ScreenShot/Atome/atome_screen2_min.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group6" href="ScreenShot/Atome/atome_screen3.png"><img src="ScreenShot/Atome/atome_screen3_min.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_atome.php" class="voir_fiche atome_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="gauche">
								<div class="blog_article article">
									<h2>Site de publication de news</h2>
									<div>
										<h3>Moteur de blog permettant à des auteurs d'écrire et publier des news.</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group5" href="ScreenShot/Blog/blog_screen1.png"><img src="ScreenShot/Blog/blog_screen1.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group5" href="ScreenShot/Blog/blog_screen2.png"><img src="ScreenShot/Blog/blog_screen2.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group5" href="ScreenShot/Blog/blog_screen3.png"><img src="ScreenShot/Blog/blog_screen3.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_blog.php" class="voir_fiche blog_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
							<td class="droite">
								<div class="siterss_article article">
									<h2>Site de gestion de flux RSS</h2>
									<div>
										<h3>Site réalisé en JAVA EE gérant des flux RSS. Visualisation, ajout, suppression de flux...</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group4" href="ScreenShot/SiteRSS/siterss_screen1.png"><img src="ScreenShot/SiteRSS/siterss_screen1.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group4" href="ScreenShot/SiteRSS/siterss_screen2.png"><img src="ScreenShot/SiteRSS/siterss_screen2.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group4" href="ScreenShot/SiteRSS/siterss_screen3.png"><img src="ScreenShot/SiteRSS/siterss_screen3.png" width=100 height="60" /></a>
												</td>
											</tr>
										</table>
										<p><a href="fiche_siterss.php" class="voir_fiche siterss_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="gauche">
								<div class="location_article article">
									<h2>Site de location d'appartements meublés</h2>
									<div>
										<h3>Site internet vitrine pour présenter des appartements meublés disponibles en location.</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group3" href="ScreenShot/Location/location_screen1.png"><img src="ScreenShot/Location/location_screen1.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group3" href="ScreenShot/Location/location_screen2.png"><img src="ScreenShot/Location/location_screen2.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group3" href="ScreenShot/Location/location_screen3.png"><img src="ScreenShot/Location/location_screen3.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_location.php" class="voir_fiche location_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
							<td class="droite">
								<div class="c2n_article article">
									<h2>Site dynamique d'un centre de loisirs</h2>
									<div>
										<h3>Site avec accès différents pour les visiteurs, les parents d'enfant et les animateurs.</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group2" href="ScreenShot/C2N/c2n_screen1.png"><img src="ScreenShot/C2N/c2n_screen1.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group2" href="ScreenShot/C2N/c2n_screen2.png"><img src="ScreenShot/C2N/c2n_screen2.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group2" href="ScreenShot/C2N/c2n_screen3.png"><img src="ScreenShot/C2N/c2n_screen3.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_c2n.php" class="voir_fiche c2n_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="gauche">
								<div class="former_article article">
									<h2>FormerStudent</h2>
									<div>
										<h3>Réseau social entre étudiants, partage de ses différentes expériences, conseils...</h3>
										<br/>
										<strong>Aperçus</strong>
										<table class="apercus">
											<tr>
												<td>
													<a class="grouped_elements" rel="group1" href="ScreenShot/FormerStudent/formerstudent_screen1.png"><img src="ScreenShot/FormerStudent/formerstudent_screen1.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group1" href="ScreenShot/FormerStudent/formerstudent_screen2.png"><img src="ScreenShot/FormerStudent/formerstudent_screen2.png" width=100 height="60" /></a>
												</td>
												<td>
													<a class="grouped_elements" rel="group1" href="ScreenShot/FormerStudent/formerstudent_screen3.png"><img src="ScreenShot/FormerStudent/formerstudent_screen3.png" width=100 height="60" /></a>
												</td>
											
											</tr>
										</table>
										<p><a href="fiche_formerstudent.php" class="voir_fiche former_lien">Voir la fiche</p><br/>
									</div>
								</div>
							</td>
							<td class="droite"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
