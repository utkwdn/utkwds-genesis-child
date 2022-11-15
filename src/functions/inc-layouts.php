<?php 

 //* Register new, custom layout
 genesis_register_layout( 'content-bottom-sidebars', array(
	'label' => 'Max Width, No Sidebars',
	'img' => get_stylesheet_directory_uri() . '/images/max-width-thumb.gif',
) );

//* Include template
add_action( 'template_include', 'content_bottom_sidebars_template', 9999 );
function content_bottom_sidebars_template( $template ) {

	$layout = genesis_site_layout();

	if ( $layout == 'content-bottom-sidebars' ) {

		$template = locate_template( array( 'template-nosidebar.php' ) );

	}

	return $template;

}



// Add layout options back in on archive pages
if ( function_exists( 'genesis_add_type_to_layout' ) ) {
	genesis_add_type_to_layout( 'content-sidebar', [ 'category', 'post_tag' ] );
	genesis_add_type_to_layout( 'sidebar-content', [ 'category', 'post_tag' ] );
	genesis_add_type_to_layout( 'full-width-content', [ 'category', 'post_tag' ] );
}




// Kill the two side-bar layouts
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

unregister_sidebar( 'sidebar-alt' );