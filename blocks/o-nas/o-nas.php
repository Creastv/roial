<?php
$titleSec = get_field("tytul");
$titleSec2 = get_field('tytul_dwa');
$tag = get_field("tag");
$content = get_field("cont");
$link = get_field("link");
$col = get_field("prawa_kolumna");

$classCol = "";
if(!$col){
$classCol = "row-full";
};

if( $link ) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    $id = 'tytul-' . $block['id'];
};

$className = 'ra-o-nas ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
};

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="row <?php echo $classCol; ?>">
        <?php if($col) { ?>
        <div class="col">
            <div class="ra-title-section">
                <<?php echo $tag; ?> class="title-section-tag"><?php echo $titleSec; ?>
                    <span> <?php echo $titleSec2; ?></span>
                </<?php echo $tag; ?>>
            </div>
            <div class="content">
                <InnerBlocks />
                <?php echo $content; ?>
                <?php if($link) { ?>
                <a class="btn btn-main btn-main-arrow btn-big" href="<?php echo esc_url( $link_url ); ?>"
                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        <div class="col">
            <?php if( have_rows('team') ): $i = 0; ?>
            <div class="swiper team">
                <div class="swiper-wrapper">
                    <?php while( have_rows('team') ): the_row();
                   $image = get_sub_field('zdjecie');
                   $name = get_sub_field('imie_i_nazwisko');
                   $pos = get_sub_field('pozycja'); 
                   $url = get_sub_field('link'); 
                ?>
                    <div class="swiper-slide">
                        <div class="person">
                            <div class="person-wraper">
                                <div class="top">
                                    <svg class="bg-path" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 282.4 207.6" xml:space="preserve">

                                        <g transform="translate(-1309.906 -4287.16)">
                                            <path fill="none" stroke="#CFCFCF"
                                                d="M1429.7,4356.8l-19.8,34.3l-19.8,34.3l-39.6-68.6l39.6,0L1429.7,4356.8z" />
                                            <path fill="none" stroke="#CFCFCF"
                                                d="M1469.5,4426l-19.8,34.3l-19.8,34.3l-39.6-68.6l39.6,0L1469.5,4426z" />
                                            <path fill="none" stroke="#CFCFCF"
                                                d="M1389.9,4426.2l-19.8,34.3l-19.8,34.3l-39.6-68.6l39.6,0L1389.9,4426.2z" />
                                            <path fill="none" stroke="#CFCFCF"
                                                d="M1469.3,4288.3l-19.8,34.3l-19.8,34.3l-39.6-68.6l39.6,0L1469.3,4288.3z" />
                                            <path fill="none" stroke="#CFCFCF"
                                                d="M1390.3,4288.3l-19.8,34.3l-19.8,34.3l-39.6-68.6l39.6,0L1390.3,4288.3z" />
                                            <path fill="none" stroke="#CFCFCF"
                                                d="M1508.9,4493.8l19.8-34.3l19.8-34.3l39.6,68.6l-39.6,0L1508.9,4493.8z" />
                                            <path fill="none" stroke="#CFCFCF"
                                                d="M1469.9,4426l19.8-34.3l19.8-34.3l39.6,68.6l-39.6,0L1469.9,4426z" />
                                            <path fill="none" stroke="#CFCFCF"
                                                d="M1429.5,4356.7l19.8-34.3l19.8-34.3l39.6,68.6l-39.6,0L1429.5,4356.7z" />
                                            <path fill="none" stroke="#CFCFCF" d="M1389.9,4288.2l119.2,206.4" />
                                            <path fill="none" stroke="#CFCFCF" d="M1310.7,4425.7l40.9-69.9" />
                                            <path fill="none" stroke="#CFCFCF" d="M1349.2,4493.6h159.6" />
                                        </g>
                                    </svg>
                                </div>
                                <span class="before">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 275.827 238.871">
                                        <path fill="none" stroke="#e9d4b2" stroke-width="4px"
                                            d="M493.787,232.946,561.01,349.38l67.227,116.436h-268.9L426.561,349.38Z"
                                            transform="translate(-355.874 -228.946)" />
                                    </svg>
                                </span>
                                <?php if($url) { ?>
                                <a href="<?php echo esc_url( $url ); ?>">
                                    <?php } ?>
                                    <?php echo wp_get_attachment_image( $image, 'team' ); ?>
                                    <?php if($url) { ?>
                                </a>
                                <?php } ?>
                                <div class="after">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.976 357.645">
                                        <path fill="#fae0b6" opacity="0.22"
                                            d="M206.488,0,309.729,178.821,412.976,357.644H0L103.241,178.821Z"
                                            transform="translate(412.976 357.645) rotate(180)" />
                                    </svg>
                                </div>
                                <div class="bottom">

                                    <svg class="bg-path" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 319.2 255.6" xml:space="preserve">
                                        <path fill="none" stroke="#CFCFCF"
                                            d="M293.9,170.5l-24.4,42.3L245.2,255l-48.8-84.5l48.8,0L293.9,170.5z" />
                                        <path fill="none" stroke="#CFCFCF"
                                            d="M196.9,170.4l-24.4,42.3l-24.4,42.3l-48.8-84.5l48.8,0L196.9,170.4z" />
                                        <path fill="none" stroke="#CFCFCF"
                                            d="M98.8,170.4l-24.4,42.3l-24.4,42.3L1.3,170.4l48.8,0L98.8,170.4z" />
                                        <path fill="none" stroke="#CFCFCF"
                                            d="M99.4,169.5l24.4-42.3L148.2,85l48.8,84.5l-48.8,0L99.4,169.5z" />
                                        <path fill="none" stroke="#CFCFCF"
                                            d="M196.4,169.5l24.4-42.3L245.2,85l48.8,84.5l-48.8,0L196.4,169.5z" />
                                        <path fill="none" stroke="#CFCFCF"
                                            d="M147.7,85.5l24.4-42.3L196.5,1l48.8,84.5l-48.8,0L147.7,85.5z" />
                                        <path fill="none" stroke="#CFCFCF" d="M50.5,253.6h195.5" />
                                    </svg>

                                </div>
                                <div class="name-position">
                                    <span class="pos"><?php echo $pos; ?></span>
                                    <h3>
                                        <?php if($url) { ?>
                                        <a href="<?php echo esc_url( $url ); ?>">
                                            <?php } ?>
                                            <?php echo $name; ?>
                                            <?php if($url) { ?>
                                        </a>
                                        <?php } ?>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="arrows">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>