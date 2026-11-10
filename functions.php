
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

    wp_enqueue_style(
        'techtitans-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'techtitans_styles');
