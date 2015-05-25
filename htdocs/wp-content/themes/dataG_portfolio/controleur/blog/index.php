<?php
				require_once(__DIR__."/../../modele/blog/get_articles.php");
				require_once(__DIR__."/../../modele/blog/get_agenda.php");
				require_once(__DIR__."/../../modele/blog/expressions_regulieres.php");
				$billetsParPage=5;
				//on compte le nombre de pages
				$total=get_articles(0, 200);
				$nombreDeBillets=count($total);
				$nombreDePages=$nombreDeBillets/$billetsParPage;
				if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
				{
     					$pageActuelle=intval($_GET['page']);
 
     					if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     					{
         					 $pageActuelle=$nombreDePages;
     					}
				}
				else // Sinon
				{
     					$pageActuelle=1; // La page actuelle est la n°1    
				}
				$premiereEntree=($pageActuelle-1)*$billetsParPage;
				$dataArticlesolos=get_articles(0, 1);
				
				foreach($dataArticlesolos as $cle => $dataArticlesolo)
				{
					$dataArticlesolos[$cle]["titre"] = expression_reguliere($dataArticlesolo["titre"]);
					$dataArticlesolos[$cle]["contenu"] = expression_reguliere($dataArticlesolo["contenu"]);
					
				}
				$dataArticles=get_articles($premiereEntree+1, 4);

				foreach($dataArticles as $cle => $dataArticle)
				{
					$dataArticles[$cle]["titre"] = expression_reguliere($dataArticle["titre"]);
					$dataArticles[$cle]["contenu"] = expression_reguliere($dataArticle["contenu"]);
					
				}
				$dataAgendas=get_agenda(0, 19);
				foreach($dataAgendas as $cle => $dataAgenda)
				{
					$dataAgendas[$cle]["evenement"] = expression_reguliere($dataAgenda["evenement"]);
					$dataAgendas[$cle]["mois"] = expression_reguliere($dataAgenda["mois"]);
					$dataAgendas[$cle]["date"] = $dataAgenda["date"];
					$dataAgendas[$cle]["categories"] = $dataAgenda["categories"];
					$dataAgendas[$cle]["label"] = $dataAgenda["label"];
					
				}
				require_once(__DIR__."/../../vue/blog/index.php");

