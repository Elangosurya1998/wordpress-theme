<?php

// Register theme assets (CSS & JS)
function my_theme_enqueue_assets(): void
{
    // Enqueue Styles
    wp_enqueue_style('theme-common', get_template_directory_uri() . '/css/common.css', [], '1.0');

    // Enqueue Scripts
    wp_enqueue_script('theme-common-js', get_template_directory_uri() . '/js/common.js', ['jquery'], '1.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// Theme Support (optional)
function my_theme_setup(): void
{
    // Enable title tag support
    add_theme_support('title-tag');

    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add custom navigation menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'my-theme'),
    ]);
}

add_action('after_setup_theme', 'my_theme_setup');