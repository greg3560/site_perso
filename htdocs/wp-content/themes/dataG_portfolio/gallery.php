<?php 
/* 
Template Name: gallery 
*/

get_header(); ?>
		<div class="page" id="site_web">
			<h2 id="h20" onClick="openUl('galerieAcceuil0')">SITES WEB</h2>
			<ul class="galerieAcceuil" id="galerieAcceuil0">
				<li id="0">
					<a href="http://www.laboiteacomptines.fr/" title="La boite à comptines" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/laboiteacomptines.png" alt="La boite à comptines" title="La boite à comptines"/>
						<p class="gallery_p">
							La boite à comptines.<br />
							Recueil de comptines pour enfants.
						</p>
					</a>
					
				</li>
				<li id="1">
					<a href="../portfolio_/mud/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/mud.png" alt="MUD" title="MUD"/>
						<p class="gallery_p">
							Music Until Dawn.<br />
							Sonorisation éclairage événementiel.
						</p>
					</a>
					
				</li>
				<li id="2">
					<a href="../portfolio_/naujac-sur-mer/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/naujac.png" alt="Mairie de Naujac sur mer" title="Mairie de Naujac sur mer"/>
						<p class="gallery_p">
							Mairie de Naujac sur mer.<br />
							Projet de fin de formation à l'INFA.
						</p>
					</a>
				</li>
				<li id="3">
					<a href="../portfolio_/test-responsive/" >
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/test_responsive.png" alt="Test responsive" title="Test responsive"/>
						<p class="gallery_p">
							L'agence.<br />
							Découverte du responsive design.
						</p>
					</a>
					
				</li>
				<li id="4">
					<a href="../portfolio_/blog-zozor/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/blog_zozor.png" alt="Blog zozor" title="Blog zozor"/>
						<p class="gallery_p">
							Blog de Zozor.<br />
							La mascote d'openclassrooms.
						</p>
					</a>
					
				</li>				
			</ul>
		</div>	
		<div class="page">
			<h2 id="h21" onClick="openUl('galerieAcceuil1')">APPLICATIONS</h2>
			<ul class="galerieAcceuil" id="galerieAcceuil1">
				<li id="0">
					<a href="../portfolio_/calculatrice/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/calculatrice.png" alt="Calculatrice" title="Calculatrice"/>
						<p class="gallery_p">
							Calculatrice.<br />
							Mise en pratique des connaissances acquise en PHP. 
						</p>
					</a>
					
				</li>				
			</ul>
		</div>
		<div class="page">
			<h2 id="h22" onClick="openUl('galerieAcceuil2')">JEUX</h2>
			<ul class="galerieAcceuil" id="galerieAcceuil2">
				<li id="0">
					<a href="../portfolio_/calculatrice/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/calculatrice.png" alt="Calculatrice" title="Calculatrice"/>
						<p class="gallery_p">
							Calculatrice.<br />
							Mise en pratique des connaissances acquise en PHP. 
						</p>
						
					</a>
					
				</li>				
			</ul>
		</div>		

<?php get_footer(); ?>