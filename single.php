<?php
get_header();
while ( have_posts() ) : the_post(); 
if(is_singular("post")) :
    get_template_part( 'template-parts/content/content-single' );
elseif(is_singular("cases")) :
    get_template_part( 'template-parts/content/content-single-case-study' );
elseif(is_singular("software-house")) :
    get_template_part( 'template-parts/content/content-single-software-house' );
elseif(is_singular("realizacje")) :
    get_template_part( 'template-parts/content/content-single-realizacje' );
elseif(is_singular("oferty")) :
    get_template_part( 'template-parts/content/content-single-oferta' );
endif;
endwhile;
if(is_singular("post")) :
    get_template_part( 'template-parts/extras/random-posts');
endif;
get_footer();