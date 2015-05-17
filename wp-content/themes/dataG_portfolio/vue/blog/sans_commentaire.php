<div id="bloc_page">
			<div id="main">
				<div id="contenu">
					<div class="la_une">
						<?php
							foreach($dataArticles as $dataArticle)
							{
						?>
						<em><a href="./?section=index">Retour à la liste des billets</a></em>
						<h3>
							<?php echo $dataArticle["titre"]; ?>
							<em>le <?php echo $dataArticle["date"]; ?></em>
						</h3>
						<p>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/naujac/<?php echo $dataArticle["src"]; ?>" alt="photo a la une" />
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
						<form method="post" action="./?section=commentaires&billet=<?php echo $_GET["article"]; ?>">
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
				
			</div>
		</div>
		

