<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#f3bc27">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div id="header" class="js">
            <div class="container-fluid">
                <?php get_template_part('template-parts/header/site-navbar'); ?>
            </div>
        </div>

        <?php if ( ! is_front_page()) : ?>
        <div class="container-fluid">
            <div class="entry-header">
                <?php get_template_part('template-parts/header/site-title'); ?>
            </div>
        </div>
        <?php endif; ?>
    </header>
    <main id="main">
        <?php if(is_page_template('narrow-page.php') ) { ?>
        <div class="container">
            <?php } else { ?>
            <div class="container-fluid">
                <?php }?>