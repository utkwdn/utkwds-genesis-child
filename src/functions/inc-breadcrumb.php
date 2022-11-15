<?php 


// This removes several of the weird lables that are set in default
// It also modifies the HTML so that it's like Bootstrap's

add_filter( 'genesis_breadcrumb_args', 'gk_prefix_author_breadcrumb' );
function gk_prefix_author_breadcrumb( $args ) {
    $args['prefix'] = '<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item">';
    $args['suffix'] = '</li></ul></nav>';
    $args['sep'] = '</li><li class="breadcrumb-item">';
    $args['labels']['prefix'] = ''; 
    $args['labels']['author'] = 'Posts By ';
    $args['labels']['category'] = ' '; 
    $args['labels']['tag'] = ' ';
    $args['labels']['date'] = ' ';
    $args['labels']['search'] = ' ';
    $args['labels']['tax'] = ' ';
    $args['labels']['post_type'] = ' ';
    return $args;
}