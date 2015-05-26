<?php
/**
 * Template Name: Sitemap
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<div class="one_half">
				

				<h3 class="page-title"><?php _e( 'Auteur(s)', 'lan-thinkupthemes'); ?>:</h3>
				<ul class="sitemap-authors">
					<?php wp_list_authors( 'optioncount=1' ); ?>
				</ul>
			</div> 
		 
			<div class="one_half last">
				<h3 class="page-title"><?php _e( 'Articles', 'lan-thinkupthemes'); ?>:</h3>
				<ul class="sitemap-posts">
					<?php $args=array(
					           'orderby' => 'name',
					           'pad_counts' => '1'
						  );

					$cats = get_categories( $args );
					foreach ( $cats as $cat ) {

					 $loop = new WP_Query('posts_per_page=-1&cat='.$cat->cat_ID);

					  echo '<li class="category"><a href="' . get_category_link($cat->term_id) . '">' . __( 'Catégorie:', 'lan-thinkupthemes' ) . ' ' . $cat->cat_name . ' (' . $cat->category_count . ')' . "\n";
					  echo '<ul class="children">'."\n";
					  while($loop->have_posts() ) : $loop->the_post();
						 $category = get_the_category();
					?>
							<li><a href="<?php the_permalink() ?>"  title="Permanent Link to: <?php the_title(); ?>">
							<?php the_title(); ?></a></li>
					   <?php endwhile; wp_reset_query(); ?>
					  </ul>
					  </li>
					<?php } ?>
				</ul>
				<?php
				wp_reset_query();
				?>

				<h3 class="page-title"><?php _e( 'Archives', 'lan-thinkupthemes'); ?>:</h3>
				<ul class="sitemap-archives">
					<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
				</ul>
			</div>

<?php get_footer(); ?>