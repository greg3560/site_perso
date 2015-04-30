<?php
/* 
Template Name: mud_nos_references 
*/

get_header(); ?>
{tooltip}<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/informations.png" alt="Informations" /> {end-texte|w=350|mood=800|tipd=1000|offsety=50}<h2>Objectif:</h2>
						<p>Refonte du site www.m-u-d-60.fr.Redonner un nouvel aspect au site et intégrer de nouveaux outil comme google maps ou un formulaire de contact.Toutes les pages du sites sont développées.</p>
						<h2>Pédagogie:</h2>
						<p>
							<ul>
								<li>Différents cours suivi sur le web(openclassrooms, alsacreation et club développez.com)</li>
								<li>Formation infographiste multimedia à l'INFA.</li>
							</ul>
						</p>
						<h2>Acquis:</h2>
						<p>
							<ul>
								<li>Premieres manipulations de bases de données en constituant un menu dynamique.</li>
								<li>intégration d'un slider entièrement développé en CSS3.</li>
								<li>Création de ma propre fonction mail.</li>
							</ul>
						</p>
						<p>
						Optimisation de la hiéarchie des fichier avec un fichier de traitement pour l'envoi du formulaire et utilisation de la fonction include de php pour ce qui concerne l'en-tete, le pied de page et le menu.Création de fichier de connexion a la base de données.</p>{end-tooltip}
			<?php
				include(__DIR__."/sites_web/MUD/includes/header.php");
			?>
		<div id="bloc_page_site">
			<h1 id="mud_h1">ILS NOUS FONT CONFIANCE</h1>
			<div id="page">
			<article class="mud_article">
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/eclairage_architectural.jpg" alt="eclairage architectural." class="img_article"/>
					<h3 class="mud_h3">LES HAUTS LIEUX</h3>
				<p>
				Aéroport du Bourget, Château de Chaumontel, Groupe Lucien Barrière, Fouquet's, CNIT, Château de Montvillargenne, Cercle Militaire, Grand Hôtel Continental, Les Folies Bergères, Carrousel du Louvre, La Conciergerie, Copthorne Radisson SAS, Palais des Congrès de Strasbourg, Théâtre Sébastopol de Lille, Théâtre d'Albertville, Théâtre de Belfort, Palais des Congrès du Touquet, Palais Omnisports de Paris Bercy, Auditorium d'Amiens, Grandes Ecuries de Chantilly, Hôtel Royal Parc, Château la Grande Romaine,</p>
			</article>
			<article class="mud_article">
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/traduction_simultannee.jpg" alt="traduction simultannée" class="img_article" />
					<h3 class="mud_h3">TRADUCTIONS SIMULTANÉES</h3>
				<p>Hôtel le Manhattan, Château Mont Royal, Mercure, Château de Pontarmé, Novotel, Château de Raray, Casino d'Enghien, Hôtel Nikko, Hôtel Commodore, Le Pavillon Royal, La Mutualité, Golf Club Apremont, Salle Gaveau, Palais des Congrès de Bordeaux, Centre des Congrès d'Angers, Théâtre de Dijon, Grande Arche, Hippodrome de Saint-Cloud, Hôtel du Lac, Grand Hôtel ...</p>
			</article>
			<article class="mud_article">	
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/les_societes.jpg" alt="Les sociétés." class="img_article" />
					<h3 class="mud_h3">LES SOCIÉTÉS</h3>
				<p>Electrolux, Cegetel, Aérospatiale, Air France, Sofres, France Abonnement, Hugin Sweda, Daf, Levi'Strauss, Tour de France Auto, Lafarge, Flunch, FNACA, Danone, Leclerc, Laboratoire Guerbet, Point P, Lee France, Peugeot,Lancia, Rhône Poulenc, Total, Dim, Matra, Euro Disney, Alcatel, Antar, Bull, Crédit Lyonnais, Christophle, Champion, Promodès, Landini, EDF-GDF, Axa Assurance, Renault, Shopi, WEA, Krys, Paribas, Citroën, British Airways, Lapeyre, Auchan, Nokia, Cap Gemini ...</p>
			</article>
			<article class="mud_article">
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/les_villes.jpg" alt="Les villes" class="img_article" />
					<h3 class="mud_h3">LES VILLES</h3>
				<p>Enghien Les Bains, Clamart, Armentière en Brie, Limeil-Brévanne, Montreuil, Pontault-Combault, Pantin, Mortefontaine, Saint André de l'Eure, Crépy en Valois, Bruay la Buissière, Vincennes, Bresles, La Chapelle en Serval, Wissous, Pont Saint Maxence, Evreux, Ermeonville, Fosses, Salons à Genève ...</p>
			</article>
			</div>
		</div>
		<?php
			include(__DIR__."/sites_web/MUD/includes/footer.php");
		?>
<?php get_footer(); ?>
