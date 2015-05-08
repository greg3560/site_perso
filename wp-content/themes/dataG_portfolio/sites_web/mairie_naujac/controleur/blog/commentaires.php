<?php
				require_once(__DIR__."/../../modele/blog/get_articles.php");
				require_once(__DIR__."/../../modele/blog/get_commentaires.php");
				require_once(__DIR__."/../../modele/blog/expressions_regulieres.php");
			
				if($dataCommentaires = get_commentaires(0, 200, $_GET["article"]))
				{
					$total = Count($dataCommentaires);
					if($total>=5)
					{
						$debut = $total-5;
					}
					else
					{
						$debut = 0;
					}
					$dataBillets = get_articles($_GET["article"]-1, 1);
					foreach($dataBillets as $cle => $dataBillet)
					{
						$dataBillets[$cle]["titre"] = expression_reguliere($dataBillet["titre"]);
						$dataBillets[$cle]["contenu"] = expression_reguliere($dataBillet["contenu"]);
					}
					$dataCommentaires = get_commentaires($debut, 5, $_GET["article"]);
					foreach($dataCommentaires as $cle => $dataCommentaire)
					{
						$dataCommentaires[$cle]["auteur"] = expression_reguliere($dataCommentaire["auteur"]);
						$dataCommentaires[$cle]["date"] = expression_reguliere($dataCommentaire["date"]);
						$dataCommentaires[$cle]["commentaire"] = expression_reguliere($dataCommentaire["commentaire"]);
					}
					require_once(__DIR__."/../../vue/blog/commentaires.php");
				}
				else
				{
					$dataArticles = get_articles($_GET["article"]-1, 1);
					foreach($dataArticles as $cle => $dataArticle)
					{
						$dataArticles[$cle]["titre"] = expression_reguliere($dataArticle["titre"]);
						$dataArticles[$cle]["contenu"] = expression_reguliere($dataArticle["contenu"]);
					}
					require_once(__DIR__."/../../vue/blog/sans_commentaire.php");
				}

