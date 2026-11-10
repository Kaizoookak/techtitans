<?php

function techtitans_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'techtitans_setup');

function techtitans_styles() {

    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        array(),
        '6.5.2'
    );

    // filemtime() makes the browser load the newest CSS/JS after every deploy
    wp_enqueue_style(
        'techtitans-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    wp_enqueue_script(
        'techtitans-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        filemtime( get_template_directory() . '/js/main.js' ),
        true
    );
}

add_action('wp_enqueue_scripts', 'techtitans_styles');
