<?php
$id = 'tytul-' . $block['id'];

$className = 'ra-post ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
</section>