<?php

/**
 * aab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aab
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aab_setup()
{
	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(array(
		'primary' => esc_html__('Primary', 'aab'),
		'products' => esc_html__('Products', 'aab'),
		'quick-links' => esc_html__('Quick Links', 'aab'),
		'legal' => esc_html__('Legal', 'aab'),
		'social' => esc_html__('Social', 'aab'),
	));

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	));

	// add_theme_support('wp-block-styles');
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'aab_setup');

/**
 * Enqueue scripts and styles.
 */
function aab_scripts(){
	wp_enqueue_style('aab-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	wp_enqueue_script( 'aab-jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js', array(), wp_get_theme()->get('Version'), true );
	wp_enqueue_script( 'aab-mainjs', get_template_directory_uri() . '/scripts/main.js', array(), wp_get_theme()->get('Version'), true );
	if (is_front_page()) {
		wp_enqueue_script( 'aab-bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), wp_get_theme()->get('Version'), true );
        wp_enqueue_script( 'aab-slider', get_template_directory_uri() . '/scripts/slider.js', array('jquery'), wp_get_theme()->get('Version'), true);
	}

}
add_action('wp_enqueue_scripts', 'aab_scripts');

/**
 *  Parse the  contact form shortcode in the frontend
 */
function wpcf7_current_url_form_tag_handler($tag){
	global $wp;
	$url = home_url($wp->request);
	return '<input type="hidden" name="' . $tag['name'] . '" value="' . $url . '" />';
}

function wpcf7_add_form_tag_current_url(){
	// Add shortcode for the form [current_url]
	wpcf7_add_form_tag(
		'current_url',
		'wpcf7_current_url_form_tag_handler',
		array(
			'name-attr' => true
		)
	);
}
add_action('wpcf7_init', 'wpcf7_add_form_tag_current_url');
