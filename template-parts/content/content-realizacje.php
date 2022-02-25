<?php
 $permalink = get_permalink( $post->ID );
$nazwaFirmy = get_field('nazwa_firmy', $post->ID);
$linkDoStrony = get_field("link_do_strony", $post->ID);
?>
<article id="post-<?php the_ID(); ?>" class="content-realizacja">
    <div class="info-realizacja">
        <div class="row">
            <div class="col">
                <div class="infos">
                    <div class="inf client">
                        <h2 class="entry-title"><a href="<?php echo esc_url( $permalink ); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
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
                    <a href="<?php echo esc_url( $permalink ); ?>">
                        <?php if(has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?>
                        <?php } else { ?>
                        <img src="<?php bloginfo('template_url'); ?>/src/img/default-reliazacje.png" alt="">
                        <?php } ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php if(edit_post_link()) { ?>
    <footer class="entry-footer"><?php edit_post_link(__('Edit')); ?></footer>
    <?php } ?>
</article>