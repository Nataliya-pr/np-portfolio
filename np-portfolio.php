<?php

/*
Plugin Name: Portfolio Plugin by Nataliya
Plugin URI: https://np-portfolio.com/
Description: Portfolio Plugin for Courses WP
Version: 1.0
Author: Nataliya
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: np-portfolio
*/


require_once plugin_dir_path(__FILE__) . 'post_types.php';
require_once plugin_dir_path(__FILE__) . 'taxonomy.php';
require_once plugin_dir_path(__FILE__) . 'metabox.php';
require_once plugin_dir_path(__FILE__) . 'widgets.php';


add_action('admin_enqueue_scripts', 'np_admin_scripts');

function np_admin_scripts() {
  wp_enqueue_script('jquery-ui-datepicker');
  wp_enqueue_script('np-admin', plugin_dir_url(__FILE__) . 'js/admin.js');
  wp_enqueue_style('np-datepicker-style', '//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css');
}

// add columns
add_filter( 'manage_posts_columns' , 'np_posts_columns2' );

function np_posts_columns2( $columns ) {
    $columns['date_column'] = __( 'Date column', 'np-portfolio' );
    $columns['link_column'] = __( 'Link column', 'np-portfolio' );

    return $columns;
}

add_action( 'manage_posts_custom_column' , 'np_posts_columns_content2', 10, 2 );

function np_posts_columns_content2( $column, $post_id ) {
    if ($column == 'date_column') {
        // echo get_the_date( $d = '', $post_id ); // выводит дату публикации самого поста

        echo get_post_meta(get_the_ID(), '_np_portfolio_date', true); // выводит дату, указанную в кастомном поле
    }
    if ($column == 'link_column') {
        // echo get_the_date( $d = '', $post_id ); // выводит дату публикации самого поста

        echo '<a href="http://'. get_post_meta(get_the_ID(), '_np_portfolio_link', true) . '" target="_blank">'. get_post_meta(get_the_ID(), '_np_portfolio_link', true) .'</a>'  ;; // выводит дату, указанную в кастомном поле
    }
}