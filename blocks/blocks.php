<?php
function register_acf_block_types() {
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero - slider'),
        'render_template'   => 'blocks/hero/block-hero.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'hero' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-hero',  get_template_directory_uri() . '/blocks/hero/hero.css' );
          wp_enqueue_style( 'ra_svipeer_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
          wp_enqueue_script('ra-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
          wp_enqueue_script( 'ra-hero-script', get_template_directory_uri() . '/blocks/hero/hero.js', array(), '20130457', true );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'zaufalinam',
        'title'             => __('Zaufali nam logos'),
        'render_template'   => 'blocks/zaufali-nam/zaufali-nam.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Zaufali nam' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-zaufali-nam',  get_template_directory_uri() . '/blocks/zaufali-nam/zaufali-nam.css' );
          wp_enqueue_script( 'ra-zaufali-nam-script', get_template_directory_uri() . '/blocks/zaufali-nam/zaufali-nam.js', array(), '20130458', true );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'tytul-sekcji',
        'title'             => __('Tytuł sekcji'),
        'render_template'   => 'blocks/tytul-sekcji/tytul-sekcji.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Tytuł' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-tytul-sekcji',  get_template_directory_uri() . '/blocks/tytul-sekcji/tytul-sekcji.css' );
      },
    ));

    acf_register_block_type(array(
      'name'        => 'inb-button',
      'title'       => __('Button'),
      'category'    => 'formatting',
      'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'render_template' => 'blocks/button/button.php',
     'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-tytul-sekcji',  get_template_directory_uri() . '/blocks/button/button.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'blog',
        'title'             => __('Ostatnie posty'),
        'render_template'   => 'blocks/blog/blog.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'posty' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-blog',  get_template_directory_uri() . '/blocks/blog/blog.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'case-study',
        'title'             => __('Case Study'),
        'render_template'   => 'blocks/case-study/case-study.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Case study' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-case-study',  get_template_directory_uri() . '/blocks/case-study/case-study.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'case-study-loader',
        'title'             => __('Case Study - load more'),
        'render_template'   => 'blocks/case-study/all-case-study.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Case study' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-case-study',  get_template_directory_uri() . '/blocks/case-study/case-study.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'nasza-oferta',
        'title'             => __('Nasz oferta'),
        'render_template'   => 'blocks/nasza-oferta/nasza-oferta.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Nasza oferta' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-nasza-oferta',  get_template_directory_uri() . '/blocks/nasza-oferta/nasza-oferta.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'o-nas',
        'title'             => __('O nas - carusel'),
        'render_template'   => 'blocks/o-nas/o-nas.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#efd6ae',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'O nas' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-o-nas',  get_template_directory_uri() . '/blocks/o-nas/o-nas.css' );
          wp_enqueue_script( 'ra-o-nas-script', get_template_directory_uri() . '/blocks/o-nas/o-nas.js', array(), '20130458', true );
      },
    ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}