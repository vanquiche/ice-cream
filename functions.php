<?php

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

/*
// register block variations
function prefix_editor_assets()
{
  wp_enqueue_script('prefix-block-variations', get_template_directory_uri() . '/assets/js/block-variations.js', array('wp-blocks'));
}

add_action('enqueue_block_editor_assets', 'prefix_editor_assets');
*/


/*
// sync editor with styles

function add_styles_to_editor()
{
  add_editor_style('/build/styles.css');
}

add_action('after_setup_theme', 'add_styles_to_editor');

*/


/*
// add custom block pattern category

function add_theme_block_pattern_category()
{
  register_block_pattern_category('red-velvet', array('label' => __('Red Velvet', 'red-velvet')));
};

add_action('init', 'add_theme_block_pattern_category');

*/