<?php
    $title = get_the_title( $post->ID );
    $size = 'full';    $desc = get_field( 'desc', $post->ID );
    $data = get_the_time('d.m.Y');

?>

<article id="post-<?php the_ID(); ?>" class="single-post">
    <header class="entry-header">
        <?php if ( function_exists('yoast_breadcrumb') ) { ?>
        <?php  yoast_breadcrumb( '<div id="breadcrumbs">','</div>' ); ?>
        <?php } ?>
    </header>
    <div class="entry-wraper">
        <?php echo do_shortcode("[addtoany]"); ?>
        <div class="wraper">
            <header class="entry-header">
                <h1 class="entry-title"><?php echo $title; ?></h1>
                <div class="meta-group">
                    <div class="meta meta-category">
                        <span> Kategoria: </span>
                        <?php the_category();?>
                    </div>
                    <div class="meta meta-data">
                        <span>Publikacja <?php echo $data;?></span>
                    </div>
                </div>
                <?php the_post_thumbnail($size); ?>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
                <div class="aggregateRating">
                    <?php echo kk_star_ratings(); ?>
                </div>
                <div id="author-bio">
                    <div id="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></div>

                    <div id="author-details">
                        <div class="author-head">
                            <div class="title">
                                <h2><?php the_author_posts_link(); ?></h2>
                                <i><?php $author_id = get_the_author_meta('ID'); the_field('pozycja', 'user_'. $author_id); ?></i>
                            </div>
                            <div class="links">
                                <?php  if (get_the_author_meta('user_url') ) { ?>
                                <a href="<?php the_author_meta('user_url'); ?>" class="author-website" target="_blank">
                                    <i class="fas fa-link"></i>
                                </a>
                                <?php } ?>
                                <?php  if (get_the_author_meta('linkedin') ) { ?>
                                <a href="<?php the_author_meta('linkedin'); ?>" class="author-linkedin" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <?php } ?>
                                <?php  if (get_the_author_meta('facebook') ) { ?>
                                <a href="<?php the_author_meta('facebook'); ?>" class="author-facebook" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <?php } ?>
                                <?php  if (get_the_author_meta('twitter') ) { ?>
                                <a href="<?php the_author_meta('twitter'); ?>" class="author-twitter" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <?php }?>
                                <?php  if (get_the_author_meta('instagram') ) { ?>
                                <a href="<?php the_author_meta('instagram'); ?>" class="author-instagram"
                                    target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="author-footer">
                            <p> <?php the_author_description(); ?></p>
                        </div>
                    </div><!-- #author-details -->
                </div><!-- #author-bio -->
            </div>
        </div>
    </div>
    <footer class="entry-footer"></footer>

    <div class="triangles-single">
        <svg xmlns="http://www.w3.org/2000/svg" width="1096.664" height="943.1" viewBox="0 0 1096.664 943.1">
            <g transform="translate(-898.834 -135.749)">
                <path fill="none" stroke="#cfcfcf" d="M660.588,1150.758,796.17,1387.5"
                    transform="translate(238.83 -308.901)" />
                <path fill="none" stroke="#cfcfcf" d="M-141.093-231.283,131.961,232.424l24.611,41.794"
                    transform="translate(1723.359 372.5)" />
                <path fill="none" stroke="#cfcfcf" d="M394.184,680.6l409.532,702.614"
                    transform="translate(506.016 -308)" />
                <path fill="none" stroke="#cfcfcf" d="M-5.1-1.3,409.8,704.021" transform="translate(1175.5 372.5)" />
                <path fill="none" stroke="#cfcfcf" d="M657.724,444.8l-408.2,705.533"
                    transform="translate(649.875 -308)" />
                <path fill="none" stroke="#cfcfcf" d="M729.01,454.45,183.441,1386.2"
                    transform="translate(851.559 -308)" />
                <path fill="none" stroke="#cfcfcf" d="M596.808,681.433,186.508,1383.4"
                    transform="translate(1123.559 -308)" />
                <path fill="none" stroke="#cfcfcf" d="M595.809,678.017,209.052,1342.866l-24.341,41.584"
                    transform="translate(1399.257 -308)" />
                <path fill="none" stroke="#cfcfcf" d="M1109.419.251H13.188" transform="translate(885.646 373.308)" />
                <path fill="none" stroke="#cfcfcf" d="M1206.1,0,276.5.937" transform="translate(756.5 606.063)" />
                <path fill="none" stroke="#cfcfcf" d="M1219.7,0,158.3,1.536" transform="translate(741.9 841.063)" />
                <path fill="none" stroke="#cfcfcf" d="M959.516,0,141.566,1.937"
                    transform="translate(893.434 1076.263)" />
                <path fill="none" stroke="#e8e8e8" d="M.3-2.5,546.469,938" transform="translate(1306.5 138.5)" />
            </g>
        </svg>
    </div>
</article>