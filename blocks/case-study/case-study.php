<?php
    $id = 'tytul-' . $block['id'];

    $className = 'ra-case-study ';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    global $post;
    $post = $post_object; 
    $cases = get_field('case_study');
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="ra-case-study-wraper">
        <?php if( $cases ): ?>
        <?php foreach( $cases as $post ): ?>
        <?php get_template_part( 'template-parts/content/content-case-study'); ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?php $link = get_field('link');
    if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <div class="wrap-btn">
        <a class="btn btn-main btn-main-arrow btn-big" href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    </div>
    <?php endif; ?>
</section>