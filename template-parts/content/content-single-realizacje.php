<article id="post-<?php the_ID(); ?>" class="single-case-study">
    <header class="entry-header">
        <?php get_template_part('template-parts/header/site-title'); ?>
    </header>
    <div class="entry-content">
        <div class="container-fluid">
            <?php the_content(); ?>
        </div>
    </div>
    <footer class="entry-footer"></footer>
</article>