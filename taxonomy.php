<?php
/*
Adding taxonomies
*/

add_action( 'init', 'np_add_activity', 0 );

function np_add_activity() {

    $labels = array(
        'name'                       => _x( 'Activities', 'Taxonomy General Name', 'np-portfolio' ),
        'singular_name'              => _x( 'Activity', 'Taxonomy Singular Name', 'np-portfolio' ),
        'menu_name'                  => __( 'Activities', 'np-portfolio' ),
        'all_items'                  => __( 'All Activities', 'np-portfolio' ),
        'parent_item'                => __( 'Parent Activity', 'np-portfolio' ),
        'parent_item_colon'          => __( 'Parent Activity:', 'np-portfolio' ),
        'new_item_name'              => __( 'New Activity Name', 'np-portfolio' ),
        'add_new_item'               => __( 'Add New Activity', 'np-portfolio' ),
        'edit_item'                  => __( 'Edit Activity', 'np-portfolio' ),
        'update_item'                => __( 'Update Activity', 'np-portfolio' ),
        'view_item'                  => __( 'View Activity', 'np-portfolio' ),
        'separate_items_with_commas' => __( 'Separate Activities with commas', 'np-portfolio' ),
        'add_or_remove_items'        => __( 'Add or remove Activities', 'np-portfolio' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'np-portfolio' ),
        'popular_items'              => __( 'Popular Activities', 'np-portfolio' ),
        'search_items'               => __( 'Search Activities', 'np-portfolio' ),
        'not_found'                  => __( 'Not Found', 'np-portfolio' ),
        'no_terms'                   => __( 'No Activities', 'np-portfolio' ),
        'items_list'                 => __( 'Activities list', 'np-portfolio' ),
        'items_list_navigation'      => __( 'Activities list navigation', 'np-portfolio' ),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => false,
    );

    register_taxonomy( 'np_activity', array( 'np_portfolio' ), $args );
}
