<?php
add_theme_support('post-thumbnails');
add_image_size( 'team', 300, 300, array( 'center', 'center' ) );
add_image_size( 'admin-posts', 120, 120, false );
add_image_size( 'logos', 150, 150, false );

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
	wp_enqueue_style( 'ra-custome-style', get_template_directory_uri().'/src/css/main.min.css' ); 
 wp_enqueue_script( 'ra-liners-script', get_template_directory_uri() . '/src/js/liners.js', array(), '20130457', true );
	wp_enqueue_script('ra-main', get_template_directory_uri().'/src/js/main.js', array( 'jquery' ),'3', true );
  wp_enqueue_script('ra-map', get_template_directory_uri().'/src/js/map.js', array( 'jquery' ),'4', true );
  if(is_singular( 'cases' ) ){
      wp_enqueue_style( 'ra_svipeer_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
      wp_enqueue_script('ra-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
      wp_enqueue_script( 'ra-random-cases-stady', get_template_directory_uri() . '/src/js/random-cases-stady-carousel.js', array(), '20130457', true );
  }
  if(is_singular( 'oferty' )){
      wp_enqueue_style( 'ra_svipeer_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
      wp_enqueue_script('ra-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
      wp_enqueue_script( 'ra-random-cases-stady', get_template_directory_uri() . '/src/js/single-oferta.js', array(), '20130457', true );
  }
  
}

add_action( 'wp_enqueue_scripts', 'ra_scripts' );

// gutenberg editor
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/admin.min.css');
}

add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);

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
			echo the_post_thumbnail( 'admin-posts' );
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

// load more casestudy
wp_localize_script( 'core-js', 'ajax_posts', array(
	'ajaxurl' => admin_url( 'admin-ajax.php' ),
));	

function more_post_ajax(){
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
	$page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $idd =  (isset($_POST["idd"])) ? $_POST["idd"] : 0;

    header("Content-Type: text/html");
    $args = array(
    'post_type' => 'cases',
    'posts_per_page' => $ppp,
    'post__not_in' => array(3144),
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

// load more realizacje
function realizacje_post(){
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
	$page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $idd =  (isset($_POST["idd"])) ? $_POST["idd"] : 0;

    header("Content-Type: text/html");
    $args = array(
    'post_type' => 'realizacje',
    'posts_per_page' => $ppp,
    'post__not_in' => array(3144),
		'paged'    => $page,
		'order' => 'ASC',
		
	);
    $loop = new WP_Query($args);
    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
		$out .=  include( 'template-parts/content/content-realizacje.php');

    endwhile; endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_realizacje_post', 'realizacje_post');
add_action('wp_ajax_realizacje_post', 'realizacje_post');