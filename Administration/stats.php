<?php
	include_once("configuration/connexion.php");
	// Connexion à MySQL
	$connect = mysql_connect($SERVER,$USER,$PASSWORD) or die ("Erreur de connexion");
	mysql_select_db($DATABASE) or die ("Erreur lors de la selection de la base de donnees");

	// -------
	// ÉTAPE 1 : on vérifie si l'IP se trouve déjà dans la table.
	// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse IP du visiteur.
	$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM t_statistiques WHERE ip_adress=\'' . $_SERVER['REMOTE_ADDR'] . '\'') or die ("erreur count");
	$donnees = mysql_fetch_array($retour);

	if ($donnees['nbre_entrees'] == 0) // L'IP ne se trouve pas dans la table, on va l'ajouter.
	{
		mysql_query("INSERT INTO t_statistiques VALUES (NULL,'".$_SERVER['REMOTE_ADDR']."',".time().",".time().",1,1,'')") or die ("erreur insert");
	}
	else // L'IP se trouve déjà dans la table, on met juste à jour le timestamp.
	{
		$retour = mysql_query('SELECT isConnected, nb_visites FROM t_statistiques  WHERE ip_adress=\'' . $_SERVER['REMOTE_ADDR'] . '\'') or die ("erreur select isConnected");
		$donnees = mysql_fetch_array($retour);
		if($donnees['isConnected'] == 0) 
			mysql_query("UPDATE t_statistiques SET last_connection = ".time().", isConnected = 1, nb_visites=".($donnees['nb_visites']+1)." WHERE ip_adress ='".$_SERVER['REMOTE_ADDR']."'") or die ("erreur update1");
		else mysql_query("UPDATE t_statistiques SET last_connection = ".time()." WHERE ip_adress ='".$_SERVER['REMOTE_ADDR']."'") or die ("erreur update2");
	}

	// -------
	// ÉTAPE 2 : on supprime toutes les entrées dont le timestamp est plus vieux que 5 minutes.

	// On stocke dans une variable le timestamp qu'il était il y a 5 minutes :
	$timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
	mysql_query('UPDATE t_statistiques SET isConnected = 0 WHERE last_connection < '.$timestamp_5min) or die ("erreur update 2");

	// -------
	// ÉTAPE 3 : on compte le nombre d'IP stockées dans la table. C'est le nombre de visiteurs connectés.
	$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM t_statistiques WHERE isConnected = 1') or die ("erreur update3");
	$donnees = mysql_fetch_array($retour);

	mysql_close($connect);
	// Ouf ! On n'a plus qu'à afficher le nombre de connectés !
	//echo '<p>Il y a actuellement ' . $donnees['nbre_entrees'] . ' visiteurs connectés sur mon site !</p>';
?>
