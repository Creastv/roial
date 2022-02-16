<?php
/**
*
* Template name: Page with out title
* Template Post Type: page
*/

get_header();
while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content/content-page' );
endwhile; // End of the loop.
get_footer();