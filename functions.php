<?php
/**
 * everstrap functions and definitions
 *
 * @package everstrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$everstrap_includes = array(
    // '/theme-settings.php',                  // Initialize theme default settings.
    // '/setup.php',                           // Theme setup and custom theme supports.
    // '/widgets.php',                         // Register widget area.
    // '/enqueue.php',                         // Enqueue scripts and styles.
    '/template-tags.php',                   // Custom template tags for this theme.
    // '/pagination.php',                      // Custom pagination for this theme.
    // '/hooks.php',                           // Custom hooks.
    // '/extras.php',                          // Custom functions that act independently of the theme templates.
    // '/customizer.php',                      // Customizer additions.
    // '/custom-comments.php',                 // Custom Comments file.
    // '/jetpack.php',                         // Load Jetpack compatibility file.
    // '/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation?
    // '/editor.php',                          // Load Editor functions.
    // '/wp-admin.php',                        // /wp-admin/ related functions
    // '/deprecated.php',                      // Load deprecated functions.
    // '/modules.php',                         // Common module functions.
    // '/metaboxes.php',                        //Custom metaboxes function
    // '/short-codes.php',                        //Custom Short Codes Function
    // '/post-type.php',                        // Custom Post type
    '/custom-fields.php',                        // Custom Post type
);

foreach ($everstrap_includes as $file) {
    $filepath = locate_template('inc' . $file);
    if (!$filepath) {
        trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
}

/*
*
* Add Post type Supports
*
*/
add_action('init', 'tfk_post_type_support');
function tfk_post_type_support()
{
    add_post_type_support('post', 'page-attributes');
}
