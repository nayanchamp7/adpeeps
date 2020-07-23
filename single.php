<?php
/**
 * The template for displaying single pages
 *
 *
 * @package adpeeps
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="wrapper page-wrapper" id="page-wrapper">
    
    <div class="container-mid">
        <main class="site-main" id="main">

            <?php 
            while ( have_posts() ) : the_post();

                get_template_part( 'loop-templates/content', 'page' );

                
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                

            endwhile; // end of the loop. 
            ?>

        </main><!-- #main -->
    </div>
</div><!-- #page-wrapper -->

<?php 
get_footer();
