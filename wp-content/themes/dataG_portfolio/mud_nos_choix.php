<?php 
/* 
Template Name: mud_nos_choix 
*/

get_header(); ?>
{tooltip}<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/informations.png" alt="Informations" /> {end-texte|w=350|mood=800|tipd=1000|offsety=50}<h2>Objectif:</h2>
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
				include("inc/mud_header.php");
			?>
		<div id="bloc_page_site">
			<h1 id="mud_h1">M.U.D. a choisi pour vous :</h1>
			<div id="page">
			<article class="mud_article">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mud/console_midas.jpg" alt="Consle Midas." class="img_article"/>
					<h3 class="mud_h3">LES MARQUES</h3>
				<p>
				BOSE - NEXO - SOUNDCRAFT - AMCRON - SHURE - ADB - MARTIN - JULIAT - SONY - MITSUBISHI</p>
			</article>
			<article class="mud_article">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mud/spectacle.jpg" alt="Spectacle." class="img_article" />
					<h3 class="mud_h3">NOS RÉFÉRENCES SPECTACLES</h3>
				<p>Nicoletta, Laruso, Michel Fugain, La Bande à Basil, Guy Béart, Philippe Bouvard, André Philippe Gagnon, Ute Lamper, Dave, La Roche Valmont, Mireille Nègre, Anne Roumanoff, Yves Le Coq, Laurent Broomhead, Plastic Bertrand, Billy...</p>
			</article>
			</div>
		</div>
		<?php
			include("inc/mud_footer.php");
		?>
<?php get_footer(); ?>
