<?php
$posts = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'orderby'   => 'rand',
    'order' => 'ASC'
));
?>
<section id="random-posts">
    <h4 class="title-section-random-posts">Zobacz również</h4>
    <div class="row">
        <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
        <div class="col">
            <?php get_template_part( 'template-parts/content/content'); ?>
        </div>
        <?php endwhile; ?>
    </div>
</section>