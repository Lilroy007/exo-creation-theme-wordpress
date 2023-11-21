<?php
add_image_size('panoramique', '1920', '700', true);

// Create Custom Post Types
function add_custom_post_types () {

$labels = array(
    'name' => 'Mon équipe',
    'singular_name' => 'Equipe',
    'add_new' => 'Ajouter un membre',
);

$args = array(
    'labels' => $labels,
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
    'menu_position' => 2,
    'menu_icon' => 'dashicons-groups',
    'rewrite' => array('slug' => 'equipe'),
);

register_post_type('team', $args);

$labels = array (
    'name' => 'Services',
);

$args = array (
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'hierarchical' => true, // Pour avoir des sous-catégories
);

register_taxonomy('services', 'team', $args);

}
// Hook pour l'ajout des custom post types
add_action('init', 'add_custom_post_types');