<?php
/**
 * Custom template tags and helper functions for Titan Flow Valves
 *
 * @package TitanFlowValves
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('titan_breadcrumbs')) :
    /**
     * Display breadcrumb navigation
     */
    function titan_breadcrumbs() {
        if (is_front_page()) {
            return;
        }

        echo '<div class="titan-breadcrumb">';
        echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
        echo '<span class="titan-breadcrumb-sep"><i class="fa-solid fa-chevron-right fa-xs"></i></span>';

        if (is_single()) {
            $categories = get_the_category();
            if (!empty($categories)) {
                echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                echo '<span class="titan-breadcrumb-sep"><i class="fa-solid fa-chevron-right fa-xs"></i></span>';
            }
            echo '<span>' . esc_html(get_the_title()) . '</span>';
        } elseif (is_page()) {
            global $post;
            if ($post->post_parent) {
                $ancestors = get_post_ancestors($post->ID);
                $ancestors = array_reverse($ancestors);
                foreach ($ancestors as $ancestor) {
                    echo '<a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>';
                    echo '<span class="titan-breadcrumb-sep"><i class="fa-solid fa-chevron-right fa-xs"></i></span>';
                }
            }
            echo '<span>' . esc_html(get_the_title()) . '</span>';
        } elseif (is_archive()) {
            echo '<span>' . esc_html(get_the_archive_title()) . '</span>';
        } elseif (is_404()) {
            echo '<span>Page Not Found</span>';
        }

        echo '</div>';
    }
endif;
