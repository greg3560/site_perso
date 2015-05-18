<?php
	
	require_once(__DIR__."/modele/blog/ajout_commentaire.php");
		
	ajout_commentaire($_GET['article'], $_POST['naujac_pseudo'], $_POST['naujac_commentaire']);
	header("Location:portfolio_/naujac-sur-mer/?section=article&article= $_GET["article"]");
