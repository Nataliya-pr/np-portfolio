<?php
/*
Adding post types
*/

add_action( 'init', 'np_add_portfolio', 0 );

function np_add_portfolio() {

    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post Type General Name', 'np-portfolio' ),
        'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'np-portfolio' ),
        'menu_name'             => __( 'Portfolio', 'np-portfolio' ),
		'name_admin_bar'        => __( 'Post Type', 'np-portfolio' ),
		'archives'              => __( 'Item Archives', 'np-portfolio' ),
		'attributes'            => __( 'Item Attributes', 'np-portfolio' ),
		'parent_item_colon'     => __( 'Parent Item:', 'np-portfolio' ),
		'all_items'             => __( 'All Items', 'np-portfolio' ),
		'add_new_item'          => __( 'Add New Item', 'np-portfolio' ),
		'add_new'               => __( 'Add New', 'np-portfolio' ),
		'new_item'              => __( 'New Item', 'np-portfolio' ),
		'edit_item'             => __( 'Edit Item', 'np-portfolio' ),
		'update_item'           => __( 'Update Item', 'np-portfolio' ),
		'view_item'             => __( 'View Item', 'np-portfolio' ),
		'view_items'            => __( 'View Items', 'np-portfolio' ),
		'search_items'          => __( 'Search Item', 'np-portfolio' ),
		'not_found'             => __( 'Not found', 'np-portfolio' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'np-portfolio' ),
		'featured_image'        => __( 'Featured Image', 'np-portfolio' ),
		'set_featured_image'    => __( 'Set featured image', 'np-portfolio' ),
		'remove_featured_image' => __( 'Remove featured image', 'np-portfolio' ),
		'use_featured_image'    => __( 'Use as featured image', 'np-portfolio' ),
		'insert_into_item'      => __( 'Insert into item', 'np-portfolio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'np-portfolio' ),
		'items_list'            => __( 'Items list', 'np-portfolio' ),
		'items_list_navigation' => __( 'Items list navigation', 'np-portfolio' ),
		'filter_items_list'     => __( 'Filter items list', 'np-portfolio' ),
    );
    $args = array(
        'label'                 => __( 'Portfolio', 'np-portfolio' ),
        'description'           => __( 'My work samples', 'np-portfolio' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail',),
        'taxonomies'            => array( '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-images-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => false,

    );
    register_post_type( 'np_portfolio', $args );

}
