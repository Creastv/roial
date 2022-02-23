<?php get_header(); ?>
<article>
    <?php  if($post->post_type == 'case-study') : ?>
    <!-- Archive case-study  -->
    <?php
	$page_id=103; // Add id of the page
    $post = get_post($page_id);
    $content = apply_filters('the_content', $post->post_content);
    ?>
    <header class="entry-header">
        <?php get_template_part('template-parts/header/site-title'); ?>
    </header>

    <?php echo $content; ?>
    <!-- END Archive case-study  -->
    <?php  else : ?>
    <!-- Archive Blog  -->

    <header class="entry-header blog">
        <?php get_template_part('template-parts/header/site-title'); ?>
    </header>
    <?php get_template_part('template-parts/extras/nav-blog-category'); ?>

    <?php if ( have_posts() ) : ?>
    <div class="wraper-full-posts">
        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content/content'); ?>
        <?php endwhile; ?>
        <?php if(paginate_links()) { ?>
        <div class="pagination">
            <?php pagination_bars(); ?>
        </div>
        <?php } ?>
    </div>
    <?php else : ?>
    <?php get_template_part( 'template-parts/content/content-none' ); ?>
    <?php endif; ?>
    <!-- end Archive blog  -->
    <?php endif; ?>
</article>
<?php get_footer(); ?>