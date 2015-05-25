<?php

function ajout_commentaire($id, $pseudo, $commentaire)
{
	global $wpdb;

	$id = (int) $id;
	if(is_string($pseudo) && is_string($commentaire))
	{	
		$wpdb->query( $wpdb->prepare("INSERT INTO gp_naujac_commentaires (id, id_billet, auteur, commentaire, date_commentaire) VALUES (\"\", %d, %s, %s, NOW())", $id, $pseudo, $commentaire));
		
	}
}
