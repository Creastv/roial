<?php
$id = 'tytul-' . $block['id'];

$className = 'ra-post ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
  $cases = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'order' => 'DESC',
    ));

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
</section>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="wraper-full-posts">
        <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>

        <?php get_template_part( 'template-parts/content/content'); ?>

        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>