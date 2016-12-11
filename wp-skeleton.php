<?php
/*
 * Plugin Name: WordPress Skeleton
 * Plugin URI:
 * Description: Thi is Skeleton Plugin
 * Author:
 * Author URL:
 * Version: 0.1
 * License: GPLv2 or later
 */

const WP_SKELETON_VERSION = 1;

// Import CSS
function wp_skeleton_load_style() {
	if ( is_admin() ) {
		wp_enqueue_style(
			'wp_skeleton_plugin_admin',
			plugins_url( 'css/admin.css', __FILE__ ),
			array(),
			WP_SKELETON_VERSION,
			'screen'
		);
	} else {
		wp_enqueue_style(
			'wp_skeleton_plugin_frontend',
			plugins_url( 'css/frontend.css', __FILE__ ),
			array(),
			WP_SKELETON_VERSION,
			'screen'
		);
	}
}
add_action( 'init', 'wp_skeleton_load_style' );

// Import JS
function wp_skeleton_load_scripts() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'wp_skeleton_plugin_admin',
			plugins_url( 'js/admin.js', __FILE__ ),
			array( 'query' ),
			WP_SKELETON_VERSION
		);
	} else {
		wp_enqueue_script(
			'wp_skeleton_plugin_frontend',
			plugins_url( 'js/frontend.js', __FILE__ ),
			array( 'query' ),
			WP_SKELETON_VERSION
		);
	}
}
add_action( 'init', 'wp_skeleton_load_scripts' );