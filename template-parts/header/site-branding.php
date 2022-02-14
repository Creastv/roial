<?php 
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$logo         = get_theme_mod('logo');
?>

<div class="nav-brand">
    <?php if ( $logo ) { ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img loading="lazy" src="<?php echo esc_html($logo); ?>" alt="<?php echo esc_html( $blog_info ); ?>">
    </a>
    <?php } else { ?>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
    <p><small><?php echo esc_html( $description ); ?></small></p>
    <?php } ?>
</div>