<?php


//* Add landing body class to the head
add_filter( 'body_class', 'minimum_add_body_class' );
function minimum_add_body_class( $classes ) {

	$classes[] = 'minimum-landing';
	return $classes;

}

//* Force full width content layout
// add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Remove navigation
remove_action( 'genesis_after_header', 'genesis_do_nav', 15 );
remove_action( 'genesis_footer', 'genesis_do_subnav', 7 );

//* Remove site footer widgets
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

//* Remove site footer elements
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );

//* Run the Genesis loop
genesis();