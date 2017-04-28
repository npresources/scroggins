<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function instagram_menu() {
    add_menu_page(
        'Instagram Feed',
        'Instagram Feed',
        'manage_options',
        'instagram-settings',
        'instagram_settings_page'
    );
}
add_action('admin_menu', 'instagram_menu');

function instagram_settings_page() {

    //Hidden fields
    $instagram_hidden_field = 'instagram_hidden_field';
    $sb_instagram_configure_hidden_field = 'sb_instagram_configure_hidden_field';
    $sb_instagram_customize_hidden_field = 'sb_instagram_customize_hidden_field';

    //Save defaults in an array
    $options = wp_parse_args(get_option('instagram_settings'));
    update_option( 'instagram_settings', $options );

    //Set the page variables
    $access_token = $options[ 'access_token' ];
    $user_id = $options[ 'user_id' ];

    //Check nonce before saving data
    if ( ! isset( $_POST['instagram_nonce'] ) || ! wp_verify_nonce( $_POST['instagram_nonce'], 'sb_instagram_saving_settings' ) ) {
        //Nonce did not verify
    } else {
        // See if the user has posted us some information. If they did, this hidden field will be set to 'Y'.
        if( isset($_POST[ $instagram_hidden_field ]) && $_POST[ $instagram_hidden_field ] == 'Y' ) {

            if( isset($_POST[ $sb_instagram_configure_hidden_field ]) && $_POST[ $sb_instagram_configure_hidden_field ] == 'Y' ) {
                $options[ 'access_token' ] = sanitize_text_field( $_POST[ 'access_token' ] );
                $options[ 'user_id' ] = sanitize_text_field( $_POST[ 'user_id' ] );
            }

            update_option( 'instagram_settings', $options );

        ?>
        <div class="updated"><p><strong><?php _e('Settings saved.', 'instagram-feed' ); ?></strong></p></div>
        <?php } ?>

    <?php } //End nonce check ?>



    <div id="header">
        <h1>Instagram Feed</h1>
    </div>

    <form name="form1" method="post" action="">
        <input type="hidden" name="<?php echo $instagram_hidden_field; ?>" value="Y">
        <?php wp_nonce_field( 'sb_instagram_saving_settings', 'instagram_nonce' ); ?>
        <input type="hidden" name="<?php echo $sb_instagram_configure_hidden_field; ?>" value="Y">

        <table class="form-table">
            <tbody>
                <h3>Configure</h3>

                <div id="instagram-config">
                    <a href="https://instagram.com/oauth/authorize/?client_id=3a81a9fa2a064751b8c31385b91cc25c&scope=basic+public_content&redirect_uri=https://smashballoon.com/instagram-feed/instagram-token-plugin/?return_uri=<?php echo admin_url('admin.php?page=instagram-settings'); ?>&response_type=token" class="sbi_admin_btn"><?php _e('Log in and get my Access Token and User ID', 'instagram-feed'); ?></a>
                    <!-- <a href="https://smashballoon.com/instagram-feed/token/" target="_blank" style="position: relative; top: 14px; left: 15px;"><?php _e('Button not working?', 'instagram-feed'); ?></a> -->
                </div>

                <tr valign="top">
                    <th scope="row"><label>Access Token:</label></th>
                    <td>
                        <input name="access_token" id="access_token" type="text" value="<?php esc_attr_e( $access_token, 'instagram-feed' ); ?>" size="60" maxlength="60" placeholder="Click button above to get your Access Token" />
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"><label>User Id:</th>
                    <td>
                        <span>
                            <input name="user_id" id="user_id" type="text" value="<?php esc_attr_e( $user_id, 'instagram-feed' ); ?>" size="25" />
                        </span>
                    </td>
                </tr>

            </tbody>
        </table>

        <?php submit_button(); ?>
    </form>

    <hr />


<?php } //End Settings page

    function sb_instagram_admin_scripts() {
        $path = get_template_directory_uri() . '/lib/instagram/js/sb-instagram-admin.js';
        wp_enqueue_script( '', $path, array(), SBIVER );

        wp_enqueue_script(
            array(
            'jquery'
            )
        );
    }
    add_action( 'admin_enqueue_scripts', 'sb_instagram_admin_scripts' );
