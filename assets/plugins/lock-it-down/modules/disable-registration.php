<?php
if(!defined('LOCK_IT_DOWN')) { return; }

function lockitdown_remove_registration_link( $registration_url ) { return __( 'Registration is disabled', 'lockitdown' ); }

function lockitdown_redirect_registration_page() {
	if ( isset( $_GET['action'] ) && $_GET['action'] == 'register' ) {
		ob_start();
		wp_redirect( wp_login_url() );
		ob_clean();
	}
}

add_filter( 'register',			'lockitdown_remove_registration_link' );
add_action( 'init',				'lockitdown_redirect_registration_page' );
