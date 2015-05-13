<?php 
/* 
Template Name: mud_main 
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
				<span id="sl_play" class="sl_command"></span>  
				<span id="sl_pause" class="sl_command"></span>  
   
				<span id="sl_i1" class="sl_command sl_i"></span>  
				<span id="sl_i2" class="sl_command sl_i"></span>  
				<span id="sl_i3" class="sl_command sl_i"></span>  
				<span id="sl_i4" class="sl_command sl_i"></span> 
				<section id="slideshow">
					<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>  
					<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>  
    					<div class="container">  
        					<div class="c_slider"></div>  
        					<div class="slider">  
            						<figure><!--  
                						--><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mud/plateau.jpg" alt="" class="slideImg" />  
                						<figcaption>Sonorisation</figcaption>  
  							</figure><!----><figure><!--  
                						--><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mud/conference.jpg" alt="" class="slideImg" />  
                						<figcaption>Discothèques, Soirées dansante, Bal</figcaption>  
            						</figure><!-- 
            						--><figure>  
                						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mud/club.jpg" alt="" class="slideImg" />  
                						<figcaption>Congrès, Séminaires, Conférences</figcaption>  
            						</figure><!-- 
            						--><figure>  
                						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mud/spectacle_mud.jpg" alt="" class="slideImg" />  
                						<figcaption>Cabarets, Theâtre, One man show</figcaption>  
            						</figure>  
        					</div>  
    					</div>  
    					<span id="timeline"></span>
					<ul class="dots_commands"><!-- 
   						 --><li><a title="Afficher la slide 1" href="#sl_i1">Slide 1</a></li><!-- 
    						--><li><a title="Afficher la slide 2" href="#sl_i2">Slide 2</a></li><!-- 
    						--><li><a title="Afficher la slide 3" href="#sl_i3">Slide 3</a></li><!-- 
   						 --><li><a title="Afficher la slide 4" href="#sl_i4">Slide 4</a></li>  
					</ul>   
				</section> 
		<div id="bloc_page_index">
			<h1 id="mud_h1">Sonorisation Eclairage Video</h1>
			<div id="page">
			<article class="mud_article">
					<h3 class="mud_h3">M.U.D.</h3>
					<!--<img src="img/effet_lumiere.jpg" class="imageflottanteleft" alt="effet lumiere" /> -->
				<p>
					Présent depuis 1989 proche de Roissy-en-France.</p>
					<p>Une équipe dynamique de techniciens à votre disposition pour vous conseiller dans l'utilisation de matériel sono, éclairage, vidéo-projecteur (événementiel, commerciales) ou pour animer vos soirées particulières (karaoké, soirées dansantes).
				</p>
				
			</article>
			<article class="mud_article">
					<h3 class="mud_h3">Chers clients</h3>
					<!--<img src="img/soiree_dansante.jpg" class="imageflottanteright" alt="soiree dansante" /> -->
				<p>

A l'époque où la communication est en pleine expansion, une ville, une entreprise, un particulier se doit d'employer les meilleurs atouts afin de pouvoir organiser différentes manifestations en toute quiétude.</p>

<p>C'est pour cela que M.U.D. s'engage, en tant que professionnel, à vous apporter toute son aide pour réussir tous vos projets.</p>
			</article>
			<article class="mud_article">
					<h3 class="mud_h3">À propos</h3>
			<p>
			Déjà nombreux sont ceux qui ont su choisir M.U.D. qui, grâce à ses compétences, a su rendre inoubliables de nombreux moments.</p>

<p>Partenaire de toutes vos manifestations, nous mettons à votre disposition différents services que vous trouverez détaillés dans notre catalogue.(Commandez-le.)</p>

<p>Toutes ces opérations peuvent être modifiées suivant vos besoins. M.U.D. se tient à votre entière disposition pour des renseignements complémentaires.</p>

<author>Philippe Espercieux</author>
			</article>
			</div>
		</div>
		<?php
			include("inc/mud_footer.php");
		?>
	
<?php get_footer(); ?>
