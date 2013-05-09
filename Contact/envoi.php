<?php  
	// Mon adresse email
	$destinataire='cedric.gagnevin@laposte.net';  
	//SMTP
	ini_set('SMTP','smtp.bbox.fr');
	ini_set("sendmail_from",$destinataire);

    // La variable $verif va nous permettre d'analyser si la sémantique de l'email est bonne  
    $verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
    //quelques remplacements pour les specialchars  
    //$message=preg_replace('#(<|>)#', '-', $_POST['message']);  
    $message=str_replace('"', "'",$_POST['message']);  
    //$message=str_replace('&', 'et',$message);  
	//$nom=preg_replace('#(<|>)#', '-', $_POST['nom_emetteur']);  
    $nom=str_replace('"', "'",$_POST['nom_emetteur']);  
    //$nom=str_replace('&', 'et',$nom); 
    //$sujet=preg_replace('#(<|>)#', '-', $_POST['sujet']);  
    $sujet=str_replace('"', "'",$_POST['sujet']);  
    //$sujet=str_replace('&', 'et',$sujet);  
    // On assigne et/ou protège nos variables  
    $email=stripslashes(htmlentities($_POST['email']));  
    // $message=stripslashes(htmlspecialchars($message));  
    // $sujet=stripslashes(htmlspecialchars($sujet));  
    //on enlève les espaces 
	$nom=trim($nom);  	
    $email=trim($email);  
    $message=trim($message);  
    $sujet=trim($sujet);  

	//On précise l'expéditeur
	$message = "<strong style='color:red;'>------ Envoy&eacute; par ".htmlentities($nom)." (".$email.") ------</strong><br/>".$message;
	
	if(!preg_match($verif,$email))  
        echo'<p>Votre adresse e-mail n\'est pas valide.</p>';  
    //Si les deux sont pleins et que l'adresse est valide, on envoie on on prévisualise sans envoi  
    else  
    {  
        $domaine=preg_replace('#[^@]+@(.+)#','$1',$email);  
        $DomaineMailExiste=checkdnsrr($domaine,'MX');  
        if(!$DomaineMailExiste)  
          $message = '<p>Le nom de domaine de l\'adresse e-mail que vous avez donné n\'existe pas.</p>';  
		else
		{
              $sujet='[SITE PERSO] : '.$sujet;  
              $headers='From:"'.$nom.'"<'.$email.">\r\n".'To:'.$destinataire."\r\n".'Subject:'.$sujet."\r\n".'Content-type:text/html;charset=iso-8859-1'."\r\n".'Sent:'.date('l, F d, Y H:i');  
              if(mail($destinataire,$sujet,$message,$headers))  
              {  
                $message = '<p class="ok">Votre message a bien été envoyé. Je vous répondrai au plus vite.<br/>Merci';  
				$sent = 1;
			  }  
              else $message = '<p>Un problème est survenu durant l\'envoi du mail.</p>'; 
		}
    }  
