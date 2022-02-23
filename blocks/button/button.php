<?php
$link= get_field("link_btn");

$uid = $block['id'];

$className = 'ra-button';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>
<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="button-wraper">
        <?php 
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <a class="btn btn-main btn-big btn-main-arrow" href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
        </a>
        <?php endif; ?>
    </div>
</div>