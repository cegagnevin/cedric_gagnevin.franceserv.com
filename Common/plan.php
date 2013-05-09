<?php
/**
* Plan du site.
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
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="css/global.css" >
		<link rel="stylesheet" href="css/plan.css" >
		<title>Plan du site de Cédric Gagnevin - Etudiant en DUT Informatique aux Cézeaux à Clermont-Ferrand</title>		  
	
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
		<!-- google analytics (fin) -->	
	</head>
	
<!--*****************************************************************************
*********************************  -B- HTML *************************************
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
				<img src="img/background-menu.png" class="background-menu" alt="Menu"/>
				<img src="img/ribbon.png" id="ribbon" alt="Etudiant en DUT Informatique"/>
				<a href="../flux_rss.xml"><img src="img/rss.png" alt="Flux RSS" width=40 id="RSS" title="Suivre mes réalisations !" /></a>
				
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
				<h1>Plan du site</h1>
				<div id="plan">
					<a href="../index.php">Accueil</a><br/>
					<a href="../Realisations/realisations.php">Portfolio (9)</a><br/>
					<section>
						<ul>
							<li><a href="../Realisations/fiche_pml.php">PhpMyLab</a> <sup>New</sup></li>
							<li><a href="../Realisations/fiche_pml_site.php">Site web de PhpMyLab</a> <sup>New</sup></li>
							<li><a href="../Realisations/fiche_siteperso.php">Mon site perso</a><sup>New</sup></li>
							<li><a href="../Realisations/fiche_atome.php">Atome</a></li>
							<li><a href="../Realisations/fiche_blog.php">Blog</a></li>
							<li><a href="../Realisations/fiche_siterss.php">Site de gestion de flux RSS</a> <sup>New</sup></li>
							<li><a href="../Realisations/fiche_location.php">Location d'appartements meublés</a></li>
							<li><a href="../Realisations/fiche_c2n.php">Centre de loisirs</a></li>
							<li><a href="../Realisations/fiche_formerstudent.php">FormerStudent</a></li>
						</ul>
					</section>
					<a href="../CV/cv.php">Curriculum Vitae</a><br/>
					<a href="../Contact/contact.php">Me contacter</a><br/>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>



