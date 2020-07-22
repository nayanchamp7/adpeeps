<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists( 'get_field' ) ) {
    $ad_inventory_title = get_field( 'ad_inventory_title', 'option' );
    $ad_inventory_content = get_field( 'ad_inventory_content', 'option' );
    $responsive_ads_title = get_field( 'responsive_ads_title', 'option' );
    $responsive_ads_content = get_field( 'responsive_ads_content', 'option' );
    $responsive_ads_thumbnail = get_field( 'responsive_ads_thumbnail', 'option' );
}
?>
<!-- Section2 area start -->
<section class="section2">
    <div class="container">
        <?php echo $ad_inventory_title ? sprintf('<h2>%s</h2>', esc_html__( $ad_inventory_title, 'adpeeps' ) ) : ''; ?>
        <?php echo $ad_inventory_content ? $ad_inventory_content : ''; ?>
        <div class="sec2Inner">
            <div class="sec2Lft">
                <?php echo $responsive_ads_title ? sprintf('<h3>%s</h3>', esc_html__( $responsive_ads_title, 'adpeeps' ) ) : ''; ?>
                <?php echo $responsive_ads_content ? $responsive_ads_content : ''; ?>
            </div>
            <div class="sec2Rgt">
        		<img src="<?php echo isset($responsive_ads_thumbnail) && is_array($responsive_ads_thumbnail) ? wp_get_attachment_image_src( $responsive_ads_thumbnail['id'], 'inventory-thumbnail' )[0] : ''; ?>" alt="Device">
            </div>
        </div>
    </div>
</section>
<!-- Section2 area end -->