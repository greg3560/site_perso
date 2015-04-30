<?php
	require_once(__DIR__."/../cnx.php");

function get_commentaires($offset, $limit, $id)
{
	global $bdd;

	$id = (int) $id;
	$offset = (int) $offset;
	$limit = (int) $limit;

	$req=$bdd->prepare("SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, '%d/%m/%y à %h:%m:%s') AS date FROM gp_naujac_commentaires WHERE id_billet= :id ORDER BY date_commentaire ASC LIMIT :offset, :limit");
	$req->bindParam(":id", $id, PDO::PARAM_INT);
	$req->bindParam(":offset", $offset, PDO::PARAM_INT);
	$req->bindParam(":limit", $limit, PDO::PARAM_INT);

	if($req->execute())
	{
		$dataCommentaires = $req->fetchAll();

		return $dataCommentaires;
	}
	else
	{
		return false;
	}
}

