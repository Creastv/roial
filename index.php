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
    <div class="futured-cat container-row">
        <span>Kategorie postów</span>
        <ul>
            <?php
            $categories = get_categories();
            foreach ($categories as $category) :
                $cat_class =  ( is_category( $category->name ) ) ? 'active' : '';
                $futured = get_field('wyroznione', $category); ?>
            <?php if($futured): ?>
            <li class="<?php echo $cat_class; ?>"><a
                    href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->cat_name; ?></a>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>

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