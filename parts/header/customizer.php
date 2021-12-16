<?php
/**
 * UNCG Online Theme Customizer.
 *
 * @package uncgonline
 */

if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page( array(
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
    ) );

    acf_add_options_sub_page( array(
        'page_title' => 'Theme Options',
        'menu_title' => 'Options',
        'parent_slug' => 'theme-options',
    ) );
}

/**
 * Set default values for customizer fields.
 */
function uncgonline_customizer_defaults() {
    $uncgonline_customizer_defaults = array();
    return $uncgonline_customizer_defaults;
}

/**
 * Set values from custom fields.
 *
 * @return array
 */
function uncgonline_customizer_values() {
    $uncgonline_customizer_vals = uncgonline_customizer_defaults();
    return $uncgonline_customizer_vals;
}


/**
 * Add CSS from the customizer to the head.
 */
function uncgonline_customizer_css() {
    $uncgonline_customizer_vals = uncgonline_customizer_values();

    ?>
    <style type="text/css">
        <?php
        if ( $uncgonline_customizer_vals[ 'custom_css_file' ] ) {
            wp_enqueue_style( 'custom-css-file', esc_url( $uncgonline_customizer_vals[ 'custom_css_file' ] ) );
        }

        echo sanitize_text_field( $uncgonline_customizer_vals['custom_css'] );
        ?>
    </style>
    <?php
} // End uncgonline_customizer_css.
add_action( 'wp_head', 'uncgonline_customizer_css' );
