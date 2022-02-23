<?php
    $permalink = get_permalink( );
    $title = get_the_title( );

    $logo = get_field( 'logo');
    $size = 'full';
    $titleFild = get_field( 'title');
    $desc = get_field( 'desc');
    $no = get_field( 'number');
    $noSmall = get_field( 'number_small');
    $noDesc = get_field( 'number_desc');
?>
<article id="post-<?php the_ID(); ?>" class="single-case-study">
    <header class="entry-header">
        <?php get_template_part('template-parts/header/site-title'); ?>
    </header>
    <div class="info-case">
        <div class="row">
            <div class="col">
                <div class="logo">
                    <a href="<?php echo esc_url( $permalink ); ?>">
                        <?php  echo wp_get_attachment_image( $logo, $size ); ?>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="gool">
                    <span class="number"><?php echo $no; ?><span><?php echo $noSmall; ?></span></span>
                    <span class="desc"><?php echo $noDesc; ?></span>
                </div>
            </div>
            <div class="col">
                <div class="inf client">
                    <span>klient</span>
                    <p>Canon</p>
                </div>
                <div class="inf client">
                    <span>Typ działań</span>
                    <p>kampania promocyjna w digitalu</p>
                </div>
            </div>
            <div class="col">
                <div class="tools">
                    <ul>
                        <li> <img src="#" alt="">
                            <p><span>Google Ads</span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <div class="container-fluid">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="gallery">

    </div>


    <footer class="entry-footer"></footer>
    <?php get_template_part('template-parts/extras/random-cases-stady-carousel'); ?>
</article>