<?php 
/* 
Template Name: zozor_blog
*/

get_header(); ?>
{tooltip}<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/informations.png" alt="Informations" /> {end-texte|w=350|mood=800|tipd=1000|offsety=50}<h2>Objectif:</h2>
						<p>Premier mooc d'openclassrooms autour des langages HTML5 et CSS3.Ceci est le premier TP du tutoriel.</p>
						<h2>Pédagogie:</h2>
						<p>
							<ul>
								<li>Le tutoriel sur le site d'openclassrooms.</li>
								<li>Intervention sur le forums dédié a cette événement pour aider ou se faire aider.</li>
								<li>Recherche sur le web autour de HTML5 et CSS3.</li>
							</ul>
						</p>
						<h2>Acquis:</h2>
							<ul>
								<li>Rappel sur la mise en page (en-tete, corps de page, pied de page).</li>
								<li>Utilisation des balises html5 et sensibilisation de leurs rôle sémentique.</li>
								<li>Utilisation des propriétés CSS3 pour le design et aussi pour le positionnement.</li>
							</ul>{end-tooltip}	
	<div id="zozor_body">
	<div id="zozor_bloc_page">
            <header id="zozor_header">
                <div id="titre_principal">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/zozor_logo.png" alt="Logo de Zozor" id="zozor_logo" />
                    <h1>Zozor</h1>
                    <h2>Carnets de voyage</h2>
                </div>
                
                <nav id="zozor_nav">
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">CV</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Retour sur mes vacances aux États-Unis...
                    <a href="#" class="bouton_rouge">Voir l'article <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section class="zozor_section">
                <article class="zozor_article">
                    <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Je suis un grand voyageur</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec sagittis massa. Nulla facilisi. Cras id arcu lorem, et semper purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel enim mi, in lobortis sem. Vestibulum luctus elit eu libero ultrices id fermentum sem sagittis. Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. Mauris non erat eu erat placerat convallis. Mauris in pretium urna. Cras laoreet molestie odio, consequat consequat velit commodo eu. Integer vitae lectus ac nunc posuere pellentesque non at eros. Suspendisse non lectus lorem.</p>
                    <p>Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. Donec quis orci arcu. Vivamus fermentum magna a erat ullamcorper dignissim pretium nunc aliquam. Aenean pulvinar condimentum enim a dignissim. Vivamus sit amet lectus at ante adipiscing adipiscing eget vitae felis. In at fringilla est. Cras id velit ut magna rutrum commodo. Etiam ut scelerisque purus. Duis risus elit, venenatis vel rutrum in, imperdiet in quam. Sed vestibulum, libero ut bibendum consectetur, eros ipsum ultrices nisl, in rutrum diam augue non tortor. Fusce nec massa et risus dapibus aliquam vitae nec diam.</p>
                    <p>Phasellus ligula massa, congue ac vulputate non, dignissim at augue. Sed auctor fringilla quam quis porttitor. Praesent vitae dignissim magna. Pellentesque quis sem purus, vel elementum mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas consectetur euismod urna. In hac habitasse platea dictumst. Quisque tincidunt porttitor vestibulum. Ut iaculis, lacus at molestie lacinia, ipsum mi adipiscing ligula, vel mollis sem risus eu lectus. Nunc elit quam, rutrum ut dignissim sit amet, egestas at sem.</p>
                </article>
                <aside id="zozor_aside">
                    <h1>À propos de l'auteur</h1>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/zozor_classe.png" alt="Photo de Zozor" /></p>
                    <p>Laisse-moi le temps de me présenter : je m'appelle Zozor, je suis né un 23 novembre 2005.</p>
                    <p>Bien maigre, n'est-ce pas ? C'est pourquoi, aujourd'hui, j'ai décidé d'écrire ma biographie (ou zBiographie, comme vous voulez !) afin que les zéros sachent qui je suis réellement.</p>
                    <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/facebook.png" alt="Facebook" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/twitter.png" alt="Twitter" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/vimeo.png" alt="Vimeo" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/flickr.png" alt="Flickr" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/rss.png" alt="RSS" /></p>
                </aside>
            </section>
            
            <footer id="zozor_footer">
                <div id="tweet">
                    <h1>Mon dernier tweet</h1>
                    <p>Hii haaaaaan !</p>
                    <p>le 12 mai à 23h12</p>
                </div>
                <div id="mes_photos">
                    <h1>Mes photos</h1>
                    <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/photo1.jpg" alt="Photographie" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/photo2.jpg" alt="Photographie" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/photo3.jpg" alt="Photographie" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_zozor/photo4.jpg" alt="Photographie" /></p>
                </div>
                <div id="mes_amis">
                    <h1>Mes amis</h1>
                    <ul>
                        <li><a href="#">Pupi le lapin</a></li>
                        <li><a href="#">Mr Baobab</a></li>
                        <li><a href="#">Kaiwaii</a></li>
                        <li><a href="#">Perceval.eu</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Belette</a></li>
                        <li><a href="#">Le concombre masqué</a></li>
                        <li><a href="#">Ptit prince</a></li>
                        <li><a href="#">Mr Fan</a></li>
                    </ul>
                </div>
            </footer>
        </div>
	</div>
    <?php get_footer(); ?>
