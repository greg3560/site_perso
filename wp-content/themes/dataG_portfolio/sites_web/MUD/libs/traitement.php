<?php
	switch($_GET["action"])
	{
		case "formulaire":
			envoiFormulaire();
			break;
	}


function envoiFormulaire()
{
	if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["message"]))
	{
		$mail = 'greg.spectacle@gmail.com'; // Déclaration de l'adresse de destination.
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}
//=====Déclaration des messages au format texte et au format HTML.
		$message_txt = $_POST["message"];
		$message_html = "<html><head></head><body>".$_POST["message"]."</body></html>";
//==========
 
//=====Création de la boundary
		$boundary = "-----=".md5(rand());
//=====Définition du sujet.
		$sujet = "Prise de contact www.mud.fr";
//=====Création du header de l'e-mail.
		$header = "From: \"".$_POST["raison_sociale"].".".$_POST["civilite"].".".$_POST["nom"].".".$_POST["prenom"]."<".$_POST["mail"].">".$passage_ligne."Adresse postale:".$_POST["adresse_postale"].$passage_ligne.$_POST["code_postal"].$_POST["ville"].$_POST["pays"].$passage_ligne."Tel:".$_POST["telephone"]."Fax:".$_POST["fax"];
		$header.= "Reply-to: \"".$_POST["nom"].".".$_POST["prenom"]."<".$_POST["mail"].">".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//=====Envoi de l'e-mail.
		mail($mail,$sujet,$message,$header);
//Redirection.
		header("Location:../nous_contacter.php?succes=true");
	}
	else
	{
		header("Location:../nous_contacter.php?succes=false");
	}
}

?>
