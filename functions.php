<?php

// Add CSS, JS files

function dbat_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, '1.0');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'dbat_setup');

// Theme support

function dbat_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'dbat_init');

// Profject post type

function dbat_custom_post_type() {
    register_post_type('project',
    array(
        'rewrite' => array('slug' => 'podcastek'),
        'labels' => array(
            'name' => 'Podcastek',
            'singular_name' => 'Podcast',
            'add_new_item' => 'Podcast hozzáadása',
            'edit_item' => 'Podcast szerkesztése'
        ),
        'menu-icon' => 'dashicons-video-alt',
        'public' => true,
        'has_achive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
    )
        );
}

add_action('init', 'dbat_custom_post_type');

// Sidebar

function dbat_widgets(){
    register_sidebar(
    array(
        'name' => 'Main Sidebar',
        'id' => 'main_sidebar',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    )
    );
}

add_action('widgets_init', 'dbat_widgets');


// Filters

function search_filter($query){
    if($query->is_search()){
        $query->set('post_type', array('post','project'));
    }
}

add_filter('pre_get_posts', 'search_filter');