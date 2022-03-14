<?php
    $permalink = get_permalink( );
    $title = get_the_title( );

    $logo = get_field( 'logo');
    $size = 'full';
    $titleFild = get_field( 'title');
    $desc = get_field( 'desc');
    $no = get_field( 'number');
    $noSmall = get_field( 'number_small');
    $noDesc = get_field( 'number_desc');
    $nazwaKlienta = get_field( 'nazwa_klienta');  
    $typDzialan = get_field( 'typ_dzialan');
    $narzedzia = get_field( 'wykorzystane_narzedzia');
    $opisDzialania = get_field( 'opis_dzialania');
    $images = get_field('galeria');

?>
<article id="post-<?php the_ID(); ?>" class="single-case-study">
    <div class="info-case">
        <div class="row">
            <?php if( $logo) { ?>
            <div class="col">
                <div class="logo">
                    <div class="img">
                        <?php  echo wp_get_attachment_image( $logo, $size ); ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if( $no) { ?>
            <div class="col">
                <div class="gool">
                    <span class="number"><?php echo $no; ?><span><?php echo $noSmall; ?></span></span>
                    <span class="desc"><?php echo $noDesc; ?></span>
                </div>
            </div>
            <?php } ?>
            <?php if( $nazwaKlienta && $typDzialan) { ?>
            <div class="col">
                <?php if( $nazwaKlienta) { ?>
                <div class="inf client">
                    <span>klient</span>
                    <p><?php echo $nazwaKlienta; ?></p>
                </div>
                <?php } ?>
                <?php if( $typDzialan) { ?>
                <div class="inf client">
                    <span>Typ działań</span>
                    <p><?php echo $typDzialan; ?></p>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
            <?php if( $narzedzia) { ?>
            <div class="col">
                <div class="tools">
                    <span class="title">Wykorzystane narzędzia:</span>
                    <?php if( have_rows('wykorzystane_narzedzia') ): ?>
                    <ul>
                        <?php while( have_rows('wykorzystane_narzedzia') ): the_row(); 
                            $ikona = get_sub_field('ikona');
                            $narzedzie = get_sub_field('narzedzie');
                            $opis = get_sub_field('opis_narzedzia');
                        ?>
                        <li>
                            <?php echo wp_get_attachment_image( $ikona, 'full' ); ?>
                            <p><strong><?php echo $narzedzie; ?></strong> <?php echo $opis; ?></p>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="entry-content">
        <?php if($opisDzialania) { ?>
        <div class="container-fluid">
            <h2>Opis działań</h2>
            <?php echo $opisDzialania; ?>
        </div>
        <?php } ?>
        <div class="orn-s-cs">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/single-case-orn.png"
                alt="<?php the_title(); ?>" />
        </div>
    </div>

    <?php  if( $images ): ?>
    <div class="galeria">
        <ul>
            <?php foreach( $images as $image ): ?>
            <li class="con">
                <a href=" <?php echo esc_url($image['url']); ?>">
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
    <?php if(edit_post_link()) { ?>
    <footer class="entry-footer"><?php edit_post_link(__('Edit')); ?></footer>
    <?php } ?>
    <?php get_template_part('template-parts/extras/random-cases-stady-carousel'); ?>

</article>
<?php  if( $images ) { ?>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
(window.onload = function(event) {
    var elem = document.querySelector('.galeria');
    if (elem !== null) {
        var msnry = new Masonry(elem, {
            // options
            itemSelector: '.con',
        });
    }
})();
</script>
<?php } ?>
<script>
(window.onload = function(event) {
    const trianglesSingle = document.querySelector(".orn-s-cs");

    setTimeout(function() {
        var elem = document.querySelector('.galeria');
        if (elem !== null) {
            var msnry = new Masonry(elem, {
                // options
                itemSelector: '.con',
            });
        }
    }, 200);

    document.addEventListener("scroll", () => {
        let scrollTop = document.documentElement.scrollTop;
        if (trianglesSingle !== null) {
            trianglesSingle.style.bottom = 0 - scrollTop / 5 + "%";
        }
    });
})();
</script>