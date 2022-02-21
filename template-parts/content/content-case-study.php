<?php
    // global $post;
    // $post = $post_object; 

    $permalink = get_permalink( $post->ID );
    $title = get_the_title( $post->ID );

    $logo = get_field( 'logo', $post->ID );
    $size = 'full';
    $titleFild = get_field( 'title', $post->ID );
    $desc = get_field( 'desc', $post->ID );
    $no = get_field( 'number', $post->ID );
    $noSmall = get_field( 'number_small', $post->ID );
    $noDesc = get_field( 'number_desc', $post->ID );
?>

<article id="post-<?php the_ID(); ?>" class="cs-cart">
    <div class="cs-cart_wraper row">
        <div class="col">
            <div class="cs-cart__number">
                <span class="number"><?php echo $no; ?><span><?php echo $noSmall; ?></span></span>
                <span class="desc"><?php echo $noDesc; ?></span>
            </div>
        </div>
        <div class="col">
            <header class="entry-header">
                <a href="<?php echo esc_url( $permalink ); ?>">
                    <?php  echo wp_get_attachment_image( $logo, $size ); ?>
                    <?php if(empty($titleFild)){ ?>
                    <h2><?php echo $titleFild; ?></h2>
                    <?php } else { ?>
                    <h2><?php echo $title; ?></h2>
                    <?php } ?>
                </a>
            </header>
            <div class="entry-desc">
                <p><?php echo $desc; ?></p>
            </div>
            <footer class="entry-footer">
                <a class="btn btn-main-arrow " href="<?php echo esc_url( $permalink ); ?>">Zobacz wiecej</a>
            </footer>
        </div>
        <span class="bg"></span>
    </div>
</article>