<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#f3bc27">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>



    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="js">
        <div class="container-fluid">
            <?php get_template_part('template-parts/header/site-navbar'); ?>
        </div>
    </header>
    <main>
        <div class="container-fluid">