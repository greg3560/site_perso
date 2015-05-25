<?php

function get_commentaires($offset, $limit, $id)
{
	global $wpdb;

	$id = (int) $id;
	$offset = (int) $offset;
	$limit = (int) $limit;

	if($dataCommentaires = $wpdb->get_results("SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, '%d/%m/%y à %h:%m:%s') AS date FROM gp_naujac_commentaires WHERE id_billet= $id ORDER BY date_commentaire ASC LIMIT $offset, $limit", ARRAY_A))
	{
		return $dataCommentaires;
	}
	else
	{
		return false;
	}
}

