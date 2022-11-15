<?php 

/**
 * Registers block categories, and type.
 *
 * (Stole this from utkchancellor)
 */
function utkchancellor_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'utkchancellor', array( 'label' => __( 'utkchancellor', 'utkchancellor' ) ) );
	}

	$block_pattern_categories = array(
		'utkchancellor-general' => array(
			'label'         => __( 'Chancellor', 'utkchancellor' ),
			'categoryTypes' => array( 'utkchancellor' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'utkchancellor_register_block_pattern_categories', 9 );