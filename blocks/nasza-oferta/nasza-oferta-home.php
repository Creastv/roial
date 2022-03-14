<?php
$tytulSec = get_field('tytul_sekcji');
$tytulSec2 = get_field('tytul_sekcji_dwa');

$link = get_field('link_zobacz_wszystko');

if( $link ){ 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}

$id = 'nasza-oferta-' . $block['id'];

$className = 'ra-nasza-oferta-home ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
    
$oferty = get_field('oferty',  $post->ID);

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="ra-title-section">
                    <h2 class="title-section-tag"><?php echo $tytulSec;?><span> <?php echo $tytulSec2;?></span></h2>
                </div>
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
                                <a class="arrow" href="<?php echo $permalink; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.822" height="26.035"
                                        viewBox="0 0 16.822 26.035">
                                        <g transform="translate(-877.96 -1331.952)">
                                            <g transform="translate(878.697 1357.986) rotate(-90)">
                                                <line fill="none" stroke="#000" stroke-miterlimit="10"
                                                    stroke-width="2px" x2="23.694" transform="translate(0 7.67)" />
                                                <path fill="none" stroke="#000" stroke-miterlimit="10"
                                                    stroke-width="2px" d="M0,0,8.378,7.67,0,15.347"
                                                    transform="translate(16.176 0)" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>
                    <?php if($i == 0 ){ ?>
                    <div class="col"></div>
                    <?php } ?>
                    <?php $i++; endforeach; ?>
                </div>
                <?php if( $link ) { ?>
                <div class="btn-wraper">
                    <a class="btn btn-main btn-main-arrow btn-big" href="<?php echo esc_url( $link_url ); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <div class="orn-nasza-oferta">
        <img src="<?php echo get_template_directory_uri() ?>/src/img/nasza-oferta.png" alt="loading">
    </div>

</section>