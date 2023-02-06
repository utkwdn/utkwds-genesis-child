<?php 

add_filter( 'allowed_block_types_all', 'utkchancellor_disable_blocks' );
 
function utkchancellor_disable_blocks( $allowed_blocks ) {
	// get all the registered blocks
	$blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

	// then disable some of them
	unset( $blocks[ 'core/verse' ] );
	unset( $blocks[ 'core/calendar' ] );
	//unset( $blocks[ 'core/cover' ] );
	unset( $blocks[ 'core/preformatted' ] );
	unset( $blocks[ 'core/pullquote' ] );
	// unset( $blocks[ 'core/separator' ] );
	unset( $blocks[ 'core/tag-cloud' ] );
	unset( $blocks[ 'core/search' ] );
	//unset( $blocks[ 'core/columns' ] );
	//unset( $blocks[ 'core/column' ] );
	//unset( $blocks[ 'core/navigation' ] );
	unset( $blocks[ 'core/site-logo' ] );
	unset( $blocks[ 'core/site-title' ] );
	unset( $blocks[ 'core/site-tagline' ] );
	unset( $blocks[ 'core/avatar' ] );
	unset( $blocks[ 'core/post-title' ] );
	unset( $blocks[ 'core/post-excerpt' ] );
	unset( $blocks[ 'core/comments-query-loop' ] );
	unset( $blocks[ 'core/post-comments-form' ] );
	unset( $blocks[ 'core/loginout' ] );
	unset( $blocks[ 'core/term-description' ] );
	//unset( $blocks[ 'core/media-tex' ] );

	// return the new list of allowed blocks
	return array_keys( $blocks );
	
}