<?php

/**
 * Plugin Name: Elementor Team Widget
 * Description: Elementor Team Widget Development by Pobitro Deb
 * Plugin URI:  https://pobitrodeb.com/elementor-team-widget
 * Version:     1.0.0
 * Author:      Pobitro Deb
 * Author URI:  https://pobitrodeb/
 * Text Domain: team-widget
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register Team Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_team_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/team-widget.php' );

	$widgets_manager->register( new \Elementor_Team_Widget() );

}
add_action( 'elementor/widgets/register', 'register_team_widget' );