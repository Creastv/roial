<?php get_header(); ?>
<div id="error" class="container-fluid">
    <div class="row">
        <div class="col-full text-center">
            <h1>404</h1>
            <a class="btn btn-main" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php _e( 'Wróć do strony głównej', 'ra' ); ?></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>