<?php
/**
* Affichages des statistiques.
*
* Date de création : 5 Mai 2012
* Date de dernière modification : 8 Mai 2012
*
* @copyright Cédric Gagnevin <cedric.gagnevin@laposte.net>
* @author Cédric Gagnevin <cedric.gagnevin@laposte.net>

/*********************************************************************************
******************************  PLAN     *****************************************
*********************************************************************************/

//    | -A- Initialisation générale
//    | -B- Déconnexion et redirection
//    | -C- Modification du commentaire
//    | -D- Initialisation des variables
//    | -E- HTML
//    | -E1- Google Analytics (traker js)
//    | -E2- JavaScript
//    | -E3- Affichage des paramètres de tri
//    | -E4- Affichage du tableau des statistiques
//    | -E5- Pagination
//    | -E6- Piwik


/*********************************************************************************
******************  -A- Initialisation générale **********************************
**********************************************************************************/
	session_start();
	include ("configuration/id_admin.php");
	include("configuration/connexion.php");
	$connect = mysql_connect($SERVER,$USER,$PASSWORD) or die ("Probleme connexion dans statistiques.php");
	mysql_select_db($DATABASE, $connect) or die ("Probleme selection base dans statistiques.php");
						

/*********************************************************************************
***************  -B- Déconnexion et redirection **********************************
**********************************************************************************/
	
	//Déconnexion
	if(isset($_GET[ 'logout' ]) && $_GET[ 'logout' ] == '1')
	{
		session_destroy();
		header('Location: index.php');
	}
	
	//La personne n'est pas connectée, elle est redirigée vers la page d'authentification
	if(!isset($_SESSION[ 'isConnected' ]) || $_SESSION[ 'isConnected' ] != 1 || $_SESSION[ 'login' ] != $login_admin)
	{
		header('Location: index.php');
		//echo "La redirection n'a pas marché...";
	}
	
/*********************************************************************************
*****************  -C- Modification du commentaire *******************************
**********************************************************************************/

if(isset($_POST[ 'com_to_modify' ]) && isset($_POST[ 'ip_associee' ]))
{
	$requete = "UPDATE t_statistiques SET commentaire = '".$_POST[ 'com_to_modify' ]."' WHERE ip_adress = '".$_POST[ 'ip_associee' ]."'";
	mysql_query($requete);
}

/*********************************************************************************
*****************  -D- Initialisation des variables ******************************
**********************************************************************************/

	$_SESSION[ 'statistiques'] = array();
	if(isset($_POST[ 'critere' ])) $_SESSION[ 'statistiques'][ 'tri_critere' ] = $_POST[ 'critere' ]; else  $_SESSION[ 'statistiques'][ 'tri_critere' ] = 'last_connection';
	if(isset($_POST[ 'sens' ])) $_SESSION[ 'statistiques'][ 'tri_sens' ] = $_POST[ 'sens' ]; else $_SESSION[ 'statistiques'][ 'tri_sens' ] = 'desc';
	if(isset($_POST[ 'nb_res_by_page' ])) $_SESSION[ 'statistiques'][ 'nb_res_by_page' ] = $_POST[ 'nb_res_by_page' ]; else $_SESSION[ 'statistiques'][ 'nb_res_by_page' ] = '20';

	$requete2 = "SELECT COUNT(*) AS total FROM t_statistiques ORDER BY ".$_SESSION[ 'statistiques'][ 'tri_critere' ]." ".$_SESSION[ 'statistiques'][ 'tri_sens' ];
	$ressource2 = mysql_query($requete2);
	$donnee2 = mysql_fetch_array($ressource2);
	$_SESSION[ 'statistiques'][ 'total' ] = $donnee2[ 'total' ];//Nombre total de lignes à afficher
						
	//Calcul du nombre de pages en fonction du nombre de résultats obtenus					
	$nb_pages = ceil($_SESSION[ 'statistiques'][ 'total' ]/$_SESSION[ 'statistiques'][ 'nb_res_by_page' ]);
	$_SESSION[ 'statistiques'][ 'page_actuelle' ] = '1';
	for($n=1 ; $n <= $nb_pages ; $n++)
	{
		if(isset($_POST[$n]))
			$_SESSION[ 'statistiques'][ 'page_actuelle' ] = $_POST[$n]; 
	}
	//Calcul du rang 1 pour le LIMIT
	$limit_entree1 = ($_SESSION[ 'statistiques'][ 'page_actuelle' ] -1)*$_SESSION[ 'statistiques'][ 'nb_res_by_page' ];

/*********************************************************************************
****************************  -E- HTML *******************************************
**********************************************************************************/	
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
		<title>Statistiques - Administration du site personnel de Cédric Gagnevin</title>
		
<!--********************************************************************************
********************  -E1- Google Analytics (traker js) ****************************
**********************************************************************************-->

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

<!--********************************************************************************
**************************  -E2- JavaScript ****************************************
**********************************************************************************-->
		
		<script type="text/javascript">
			var isEditable = true;
			//Rend le commentaire modifiable
			function setEditable(cellule,commentaire,adresse_ip)
			{
				isEditable = false;
				cellule.innerHTML = '<input type="text" name="com_to_modify" value="'+commentaire+'" /><input type="hidden" name="ip_associee" value="'+adresse_ip+'" />';
			}
			
			//Affiche une image dans le coin de la cellule pour indiquer que l'on peut modifier son contenu
			function showEditable(cellule)
			{
				
			}
		</script>
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
						<td onclick="window.location='statistiques.php';" class="onglet_courant item_menu">Mes statistiques</td>
					</tr>
				</table>
			</div>
		</menu>
		<div id="body">
			<div id="bloc_principal">
				<form name="form1" id="form1" action="statistiques.php" method="POST">
					
					<h1>Mes statistiques</h1>
					
					<?php
					
/***********************************************************************************
********************  -E3- Affichage des paramètres de tri *************************
***********************************************************************************/

						//Requete construite dynamiquement
						$requete = "SELECT * FROM t_statistiques ORDER BY ".$_SESSION[ 'statistiques'][ 'tri_critere' ]." ".$_SESSION[ 'statistiques'][ 'tri_sens' ]." LIMIT ".$limit_entree1.",".$_SESSION[ 'statistiques'][ 'nb_res_by_page' ];
						$ressource = mysql_query($requete);
						
						echo '<table id="param_tab"><tr>';
						
						//Critères de tri
						echo '<td>
								<span class="gras">Trier par</span> 
								<select name="critere" id="critere">';
								$isSelected = ($_SESSION[ 'statistiques'][ 'tri_critere' ] == 'commentaire') ? 'selected' : '';
								echo '	<option value="commentaire" onclick="document.getElementById(\'form1\').submit();" '.$isSelected.'>Commentaire</option>';
								$isSelected = ($_SESSION[ 'statistiques'][ 'tri_critere' ] == 'ip_adress') ? 'selected' : '';
								echo '	<option value="ip_adress" onclick="document.getElementById(\'form1\').submit();" '.$isSelected.'>Adresse IP</option>';
								$isSelected = ($_SESSION[ 'statistiques'][ 'tri_critere' ] == 'first_connection') ? 'selected' : '';
								echo '	<option value="first_connection" onclick="document.getElementById(\'form1\').submit();" '.$isSelected.'>1ère connexion</option>';
								$isSelected = ($_SESSION[ 'statistiques'][ 'tri_critere' ] == 'last_connection') ? 'selected' : '';
								echo '	<option value="last_connection" onclick="document.getElementById(\'form1\').submit();" '.$isSelected.'>Dernière connexion</option>';
								$isSelected = ($_SESSION[ 'statistiques'][ 'tri_critere' ] == 'nb_visites') ? 'selected' : '';
								echo '	<option value="nb_visites" onclick="document.getElementById(\'form1\').submit();" '.$isSelected.'>Nombre visites</option>';
								$isSelected = ($_SESSION[ 'statistiques'][ 'tri_critere' ] == 'isConnected') ? 'selected' : '';
								echo '	<option value="isConnected" onclick="document.getElementById(\'form1\').submit();" '.$isSelected.'>Connecté</option>
								</select>
								<br/>';
								
						//Sens de tri
						echo  '	<span class="gras">Sens</span>
								<select name="sens" id="sens">';
								$isSelected = ($_SESSION[ 'statistiques'][ 'tri_sens' ] == 'asc') ? 'selected' : '';
								echo '	<option value="asc" onclick="document.getElementById(\'form1\').submit();" '.$isSelected.'>Croissant</option>';
								$isSelected = ($_SESSION[ 'statistiques'][ 'tri_sens' ] == 'desc') ? 'selected' : '';
								echo '	<option value="desc" onclick="document.getElementById(\'form1\').submit();" '.$isSelected.'>Décroissant</option>
								</select>
									
							  </td>';
							  
						//Nombre de résultats par page	  
						echo '<td class="align_right">
								<input type="number" min=10 max=100 step=10 name="nb_res_by_page" id="nb_res_by_page" class="align_right" placeholder="nb/page" size="5" onKeyPress="if(event.keyCode == 13) document.getElementById(\'form1\').submit();" value="'.$_SESSION[ 'statistiques'][ 'nb_res_by_page' ].'" />';
						echo '</tr>
							  <tr><td colspan=2 class="nb_resultats">Affichage des '.$_SESSION[ 'statistiques'][ 'total' ].' résultats trouvés </td></tr>
							</table>';

/***********************************************************************************
********************  -E4- Affichage du tableau des statistiques *******************
***********************************************************************************/							
						
						echo '<table id="statistiques">';
						echo '<tr class="tab_header"><td>Commentaire</td><td>Adresse IP</td><td>1ère connexion</td><td>Dernière connexion</td><td>Visites</td><td>Connecté</td></tr>';
						$i=0;
						while($donnee = mysql_fetch_array($ressource))
						{
							if(date('d/m/Y', $donnee[ 'first_connection' ]) == date('d/m/Y'))
								$connexion1 =  'Aujourd\'hui &agrave; '.date('H:i:s', $donnee[ 'first_connection' ]);
							else $connexion1 = 'Le '.date('d/m/Y', $donnee[ 'first_connection' ]).' &agrave; '.date('H:i:s', $donnee[ 'first_connection' ]);
							
							if(date('d/m/Y', $donnee[ 'last_connection' ]) == date('d/m/Y'))
								$connexion2 = 'Aujourd\'hui &agrave; '.date('H:i:s', $donnee[ 'last_connection' ]);
							else $connexion2 = 'Le '.date('d/m/Y', $donnee[ 'last_connection' ]).' &agrave; '.date('H:i:s', $donnee[ 'last_connection' ]);
							
							$connected = ($donnee[ 'isConnected' ] == 1) ? '<img src="img/check.png" alt="Oui" width="22" />' : '<img src="img/croix.png" alt="Non" width="22" />';
							$header_line = ($i%2 == 0) ? '<tr class="dark_line">' : '<tr class="light_line">';
							$fin = (strpos($donnee[ 'commentaire' ],':') != false) ? strpos($donnee[ 'commentaire' ],':') : '25'; //Jusqu'au : s'il existe, sinon jusqu'au 25eme char
							$nom_commentaire = substr($donnee[ 'commentaire' ],0,$fin);
							echo $header_line.'<td title="'.$donnee[ 'commentaire' ].'" class="centrer" style="cursor: url(img/modifier.png), auto;" onclick="if(isEditable==true) setEditable(this,\''.$donnee[ 'commentaire' ].'\',\''.$donnee[ 'ip_adress' ].'\')">'.$nom_commentaire.'</td><td>'.$donnee[ 'ip_adress' ].'</td><td>'.$connexion1.'</td><td>'.$connexion2.'</td><td class="align_right">'.$donnee[ 'nb_visites' ].'</td><td class="centrer">'.$connected.'</td></tr>';
							$i++;
						}
						echo '</table>';

/***********************************************************************************
*************************  -E5- Pagination *****************************************
***********************************************************************************/
						
						echo '<table id="pagination"><tr>';
						
						for($i=1 ; $i <= $nb_pages ; $i++)
						{
							if($i > 15)
							{
								echo '<td class="gras">...</td>';
								break;
							}
							
							if($i == $_SESSION[ 'statistiques' ][ 'page_actuelle'])
								echo '<td><input type="submit" name="'.$i.'" id="'.$i.'" value="'.$i.'" class="page_courante"/></td>';
							else echo '<td><input type="submit" name="'.$i.'" id="'.$i.'" value="'.$i.'"/></td>';
						
						}
						echo '</tr></table>';
						
					?>
				
				</form>
			</div>
		</div>
		<footer>
			<table id="pied_page"><tr><td><a href="../index.php">Created by Cédric Gagnevin</a></td></tr></table>
		</footer>
		
<!--********************************************************************************
******************************  -E6- Piwik *****************************************
*********************************************************************************-->
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
