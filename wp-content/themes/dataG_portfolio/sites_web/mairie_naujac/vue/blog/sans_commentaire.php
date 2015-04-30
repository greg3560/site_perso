<div id="bloc_page">
			<nav>
				<ul class="top_menu">
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
							foreach($dataArticles as $dataArticle)
							{
						?>
						<em><a href="index.php?section=index">Retour à la liste des billets</a></em>
						<h3>
							<?php echo $dataArticle["titre"]; ?>
							<em>le <?php echo $dataArticle["date"]; ?></em>
						</h3>
						<p>
							<img src="img/<?php echo $dataArticle["src"]; ?>" alt="photo a la une" />
							<?php echo $dataArticle["contenu"]; ?>
							<br />
						</p>
					
					<?php
							}
					?>
					</div>
					<div class="commentaires">
						<p>
							<?php echo ("Il n'y a pas de commentaires pour ce billet."); ?>
						</p>
					</div>
					<div class="ajoutCommentaire">
						<form method="post" action="blog.php?section=commentaires&billet=<?php echo $_GET["article"]; ?>">
							<table>
								<tr>
									<td><label>Pseudo:</label></td>
									<td><input type="text" name="pseudo" class="search"/></td>
								</tr>
								<tr>
									<td><label>Commentaire:</label></td>
									<td><textarea name="commentaire" id="naujac_textarea"></textarea></td>
								</tr>
								<tr>
									<td><input type="submit" value="Envoyer" class="search"/></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<aside id="sidebar">
				<div id="en_un_clic">
				<h3>DERNIERS MESSAGES</h3>
				<ul class="horizontalNav">
					<?php
							foreach($dataArticleDates as $dataArticleDate)
							{
						?>
						<li><a href="#">
							<?php echo $dataArticleDate["titre"]; ?>
							<em>le <?php echo $dataArticleDate["date"]; ?></em>
						</a></li>
					<?php
							}
					?>
				</ul>
				</div>
			</aside>
			</div>
		</div>
		<footer id="footer">
				<h5>Mairie de Naujac sur mer</h5>
			<div id="contact">
				<h6>POUR NOUS CONTACTER:</h6>
				<p>1 place du 11 Novembre</p>
				<p>33990 NAUJAC-SUR-MER</p>
				<p>Tél : 05 56 73 00 55</p>
			</div>
			<div id="horaires">
				<h6>HORAIRES D'OUVERTURE :</h6>
				<p>du lundi au vendredi de 8h30 à 12h30</p>
				<p>et de 13h30 à 18h.</p>
			</div>
			<div id="logo">
				<img src="img/logo.jpg" id="logo_image" alt="logo" />
			</div>
		</footer>

