<?php

function get_agenda($offset, $limit)
{
	global $wpdb;

	return $dataAgendas = $wpdb->get_results("SELECT a.id, a.evenement, a.mois, DATE_FORMAT(a.date, '%d/%m/%y') AS date, c.categories, c.label FROM gp_naujac_categories c  INNER JOIN gp_naujac_agenda a ON c.id=a.id_categories  LIMIT $offset,$limit", ARRAY_A);
}	
