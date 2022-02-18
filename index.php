<?php get_header(); ?>
<article>
    <?php  if($post->post_type == 'case-study') : ?>

    <?php
	$page_id=103; // Add id of the page
    $post = get_post($page_id);
    $content = apply_filters('the_content', $post->post_content);
    ?>
    <header class="entry-header">
        <?php get_template_part('template-parts/header/site-title'); ?>
    </header>

    <?php echo $content; ?>

    <?php  else : ?>

    <header class="entry-header">
        <?php get_template_part('template-parts/header/site-title'); ?>
    </header>

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="wraper-full-posts">
        <?php get_template_part( 'template-parts/content/content'); ?>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php get_template_part( 'template-parts/content/content-none' ); ?>
    <?php endif; ?>

    <?php endif; ?>
</article>
<?php get_footer(); ?>