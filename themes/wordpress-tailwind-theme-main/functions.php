<?php

/**
 * Theme functions and definitions
 */

// Theme setup
function tailwind_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tailwind-theme'),
        'footer' => __('Footer Menu', 'tailwind-theme'),
    ));
}
add_action('after_setup_theme', 'tailwind_theme_setup');

// Handle theme assets with live reload
function tailwind_theme_assets()
{
    // Check if we're in development (any localhost)
    if (is_development()) {
        // DEVELOPMENT: Load Vite with HMR
        $vite_url = 'http://localhost:3000';
        
        // Load Vite client first
        wp_enqueue_script('vite-client', $vite_url . '/@vite/client', [], null, false);
        add_filter('script_loader_tag', 'add_type_module_to_vite', 10, 3);
        
        // Load the CSS entry point as a module - this enables HMR
        wp_enqueue_script('vite-css', $vite_url . '/assets/input.css', ['vite-client'], null, false);
    } else {
        // PRODUCTION: Use built CSS file
        wp_enqueue_style('output', get_template_directory_uri() . '/dist/output.css', [], '1.0.0');
    }

    // Load main.js normally (not through Vite)
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
}
add_action('wp_enqueue_scripts', 'tailwind_theme_assets');

// Add type="module" to Vite scripts
function add_type_module_to_vite($tag, $handle, $src)
{
    if (strpos($handle, 'vite') === 0) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}

// Check if we're in development environment
function is_development()
{
    $host = $_SERVER['HTTP_HOST'] ?? '';

    // Works with any localhost subdirectory:
    return strpos($host, 'localhost') !== false ||
        strpos($host, '.local') !== false ||
        strpos($host, '.test') !== false ||
        strpos($host, '127.0.0.1') !== false;
}

// Mark the "Services" nav menu item active while viewing any service post,
// since WordPress only auto-marks a parent active for items literally listed
// as its children in the menu editor.
function alestec_services_nav_active_class($classes, $item)
{
    if ((is_singular('service') || is_post_type_archive('service')) && $item->title === 'Services') {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'alestec_services_nav_active_class', 10, 2);

// Widget areas
function tailwind_theme_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sidebar', 'tailwind-theme'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section class="widget mb-6">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title text-xl font-bold mb-3">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'tailwind_theme_widgets_init');

// Helper function for image URLs
function get_image_url($image_path)
{
    return get_template_directory_uri() . '/assets/images/' . $image_path;
}