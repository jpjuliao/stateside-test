<?php

define('API_KEY', getenv('API_KEY'));

if ( ! function_exists( 'stateside_styles' ) ) :

	/**
	 * Enqueue styles.
	 */
	function stateside_styles() {

		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

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

endif;

add_action( 'wp_enqueue_scripts', 'stateside_styles' );