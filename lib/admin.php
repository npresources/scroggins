<?php
add_action( 'customize_register', 'theme_cta_links_register' );
function theme_cta_links_register( $wp_customize ) {

    $wp_customize->add_section( 'form_shortcodes',
        array(
            'title' => __( 'Form Shortcodes', 'mytheme' ),
            'priority' => 35,
            'description' => __('Add the proper shortcodes to the theme for the forms.', 'mytheme'),
        )
    );


    $wp_customize->add_setting( 'footer_contact_form_shortcode',
        array(
            'default' => '',
            'type' => 'theme_mod'
        )
    );
    $wp_customize->add_control( 'footer_contact_form_shortcode', array(
      'type' => 'text',
      'section' => 'form_shortcodes',
      'label' => __( 'Footer Contact Form' )
    ) );
}

?>