<?php
/**
 * Theme Setup & Asset Enqueues
 *
 * @package TitanFlowValves
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('titan_theme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function titan_theme_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Add support for core custom logo.
        add_theme_support('custom-logo', array(
            'height'      => 80,
            'width'       => 300,
            'flex-width'  => true,
            'flex-height' => true,
        ));

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ));

        // Register Primary and Footer navigation menus.
        register_nav_menus(array(
            'primary' => __('Primary Navigation Menu', 'titanflowvalves'),
            'footer'  => __('Footer Navigation Menu', 'titanflowvalves'),
        ));
    }
endif;
add_action('after_setup_theme', 'titan_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function titan_theme_scripts() {
    // Google Fonts: Inter, Outfit, JetBrains Mono
    wp_enqueue_style(
        'titan-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap',
        array(),
        null
    );

    // Font Awesome Icons
    wp_enqueue_style(
        'titan-font-awesome',
        'https://use.fontawesome.com/releases/v7.1.0/css/all.css',
        array(),
        '7.1.0'
    );

    // Core Industrial Theme Stylesheet
    wp_enqueue_style(
        'titan-industrial-theme',
        get_template_directory_uri() . '/assets/css/industrial-theme.css',
        array(),
        '2.1.0'
    );

    // Main style.css
    wp_enqueue_style(
        'titan-style',
        get_stylesheet_uri(),
        array('titan-industrial-theme'),
        '2.1.0'
    );

    // Navigation and UI interactions
    wp_enqueue_script(
        'titan-theme-js',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        '2.0.0',
        true
    );

    // Zero-Database AJAX Contact Form Script
    wp_enqueue_script(
        'titan-contact-form-js',
        get_template_directory_uri() . '/assets/js/contact-form.js',
        array(),
        '2.0.0',
        true
    );

    // Pass AJAX URL to script (Zero-Database AJAX endpoint)
    wp_localize_script('titan-contact-form-js', 'titan_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('titan_contact_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'titan_theme_scripts');
