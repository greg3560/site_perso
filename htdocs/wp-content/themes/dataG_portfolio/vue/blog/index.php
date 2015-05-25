
		<header id="naujac_header">
			<ul class="rslides">
			  <li><img class="naujac_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/naujac/bord_de_mer.jpg" alt=""></li>
			  <li><img class="naujac_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/naujac/dune.jpg" alt=""></li>
			  <li><img class="naujac_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/naujac/lac.jpg" alt=""></li>
			</ul>
		</header>
		<div id="naujac_bloc_page">
			<nav id="naujac_nav">
				<ul class="naujac_top_menu">
					<li><a href="#">MAIRIE</a></li>
					<li><a href="#">HISTORIQUE</a></li>
					<li><a href="#">NAUJAC ET LE CONSEIL</a></li>
					<li><a href="#">lA VIE ECONOMIQUE</a></li>
					<li><a href="#">VIVRE ICI</a></li>
					<li><a href="#">SPORTS & LOISIRS</a></li>
					<li><a href="#">CULTURE ET PATRIMOINE</a></li>
				</ul>
			</nav>
			<div id="main">
			<div id="contenu">
				<div class="la_une">
				<?php
					foreach($dataArticlesolos as $dataArticlesolo)
					{
				?>
					<h3 class="naujac-h3">
						<?php echo $dataArticlesolo["titre"]; ?>
						<em>le <?php echo $dataArticlesolo["date"]; ?></em>
					</h3>
					<p>
						<img class="naujac_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/naujac/<?php echo $dataArticlesolo['src']; ?>" alt="photo a la une" />
						<?php echo $dataArticlesolo["contenu"]; ?>
						<br />
					</p>
				<?php
					}
				?>
				</div>
				<ul class="naujac_ul">
				<h3 class="naujac-h3">ACTUALITÉS</h3>
				<?php	
					foreach($dataArticles as $dataArticle)
					{
				?>
				<li class="article">
					<h4 class="naujac_h4">
						<a href="./?article=<?php echo $dataArticle['id']; ?>&section=article"><?php echo $dataArticle["titre"]; ?></a><br />
						<em>le <?php echo $dataArticle["date"]; ?></em>
					</h4>
					<img class="naujac_img" class="image_article" src="<?php echo get_stylesheet_directory_uri(); ?>/img/naujac/<?php echo $dataArticle['src']; ?>" alt="image article" />
					<p>
						<?php echo $dataArticle["contenu"]; ?>
						<br />
					</p>
				</li>
						<em class="lire_la_suite"><a href="./?article=<?php echo $dataArticle['id']; ?>&section=article">Lire la suite</a></em>
				<?php
					}
				?>
				</ul>
				<ul id="date">
				<h3 id="agenda">AGENDA</h3>
				<?php	
					$i=0;
					foreach($dataAgendas as $dataAgenda)
					{
				?>
				<div class="date_evenement" onClick="openDiv('modif<?php echo $i ?>')">le <?php echo $dataAgenda["date"]; ?></div><span class="<?php echo $dataAgenda['label']; ?>"><?php echo $dataAgenda['categories']; ?></span><br />
				<li class="modif" id="modif<?php echo $i ?>">
					<h4 class="naujac_h4">
						
						<span class="<?php echo $dataAgenda['label']; ?>"><?php echo $dataAgenda['categories']; ?></span>
					</h4>
					<p>
						<?php echo $dataAgenda["evenement"]; ?>
						<br />
					</p>
				</li>
				<?php
					$i++;
					}
				?>
				</ul>
				</div>
			<aside id="naujac_sidebar">
				<div id="recherche">
					<label for="search">Recherche:</label><input type="text" name="search" class="search" />
					<input id="submit_recherche" type="submit" value="OK" class="search"/>
				</div>
				<div id="en_un_clic">
				<h3 class="naujac-h3">EN UN CLIC</h3>
				<ul class="horizontalNav">
					<li class="oneClic1"><a href="#"><span>Plage</span></a></li>
					<li class="oneClic2"><a href="#"><span>Annuaire</span></a></li>
					<li class="oneClic3"><a href="#" accesskey="7"><span>Contact</span></a></li>
					<li class="oneClic4"><a href="#"><span>Webcam</span></a></li>
					<li class="oneClic5"><a href="#"><span>Photos</span></a></li>
					<li class="oneClic6"><a href="#"><span>Plan</span></a></li>
				</ul>
				</div>
				<div id="newsletter">
				<h3 class="naujac-h3">NEWSLETTER</h3>
					<label for="search">Votre courriel (courriel@domaine.fr)</label><input type="text" name="search" class="search" />
					<input type="submit" value="S'inscrire" id="inscription" class="search"/>
				</div>
			</aside>
			</div>
		</div>
		<footer id="naujac_footer">
				<h5 class="naujac_h5">Mairie de Naujac sur mer</h5>
			<div id="contact">
				<h6 class="naujac_h6">POUR NOUS CONTACTER:</h6>
				<p>1 place du 11 Novembre</p>
				<p>33990 NAUJAC-SUR-MER</p>
				<p>Tél : 05 56 73 00 55</p>
			</div>
			<div id="horaires">
				<h6 class="naujac_h6">HORAIRES D'OUVERTURE :</h6>
				<p>du lundi au vendredi de 8h30 à 12h30</p>
				<p>et de 13h30 à 18h.</p>
			</div>
			<div id="naujac_logo">
				<img class="naujac_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/naujac/logo.jpg" id="logo_image" alt="logo" />
			</div>
		</footer>


