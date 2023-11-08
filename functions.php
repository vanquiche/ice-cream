<?php

/**
 * 1. enqueue styles and scripts
 *
 */


/**
 * enqueue styles and scripts
 */
function add_theme_styles_and_scripts()
{
  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style('theme-ice-cream-styles', get_template_directory_uri() . '/build/styles.css', array(), $theme_version);
  wp_enqueue_script('theme-ice-cream-scripts', get_template_directory_uri() . '/build/scripts.js', array(), $theme_version, true);
}

add_action('wp_enqueue_scripts', 'add_theme_styles_and_scripts');
