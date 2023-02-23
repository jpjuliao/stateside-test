<?php

/**
 * Enqueue scripts and styles.
 * @return void
 */
function enqueue_scripts()
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

add_action('wp_enqueue_scripts', 'enqueue_scripts');

/**
 * Add module type to scripts
 * @param $tag string
 * @param $handle string
 * @param $src string
 * @return string script tag
 */
function script_add_type_module(string $tag, string $handle, string $src)
{

  if ('main-script' !== $handle) {
    return $tag;
  }

  $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
  return $tag;
}

add_filter('script_loader_tag', 'script_add_type_module', 10, 3);