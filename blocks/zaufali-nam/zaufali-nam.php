<?php
$id = 'tytul-' . $block['id'];

$className = 'ra-zaufalinam ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <ul>
            <?php while( have_rows('logos') ): the_row(); ?>
            <li>
                <?php 
                $image = get_sub_field('logo');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) { ?>
                <div class="logo">
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                </div>
                <?php  } ?>
                <?php the_sub_field('link'); ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <div class="bg-zaufali-nam">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1222.816"
            height="1230.374" viewBox="0 0 1222.816 1230.374">
            <defs>
                <style>
                .a {
                    fill: #fff;
                }

                .b,
                .c {
                    fill: none;
                }

                .b {
                    stroke: #cfcfcf;
                }

                .c {
                    stroke: #e8e8e8;
                }

                .d {
                    fill: url(#a);
                }
                </style>
                <linearGradient id="a" x1="0.396" y1="0.361" x2="0.245" y2="1.261" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#fff" />
                    <stop offset="1" stop-color="#fff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <g transform="translate(351.316 -3026.576)">
                <g transform="translate(42.449 712.231)">
                    <path class="a" d="M136.747,1l68.375,117.424L273.493,236.85H0L68.375,118.424Z"
                        transform="translate(294.384 3545.719) rotate(180)" />
                    <path class="b" d="M394.184,680.6l548.531,941.086" transform="translate(-786.573 1916.836)" />
                    <path class="b" d="M-5.1-1.3,543.708,942.408l.448.77" transform="translate(-114.839 2597.325)" />
                    <path class="b" d="M661.123,444.8l-411.6,711.407" transform="translate(-642.719 1914.873)" />
                    <path class="b" d="M733.552,454.45,183.441,1393.958" transform="translate(-439.907 1914.953)" />
                    <path class="b" d="M600.224,681.433,186.508,1389.245" transform="translate(-165.617 1916.843)" />
                    <path class="b" d="M600.861,681.3l-390.472,667.07L50.306,1621.853"
                        transform="translate(105.69 1916.842)" />
                    <path class="b" d="M1085.811,0,146.186.253h-133" transform="translate(-406.953 2598.151)" />
                    <path class="b" d="M1213.839,0,276.5.944" transform="translate(-534.983 2832.844)" />
                    <path class="b" d="M1228.537,0,158.3,1.549" transform="translate(-550.688 3069.8)" />
                    <path class="b" d="M1075.881,0,141.566,2.356" transform="translate(-398.032 3306.757)" />
                    <path class="c" d="M.3-2.5,656.417,1127.329" transform="translate(17.297 2361.367)" />
                </g>
                <rect class="d" width="931" height="814.551" transform="translate(-59.5 3026.576)" />
            </g>
        </svg>
    </div>
</section>