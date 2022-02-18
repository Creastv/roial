<?php
$case = new WP_Query( array(
    'post_type' => 'case-study',
    'posts_per_page' => 6,
    'orderby'   => 'rand',
    'order' => 'ASC'
));
?>
<section id="ra-case-study-carousel">
    <h3>Powiązane Case Studies</h3>
    <div class=" swiper carousel">
        <div class="nav-slider">
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-wrapper">
            <?php while ( $case->have_posts() ) : $case->the_post(); ?>
            <div class="swiper-slide">
                <?php get_template_part( 'template-parts/content/content-case-study'); ?>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>

    </div>
    <div class="arrows">
        <div class="s-button-next">
        </div>
        <div class="s-button-prev">
        </div>
    </div>
</section>