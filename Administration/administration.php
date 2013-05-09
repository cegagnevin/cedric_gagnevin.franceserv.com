<?php
	session_start();
	include ("configuration/id_admin.php");

	//La personne n'est pas connectée, elle est redirigée vers la page d'authentification
	if(!isset($_SESSION[ 'isConnected' ]) || $_SESSION[ 'isConnected' ] != 1 || $_SESSION[ 'login' ] != $login_admin)
	{
		header('Location: index.php');
		//echo "La redirection n'a pas marché...";
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="css/background.css" >
		<link rel="stylesheet" href="css/administration.css" >
		<title>Administration de mon site perso - Cédric Gagnevin</title>
		
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
		<header>
			
		</header>
		<menu>
			<div id="menu_admin">	
				<table>
					<tr>
						<td>
							<img src="img/home.png" alt="Home" height=22 onclick="window.location='../index.php';" title="Aller à la page d'accueil | Public"/>
							<img src="img/logout.png" alt="Logout" height=22 onclick="window.location='statistiques.php?logout=1';" title="Se déconnecter"/>
						</td>
						<td onclick="window.location='../piwik/index.php';" class="item_menu">Piwik</td>
						<td onclick="window.location='https://www.google.com/analytics/web/?pli=1#report/visitors-overview/a30197543w56592522p57680986/';" class="item_menu">Google Analytics</td>
						<td onclick="window.location='statistiques.php';" class="item_menu">Mes statistiques</td>
					</tr>
				</table>
			</div>
		</menu>
		<div id="body">
			<div id="bloc_principal">
				
				<h1>Administration du site personnel de Cédric Gagnevin</h1>
				
				<table id="choix_administration">
					<tr>
						<td>
							<a href="../piwik/index.php">
								<img src="img/piwik.png" alt="Piwik" /><br/>
								<p>Accèder aux statistiques fournies par Piwik :</p>
								<ul>
									<li>Visiteurs du site Web</li>
									<li>Moteurs de recherche et mots clés utilisés</li>
									<li>Les pages les plus populaires ...</li>
								</ul>
							</a>
						</td>
						<td>
							<a href="https://www.google.com/analytics/web/?pli=1#report/visitors-overview/a30197543w56592522p57680986/">
								<img src="img/google_analytics.png" alt="Google Analytics" /><br/>
								<p>Visualiser l'analyse statistique proposée par Google Analytics.</p><br/>
							</a>
						</td>
						<td>
							<a href="statistiques.php">
								<img src="img/statistiques.png" alt="Mes statistiques" /><br/>
								<p><ul>
										<li>Voir les adresses IP qui ont accèdé au site</li>
										<li>Voir celles qui sont actuellement connectées</li>
										<li>Voir le nombre de visites total</li>
									</ul>
								<p>
							</a>
						</td>
					</tr>
				</table>

			</div>
		</div>
		<footer>
			<table id="pied_page"><tr><td><a href="../index.php">Created by Cédric Gagnevin</a></td></tr></table>
		</footer>
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
