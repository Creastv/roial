<?php
$id = 'tytul-' . $block['id'];

$className = 'ra-zaufalinam ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <ul>
            <?php while( have_rows('logos') ): the_row(); ?>
            <li>
                <?php 
                $image = get_sub_field('logo');
                $size = 'meddium';
                $link = get_sub_field("link");
                if( $link ){ 
                    $link_url = $link['url'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                }
                if( $image ) { ?>
                <div class="logo">
                    <?php if($link) { ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php } ?>
                        <?php echo wp_get_attachment_image( $image, $size ); ?>
                        <?php if($link) { ?>
                    </a>
                    <?php } ?>
                </div>
                <?php  } ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>
