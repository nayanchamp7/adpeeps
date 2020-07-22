<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists( 'get_field' ) ) {
    $hero_title = get_field( 'hero_title', 'option' );
    $hero_content = get_field( 'hero_content', 'option' );
    $hero_thumbnail = get_field( 'hero_thumbnail', 'option' );
    $hero_background = get_field( 'hero_background', 'option' );
}
?>
<!-- Banner area start -->
<div class="banner" >
    <div class="banMid"
    style="background: url(<?php echo ( isset($hero_background) && $hero_background['id'] ) ? wp_get_attachment_image_src( $hero_background['id'], 'full' )[0] : ''; ?>) no-repeat center bottom;">
        <div class="container">
            <div class="bnrInner">
                <div class="bnrLft">
                    <?php echo $hero_title ? sprintf('<h1>%s</h1>', esc_html__( $hero_title, 'adpeeps' ) ) : ''; ?>
                    <?php echo $hero_content ? $hero_content : ''; ?>
                </div>
                <div class="bnrRgt">
                    <img src="<?php echo ( isset($hero_thumbnail) && $hero_thumbnail['id'] ) ? wp_get_attachment_url( $hero_thumbnail['id'] ) : ''; ?>" alt="hero-thumb"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner area end -->