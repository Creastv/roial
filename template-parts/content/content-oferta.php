<?php
    $permalink = get_permalink( $post->ID );
    $title = get_the_title( $post->ID );

    $ikona = get_field('ikona', $post->ID);
    $size = 'full';
    $tytul = get_field('tytul_na_karcie', $post->ID);
    $opis= get_field("opis_na_karcie", $post->ID);
?>
<article id="post-<?php the_ID(); ?>" class="content-oferta">
    <div class="row">
        <div class="col">
            <div class="img">
                <?php if( $ikona) { ?>
                <?php echo wp_get_attachment_image( $ikona, $size ); ?>
                <?php }  ?>

            </div>
        </div>
        <div class="col">
            <div class="inf">
                <h2><a href="<?php echo $permalink; ?>"><?php echo $title;?></a></h2>
                <p><?php echo $opis; ?></p>
                <a class="btn btn-main-arrow" href="<?php echo $permalink; ?>">Czytaj więcej</a>
            </div>
        </div>
    </div>
</article>