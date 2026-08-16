<?php
/**
 * Titan Flow Valves - Theme Functions and Definitions
 *
 * @package TitanFlowValves
 * @version 2.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Define Theme Constants
define('TITAN_THEME_VERSION', '2.1.0');
define('TITAN_THEME_DIR', get_template_directory());
define('TITAN_THEME_URI', get_template_directory_uri());

// 1. Theme Setup, Menus & Enqueues
require_once TITAN_THEME_DIR . '/inc/setup.php';

// 2. Zero-Database Contact Form AJAX Handler (Email-Only Pipeline)
require_once TITAN_THEME_DIR . '/inc/form-handler.php';

// 3. Custom Template Tags & Breadcrumb Helpers
require_once TITAN_THEME_DIR . '/inc/template-tags.php';
