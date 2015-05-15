<?php
	/*require_once(__DIR__."/../cnx.php");*/

function get_agenda($offset, $limit)
{
	global $bdd;
	$offset=(int)$offset;
	$limit=(int)$limit;

	$req=$bdd->prepare("SELECT a.id, a.evenement, a.mois, DATE_FORMAT(a.date, '%d/%m/%y') AS date, c.categories, c.label FROM gp_naujac_categories c  INNER JOIN gp_naujac_agenda a ON c.id=a.id_categories  LIMIT :offset,:limit");
	$req->bindParam(":offset", $offset, PDO::PARAM_INT);
	$req->bindParam(":limit", $limit, PDO::PARAM_INT);
	$req->execute();
	$dataAgendas=$req->fetchAll();

	return $dataAgendas;
}	
