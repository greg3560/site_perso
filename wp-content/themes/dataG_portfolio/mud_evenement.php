<?php
/* 
Template Name: mud_evenement 
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
			<h1 id="mud_h1">L'ÉVÉNEMENT À LA CARTE</h1>
			<div id="page">
			<article class="mud_article">
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/concert_scene.jpg" alt="Scene de concert." class="img_article"/>
					<h3 class="mud_h3">FORMULES</h3>
				<p>
				 	La société M.U.D. est une structure qui vous propose une sélection de formules à la carte.</p>
			</article>
			<article class="mud_article">
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/seminaire.jpg" alt="Seminaires" class="img_article" />
					<h3 class="mud_h3">CRÉATIONS</h3>
				<p>Nous créons à votre convenance votre événement; que cela soit concerts, spectacles, séminaires, feu d'artifice ...</p>
			</article>
			<article class="mud_article">	
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/cabaret.jpg" alt="Cabarets." class="img_article" />
					<h3 class="mud_h3">GARANTIES</h3>
				<p>Nous sommes disposés à vous offrir le meilleur de nous à chaque instant.</p>
			</article>
			<article class="mud_article">
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/representation.jpg" alt="Representatins." class="img_article" />
					<h3 class="mud_h3">PRESTATIONS</h3>
				<p>Le prestataire de vos soirées, en sonorisation, éclairage, vidéo, projection.Nous sommes là pour vous satisfaire.</p>
			</article>
			<article class="mud_article">
					<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/mud/video.jpg" alt="video" class="img_article" />
					<h3 class="mud_h3">CONTACTS</h3>
				<p>Pour nous contacter :

Tél. : 03 44 54 31 24

M. Espercieux : ph.espercieux@m-u-d.fr<br />

M. Louis : stephanelouis.mud@free.fr</p>
			</article>
			</div>
		</div>
		<?php
			include(__DIR__."/sites_web/MUD/includes/footer.php");
		?>
<?php get_footer(); ?>
