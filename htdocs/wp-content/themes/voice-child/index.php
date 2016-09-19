<?php

get_header(); ?>

<?php if ( function_exists('yoast_breadcrumb') ) : ?>
	<?php yoast_breadcrumb('<div id="mks-breadcrumbs" class="container mks-bredcrumbs-container"><p id="breadcrumbs">','</p></div>'); ?>
<?php endif; ?>

<div id="content" class="container site-content">

	<?php global $vce_sidebar_opts; ?>

	<?php if ( $vce_sidebar_opts['use_sidebar'] == 'left' ) { get_sidebar(); } ?>

		
	<div id="primary" class="vce-main-content">
<?php echo do_shortcode("[huge_it_videogallery id='1']");
		echo '<br/>'; ?>
<iframe width="850" height="315" src="https://www.youtube.com/embed/A_Feb8_lIAY" frameborder="0" allowfullscreen></iframe>

		<div class="main-box">

			
				<div class="main-box-head">
					<h1 class="main-box-title">A la une</h1>
				</div>
				<div class="main-box-inside">
					<div class="vce-loop-wrap">
						<div class="meta-image">
						<a href="http://localhost/plailly/htdocs/index.php/2016/02/17/369/" title="Article à la une"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/affiche_halloween.jpg" /></a>
						</div>
					</div>
				</div>

		</div>
		
	

		<div class="main-box">

			<?php get_template_part('sections/archive-title'); ?>

			<div class="main-box-inside">
			
			<?php if ( have_posts() ) : ?>
				
				<div class="vce-loop-wrap">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'sections/loops/layout-'.vce_get_archive_layout()); ?>
				<?php endwhile; ?>
				</div>
				<?php get_template_part( 'sections/pagination/'.vce_get_archive_pagination()); ?>

			<?php else: ?>
				
				<?php get_template_part( 'sections/content-none'); ?>

			<?php endif; ?>
			

			</div>

		</div>
		<div class="main-box">

			<?php get_template_part('../voice-child/archive-title'); ?>

			<div class="main-box-inside">
			
			<?php if ( have_posts() ) : ?>
				
				<div class="vce-loop-wrap">
				<?php query_posts('category_name=alaune'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'sections/loops/layout-'.vce_get_archive_layout()); ?>
				<?php endwhile; ?>
				</div>
				<?php get_template_part( 'sections/pagination/'.vce_get_archive_pagination()); ?>

			<?php else: ?>
				
				<?php get_template_part( 'sections/content-none'); ?>

			<?php endif; ?>
			

			</div>

		</div>

	</div>

	<?php if ( $vce_sidebar_opts['use_sidebar'] == 'right' ) { get_sidebar(); } ?>



		


</div>
<?php get_footer(); ?>
