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
                <a class="arrow" href="<?php echo $permalink; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.822" height="26.035" viewBox="0 0 16.822 26.035">
                        <g transform="translate(-877.96 -1331.952)">
                            <g transform="translate(878.697 1357.986) rotate(-90)">
                                <line fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2px" x2="23.694"
                                    transform="translate(0 7.67)" />
                                <path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2px"
                                    d="M0,0,8.378,7.67,0,15.347" transform="translate(16.176 0)" />
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</article>