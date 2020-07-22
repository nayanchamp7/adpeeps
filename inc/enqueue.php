<?php
/**
 * Adpeeps enqueue scripts
 *
 * @package adpeeps
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'adpeeps_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function adpeeps_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		wp_dequeue_style( 'adpeeps-styles' );
		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/style.css' );
		wp_enqueue_style( 'adpeeps-styles', get_template_directory_uri() . '/assets/css/style.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'wp-util' );

		
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/js.js' );
        wp_enqueue_script( 'adpeeps-scripts', get_template_directory_uri() . '/assets/js/js.js', array(), $js_version, true );
        
        wp_localize_script( 'mc-custom-scripts', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
        
            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'adpeeps_scripts' ).

add_action( 'wp_enqueue_scripts', 'adpeeps_scripts', 100 );
