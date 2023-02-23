<?php 

// menus
function wp_media_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'WP-Media')
    ));
}
add_action('init', 'wp_media_menus');

// styles and scripts
function wp_media_scripts_styles() {
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'wp_media_scripts_styles');