<?php
add_theme_support('post-thumbnails');
if ( ! function_exists( 'inb_register_nav_menu' ) ) {
    function inb_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'ra' ),
            'footer_menu'  => __( 'Footer Menu', 'ra' ),
        ) );
    }
    add_action( 'after_setup_theme', 'inb_register_nav_menu', 0 );
}
function ra_scripts() {
	wp_enqueue_style( 'ra-style', get_stylesheet_uri() );
	wp_enqueue_style( 'ra-custome-style', get_template_directory_uri().'/src/css/main.min.css' ); ;
	wp_enqueue_script('ra-main', get_template_directory_uri().'/src/js/main.js', array( 'jquery' ),'3', true );
  wp_enqueue_script('ra-map', get_template_directory_uri().'/src/js/map.js', array( 'jquery' ),'4', true );
  if(is_singular( 'case-study' )){
      wp_enqueue_style( 'ra_svipeer_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
      wp_enqueue_script('ra-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
      wp_enqueue_script( 'ra-random-cases-stady', get_template_directory_uri() . '/src/js/random-cases-stady-carousel.js', array(), '20130457', true );
  }
}
add_action( 'wp_enqueue_scripts', 'ra_scripts' );

require get_template_directory() . '/src/inc/customizer.php';
require get_template_directory() . '/src/inc/custome-posts.php';
require get_template_directory() . '/blocks/blocks.php';



function ao_defer_inline_jquery( $in ) {
  if ( preg_match_all( '#<script.*>(.*)</script>#Usmi', $in, $matches, PREG_SET_ORDER ) ) {
    foreach( $matches as $match ) {
      if ( $match[1] !== '' && ( strpos( $match[1], 'jQuery' ) !== false || strpos( $match[1], '$' ) !== false ) ) {
        // inline js that requires jquery, wrap deferring JS around it to defer it. 
        $new_match = 'var aoDeferInlineJQuery=function(){'.$match[1].'}; if (document.readyState === "loading") {document.addEventListener("DOMContentLoaded", aoDeferInlineJQuery);} else {aoDeferInlineJQuery();}';
        $in = str_replace( $match[1], $new_match, $in );
      } else if ( $match[1] === '' && strpos( $match[0], 'src=' ) !== false && strpos( $match[0], 'defer' ) === false ) {
        // linked non-aggregated JS, defer it.
        $new_match = str_replace( '<script ', '<script defer ', $match[0] );
        $in = str_replace( $match[0], $new_match, $in );
      }
    }
  }
  return $in;
}




// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );



// // Load more
wp_localize_script( 'core-js', 'ajax_posts', array(
	'ajaxurl' => admin_url( 'admin-ajax.php' ),
));	
add_action( 'te', 're_acf_repeater', 10); // hook is the first part

function more_post_ajax(){
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
	$page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $idd =  (isset($_POST["idd"])) ? $_POST["idd"] : 0;

    header("Content-Type: text/html");
    $args = array(
    'post_type' => 'case-study',
    'posts_per_page' => $ppp,
		'paged'    => $page,
		'order' => 'ASC',
		
	);
    $loop = new WP_Query($args);
    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
		$out .=  include( 'template-parts/content/content-case-study.php');

    endwhile; endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');


// Futured image
add_image_size( 'crunchify-admin-post-featured-image', 120, 120, false );
 
// Add the posts and pages columns filter. They can both use the same function.
add_filter('manage_posts_columns', 'crunchify_add_post_admin_thumbnail_column', 2);
add_filter('manage_pages_columns', 'crunchify_add_post_admin_thumbnail_column', 2);
 
// Add the column
function crunchify_add_post_admin_thumbnail_column($crunchify_columns){
	$crunchify_columns['crunchify_thumb'] = __('Featured Image');
	return $crunchify_columns;
}
 
// Let's manage Post and Page Admin Panel Columns
add_action('manage_posts_custom_column', 'crunchify_show_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'crunchify_show_post_thumbnail_column', 5, 2);
 
// Here we are grabbing featured-thumbnail size post thumbnail and displaying it
function crunchify_show_post_thumbnail_column($crunchify_columns, $crunchify_id){
	switch($crunchify_columns){
		case 'crunchify_thumb':
		if( function_exists('the_post_thumbnail') )
			echo the_post_thumbnail( 'crunchify-admin-post-featured-image' );
		else
			echo 'hmm... your theme doesn\'t support featured image...';
		break;
	}
}

// Paginacja

function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}