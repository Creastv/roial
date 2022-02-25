<?php
$id = 'nasza-oferta-' . $block['id'];

$className = 'ra-nasza-oferta ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
    
    $oferty = new WP_Query( array(
        'post_type' => 'oferty',
        'posts_per_page' => -1,
        'post__not_in' => array(3139),
        'order' => 'DESC',
    ));

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="row">
        <?php while ( $oferty->have_posts() ) : $oferty->the_post(); ?>
        <div class="col">
            <?php get_template_part( 'template-parts/content/content-oferta'); ?>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>