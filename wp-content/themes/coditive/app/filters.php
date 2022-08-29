<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

function register_my_menus() {
    register_nav_menus(
        array(
            'footer-1' => __( 'Footer 1' ),
            'footer-2' => __( 'Footer 2' ),
            'footer-3' => __( 'Footer 3' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
