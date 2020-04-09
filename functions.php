<?php

function wks_files() {
    wp_enqueue_style('roboto-font', "//fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
    wp_enqueue_style('site_main_css', get_template_directory_uri() . '/style.min.css');
    wp_enqueue_script('site_main_js', get_template_directory_uri() . '/index.js', null, null, true);
}

add_action('wp_enqueue_scripts', 'wks_files');

function wks_features() {
    register_nav_menu('main_menu', 'Main menu');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wks_features');

function wks_post_types() {
    register_post_type('section', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'sekcja'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Sekcje',
            'add_new_item' => 'Dodaj nową sekcję',
            'edit_item' => 'Edytuj sekcję',
            'all_items' => 'Wszystkie sekcje',
            'singular_name' => 'Sekcja'
        ),
        'menu_icon' => 'dashicons-images-alt2'
    ));

    register_post_type('contact', array(
        'show_in_rest' => true,
        'supports' => array('title'),
        'rewrite' => array('slug' => 'kontakt'),
        'has_archive' => false,
        'public' => true,
        'labels' => array(
            'name' => 'Kontakt',
            'add_new_item' => 'Dodaj nową',
            'edit_item' => 'Edytuj stronę kontaktową',
            'all_items' => 'Wszystkie ',
            'singular_name' => 'Kontakt'
        ),
        'menu_icon' => 'dashicons-phone'
    ));

    register_post_type('documents', array(
        'show_in_rest' => true,
        'supports' => array('title'),
        'rewrite' => array('slug' => 'dokumenty'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Dokumenty',
            'add_new_item' => 'Dodaj nową',
            'edit_item' => 'Edytuj',
            'all_items' => 'Wszystkie ',
            'singular_name' => 'Dokument'
        ),
        'menu_icon' => 'dashicons-format-aside'
    ));

    register_post_type('sponsors', array(
        'show_in_rest' => true,
        'supports' => array('title'),
        'rewrite' => array('slug' => 'sponsorzy'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Sponsorzy',
            'new_item' => 'Dodaj sponsora',
            'edit_item' => 'Edytuj',
            'all_items' => 'Wszyscy sponsorzy ',
            'singular_name' => 'Sponsor'
        ),
        'menu_icon' => 'dashicons-images-alt'
    ));
}

add_action('init', 'wks_post_types');

function add_custom_loginpage_styleheet() {
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/style-login.css');
}

add_action('login_enqueue_scripts', 'add_custom_loginpage_styleheet');

//add SVG to allowed file uploads
// function add_file_types_to_uploads($file_types) {
//     $new_filetypes = array();
//     $new_filetypes['svg'] = 'image/svg';
//     $file_types = array_merge($file_types, $new_filetypes);

//     return $file_types;
// }
// add_action('upload_mimes', 'add_file_types_to_uploads');

require get_theme_file_path('/includes/utils.php');
require get_theme_file_path('/includes/sections-route.php');
require get_theme_file_path('/includes/sponsors-route.php');
require get_theme_file_path('/includes/walker.php');

add_theme_support('post-thumbnails');
add_image_size('footer-sponsor-logo', 9999, 90);
the_post_thumbnail('full');
