<nav>
		<?php
			/*require_once(__DIR__."/../libs/cnx.php");*/
			global $wpdb;
			$sql=$wpdb->get_results("SELECT * FROM gp_mud_menu where categorie='menu_top'");
			$req=mysqli_query($wpdb,$sql) or die("erreur sur la requete de selection de menu");
			//compteur
			while($data=mysqli_fetch_assoc($req))
			{ ?>
				<a href="<?php bloginfo('template_directory'); ?>/../../../<?= $data['src_menu'] ?>"><?= $data['libelle'] ?></a>
			<?php
			}
		?>
</nav>
