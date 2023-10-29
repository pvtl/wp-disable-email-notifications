<?php
/**
 * Plugin Name: PVTL Disable Email Notifications
 * Plugin URI: https://www.pivotalagency.com.au/
 * Description: Disable Admin Email Notifications when a user changes their password & Fatal Error Emails
 * Author: Pivotal Agency
 * Author URI: https://pivotal.agency
 * Version: 1.1.3
 * Text Domain: pvtl-wp-disable-email-notifications
 */
if ( 'staging' === wp_get_environment_type() ) { 
    define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
}
if ( !function_exists( 'wp_password_change_notification' ) ) {
    function wp_password_change_notification() {}
}
add_filter('send_password_change_email','__return_false');
add_filter( 'woocommerce_disable_password_change_notification', '__return_true' );
remove_action( 'after_password_reset', 'wp_password_change_notification' );