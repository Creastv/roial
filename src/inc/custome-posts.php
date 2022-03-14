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
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => get_template_directory_uri().'/src/img/admin-crown.png',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "cases", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
		// , 'editor' 
	);
    	register_post_type( 'cases', $args );

}
add_action( 'init', 'ra_casestudy_post_types' );

/**
 * Add custom state Softwearhouse
 */
add_filter('display_post_states', 'case_study_custom_post_states');

function case_study_custom_post_states($states) {
    global $post;
    $project_page_id = 3144;
    if( 'cases' == get_post_type($post->ID) && $post->ID == $project_page_id && $project_page_id != '0') {
        $states[] = __('Strona główna - Case study (nie usuwać)', 'ra');
    }
    return $states;
}



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
		'menu_icon'     => get_template_directory_uri().'/src/img/admin-crown.png',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => 'software-house', "with_front" => false ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'software-house', $args );

}
add_action( 'init', 'ra_software_house_post_types' );

/**
 * Add custom state Softwearhouse
 */
add_filter('display_post_states', 'software_house_custom_post_states');

function software_house_custom_post_states($states) {
    global $post;
    $project_page_id = 3115;
    if( 'software-house' == get_post_type($post->ID) && $post->ID == $project_page_id && $project_page_id != '0') {
        $states[] = __('Strona główna - Softwear house (nie usuwać)', 'ra');
    }
    return $states;
}


// //////////////////////////////////////////////////////////////Portfolio
function ra_portfolio_post_types() {

	$labels = array(
		'name'               => 'Portfolio',
		'singular_name'      => 'Portfolio',
		'menu_name'          => 'Portfolio',
		'name_admin_bar'     => 'Portfolio',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowy',
		'edit_item'          => 'Edytuj ',
		'view_item'          => 'Zobacz ',
		'all_items'          => 'Portfolio',
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
		'menu_icon'     => get_template_directory_uri().'/src/img/admin-crown.png',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => 'realizacje', "with_front" => false ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'realizacje', $args );

}
add_action( 'init', 'ra_portfolio_post_types' );

/**
 * Add custom state realizacje
 */
add_filter('display_post_states', 'portfolio_add_custom_post_states');

function portfolio_add_custom_post_states($states) {
    global $post;
    $project_page_id = 3136;
    if( 'realizacje' == get_post_type($post->ID) && $post->ID == $project_page_id && $project_page_id != '0') {
        $states[] = __('Strona główna - Portfolio (nie usuwać)', 'ra');
    }
    return $states;
}

// function disable_block_editor_portfolio( $use_block_editor, $post ) {

//     $excluded_ids = array(3136);
//     if ( !in_array( $post->ID, $excluded_ids ) ) {
//         return false;
//     }
//     return $use_block_editor;
// }
// add_filter( 'use_block_editor_for_post', 'disable_block_editor_portfolio', 10, 2 );

// //////////////////////////////////////////////////////////////Oferty
function ra_oferty_post_types() {

	$labels = array(
		'name'               => 'Oferty',
		'singular_name'      => 'Oferty',
		'menu_name'          => 'Oferty',
		'name_admin_bar'     => 'Oferty',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowy',
		'edit_item'          => 'Edytuj ',
		'view_item'          => 'Zobacz ',
		'all_items'          => 'Oferty',
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
		'menu_icon'     => get_template_directory_uri().'/src/img/admin-crown.png',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => 'oferty', "with_front" => false ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'oferty', $args );

}
add_action( 'init', 'ra_oferty_post_types' );

/**
 * Add custom state realizacje
 */
add_filter('display_post_states', 'oferty_add_custom_post_states');

function oferty_add_custom_post_states($states) {
    global $post;
    $project_page_id = 3139;
    if( 'oferty' == get_post_type($post->ID) && $post->ID == $project_page_id && $project_page_id != '0') {
        $states[] = __('Strona główna - Oferta (nie usuwać)', 'ra');
    }
    return $states;
}




add_filter( 'use_block_editor_for_post', 'my_disable_gutenberg', 10, 2 );

function my_disable_gutenberg( $can_edit, $post ) {
  if( $post->post_type == 'cases'  && !get_page_template_slug( $post->ID ) == 'default-page.php' ) {
    return false;
   } elseif( $post->post_type == 'realizacje'  && !get_page_template_slug( $post->ID ) == 'default-page.php' ) {
	  return false;
   } elseif( $post->post_type == 'oferty'  && !get_page_template_slug( $post->ID ) == 'default-page.php' ) {
	  return false;
   } elseif( $post->post_type == 'acf-field-group') {
	  return false;
   }
   return true;
}