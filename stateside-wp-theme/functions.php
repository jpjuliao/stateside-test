<?php

define('API_KEY', getenv('API_KEY'));

/**
 * Enqueue styles.
 */
function stateside_styles()
{

  $theme_version = wp_get_theme()->get('Version');

  $version_string = is_string($theme_version) ? $theme_version : false;

  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/index.js',
    array(),
    $version_string
  );

  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/style.css',
    array(),
    $version_string
  );
}

add_action('wp_enqueue_scripts', 'stateside_styles');

/**
 * Add type="module" to scripts
 * 
 * @param $tag string
 * @param $handle string
 * @param $src string
 */
function script_add_type_module($tag, $handle, $src)
{

  if ('main-script' !== $handle) {
    return $tag;
  }

  $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
  return $tag;
}

add_filter('script_loader_tag', 'script_add_type_module', 10, 3);
