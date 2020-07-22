<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package adpeeps
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="wrapper page-wrapper" id="page-wrapper">

    <main class="site-main" id="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'loop-templates/content', 'page' ); ?>

        <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->

</div><!-- #page-wrapper -->

<?php get_footer();
