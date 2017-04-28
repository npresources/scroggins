<?php

// Includes dependencies.
include dirname( __FILE__ ) . '/lib/instagram/feed.php';
include dirname( __FILE__ ) . '/lib/instagram/admin.php';
include dirname( __FILE__ ) . '/lib/admin.php';

add_action( 'init', 'register_menus' );
/**
 * Registers the main navigation menu in the header of the theme.
 */
function register_menus() {
  register_nav_menu( 'header-menu', 'Header Menu' );
}

add_action( 'after_setup_theme', 'scroggins_title_tag' );
/**
 * Adds support for better titles on all pages throughout the website.
 */
function scroggins_title_tag() {
  add_theme_support( 'title-tag' );
}

/**
 * Displays the menu
 */
function scroggins_get_menu() {

	wp_nav_menu(
		array(
			'theme_location'  => 'header-menu',
			'container'       => 'nav',
			'container_class' => 'nav clearfix'
		)
	);
}

/**
 * If we're on the event page, then we need to hide content as its a landing page.
 *
 * @return bool True if we're on the event page; otherwise, false.
 */
function scroggins_hide_event_content() {

	$page = strtolower( get_the_title() );
	return ( 'event' !== $page );
}

/**
 * Display footer without contact form.
 *
 * @return bool
 */
function display_alternate_footer() {

    static $display;

    isset( $display ) || $display = in_array( true, [
        is_page('resources'), is_page('event')
    ]);

    return apply_filters( 'scroggins/display_alternate_footer', $display );
}

/**
 * Ajax for form submission.
 */
function submit_form() {
	if ( empty( $_POST ) ) {
		return;
	}

	$curl_connection = curl_init( $_POST['data']['url'] );
	curl_setopt( $curl_connection, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $curl_connection, CURLOPT_POSTFIELDS, $_POST['data']['formData'] );
	curl_exec( $curl_connection );
	curl_close( $curl_connection );
}
add_action( 'wp_ajax_submit_form', 'submit_form' );
add_action( 'wp_ajax_nopriv_submit_form', 'submit_form' );


function enqueue_scripts() {

	wp_enqueue_script(
		'foundation',
		get_template_directory_uri() . '/assets/javascript/foundation.min.js',
		[ 'jquery' ],
		false,
		true
	);

	wp_enqueue_script(
		'main',
		get_template_directory_uri() . '/assets/javascript/main.js',
		[ 'jquery' ],
		false,
		true
	);

	wp_localize_script(
		'main',
		'ajax',
		[ 'url' => admin_url( 'admin-ajax.php' ) ]
	);
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
