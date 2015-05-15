<?php

	switch($_GET["action"])
	{
		/*mud*/
		case "formulaire":
			envoiFormulaire();
			break;
	}
// enqueue javascript
 
function theme_js()
{
	wp_enqueue_script( 'blog',
	get_stylesheet_directory_uri() . '/js/blog.js',
	array() );
}
 
add_action( 'wp_footer', 'theme_js' );

//suppression concernant les balise html dans les commentaires
function _no_comment_notes_after($defaults) {
    $defaults['comment_notes_after'] = '';
    return $defaults;
}
add_filter('comment_form_defaults', '_no_comment_notes_after');

// Input 'Read more' link
function dataG_input_readmore() {
global $post;
	printf( '<p><a href="%1$s" class="more-link themebutton2">' . __( 'Lire la suite', 'lan-thinkupthemes') . '</a></p>',
		get_permalink($post->ID)
	);
}

// HTML for Author Bio
function dataG_input_postauthorbiocode() {

	echo	'<div id="author-bio">',
			'<div id="author-title">',
			'<h3>À propos de l\'auteur: <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '"/>' . get_the_author() . '</a></h3>',
			'<span class="sep"><span class="sep-core"></span></span>',
			'</div>',
			'<div id="author-image" class="one_sixth">',
			get_avatar( get_the_author_meta( 'email' ), '90' ),
			'</div>',
			'<div id="author-text" class="five_sixth last">',
			wpautop( get_the_author_meta( 'description' ) ),
			'</div>',
			'</div>';
}

// Output Author Bio
function dataG_input_postauthorbio() {
global $thinkup_post_authorbio;

	dataG_input_postauthorbiocode();
}


/*******************************************************MUD*********************************************************************/

function envoiFormulaire()
{
	if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["message"]) && !empty($_POST["mud_home"]))
	{
		if (wp_verify_nonce($_POST['mud_home'], 'mud_contact'))
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
			$url = add_query_arg('succes', 'true', wp_get_referer());
 
                	wp_safe_redirect($url);
                	exit();
		}
		else
		{
			$url = add_query_arg('erreur', 'trop', wp_get_referer());
 
                	wp_safe_redirect($url);
                	exit();
		}
	}
}
add_action('template_redirect', 'traitement_formulaire_mud');

?>
