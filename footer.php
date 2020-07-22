<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package adpeeps
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists( 'get_field' ) ) {
    $footer_address = get_field( 'footer_address', 'option' );
    $copyright_text = get_field( 'copyright_text', 'option' );
    $social_items = get_field( 'social_items', 'option' );
}
?>
<!-- Footer area start -->
<footer class="footer">
	<div class="container">
        <?php 
            wp_nav_menu(
                array(
                    'theme_location'  => 'footer',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'ftrMenu',
                    'fallback_cb'     => '',
                    'menu_id'         => 'footer-menu',
                    'depth'           => 2,
                )
            ); 
        ?>

        <?php echo $footer_address ? $footer_address : ''; ?>
        <div class="socialMedia">
            <?php
                if( isset($social_items) && is_array($social_items) ) {
                    foreach( $social_items as $social_item ) {
                        $social_icon = $social_item['social_icon'];
                        $social_icon_url = $social_item['social_icon_url'];
                        ?>
                            <a href="<?php echo $social_icon_url ? esc_url($social_icon_url) : ''; ?>">
                                <img src="<?php echo ( isset($social_icon) && $social_icon['id'] ) ? wp_get_attachment_image_src( $social_icon['id'], 'full' )[0] : ''; ?>" alt="Social icon">
                            </a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <?php echo $copyright_text ? sprintf('<div class="copyright">%s</div>', esc_html__( $copyright_text, 'adpeeps' ) ) : ''; ?>

</footer>
<!-- Footer area end -->
<?php wp_footer(); ?>

</body>
</html>