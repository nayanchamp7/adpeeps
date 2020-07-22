<?php
/**
 * Template Name: Pricing Page Template
 *
 * Template for displaying a Pricing page.
 *
 * @package adpeeps
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="wrapper page-wrapper">
    <?php get_template_part( 'template-parts/pricing', 'table' ); ?>
</div>

<?php get_footer(); ?>

