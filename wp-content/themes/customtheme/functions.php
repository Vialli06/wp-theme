<?php 

function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    // wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', false, true);
    // wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_js');

function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', false, true);
    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('html5',
array('comment-list','comment-form','search-form'));

register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu', 'theme' ),
        'footer-menu' => __( 'Footer Menu', 'theme' ),
    )
);

add_theme_support('post-thumbnails');

add_image_size('smallest',229,140,true);
add_image_size('largest',800,800,true);

register_post_type('project',
    array(
    'rewrite' => array('slug' => 'projects'),
    'labels' => array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'add_new_item' => 'Add new project',
        'edit_item' => 'Edit project'
    ),
    'menu-icon' => 'dashicons-clipboard',
    'public' => true,
    'has_archive' => true,
    'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
    )
))

?>