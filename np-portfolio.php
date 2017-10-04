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
