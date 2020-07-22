<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists( 'get_field' ) ) {
    $adpeeps_work_title = get_field( 'adpeeps_work_title', 'option' );
    $adpeeps_work_items = get_field( 'adpeeps_work_items', 'option' );
}
?>
<!-- Section3 area start -->
<section class="section3">
    <div class="container">
        <?php echo $adpeeps_work_title ? sprintf('<h2>%s</h2>', esc_html__( $adpeeps_work_title, 'adpeeps' ) ) : ''; ?>
        <ul class="howitworks">
            <?php
                if( isset($adpeeps_work_items) && is_array($adpeeps_work_items) ) {

                    $counter = 1;
                    foreach( $adpeeps_work_items as $adpeeps_work_item ) {
                        
                        $adpeeps_work_content = $adpeeps_work_item['adpeeps_work_content'];;
                        ?>
                            <li>
                                <div class="<?php echo $counter == 2 ? 'maroon' : 'orange'; ?>">
                                    <span><?php echo $counter; ?></span>
                                    <?php echo $adpeeps_work_content ? $adpeeps_work_content : ''; ?>
                                </div>
                            </li>
                        <?php
                        $counter++;
                    }
                }
            ?>
        	
        </ul>
    </div>
</section>
<!-- Section3 area end -->