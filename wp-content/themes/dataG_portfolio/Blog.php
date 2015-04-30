<?php 
/* 
Template Name: blog 
*/

get_header();

get_page_template();

?>

<article id="post-<?php the_ID(); ?>" class="post" >

	<header class="entry-header">

		<h2 class="search-title">

		<?php echo '<a href="' . get_permalink() . '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'lan-thinkupthemes' ), the_title_attribute( 'echo=0' ) ) ) . '">' . get_the_title() . '</a>'; ?>

		</h2>

	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

	<?php else : ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
	<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php thinkup_input_nav( 'nav-below' ); ?>

				<?php thinkup_input_allowcomments(); ?>

			<?php endwhile; wp_reset_query(); ?>


			
		

<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=5');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<?php the_excerpt(); ?> 
<?php the_date(); ?> 
<?php the_category(); ?> 
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; ?>




		
			

		
		







<?php get_footer(); ?>
