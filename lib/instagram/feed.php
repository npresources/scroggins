<?php
define( 'SBIVER', '1.4.8' );

// Add shortcodes
add_shortcode('instagram-feed', 'display_instagram');
function display_instagram($atts, $content = null) {

    $options = get_option('instagram_settings');
    if ( ! isset( $options[ 'instagram_user_id' ] ) ) {
        return;
    }
    $instagram_user_id = $options[ 'instagram_user_id' ];

    $sb_instagram_content = '<div id="instagram_images" class="row small-up-2 medium-up-4"></div>';

    return $sb_instagram_content;
}

add_filter('widget_text', 'do_shortcode');

//Enqueue scripts
add_action( 'wp_enqueue_scripts', 'instagram_scripts_enqueue' );
function instagram_scripts_enqueue() {
    $path = get_template_directory_uri() . '/lib/instagram/js/sb-instagram.min.js';
    wp_register_script( 'instagram_scripts', $path, array('jquery'), SBIVER, true ); //http://www.minifier.org/

    //Options to pass to JS file
    $instagram_settings = get_option('instagram_settings');

    //Access token
    isset($instagram_settings[ 'access_token' ]) ? $access_token = trim($instagram_settings['access_token']) : $access_token = '';

    if ( ! isset( $instagram_settings['user_id'] ) ) {
        return;
    }
    $user_id = $instagram_settings[ 'user_id' ];

    $data = array(
        'access_token' => $access_token,
        'user_id' => $user_id
    );

    //Enqueue it to load it onto the page
    wp_enqueue_script('instagram_scripts');

    //Pass option to JS file
    wp_localize_script('instagram_scripts', 'instagram_js', $data);
}

?>