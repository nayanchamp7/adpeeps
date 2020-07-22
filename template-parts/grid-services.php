<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists( 'get_field' ) ) {
    $home_grid_items = get_field( 'home_grid_item', 'option' );
    $software_feature_title = get_field( 'software_feature_title', 'option' );
    $software_features_items = get_field( 'software_features_items', 'option' );
}
?>
<!-- Section5 area start -->
<section class="section5">
    <div class="container">
    	<ul class="softwareBox">
            <?php
                if( isset($home_grid_items) && is_array($home_grid_items) ) {
                    foreach( $home_grid_items as $home_grid_item ) {
                        $home_grid_item_title = $home_grid_item['home_grid_item_title'];
                        $home_grid_content = $home_grid_item['home_grid_content'];
                        $home_grid_thumbnail = $home_grid_item['home_grid_thumbnail'];
                        ?>
                            <li>
                                <div class="software">
                                    <div class="softwareImg">
                                        <img src="<?php echo isset($home_grid_thumbnail) && is_array($home_grid_thumbnail) ? wp_get_attachment_image_src( $home_grid_thumbnail['id'], 'feature-service-thumbnail' )[0] : ''; ?>" alt="Service">
                                    </div>
                                    <div class="softwareTxt">
                                        <?php echo $home_grid_item_title ? sprintf('<h6>%s</h6>', esc_html__( $home_grid_item_title, 'adpeeps' ) ) : ''; ?>
                                        <?php echo $home_grid_content ? $home_grid_content : ''; ?>
                                    </div>
                                </div>
                            </li>
                        <?php
                    }
                }
            ?>
        </ul>

        <?php echo $software_feature_title ? sprintf('<h2>%s</h2>', esc_html__( $software_feature_title, 'adpeeps' ) ) : ''; ?>
        
        <ul class="softwareList">
            <?php
                if( isset($software_features_items) && is_array($software_features_items) ) {
                    foreach( $software_features_items as $software_feature_item ) {
                        $software_features_text = $software_feature_item['software_features_text'];
                        
                        echo $software_features_text ? sprintf('<li>%s</li>', esc_html__( $software_features_text, 'adpeeps' ) ) : '';

                    }
                }
            ?>
        </ul>
    </div>
</section>
<!-- Section5 area end -->