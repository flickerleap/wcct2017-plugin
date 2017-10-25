<?php
/**
 * WCCT 2017 Demo Plugin
 *
 * @package     WCCT2017DemoPlugin
 * @author      Seagyn Davis
 * @copyright   Flicker Leap
 *
 * @wordpress-plugin
 * Plugin Name: WCCT 2017 Demo Plugin
 * Plugin URI:  https://github.com/flickerleap/wcct2017-plugin
 * Description: This plugin does a lot of awesome things.
 * Version:     1.0.0
 * Author:      Seagyn Davis
 * Author URI:  https://www.seagyndavis.com/
 * Text Domain: wcct2017-plugin
 */
 
 function wcct_admin_notice_success() {
	$class = 'notice notice-success';
	$message = __( 'Great success! I like!', 'wcct2017-plugin' );

	printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
}
add_action( 'admin_notices', 'wcct_admin_notice_success' );
