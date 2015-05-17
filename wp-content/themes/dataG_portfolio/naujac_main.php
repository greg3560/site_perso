<?php
/* 
Template Name: naujac_main
*/

get_header(); ?>
{tooltip}<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/informations.png" alt="Informations." /> {end-texte|w=350|mood=800|tipd=1000|offsety=50}<h2>Objectif:</h2>
						<p>Refonte d'un site de mairie de notre choix pour le jury de fin de formation à l'INFA.</p>
						<h2>Pédagogie:</h2>
						<p>
							<ul>
								<li>Formateurs à l'INFA.</li>
								<li>Équipe de trois personnes.</li>
								<li>Création pendant 3 mois.</li>
							</ul>
						</p>
						<h2>Acquis:</h2>
						<p>
							<ul>
								<li>Utilisation de l'architecture MVC(modèle, vue, controleur).</li>
								<li>Utilisation de mysqli pour la connection à la base de données.</li>
								<li>Création et gestion de la base de données.</li>
								<li>Mise en place d'un bbcode pour la page commentaire, coloration et rendu en lien cliquable des expressions du type http://www et mailto.</li>
							</ul>
						</p>{end-tooltip}	
<?php
	
	
	if(!isset($_GET["section"]) OR $_GET["section"] == "index")
	{
		
		require_once("controleur/blog/index.php");
		
	}
	elseif($_GET["section"] == "article")
	{
		
		require_once("controleur/blog/commentaires.php");
		
	}
	elseif($_GET["section"] == "set_commentaire")
	{
		
		require_once("controleur/blog/set_commentaire.php");
		
	}
get_footer();
?>
