<?php
$id = 'nasza-oferta-' . $block['id'];

$className = 'ra-nasza-oferta-home ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
    
$oferty = get_field('oferty',  $post->ID);

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <div class="row">
                <?php 
                $i=0;
                foreach( $oferty as $oferta ): 
                    $permalink = get_permalink(  $oferta->ID );
                    $title = get_the_title(  $oferta->ID );
                    $tytul = get_field('tytul_na_karcie',  $oferta->ID);
                    $opis= get_field("opis_na_karcie",  $oferta->ID);
                ?>
                <div class="col">
                    <article id="post-<?php the_ID(); ?>" class="content-oferta">
                        <div class="inf">
                            <h2><a href="<?php echo $permalink; ?>"><?php echo $title;?></a></h2>
                            <p><?php echo $opis; ?></p>
                            <a class="btn btn-main-arrow" href="<?php echo $permalink; ?>">Czytaj więcej</a>
                        </div>
                    </article>
                </div>
                <?php $i++; endforeach; ?>
            </div>
        </div>
    </div>
</section>