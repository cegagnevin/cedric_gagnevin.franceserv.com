<?php
/**
* Formulaire de prise de contact.
*
* Date de création : 30 Mars 2012
* Date de dernière modification : 7 Mai 2012
*
* @copyright Cédric Gagnevin <cedric.gagnevin@laposte.net>
* @author Cédric Gagnevin <cedric.gagnevin@laposte.net>

/*********************************************************************************
******************************  PLAN     *****************************************
*********************************************************************************/

//    | -A- Tiny MCE
//    | -B- Javascript
//    | -C- Google Analytics
//    | -D- HTML


	// Traitement et envoi du message 
 	session_start();
	$message = ''; $sent = 0;
	
	if(EMPTY($_POST['nom_emetteur']) && EMPTY($_POST['email']) && EMPTY($_POST['sujet']) && EMPTY($_POST['message']) && EMPTY($_POST['code']))
	{

	}
	else
	{
		if(!EMPTY($_POST['nom_emetteur']))
		{
			if(!EMPTY($_POST['email'])) 
			{
				if(!EMPTY($_POST['sujet']))
				{
					if(!EMPTY($_POST['message']))
					{
						if(!EMPTY($_POST['message']))
						{
						   if (!EMPTY($_POST['code']))
						   {
							    if (strtolower($_POST['code']) == $_SESSION['securecode']) 
							    {
									//Traitement à faire lorsque tout est OK
									unset($_SESSION['securecode']);
									
									//On recupere l'adresse ip et le nom associé
									include("../Administration/configuration/connexion.php");
									$connect = mysql_connect($SERVER,$USER,$PASSWORD) or die ("Probleme connexion dans statistiques.php");
									mysql_select_db($DATABASE, $connect) or die ("Probleme selection base dans statistiques.php");
									mysql_query("UPDATE t_statistiques SET commentaire = '".mysql_real_escape_string($_POST['nom_emetteur'])." : ".mysql_real_escape_string($_POST['email'])."' WHERE ip_adress = '".$_SERVER['REMOTE_ADDR']."' AND commentaire = '' ") or die('Erreur update email');
									mysql_close($connect);

									include("envoi.php");
							    }
							    else 
							    {  
									$message = '<p>Le code de sécurité est incorrect!<p>';
							    }
							}
						}
						else $message = '<p>Veuillez saisir le code de sécurité (captcha)</p>';
					}
					else $message = '<p>Veuillez écrire un message</p>';
				}
				else $message = '<p>Veuillez renseigner le sujet du message</p>';
			}
			else $message = '<p>Veuillez renseigner votre email</p>';
		}
		else $message = '<p>Veuillez renseigner votre nom</p>';
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<meta name="Description" content="Contacter Cédric GAGNEVIN, étudiant en 2ème année de DUT Informatique à l'IUT des Cézeaux à Clermont-Ferrand." >
		<meta name="Keywords" content="cédric gagnevin, site personnel, site perso, dut informatique, etudiant clermont-ferrand, site internet clermont-ferrand, contact, email, formulaire" >
		<link rel="shortcut icon" href="../Common/img/favicon.ico" type="image/x-icon" > 
		<link rel="stylesheet" href="../Common/css/global.css" >
		<link rel="stylesheet" href="../Common/css/contact.css" >
		<title>Contacter Cédric Gagnevin - Formulaire de contact - Envoyer un email, joindre Cédric Gagnevin - Etudiant en DUT Informatique aux Cézeaux à Clermont-Ferrand</title>

<!--******************************************************************************
*******************************  -A- Tiny MCE ***********************************
********************************************************************************-->
		
		  <!-- TINY MCE --> 
		  <script type="text/javascript" src="../Common/tinymce/jscripts/tiny_mce/tiny_mce.js"> </script> 

		  <script type="text/javascript">
			// O2k7 skin (silver)
			tinyMCE.init({
				// General options
				mode : "exact",
				elements : "message",
				theme : "advanced",
				spellchecker_languages : "+French=fr",
				skin : "o2k7",
				skin_variant : "silver",
				plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

				// Theme options
				theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
				theme_advanced_buttons2 : "cut,copy,paste,pasteword,|,search,replace,|,bullist,numlist,|,undo,redo,||,insertdate,inserttime,preview,|,forecolor,backcolor,|,charmap,emotions,|,print,|,fullscreen",
				theme_advanced_buttons3 : "",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,

				// Example content CSS (should be your site CSS)
				content_css : "css/content.css",

				// Drop lists for link/image/media/template dialogs
				template_external_list_url : "lists/template_list.js",
				external_link_list_url : "lists/link_list.js",
				external_image_list_url : "lists/image_list.js",
				media_external_list_url : "lists/media_list.js",

				// Replace values for the template plugin
				template_replace_values : {
					username : "Some User",
					staffid : "991234"
				}
			});
          </script>
		  <!-- fin TINY MCE -->

<!--******************************************************************************
*******************************  -B- Javascript *********************************
********************************************************************************-->
		  
		  <script type="text/javascript">
				// Cette fonction a pour but de rafraîchir l'image.
				function refreshCaptcha()
				{
					var alea = Math.ceil( Math.random() * 1000000 );
					document.getElementById('imageCaptcha').src = "securitecode.php?" + alea;
				}
		  </script> 


<!--******************************************************************************
*************************  -C- Google Analytics *********************************
********************************************************************************-->
		  
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
	
<!--******************************************************************************
*******************************  -D- HTML ****************************************
********************************************************************************-->

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
							<td>
								<a href="../CV/cv.php">
									Mon CV
								</a>
							</td>
							<td class="ongletCourant">
								Me contacter
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		<div id="body">
			<div id="bloc_principal">
			<img src="../Common/img/contact.png" alt="Contacter Cédric Gagnevin" />
				<h1>Formulaire de contact</h1>
				<h3><span class="obligatoire">Tous les champs sont obligatoires</span></h3>
				<div id="formulaire_de_contact">
					<form method="POST" action="contact.php" name="formulaire" id="formulaire" >
							<table>
								<tr>
									<td>
										<label for="nom_emetteur">Votre nom  </label>
									</td>
									<td>
										<input name="nom_emetteur" id="nom_emetteur" type="text" tabindex=1 placeholder="Nom prénom" size="25" required <?php if($sent ==1) echo 'value=""'; elseif(!empty($_POST[ 'nom_emetteur' ])) echo 'value="'.htmlspecialchars($_POST[ 'nom_emetteur' ]).'" '; ?>/>
									</td>
								</tr>
								<tr>
									<td>
										<label for="email">Votre email  </label>
									</td>
									<td>
										<input name="email" id="email" type="email" tabindex=2 placeholder="exemple@domaine.com" size="25" required <?php if($sent ==1) echo 'value=""'; elseif(!empty($_POST[ 'email' ])) echo 'value="'.htmlspecialchars($_POST[ 'email' ]).'" '; ?> />
									</td>
								</tr>
								
								<tr>
									<td class="paddingBottom40" >
										<label for="sujet">Sujet  </label>
									</td>
									<td class="paddingBottom40" >
										<input name="sujet" id="sujet" type="text" size="57" placeholder="Objet de votre message" tabindex=3 required <?php if($sent ==1) echo 'value=""'; elseif(!empty($_POST[ 'sujet' ])) echo 'value="'.htmlspecialchars($_POST[ 'sujet' ]).'" '; ?> />
									</td>
								</tr>
								
								<tr>
									<td colspan=2>
										<span id="content_placeholder"></span>
										<script type="text/javascript">
										  with (document.getElementById ("content_placeholder")) 
										  {
											with (appendChild (document.createElement ("textarea"))) 
											{
											  name = "message";
											  id="message";
											  cols = 60;
											  rows = 20;
											  placeholder = "Veuillez saisir le contenu de votre message...";
											  tabindex=4;
											  <?php if($sent ==1) echo 'value="";'; elseif(!empty($_POST[ 'message' ])) echo 'value="'.addslashes($_POST[ 'message' ]).'"; '; ?>
											  required;
											}
										  }
										</script>
										<noscript>
										  The editor requires scripting to be enabled. 
										</noscript>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="obligatoire centrer">
										<?php echo $message; ?>
									</td>
								</tr>
								<tr>
									<td colspan="2" id="captcha">
										<img src="securitecode.php" alt="Code de sécurité" id="imageCaptcha"/>
										<img src="../Common/img/refresh.png" title="Rafraichir l'image" alt="Refresh" onclick="refreshCaptcha();" id="refresh" />
									</td>
								</tr>
								<tr>
									<td colspan="2" class="centrer">
										<label for="code">Code ? </label>
										<input name="code" id="code" type="text" size="7" tabindex=5 required />
									</td>
								</tr>
								<tr>
									<td colspan="2" id="buttons">
										<input type="submit" name="envoyer" value="Envoyer" />
										<input type="reset" name="annuler" value="Annuler" />
									</td>
								</tr>
							</table>
					</form>  
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../Common/footer.php"); ?>
	</body>
</html>



