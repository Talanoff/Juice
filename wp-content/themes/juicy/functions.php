<?php

require_once __DIR__ . '/inc/SocialWalkerNavMenu.php';

if (!function_exists('juicy_setup')) :

	function juicy_setup()
	{
		add_theme_support('title-tag');

		add_theme_support('post-thumbnails');

		show_admin_bar(false);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus([
			'menu-primary' => esc_html__('Primary', 'juicy'),
			'menu-social' => esc_html__('Social menu', 'juicy'),
		]);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]);

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('juicy_custom_background_args', [
			'default-color' => 'ffffff',
			'default-image' => '',
		]));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', [
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		]);
	}
endif;
add_action('after_setup_theme', 'juicy_setup');

/**
 * Enqueue scripts and styles.
 */
function juicy_scripts()
{
	wp_enqueue_style('juicy-style', get_theme_file_uri('build/app.css'));

	wp_enqueue_script('juicy-scripts', get_theme_file_uri('build/app.js'), [], '20190311', true);
}

add_action('wp_enqueue_scripts', 'juicy_scripts');

/**
 * Disable the emoji's
 */
function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
}

add_action('init', 'disable_emojis');
