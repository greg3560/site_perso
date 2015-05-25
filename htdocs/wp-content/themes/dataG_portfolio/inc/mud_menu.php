<nav>
		<?php
			global $wpdb;
			$sql=$wpdb->get_results("SELECT * FROM gp_mud_menu where categorie='menu_top'");
			
			foreach($sql as $data)
			{ ?>
				<a href="<?php echo get_stylesheet_directory_uri(); ?>../../../../<?= $data->src_menu ?>"><?= $data->libelle ?></a>
			<?php
			}
		?>
</nav>
