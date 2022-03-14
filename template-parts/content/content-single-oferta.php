<?php
    $iko = get_field('ikona', $post->ID);
    $size = 'full';

    $tytul = get_field('tytul_na_karcie', $post->ID);
    $opis= get_field("opis_na_karcie", $post->ID);

    $opisLong= get_field("opis", $post->ID);
    $tytulNarz= get_field("tytul_sekcji_narzedzia", $post->ID);
    $narzedzia= get_field("narzedzia", $post->ID);

    $faq = get_field('faq');
    $faq2 = get_field('faq_two');
?>
<article id="post-<?php the_ID(); ?>" class="single-oferta">
    <div class="entry-content">
        <div class="inf container-fluid">
            <div class="row">
                <div class="col">
                    <div class="inf-oferta">
                        <h1><?php the_title(); ?></h1>
                        <?php if($opis){ ?>
                        <h3> <?php echo $opis; ?></h3>
                        <?php } ?>
                    </div>
                    <?php if($opisLong){ ?>
                    <div class="opis-oferta">
                        <?php echo $opisLong; ?>
                    </div>
                    <?php } ?>
                    <?php if($narzedzia){ ?>
                    <div class="narzedzia-oferta">
                        <?php if($tytulNarz) { ?>
                        <span><?php echo $tytulNarz; ?></span>
                        <?php }?>
                        <ul>
                            <?php while( have_rows("narzedzia") ): the_row(); 
                            $ikona = get_sub_field('ikona');
                            $tytul = get_sub_field('tytul');
                            $opis = get_sub_field('opis');
                            ?>
                            <li>
                                <?php echo wp_get_attachment_image($ikona, 'full' ); ?>
                                <p><b><?php echo $tytul; ?></b> <?php echo $opis; ?></p>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <div class="col">
                    <div class="ico">
                        <?php if( $iko) { ?>
                        <?php echo wp_get_attachment_image( $iko, $size ); ?>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="orn-single-oferta">
            <svg class="bg-path" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" width="1362.461" height="1304.666" viewBox="0 0 1098.5 1191.1" xml:space="preserve">
                <g transform="translate(1930.2 -238.604) rotate(120)">
                    <path fill="none" stroke="#E3E3E3" d="M832.7,950.8l136.2,235.9" />
                    <path fill="none" stroke="#E3E3E3" d="M1516.2,249.2l273.1,463.7" />
                    <path fill="none" stroke="#E3E3E3" d="M970.5,714.6l273.2,468.6" />
                    <path fill="none" stroke="#E3E3E3" d="M1104.3,479.2l414.9,705.3" />
                    <path fill="none" stroke="#E3E3E3" d="M1241.5,244.8L833.3,950.4" />
                    <path fill="none" stroke="#E3E3E3" d="M1514.5,254.5l-545.6,931.8" />
                    <path fill="none" stroke="#E3E3E3" d="M1654.3,481.5l-410.3,702" />
                    <path fill="none" stroke="#E3E3E3" d="M1929,478l-386.8,664.8l-24.3,41.6" />
                    <path fill="none" stroke="#E3E3E3" d="M1929,481.6l-824.3,0" />
                    <path fill="none" stroke="#E3E3E3" d="M1793,714.2L966.9,715" />
                    <path fill="none" stroke="#E3E3E3" d="M1895.5,949.1l-1061.4,1.5" />
                    <path fill="none" stroke="#E3E3E3" d="M1786.8,1184.3l-818,1.9" />
                    <path fill="none" stroke="#E3E3E3" d="M1240.7,244l546.2,940.5" />
                </g>
            </svg>
        </div>
    </div>
    <?php if( $faq && $faq2): ?>
    <section class="faq js">
        <div class="container-fluid">
            <div class=" row" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="col">
                    <?php $count;
                    while( have_rows('faq') ): the_row(); 
                        $pytanie = get_sub_field('pytanie');
                        $odp = get_sub_field('odpowiedz');
                         $active= "";
                         if($count == 0) { $active= 'active'; }
                    ?>
                    <div class="wraper js <?php echo $active; ?>" itemscope="" itemprop="mainEntity"
                        itemtype="https://schema.org/Question">
                        <h3 class="accordion"> <span itemprop="name">
                                <?php echo $pytanie; ?>
                            </span></h3>
                        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="panel">
                            <div itemprop="text">
                                <p> <?php echo $odp; ?>
                                </p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.822" height="26.035"
                            viewBox="0 0 16.822 26.035">
                            <g transform="translate(-877.96 -1331.952)">
                                <g transform="translate(878.697 1357.986) rotate(-90)">
                                    <line fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2px"
                                        x2="23.694" transform="translate(0 7.67)" />
                                    <path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2px"
                                        d="M0,0,8.378,7.67,0,15.347" transform="translate(16.176 0)" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <?php  $count++; endwhile; ?>
                </div>
                <div class="col">
                    <?php
                    while( have_rows('faq_two') ): the_row(); 
                        $pytanie = get_sub_field('pytanie');
                        $odp = get_sub_field('odpowiedz');
                    ?>
                    <div class="wraper js" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="accordion"> <span itemprop="name">
                                <?php echo $pytanie; ?>
                            </span></h3>
                        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="panel">
                            <div itemprop="text">
                                <p> <?php echo $odp; ?>
                                </p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.822" height="26.035"
                            viewBox="0 0 16.822 26.035">
                            <g transform="translate(-877.96 -1331.952)">
                                <g transform="translate(878.697 1357.986) rotate(-90)">
                                    <line fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2px"
                                        x2="23.694" transform="translate(0 7.67)" />
                                    <path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2px"
                                        d="M0,0,8.378,7.67,0,15.347" transform="translate(16.176 0)" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <?php  endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php $powiazaneCaseStudy = get_field('case_studys');
        if( $powiazaneCaseStudy ): ?>

    <section id="ra-case-study-carousel">
        <h3>Powiązane Case Studies</h3>
        <div class=" swiper carousel">
            <div class="nav-slider">
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-wrapper">
                <?php foreach( $powiazaneCaseStudy as $post ):  setup_postdata($post); ?>
                <div class="swiper-slide">
                    <?php get_template_part( 'template-parts/content/content-case-study'); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="arrows">
            <div class="s-button-next">
            </div>
            <div class="s-button-prev">
            </div>
        </div>
    </section>

    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php if(edit_post_link()) { ?>
    <footer class="entry-footer"><?php edit_post_link(__('Edit')); ?></footer>
    <?php } ?>

</article>