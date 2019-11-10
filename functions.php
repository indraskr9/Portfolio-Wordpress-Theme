<?php
add_theme_support('admin-bar', array('callback' => '__return_false')); // to remove default margin-top
add_theme_support('post-thumbnails');
function custom_theme_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');
register_nav_menus(['primary' => __('Primary Menu')]);

