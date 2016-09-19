<?php

get_header(); ?>

<?php if ( function_exists('yoast_breadcrumb') ) : ?>
	<?php yoast_breadcrumb('<div id="mks-breadcrumbs" class="container mks-bredcrumbs-container"><p id="breadcrumbs">','</p></div>'); ?>
<?php endif; ?>

<div id="content" class="container site-content">

	<?php global $vce_sidebar_opts; ?>
	<?php if ( $vce_sidebar_opts['use_sidebar'] == 'left' ) { get_sidebar(); } ?>
		
	<div id="primary" class="vce-main-content">
		
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

	</div>

	<?php if ( $vce_sidebar_opts['use_sidebar'] == 'right' ) { get_sidebar(); } ?>

</div>

<?php get_footer(); ?>