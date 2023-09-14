<?php
/**
 * Plugin Name: PVTL Disable Email Notifications
 * Plugin URI: https://www.pivotalagency.com.au/
 * Description: Disable Admin Email Notifications when a user changes their password & Fatal Error Emails
 * Author: Pivotal Agency
 * Author URI: https://pivotal.agency
 * Version: 1.0.0
 * Requires at least: 7.4
 * Tested up to: 8.2
 * Requires PHP: 8.0
 * Text Domain: pvtl-wp-disable-email-notifications
 */
add_filter('send_password_change_email','__return_false');
define( 'WP_DISABLE_FATAL_ERROR_HANDLER',true );
 ?>