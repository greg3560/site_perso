<?php
// enqueue javascript
 
function theme_js()
{
	wp_enqueue_script( 'blog',
	get_template_directory_uri() . '/../dataG_portfolio/js/blog.js',
	array() );
}
 
add_action( 'wp_footer', 'theme_js' );

//suppression concernant les balise html dans les commentaires
function _no_comment_notes_after($defaults) {
    $defaults['comment_notes_after'] = '';
    return $defaults;
}
add_filter('comment_form_defaults', '_no_comment_notes_after');

// Input 'Read more' link
function dataG_input_readmore() {
global $post;
	printf( '<p><a href="%1$s" class="more-link themebutton2">' . __( 'Lire la suite', 'lan-thinkupthemes') . '</a></p>',
		get_permalink($post->ID)
	);
}

// HTML for Author Bio
function dataG_input_postauthorbiocode() {

	echo	'<div id="author-bio">',
			'<div id="author-title">',
			'<h3>À propos de l\'auteur: <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '"/>' . get_the_author() . '</a></h3>',
			'<span class="sep"><span class="sep-core"></span></span>',
			'</div>',
			'<div id="author-image" class="one_sixth">',
			get_avatar( get_the_author_meta( 'email' ), '90' ),
			'</div>',
			'<div id="author-text" class="five_sixth last">',
			wpautop( get_the_author_meta( 'description' ) ),
			'</div>',
			'</div>';
}

// Output Author Bio
function dataG_input_postauthorbio() {
global $thinkup_post_authorbio;

	dataG_input_postauthorbiocode();
}

?>
