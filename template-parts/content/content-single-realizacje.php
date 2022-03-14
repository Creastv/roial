<?php
$nazwaFirmy = get_field('nazwa_firmy');
$linkDoStrony = get_field("link_do_strony");
$opisProjektu = get_field("opis_projektu");
$galeria = get_field("galeria");
?>
<article id="post-<?php the_ID(); ?>" class="single-case-study">
    <div class="info-realizacja">
        <div class="row">
            <div class="col">
                <div class="infos">
                    <!-- <div class="inf client">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </div> -->
                    <?php if($nazwaFirmy) { ?>
                    <div class="inf client">
                        <span>Klient</span>
                        <p><?php echo $nazwaFirmy; ?></p>
                    </div>
                    <?php } ?>
                    <?php if($linkDoStrony) { ?>
                    <div class="inf client">
                        <span>Zobacz projekt</span>
                        <p><a href="<?php echo $linkDoStrony; ?>" target="_blank"><?php echo $linkDoStrony; ?></a></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col">
                <div class="img">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if($opisProjektu) { ?>
    <div class="entry-content">
        <div class="container-fluid">
            <h2>Opis realizacji</h2>
            <?php echo $opisProjektu; ?>
        </div>
    </div>
    <?php } ?>
    <?php  if( $galeria ): ?>
    <div class="galeria">
        <ul>
            <?php foreach( $galeria as $image ): ?>
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
</article>
<?php  if( $galeria ) { ?>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
(window.onload = function(event) {
    setTimeout(function() {
        var elem = document.querySelector('.galeria');
        if (elem !== null) {
            var msnry = new Masonry(elem, {
                // options
                itemSelector: '.con',
            });
        }
    }, 200);
})();
</script>
<?php } ?>