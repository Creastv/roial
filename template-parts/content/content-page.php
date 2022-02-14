<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <?php endif; ?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer"></footer>
</article>