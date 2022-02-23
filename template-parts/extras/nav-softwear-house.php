<?php
$nav = new WP_Query( array(
    'post_type' => 'software-house',
    'posts_per_page' => -1,
    'post_status' => 'publish', 
    'orderby' => 'menu_order', 
    'order' => 'ASC', 
));
$no = 0;
?>
<nav class="nav-software-house">
    <ul>
        <?php
         $page = $post->ID; ?>
        <?php while ( $nav->have_posts() ) : $nav->the_post();
          $i++;
          $active = ($page == $post->ID) ? 'active' : '' ;
        ?>
        <li class="<?php echo $active; ?>">

            <span>0<?php echo $i; ?></span>
            <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
        </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
</nav>