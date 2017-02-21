 <?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'nouha.benabdelkaer@gmail.com';
 
// copie ? (envoie une copie au visiteur)
$copie = 'oui'; // 'oui' ou 'non'
 
// Messages de confirmation du mail
$message_envoye = "Your message is sent !";
$message_non_envoye = "The sending of the email has failed, please try again please.";
 
// Messages d'erreur du formulaire
$message_erreur_formulaire = "You must first <a href=\"contactus.php\">send the form</a>.";
$message_formulaire_invalide = "Check that all fields are properly filled.";
 
/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/
 
// on teste si le formulaire a été soumis
if (!isset($_POST['envoi']))
{
	// formulaire non envoyé
	echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
}
else
{
	/*
	 * cette fonction sert à nettoyer et enregistrer un texte
	 */
	function Rec($text)
	{
		$text = htmlspecialchars(trim($text), ENT_QUOTES);
		if (1 === get_magic_quotes_gpc())
		{
			$text = stripslashes($text);
		}
 
		$text = nl2br($text);
		return $text;
	};
 
	/*
	 * Cette fonction sert à vérifier la syntaxe d'un email
	 */
	function IsEmail($email)
	{
		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
		return (($value === 0) || ($value === false)) ? false : true;
	}
 
	// formulaire envoyé, on récupère tous les champs.
	$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
	$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
	$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
	$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
 
	// On va vérifier les variables et l'email ...
	$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
 
	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
					'Reply-To:'.$email. "\r\n" .
					'X-Mailer:PHP/'.phpversion();
 
		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.','.$email;
		}
		else
		{
			$cible = $destinataire;
		};
 
		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('<br>','',$message);
		$message = str_replace('<br />','',$message);
		$message = str_replace("&lt;","<",$message);
		$message = str_replace("&gt;",">",$message);
		$message = str_replace("&amp;","&",$message);
 
		// Envoi du mail
		if (mail($cible, $objet, $message, $headers))
		{
			echo '<p>'.$message_envoye.'</p>'."\n";
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>'."\n";
		};
	}
	else
	{
		// une des 3 variables (ou plus) est vide ...
		echo '<p>'.$message_formulaire_invalide.' <a href="contactus.php">Return to form</a></p>'."\n";
	};
}; // fin du if (!isset($_POST['envoi']))
?>