<?php if ( function_exists('yoast_breadcrumb') ) { ?>
<?php  yoast_breadcrumb( '<div id="breadcrumbs">','</div>' ); ?>
<?php } ?>
<h1 class="entry-title">
    <?php if ( is_category() ) :
        single_cat_title();	
        					
		elseif (is_single()) :
			the_title();

		elseif (is_page() ) :
			the_title();

		elseif ( is_tag() ) :
			single_tag_title();

		elseif ( is_author() ) :
			the_post();
			printf( __( 'Author: %s', 'cr' ), '<span class="vcard">' . get_the_author() . '</span>' );
			rewind_posts();

		elseif ( is_day() ) :
			printf( __( 'Day: %s', 'cr' ), '<span>' . get_the_date() . '</span>' );

		elseif ( is_month() ) :
			printf( __( 'Month: %s', 'cr' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

		elseif ( is_year() ) :
			printf( __( 'Year: %s', 'cr' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

		elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
			_e( 'Asides', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
			_e( 'Images', 'cr');

		elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
			_e( 'Videos', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
			_e( 'Quotes', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
			_e( 'Links', 'cr' );
		else :
			_e( 'Blog', 'cr' );
		endif; ?>
</h1>