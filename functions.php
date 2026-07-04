<?php
/**
 * Kobetsu Shido Sakura theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SAKURA_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme setup.
 */
function sakura_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'sakura_setup' );

/**
 * Enqueue theme stylesheets and scripts.
 * The design CSS/JS ported from the CodePen mock-up live in /assets,
 * separate from this theme's style.css (which WordPress requires for theme metadata).
 */
function sakura_enqueue_assets() {
	wp_enqueue_style( 'sakura-style', get_stylesheet_uri(), array(), SAKURA_THEME_VERSION );

	wp_enqueue_style(
		'sakura-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'sakura-style' ),
		SAKURA_THEME_VERSION
	);

	wp_enqueue_script(
		'sakura-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		SAKURA_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'sakura_enqueue_assets' );
