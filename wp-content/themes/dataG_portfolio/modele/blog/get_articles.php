<?php
	/*require_once(__DIR__."/../cnx.php");*/

function get_articles($offset, $limit)
{
	global $bdd;
	$offset=(int)$offset;
	$limit=(int)$limit;

	$req=$bdd->prepare("SELECT id, titre, contenu, DATE_FORMAT(date_creation, '%d/%m/%y') AS date, DATE_FORMAT(date_creation, '%h:%m:%s') AS heure, auteur, src FROM gp_naujac_articles LIMIT :offset,:limit");
	$req->bindParam(":offset", $offset, PDO::PARAM_INT);
	$req->bindParam(":limit", $limit, PDO::PARAM_INT);
	$req->execute();
	$dataArticles=$req->fetchAll();

	return $dataArticles;
}	

