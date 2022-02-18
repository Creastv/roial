<article id="post-<?php the_ID(); ?>" class="post-cart">
    <div class="row">
        <div class="col">
            <div class="img">
                <?php the_post_thumbnail(); ?>
            </div>

        </div>
        <div class="col">
            <div class="entry-content">
                <header class="entry-header">
                    <h2><?php the_title(); ?></h2>
                </header>
                <footer class="entry-footer">
                    <a class="btn btn-main-arrow " href="<?php echo esc_url( $permalink ); ?>">Zobacz wiecej</a>
                </footer>
            </div>
        </div>
    </div>
</article>