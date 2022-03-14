<?php
    $permalink = get_permalink( $post->ID );
    $title = get_the_title( $post->ID );
    $size = 'full';    $desc = get_field( 'desc', $post->ID );
    $data = get_the_time('d.m.Y');

?>
<article id="post-<?php the_ID(); ?>" class="post-cart">
    <div class="row">
        <div class="col">
            <div class="img">
                <a href="<?php echo esc_url( $permalink ); ?>">
                    <?php the_post_thumbnail($size); ?>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="entry-content">
                <header class="entry-header">
                    <div class="meta meta-data">
                        <span>Publikacja <?php echo $data;?></span>
                    </div>
                    <h2> <a href="<?php echo esc_url( $permalink ); ?>"><?php echo $title; ?> </a></h2>
                </header>
                <footer class="entry-footer">
                    <?php if(edit_post_link()) { ?>
                    <?php edit_post_link(__('Edit')); ?>
                    <?php } ?>
                    <a class="btn btn-main-arrow " href="<?php echo esc_url( $permalink ); ?>">Zobacz wiecej</a>
                </footer>
            </div>
        </div>
    </div>
</article>
