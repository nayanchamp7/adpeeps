<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists( 'get_field' ) ) {
    $feature_box_title = get_field( 'feature_box_title', 'option' );
    $feature_box_items = get_field( 'feature_box_items', 'option' );
}
?>
<!-- Section1 area start -->
<section class="section1">
    <div class="container">
        <div class="sec1Top">
            <?php echo $feature_box_title ? sprintf('<p>%s</p>', esc_html__( $feature_box_title, 'adpeeps' ) ) : ''; ?>
        </div>
        <ul class="icons">
            <?php
                if( isset($feature_box_items) && is_array($feature_box_items) ) {
                    foreach( $feature_box_items as $feature_box_item ) {
                        $icon = $feature_box_item['feature_box_icon'];
                        $title = $feature_box_item['feature_box_title'];
                        ?>
                            <li>
                                <div class="iconBox">
                                    <img width="80" height="68" src="<?php echo isset($icon) && is_array($icon) ? wp_get_attachment_image_src( $icon['id'] )[0] : ''; ?>" alt="Icon">
                                    <?php echo $title ? sprintf('<p>%s</p>', esc_html__( $title, 'adpeeps' ) ) : ''; ?>
                                </div>
                            </li>
                        <?php
                    }
                }
            ?>
        	
        </ul>
    </div>
</section>
<!-- Section1 area end -->