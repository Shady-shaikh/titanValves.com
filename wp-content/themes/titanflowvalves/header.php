<?php
/**
 * Header Template - Titan Flow Valves
 *
 * @package TitanFlowValves
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <!-- Favicons -->
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/cropped-abstract-lettermark-logo-titan-flow-valves.png?fit=32%2C32&ssl=1'); ?>" sizes="32x32" />
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/cropped-abstract-lettermark-logo-titan-flow-valves.png?fit=192%2C192&ssl=1'); ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2025/07/cropped-abstract-lettermark-logo-titan-flow-valves.png?fit=180%2C180&ssl=1'); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Contact Bar -->
<?php get_template_part('template-parts/header/topbar'); ?>

<!-- Main Sticky Header & Navigation -->
<?php get_template_part('template-parts/header/navbar'); ?>

<!-- Mobile Navigation Drawer -->
<?php get_template_part('template-parts/header/mobile-drawer'); ?>
