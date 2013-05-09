<?php
	session_start();

	if(!empty($_POST[ 'login' ]) && !empty($_POST[ 'pwd' ]))
	{
		include ("configuration/id_admin.php");
		$login_post = $_POST[ 'login' ];
		$pwd_post = $_POST[ 'pwd' ];
		
		$login_saisi = true; $pwd_saisi = true;
		if($login_post == $login_admin)
		{
			if($pwd_post == $pwd_admin)
			{
				$_SESSION[ 'isConnected' ] = 1;
				$_SESSION[ 'login' ] = $login_admin;
				header('Location: administration.php');
			}
			else $pwd_saisi = false;
		} 
		else $login_saisi = false;
	}

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="Author" content="Cédric GAGNEVIN" >
		<!--<meta name="Copyright" content="Cédric GAGNEVIN" >-->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" > 
		<!--<link rel="stylesheet" href="css/authentification.css" >-->
		<title>Authentification</title>
		
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
		<style>
			#authentification 
			{ 
				background: url('img/cles.png'); 
				width: 454px; 
				height: 346px;
				position:absolute;
				left: 50%;
				top: 50%;
				margin-left: -227px; /* Cette valeur doit être la moitié négative de la valeur du width */
				margin-top: -173px; /* Cette valeur doit être la moitié négative de la valeur du height */
			}
				
			#authentification table
			{ 
				position: relative;
				top: 50px;
				left: 40px;
			}
		
			.erreur
			{
				color: red;
				font-weight: bold;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php 
			if(isset($login_saisi) && $login_saisi == false)
				echo '<p class="erreur">Login inconnu</p>'; 
			if(isset($pwd_saisi) && $pwd_saisi == false)
				echo '<p class="erreur">Mot de passe erroné</p>';  
		?>
		<div id="authentification">
			<form action="index.php" method="POST" id="form1">
				<!--<img src="img/cles.png" />-->
				<table>
					<tr>
						<td>
							<input type="text" name="login" id="login" placeholder="Login" required <?php if(isset($login_saisi) && $login_saisi == true) echo 'value="'.$_POST[ 'login' ].'"'; ?> />
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="pwd" id="pwd" placeholder="Password" required />
							<input type="submit" name="authentification" style="visibility: hidden"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
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
