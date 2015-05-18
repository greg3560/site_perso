<?php

function get_articles($offset, $limit)
{
	global $wpdb;
	
	return $dataArticles = $wpdb->get_results("SELECT id, titre, contenu, DATE_FORMAT(date_creation, '%d/%m/%y') AS date, DATE_FORMAT(date_creation, '%h:%m:%s') AS heure, auteur, src FROM gp_naujac_articles LIMIT $offset,$limit", ARRAY_A);
}	

