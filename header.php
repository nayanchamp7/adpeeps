<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package adpeeps
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 


<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css" />
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<!-- Header area start -->
<header class="header">
    <div class="container">
        <div class="hdrInner">
            <?php 
                $logo_id = get_theme_mod('custom_logo');
                
                echo sprintf('<a id="logo" href="%s"><img src="%s" alt="logo" /></a>', home_url(), wp_get_attachment_url( $logo_id ));
            ?>
            

            <div class="menuBtn"><span></span><span></span><span></span><span></span><span></span></div>
            <?php 
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'navigation',
                    'container_id'    => 'navbarSupportedContent',
                    'menu_class'      => 'menu',
                    'fallback_cb'     => '',
                    'menu_id'         => 'main-menu',
                    'depth'           => 2,
                )
            ); 
            ?>
        </div>
    </div>
</header>
<!-- Header area end -->
