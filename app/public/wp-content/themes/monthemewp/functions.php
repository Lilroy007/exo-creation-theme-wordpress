<?php
add_theme_support('post-thumbnails');

function add_styles() {
    $theme_path = get_stylesheet_directory_uri();
    wp_enqueue_style( 'style', $theme_path . '/style.css' );

}
//HOOK
add_action('wp_enqueue_scripts', 'add_styles');