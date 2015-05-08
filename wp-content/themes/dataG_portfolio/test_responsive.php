<?php 
/* 
Template Name: test_responsive
*/

get_header(); ?>
{tooltip}<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/informations.png" alt="Informations" /> {end-texte|w=350|mood=800|tipd=1000|offsety=50}<h2>Objectif:</h2>
						<p>Mise en pratique des connaissances liées au responsive design.Le but etant de créer une page plein écran et l'adapter sur des résolutions plus petites.</p>
						<h2>Pédagogie:</h2>
						<p>
							<ul>
								<li>Formateurs à l'INFA.</li>
								<li>Exemple concret sur l'utilisation et la prevoyance des propriétées CSS.(média queries et tailles relatives).</li>
							</ul>
						</p>
						<h2>Acquis:</h2>
						<p>
							<ul>
								<li>Utilisation des requetes de media en fonction du type d'ecran et de sa taille.</li>
								<li>Utilisation des tailles relatives.</li>
								<li>Ergonomie liés au contraintes des résolutions d'ecrans.</li>
							</ul>
						</p>{end-tooltip}
		<div id="test_bloc_page">
			<header id="test_header">
				<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/test_responsive/badge.png"/>
				<h1>L'agence</h1>
				<nav>
					<a href="#">lorem</a>
					<a href="#">ipsum</a>
					<a href="#">dolor</a>
				</nav>
			</header>
			<section id="debut">
				<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/test_responsive/bateauSteampunk.jpg" />
				<h2>MISE EN PAGE ADAPTATIVE AVEC LES MEDIA QUERIES</h2>
				<div id="text">
					<p>Savez-vous quelle est la première préoccupation des webmasters qui mettent en place le design de leur site ? La résolution d'écran de leurs visiteurs. Eh oui : selon les écrans, il y a plus ou moins de place, plus ou moins de pixels de largeur.

Cette information est importante lorsque vous construisez un design : comment votre site doit-il s'afficher en fonction des différentes résolutions d'écran ? Si vous avez un écran large, vous risquez d'oublier que certaines personnes naviguent avec des écrans plus petits. Et je ne vous parle même pas des navigateurs des smartphones, qui sont encore moins larges.

C'est là que les media queries entrent en jeu. Ce sont des règles à appliquer pour changer le design d'un site en fonction des caractéristiques de l'écran ! Grâce à cette technique, nous pourrons créer un design qui s'adapte automatiquement à l'écran de chaque visiteur !</p>
					
					<em>Mateo21</em>
				</div>
			</section>
			<section id="principal">
				<header><h2>Mise en place des media queries</h2></header>
				<div id="colonneG">
					<article>
						<h3>Mise en place des media queries</h3>
						<p>Les media queries font partie des nouveautés de CSS3. Il ne s'agit pas de nouvelles propriétés mais de règles que l'on peut appliquer dans certaines conditions. Concrètement, vous allez pouvoir dire « Si la résolution de l'écran du visiteur est inférieure à tant, alors applique les propriétés CSS suivantes ». Cela vous permet de changer l'apparence du site dans certaines conditions : vous pourrez augmenter la taille du texte, changer la couleur de fond, positionner différemment votre menu dans certaines résolutions, etc.
Contrairement à ce qu'on pourrait penser, les media queries ne concernent pas que les résolutions d'écran. Vous pouvez changer l'apparence de votre site en fonction d'autres critères comme le type d'écran (smartphone, télévision, projecteur…), le nombre de couleurs, l'orientation de l'écran (portrait ou paysage), etc. Les possibilités sont très nombreuses !</p>
						<p><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/test_responsive/steamMiya.jpg"/>Les media queries font partie des nouveautés de CSS3. Il ne s'agit pas de nouvelles propriétés mais de règles que l'on peut appliquer dans certaines conditions. Concrètement, vous allez pouvoir dire « Si la résolution de l'écran du visiteur est inférieure à tant, alors applique les propriétés CSS suivantes ». Cela vous permet de changer l'apparence du site dans certaines conditions : vous pourrez augmenter la taille du texte, changer la couleur de fond, positionner différemment votre menu dans certaines résolutions, etc.
Contrairement à ce qu'on pourrait penser, les media queries ne concernent pas que les résolutions d'écran. Vous pouvez changer l'apparence de votre site en fonction d'autres critères comme le type d'écran (smartphone, télévision, projecteur…), le nombre de couleurs, l'orientation de l'écran (portrait ou paysage), etc. Les possibilités sont très nombreuses !</p>
					</article>
					<article>
						<h3>Les règles disponibles</h3>
						<p>Comme vous le savez sûrement, les écrans des smartphones sont beaucoup moins larges que nos écrans habituels (seulement quelques centaines de pixels de large). Pour s'adapter, les navigateurs mobiles affichent le site en « dézoomant », ce qui permet d'avoir un aperçu de l'ensemble de la page. La zone d'affichage simulée est appelée le viewport : c'est la largeur de la fenêtre du navigateur sur le mobile.

En CSS, avec les media queries, si vous ciblez l'écran avec max-width sur un mobile, celui-ci va comparer la largeur que vous indiquez avec celle de son viewport. Le problème, c'est que le viewport change selon le navigateur mobile utilisé !</p>
						<p><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/test_responsive/gare.jpg" />JavaScript est régulièrement utilisé aujourd'hui pour faire de l'AJAX (Asynchronous JavaScript And XML). Cette technique permet de modifier une partie de la page web que le visiteur consulte en échangeant des données avec le serveur. Cela donne l'impression que les pages sont plus dynamiques et plus réactives. Le visiteur n'a plus besoin de recharger systématiquement toute la page.

Les navigateurs sont de plus en plus efficaces dans leur traitement de JavaScript, ce qui fait que les pages qui utilisent JavaScript sont de plus en plus réactives. On peut ainsi arriver aujourd'hui à créer des sites qui deviennent littéralement des applications web, l'équivalent de logiciels mais disponibles sous forme de sites web !
Un exemple célèbre : Google Docs, la suite bureautique de Google, disponible sur le Web (figure suivante)..</p>
					</article>
					<footer>
						<p>Tag d'articles</p>
							<span>Tag 1</span><span>Tag 2</span><span>Tag 3</span><span>Tag 4</span>
					</footer>
				</div>
				<div id="colonneD">
					<aside>
						<ul>
							<li><strong>item 1</strong><span>Alors que ce cours touche à sa fin.</span></li>
							<li><strong>item 2</strong><span>la tentation est grande de penser que l'on a tout vu.</span></li>
							<li><strong>item 3</strong><span>Tout vu ? Vous n'avez quand même pas cru cela.</span></li>
							<li><strong>item 4</strong><span>Allons bon, il vous reste des centaines de choses à découvrir.</span></li>
							<li><strong>item 5</strong><span>que ce soit sur HTML, CSS, ou les technologies qui y sont liées.</span></li>
							<li><strong>item 6</strong><span>Ce chapitre a pour but de vous donner.</span></li>
							<li><strong>item 7</strong><span>quelques directions pour compléter votre apprentissage.</span></li>
							<li><strong>item 8</strong><span>Alors ne soyez pas tristes.</span></li>
							<li><strong>item 9</strong><span>car vous n'avez pas fini de faire des découvertes !.</span></li>
							<li><strong>item 10</strong><span>JavaScript est un langage qui existe depuis de nombreuses années .</span></li>
						</ul>
					</aside>
				</div>
			</section>
			<footer id="final">
				<p id="textFooter"><span>{</span>On peut faire déjà beaucoup de choses en HTML et CSS mais, lorsqu'on veut rendre sa page plus interactive, un langage comme JavaScript devient indispensable.<span>}</span></p>
				<nav>
					<a href="#">contacter-nous</a>
					<span>|</span>
					<a href="#">agence</a>
					<span>|</span>
					<a href="#">mentions legales</a>
				</nav>
			</footer>
		</div>
	<?php get_footer(); ?>
