<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

if (function_exists('get_field')) {
    $pricing_table_title = get_field('pricing_table_title', 'option');
    $pricing_table_items = get_field('pricing_table_items', 'option');
    $pricing_table_button_link = get_field('pricing_table_button_link', 'option');
    $pricing_table_button_text = get_field('pricing_table_button_text', 'option');
}
?>
<!-- Section4 area start -->
<section class="section4">
    <div class="container">
        <?php echo $pricing_table_title ? sprintf('<h1>%s</h1>', esc_html__($pricing_table_title, 'adpeeps')) : ''; ?>
        <div class="priceTable">
            <div class="priceHeadings">
                <ul>
                    <?php
                    if (isset($pricing_table_items) && is_array($pricing_table_items)) {

                        foreach ($pricing_table_items as $pricing_table_item) {
                            $pricing_label = $pricing_table_item['pricing_label'];

                            if ($pricing_label) {
                                echo sprintf('<li><span>%s</span></li>', esc_html__($pricing_label, 'adpeeps'));
                            }
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class="priceBox">
                <h5><?php _e('Ad Peeps', 'adpeeps'); ?></h5>
                <ul>
                    <?php
                    if (isset($pricing_table_items) && is_array($pricing_table_items)) {

                        foreach ($pricing_table_items as $pricing_table_item) {
                            $pricing_label = $pricing_table_item['pricing_label'];
                            $ad_peeps_text = $pricing_table_item['ad_peeps_text'];

                            echo $pricing_label && $ad_peeps_text ? sprintf('<li data="%s:"><span>%s</span></li>', esc_attr($pricing_label), esc_html__($ad_peeps_text, 'adpeeps')) : '';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="priceBox">
                <h5><?php _e('Ad Speed', 'adpeeps'); ?></h5>
                <ul>
                    <?php
                    if (isset($pricing_table_items) && is_array($pricing_table_items)) {

                        foreach ($pricing_table_items as $pricing_table_item) {
                            $pricing_label = $pricing_table_item['pricing_label'];
                            $ad_speed_text = $pricing_table_item['ad_speed_text'];

                            echo $pricing_label && $ad_speed_text ? sprintf('<li data="%s:"><span>%s</span></li>', esc_attr($pricing_label), esc_html__($ad_speed_text, 'adpeeps')) : '';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="priceBox">
                <h5><?php _e('Adsor', 'adpeeps'); ?></h5>
                <ul>
                    <?php
                    if (isset($pricing_table_items) && is_array($pricing_table_items)) {

                        foreach ($pricing_table_items as $pricing_table_item) {
                            $pricing_label = $pricing_table_item['pricing_label'];
                            $adsor_text = $pricing_table_item['adsor_text'];

                            echo $pricing_label && $adsor_text ? sprintf('<li data="%s:"><span>%s</span></li>', esc_attr($pricing_label), esc_html__($adsor_text, 'adpeeps')) : '';
                        }
                    }
                    ?>
                </ul>
            </div>

        </div>

        <?php echo $pricing_table_button_link && $pricing_table_button_text  ? sprintf('<a class="trialBtn" href="%s">%s</a>', $pricing_table_button_link, esc_html__($pricing_table_button_text, 'adpeeps')) : ''; ?>
    </div>
</section>
<!-- Section4 area end -->