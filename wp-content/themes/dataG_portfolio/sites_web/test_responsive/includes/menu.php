<nav>
	<ul id="menu">
		<?php
			require_once("libs/cnx.php");
			$sql="SELECT * FROM menu where categorie='menu_top'";
			$req=mysqli_query($cnx,$sql) or die("erreur sur la requete de selection de menu");
			//compteur
			$i=0;
			while($data=mysqli_fetch_assoc($req))
			{
				if($i!=0)
				{
					echo '<li> | </li>';
				}
				echo '<li>'.$data['libelle'].'</li>';
				$i++;
			}
		?>
	</ul>
</nav>
