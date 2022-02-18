<?php
get_header();
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php get_template_part('template-parts/header/site-title'); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer"></footer>
    <?php get_template_part('template-parts/extras/random-cases-stady-carousel'); ?>
</article>

<?php endwhile;
get_footer(); ?>