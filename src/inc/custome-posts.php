<?php 
// //////////////////////////////////////////////////////////////Case study
function ra_casestudy_post_types() {

	$labels = array(
		'name'               => 'Case study',
		'singular_name'      => 'Case study',
		'menu_name'          => 'Case study',
		'name_admin_bar'     => 'Case study',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowy',
		'edit_item'          => 'Edytuj ',
		'view_item'          => 'Zobacz ',
		'all_items'          => 'Case study',
		'search_items'       => 'Szukaj',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'Nie znaleziono',
		'not_found_in_trash' => 'Nie znaleziono',
		
	);
	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => 'dashicons-businessman',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		// "rewrite"             => array( "slug" => "inwestycje", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'case-study', $args );

}
add_action( 'init', 'ra_casestudy_post_types' );

// //////////////////////////////////////////////////////////////Software house
function ra_software_house_post_types() {

	$labels = array(
		'name'               => 'Software house',
		'singular_name'      => 'Software house',
		'menu_name'          => 'Software house',
		'name_admin_bar'     => 'Software house',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowy',
		'edit_item'          => 'Edytuj ',
		'view_item'          => 'Zobacz ',
		'all_items'          => 'Software house',
		'search_items'       => 'Szukaj',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'Nie znaleziono',
		'not_found_in_trash' => 'Nie znaleziono',
		
	);
	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => 'dashicons-businessman',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		// "rewrite"             => array( "slug" => "inwestycje", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'software-house', $args );

}
add_action( 'init', 'ra_software_house_post_types' );