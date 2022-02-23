<?php 
	$t = get_field("tytul",  $post->ID);
	$t2 = get_field("tytul_2",  $post->ID);
    $title = get_the_title();
    if ( $t || $t2 ) :
        $title = $t . ' <span>'.$t2. '</span>';
    endif;
    if(!has_post_thumbnail()) :
        $collarge="col-l";
        $colsmall="col-s";
    endif;
?>
<article id="post-<?php the_ID(); ?>" class="single-softwarehouse">
    <header class="entry-header">
        <?php get_template_part('template-parts/header/site-title'); ?>
    </header>
    <div class="wraper-single-software-house">
        <?php get_template_part('template-parts/extras/nav-softwear-house'); ?>
        <div class="entry-content">
            <h1 class="entry-title"><?php echo $title; ?></h1>
            <div class="row">
                <div class="col  <?php echo $collarge; ?>">
                    <?php the_content(); ?>
                </div>

                <div class="col <?php echo $colsmall; ?>">
                    <div class="img">
                        <?php the_post_thumbnail(); ?>
                        <div class="orn-image-software-house js">
                            <img class="orn orn-05" src="<?php bloginfo('template_url'); ?>/src/img/orn-image-05.svg" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer class="entry-footer"></footer>
    </div>
</article>
<?php if(has_post_thumbnail()) : ?>
<script type="text/javascript">
const ornPlace = document.querySelector('.orn-image-software-house');
let images = [],
    index = 0;
images[0] = '<img class="orn orn-01" src="<?php bloginfo('template_url'); ?>/src/img/orn-image-01.svg" />';
images[1] = '<img class="orn orn-02" src="<?php bloginfo('template_url'); ?>/src/img/orn-image-02.svg" />';
images[2] = '<img class="orn orn-03" src="<?php bloginfo('template_url'); ?>/src/img/orn-image-03.svg" />';
images[3] = '<img class="orn orn-04" src="<?php bloginfo('template_url'); ?>/src/img/orn-image-04.svg" />';
index = Math.floor(Math.random() * images.length);
ornPlace.innerHTML = images[index];
</script>
<?php endif; ?>