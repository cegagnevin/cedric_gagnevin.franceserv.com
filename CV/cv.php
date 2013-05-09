<?php
/**
* Présentation de mon CV, mise à disposition en format .pdf
*
* Date de création : 30 Mars 2012
* Date de dernière modification : 7 Mai 2012
*
* @copyright Cédric Gagnevin <cedric.gagnevin@laposte.net>
* @author Cédric Gagnevin <cedric.gagnevin@laposte.net>

/*********************************************************************************
******************************  PLAN     *****************************************
*********************************************************************************/

//    | -A- Google Analytics
//    | -B- HTML

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Site personnel de Cédric GAGNEVIN, Etudiant en 2ème année de DUT Informatique à l'IUT des Cézeaux à Clermont-Ferrand. Présentation de mes réalisations de sites internet, Application ATOME, Site de locations d'appartements meublés sur Annecy, FormerStudent, Site de la Maison de Quartier de Croix-de-Neyrat, Blog avec flux RSS. Présentation de mon Curriculum Vitae" >
		<meta name="Keywords" content="Cédric GAGNEVIN, Site personnel, Site perso, DUT Informatique, Etudiant Clermont-Ferrand, Site internet Clermont-Ferrand, CV, Curriculum Vitae, Formation, Etudes, DUT, DUT Informatique, Cézeaux" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<title>Curriculum Vitae - CV de Cédric GAGNEVIN - Etudiant en DUT Informatique aux Cézeaux à Clermont-Ferrand.</title>

<!--*****************************************************************************
*************************  -A- Google Analytics *********************************
*******************************************************************************-->

		<!-- google analytics (début) -->
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
	
<!--*****************************************************************************
*******************************  -B- HTML ***************************************
*******************************************************************************-->

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
							<td>
								<a href="../Realisations/realisations.php">
									Portfolio
								</a>
							</td>
							<td class="ongletCourant">
								Mon CV
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
			
				<div id="PDF">
					<a href="CV_Cedric_GAGNEVIN.pdf" title="format .pdf">
						<img src="../Common/img/pdf.png" alt="Télécharger le CV de Cédric Gagnevin en PDF" />
						<strong>Curriculum Vitae</strong>
					</a>
				</div>
			
				<h1 id="titre_cv">
					Etudiant en informatique à l’Institut Universitaire de Technologie <br/>
					de Clermont-Ferrand
				</h1>
				
				<dl>
					<dt>Etudes</dt>
					
					<dd>
						<span class="grasSouligne">2010-2012 :</span>
						Diplôme universitaire de technologie (DUT) en informatique en cours à l’IUT de Clermont-Ferrand.
					</dd>
					
					<dd>
						<span class="grasSouligne">Juin 2010 :</span>
						Obtention du baccalauréat scientifique spécialité Physique/Chimie option badminton au lycée Ambroise Brugière de Clermont-Ferrand.
					</dd>
				</dl>
					
				<dl>
					<dt>Compétences informatiques</dt>
					
					<dd>
						<ul>
							<li>
								<strong>Langages informatiques :</strong> C, C++, Java, PHP, JavaScript, CSS, Assembleur (80251), SQL, C#.
							</li>
							<li>
								<strong>Méthodologies :</strong> Merise, UML, SADT.
							</li>
							<li>
								<strong>Outils et ateliers de génie logiciel :</strong> Oracle/Developer 2000, Windev 16, Maple, Eclipse, Visual Studio, suite Open Office et pack Office Windows.
							</li>
							<li>
								<strong>SGBD :</strong> Oracle, MySQL.
							</li>
							<li>
								<strong>Systèmes d’exploitation :</strong> Linux, Windows.
							</li>
							<li>
								<strong>Logiciel de graphisme :</strong> GIMP.
							</li>
						</ul>
					</dd>
				</dl>

				<dl>
					<dt>Expériences professionnelles</dt>
					
					<dd>
						<span class="grasSouligne">Avril à Juin 2012 (10 semaines):</span> Stagiaire au Laboratoire de Physique Corpusculaire au service Informatique. 
						<!--Refonte graphique et ajout de fonctionnalités au logiciel phpMyLab qui permet la gestion des congés, missions et absences du personnel.-->
					</dd>
					
					<dd>
						<span class="grasSouligne">Octobre 2011 (vacances scolaires) :</span> Directeur adjoint et assistant sanitaire à la Maison de Quartier de     Croix-de-Neyrat (3/6ans).
					</dd>
					
					<dd>
						<span class="grasSouligne">De Avril 2010 à Aout 2011 (étés et vacances scolaires):</span> Animateur à la Maison de Quartier de Croix-de-Neyrat avec des enfants de 3 à 6 ans.
					</dd>
					
					<dd>
						<span class="grasSouligne">2007- 2011 (Etés) :</span> Récolte de tabacs et castration de maïs.
					</dd>
				</dl>
					
				<dl>
					<dt>Langues</dt>
					<dd>
						<span class="grasSouligne">Anglais :</span> niveau professionnel.
					</dd>
					
					<dd>
						<span class="grasSouligne">Espagnol :</span> niveau professionnel.
					</dd>
				</dl>
					
				<dl>
					<dt>Divers</dt>
					
					<dd>
						<ul>
							<li>
								<strong>Prévention & Secours Civiques niveau 1</strong> obtenue en 2011.
							</li>
							<li>
								<strong>Brevet d’Aptitude aux Fonctions d’Animateur</strong> obtenu  en 2010.
							</li>
							<li>
								<strong>Certificat Informatique et Internet (C2I)</strong> obtenu en 2011.
							</li>
							<li>
								Titulaire du <strong>permis B</strong> et possède un véhicule personnel.
							</li>
							<li>
								Je donne des <strong>cours d’informatique</strong> à des particuliers.
							</li>
							<li>
								Je suis passionné par la <strong>création de sites web</strong> (HTML, CSS, PHP, JavaScript, AJAX, MySQL).
							</li>
							<li>
								<strong>Sports :</strong> Tennis et badminton (compétition), boxe thaïlandaise.
							</li>
						</ul>
					</dd>
				</dl>
				
			</div>
		</div>
		<!-- Pied de page (inclut le tracker Piwik)-->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>
