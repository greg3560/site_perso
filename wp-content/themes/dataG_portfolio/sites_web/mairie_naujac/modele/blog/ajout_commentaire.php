<?php
	require_once(__DIR__."/../cnx.php");

	function ajout_commentaire($id, $pseudo, $commentaire)
	{
		global $bdd;
		
		$req = $bdd->prepare("INSERT INTO gp_naujac_commentaires (id, id_billet, auteur, commentaire, date_commentaire) VALUES (\"\", :id, :pseudo, :commentaire, NOW())");
		$req->execute(array("id"=>$id, "pseudo"=>$pseudo, "commentaire"=>$commentaire));
	}
