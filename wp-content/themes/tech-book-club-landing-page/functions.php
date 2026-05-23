<?php
/**
 * Theme functions for Tech Book Club Landing Page.
 *
 * @package TechBookClubLandingPage
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'title-tag' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
	}
);

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'tech-book-club-landing-page',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
);

add_action(
	'wp_head',
	function () {
		printf(
			'<link rel="icon" type="image/png" sizes="32x32" href="%s">' . "\n",
			esc_url( get_theme_file_uri( 'assets/images/favicon-32x32.png' ) )
		);
	}
);
