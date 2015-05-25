<div id="bloc_page">
			<?php
				foreach($dataBillets as $dataBillet)
				{
			?>
			<div class="news">
				<em><a href="./?section=index">Retour à la liste des billets</a></em>
				<h3>
					<img class="naujac_img" class="image_article" src="<?php echo get_stylesheet_directory_uri(); ?>/img/naujac/<?php echo $dataBillet['src']; ?>" alt="image article" />
					<?php echo $dataBillet["titre"]; ?>
					<em>le <?php echo $dataBillet["date"]; ?></em>
				</h3>
				<p>
					<?php echo $dataBillet["contenu"]; ?>
					<br />
				</p>
			</div>
			<?php
				}
				?>
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
		

