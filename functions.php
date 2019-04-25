<?php
/**
 * Theme functions file
 *
 * @package cover-up
 * @since 0.0.1
 */

add_action( 'init', 'blockusers_wps_init' );

/**
 * Blocks user without the 'administrator' role from accessing the backend.
 */
function blockusers_wps_init() {
	if ( is_admin() && ! current_user_can( 'administrator' ) ) {
		wp_safe_redirect( home_url() );
		exit;
	}
}
