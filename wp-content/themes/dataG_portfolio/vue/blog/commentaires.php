<div id="bloc_page">
			<?php
				foreach($dataBillets as $dataBillet)
				{
			?>
			<div class="news">
				<em><a href="./?section=index">Retour à la liste des billets</a></em>
				<h3>
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
				foreach($dataCommentaires as $dataCommentaire)
				{
			?>
			<div class="commentaires">
				<h3>
					<strong><?php echo $dataCommentaire["auteur"]; ?></strong>
					<em>le <?php echo $dataCommentaire["date"]; ?></em>
				</h3>
				<p>
					<?php echo $dataCommentaire["commentaire"]; ?>
				</p>
			</div>
			<?php
				}
			?>
			<div class="ajoutCommentaire">
				<form method="post" action="./?section=set_commentaire&article=<?php echo $_GET['article']; ?> ">
					<table>
						<tr>
							<td><label>Pseudo:</label></td>
							<td><input type="text" name="naujac_pseudo" class="search" /></td>
						</tr>
						<tr>
							<td><label>Commentaire:</label></td>
							<td><textarea name="naujac_commentaire" id="naujac_textarea"></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" value="Envoyer" class="search"/></td>
						</tr>
					</table>
			</div>
		</div>
