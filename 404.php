<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package adpeeps
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper error-404-wrapper" id="error-404-wrapper">
    <div class="container">
        
        <div class="entry-header-title w-100 text-center">
            <h1 class="archive-title"><?php esc_html_e( '404 Error', 'adpeeps' ); ?></h1>
        </div>

        <main class="site-main" id="main">

            <section class="error-404 not-found h-100 mt-5">

                <header class="page-header text-center">
                    <h2 class="sub-title"><?php esc_html_e( 'Oops, we can’t seem to find the page you are looking for.', 'adpeeps' ); ?></h2>
                </header><!-- .page-header -->

            </section><!-- .error-404 -->

        </main><!-- #main -->

    </div>


</div><!-- #error-404-wrapper -->

<?php get_footer();
