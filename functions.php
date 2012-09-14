<?php

if ( ! isset( $content_width ) )
	$content_width = 900;

if ( ! function_exists( 'core68sheets_setup' ) ):
//
//Setup main theme files and actions
//TODO maybe add custom header
//
function core68sheets_setup() {

	require_once locate_template('/templates/comment-list.php');
	require_once locate_template('/inc/filters.php');
	require_once locate_template('/inc/features.php');
	require_once locate_template('/inc/rewrite.php');
        add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_filter('term_description','wpautop');
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	add_action('wp_footer', 'wp_print_scripts', 5);
	add_action('wp_footer', 'wp_enqueue_scripts', 5);
	add_action('wp_footer', 'wp_print_head_scripts', 5);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'core68sheets' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'core68sheets_setup' );
//
//Push script files to browser, added to footer only
//
function core68sheets_scripts() {
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply');
}
}
add_action( 'wp_enqueue_scripts', 'core68sheets_scripts' );
//
//Removes recent comments widget and inline style from html
//
function my_remove_recent_comments_style() {global $wp_widget_factory;remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));}
add_action('widgets_init', 'my_remove_recent_comments_style');
 ?>